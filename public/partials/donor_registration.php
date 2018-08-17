<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://github.com/screwLock
 * @since      1.0.0
 *
 * @package    Cfpnc_Scheduler
 * @subpackage Cfpnc_Scheduler/public/partials
 */
?>

<div class="card">
    <div class="card-body">
    <h5 class="card-title">Select The Pickup Zipcode</h5>
        <select class="custom-select class col-2" id="zipcode-select">
            <option selected>Select a Zipcode</option>
        </select>
    </div>
</div><!-- End of zipcode card-->
<div class="card" id="pickup-datepicker-card">
    <div class="card-body">
    <h5 class="card-title">Select The Pickup Date</h5>
        <form>
            <div class="form-group row">
                <div class="col-2">
                    <label class="sr-only">Pickup Datepicker</label>
                    <div id="pickup-datepicker"></div>
                </div>
            </div>
        </form>
    </div>
</div><!-- End of datepicker card-->
<div class="card" id="location-details-card">
    <div class="card-body">
    <h5 class="card-title">Location Details</h5>
                <form>
                    <div class="form-group row" id="stairs-toggle">
                        <div class="col">
                            <h6 class="pb-2">Will There Be Stairs Involved?</h6>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-primary active btn-sm"><input type="radio" name="stairs-radio" id="stairs-no" value=0 autocomplete="off" checked value=0> No</label>
                                <label class="btn btn-primary btn-sm"><input type="radio" name="stairs-radio" id="stairs-yes" value=1 autocomplete="off"> Yes</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row" id="move-toggle">
                        <div class="col">
                            <h6 class="pb-2">Is This Part of a Move?</h6>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-primary active btn-sm"><input type="radio" name="move-radio" id="Move-no" value=0 autocomplete="off" checked> No</label>
                                <label class="btn btn-primary btn-sm"><input type="radio" name="move-radio" id="Move-yes" value=1 autocomplete="off"> Yes</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row" id="yard-sale-toggle">
                        <div class="col">
                            <h6 class="pb-2">Is This Part of A Yard Sale?</h6>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-primary active btn-sm"><input type="radio" name="yard-radio" id="yard-no" value=0 autocomplete="off" checked> No</label>
                                <label class="btn btn-primary btn-sm"><input type="radio" name="yard-radio" id="yard-yes" value=1 autocomplete="off"> Yes</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row" id="estate-toggle">
                        <div class="col">
                            <h6 class="pb-2">Is This Part of An Estate Auction?</h6>
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-primary active btn-sm"><input type="radio" name="estate-radio" id="estate-no" value=0 autocomplete="off" checked> No</label>
                                <label class="btn btn-primary btn-sm"><input type="radio" name="estate-radio" id="estate-yes" value=1 autocomplete="off"> Yes</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- End of location details card-->

<div class="card" id="items-card">
    <div class="card-body">
        <h5 class="card-title">Select the items you will be donating.  Select all that apply.</h5>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="largeFurniture">
                <label class="form-check-label" for="largeFurniture">Large Furniture</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="accentTables">
                <label class="form-check-label" for="accentTables">Living Room - Chairs</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="chairs">
                <label class="form-check-label" for="chairs">Living Room - Chairs</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="sofa">
                <label class="form-check-label" for="sofa">Living Room - Sofa</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="sectional">
                <label class="form-check-label" for="sectional">Living Room - Sectional Seat</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="sofa-love-seat">
                <label class="form-check-label" for="sofa-love-seat">Living Room - Sofa and Love Seat</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="beds">
                <label class="form-check-label" for="beds">Bedroom-Bed</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="dressers">
                <label class="form-check-label" for="dressers">Bedroom - Dressers</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="Misc">
                <label class="form-check-label" for="Misc">Misc - knick knacks, Christmas</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="clothing">
                <label class="form-check-label" for="clothing">Clothing</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="kitchen-small">
                <label class="form-check-label" for="kitchen-small">Kitchen - Small appliances, dishes, cookware</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="kitchen-big">
                <label class="form-check-label" for="kitchen-big">Kitchen - Refrigerate, Stoves, etc.</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="diningRoom">
                <label class="form-check-label" for="diningRoom">Dining Room - tables, chairs</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="office">
                <label class="form-check-label" for="office">Office - Computer</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="washer">
                <label class="form-check-label" for="washer">Washer/Dryer</label>     
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="desk">
                <label class="form-check-label" for="desk">Desk</label>           
            </div>
    </div>
    <div class="form-group" id="furniture-comments">
        <label for="comment">Comment:</label>
        <textarea class="form-control" rows="5" id="comment"></textarea>
    </div>
</div><!-- End of items card-->

<div class="card" id="pickup-address-card">
    <div class="card-body">
        <h5 class="card-title">Select The Pickup Address</h5>
            <form>
                <div class="form-group row">
                    <div class="col-6">
                        <label class="sr-only" for="inlineFormInput">Pickup Address</label>
                        <input type="text" class="form-control" id="pickup-address">
                    </div>
                </div>
            </form>
    </div>
</div><!-- End of pickup-address card-->

<div class="card" id="contact-card">
    <div class="card-body">
        <h5 class="card-title">Contact Details</h5>
        <div class="form-group col-3">
            <label for="contact-name">Name:</label>
            <input type="text" class="form-control" id="contact-name" required>
        </div>
        <div class="form-group col-3">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" required>
        </div>
        <div class="form-group col-3">
            <label for="Number">Phone Number:</label>
            <input type="text" class="form-control" id="number" required>
        </div>
    </div>
</div><!--End of contact card-->

<div class="card" id="pickup-spot">
    <div class="card-body">
        <h5 class="card-title">Where will you leave your donation for us to pickup?</h5>
        <select class="custom-select class col-2" id="zipcode-select">
            <option selected>Front Porch</option>
            <option>Side of House</option>
            <option>Driveway</option>
            <option>Garage</option>
            <option>Alley</option>
            <option>2nd or 3rd Floor</option>
        </select>
    </div>
</div><!--End of contact card-->
