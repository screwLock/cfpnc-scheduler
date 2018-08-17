var zipcodes = [];

//load zipcodes from the database while page is loading
jQuery.ajax({
    type: "POST",
    url: donor_registration_ajax.ajax_url,
    dataType: 'json',
    data: {
        action: 'get_zipcodes'
    },
    success: function (response) {
        response.data.map(function (oldZipcode) {
            zipcodes[oldZipcode.zipcode] = (createNewZipcode(oldZipcode.zipcode, oldZipcode.days, oldZipcode.isMaxTimeEnabled, oldZipcode.maxTime));
            jQuery("#zipcode-select").append(renderZipcodeOption(oldZipcode));
        });
    },
    error: function (error) {
         console.log('error');
    }
});

jQuery(window).load(function () {
    jQuery("#pickup-datepicker-card").hide();    
    jQuery("#location-details-card").hide();
    jQuery("#pickup-address-card").hide();
    jQuery("#items-card").hide();

    jQuery('#furniture-comments').hide();


    jQuery('#pickup-datepicker').datepicker(
        {
            format: 'yyyy-mm-dd',
            toggleActive: true,
        });
    jQuery('#pickup-datepicker').datepicker('setDate', 'today');

    jQuery("#zipcode-select").on("change", function (e) {
        jQuery("#pickup-datepicker-card").show('slow');
        jQuery('#pickup-datepicker').datepicker('setDaysOfWeekDisabled', getDisabledWeekdays(zipcodes[jQuery("select option:selected").val()].days));
        //jQuery('#pickup-datepicker').datepicker('setDatesDisabled', blackoutDates);
    });
    jQuery("#pickup-datepicker").datepicker().on('changeDate', function () {
        jQuery('#location-details-card').show('slow');
        jQuery('#pickup-address-card').show('slow');
        jQuery("#items-card").show('slow');
    });

    jQuery("input[type='checkbox']").click(function (e) {
        if (jQuery(this).is(':checked') && jQuery(this).is('#largeFurniture')) {
            jQuery('#furniture-comments').show('slow');
        } else {
            jQuery('#furniture-comments').hide('slow');
        }
    });
});

function createNewZipcode(zip, days, maxTimeEnabled = 0, maxTime = "8:00am", maxPickups = 5) {
    newZipcode = {
        zipcode: zip,
        days: days,
        maxTimeEnabled: maxTimeEnabled,
        maxTime: maxTime,
        maxPickups: maxPickups
    }
    return newZipcode;
}

function renderZipcodeOption(zipcode) {
    return "<option value=" + zipcode.zipcode + "> " + zipcode.zipcode + "</option>";
}

/**
 * Convert days of week to int values for datepicker
 * @param {*} days 
 */
function getDisabledWeekdays(days) {
    var intDays = [];
    var weekdays = ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'];
    weekdays.forEach(function (day, index) {
        if (!days.includes(day)) intDays.push(index);
    });
    return intDays;
}

// This example displays an address form, using the autocomplete feature
// of the Google Places API to help users fill in the information.

// This example requires the Places library. Include the libraries=places
// parameter when you first load the API. For example:
// <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

var placeSearch, autocomplete;
var componentForm = {
    street_number: 'short_name',
    route: 'long_name',
    locality: 'long_name',
    administrative_area_level_1: 'short_name',
    country: 'long_name',
    postal_code: 'short_name'
};

function initAutocomplete() {
    // Create the autocomplete object, restricting the search to geographical
    // location types.
    autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('pickup-address')),
        { types: ['geocode'] });

    // When the user selects an address from the dropdown, populate the address
    // fields in the form.
    //autocomplete.addListener('place_changed', fillInAddress);
}

/*
function fillInAddress() {
    // Get the place details from the autocomplete object.
    var place = autocomplete.getPlace();

    for (var component in componentForm) {
        document.getElementById(component).value = '';
        document.getElementById(component).disabled = false;
    }

    // Get each component of the address from the place details
    // and fill the corresponding field on the form.
    for (var i = 0; i < place.address_components.length; i++) {
        var addressType = place.address_components[i].types[0];
        if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
        }
    }
}
*/

// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var geolocation = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
                center: geolocation,
                radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
        });
    }
}