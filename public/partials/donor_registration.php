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

<div id="new-donation">
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
                <input class="form-check-input" name="items" type="checkbox" value="Large Furniture" id="largeFurniture">
                <label class="form-check-label" for="largeFurniture">Large Furniture</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="items" type="checkbox" value="Accent Tables" id="accentTables">
                <label class="form-check-label" for="accentTables">Living Room - Accent Tables</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="items" type="checkbox" value="Living Room - Chairs" id="chairs">
                <label class="form-check-label" for="chairs">Living Room - Chairs</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="items" type="checkbox" value="Living Room - Sofa" id="sofa">
                <label class="form-check-label" for="sofa">Living Room - Sofa</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="items" type="checkbox" value="Living Room - Sectional Seat" id="sectional">
                <label class="form-check-label" for="sectional">Living Room - Sectional Seat</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="items" type="checkbox" value="Living Room - Sofa and Love Seat" id="sofa-love-seat">
                <label class="form-check-label" for="sofa-love-seat">Living Room - Sofa and Love Seat</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="items" type="checkbox" value="Bedroom - Bed" id="beds">
                <label class="form-check-label" for="beds">Bedroom - Bed</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="items" type="checkbox" value="Bedroom - Dressers" id="dressers">
                <label class="form-check-label" for="dressers">Bedroom - Dressers</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="items" type="checkbox" value="Misc" id="Misc">
                <label class="form-check-label" for="Misc">Misc - knick knacks, Christmas</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="items" type="checkbox" value="Clothing" id="clothing">
                <label class="form-check-label" for="clothing">Clothing</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="items" type="checkbox" value="Kitchen - Small appliances, dishes, cookware" id="kitchen-small">
                <label class="form-check-label" for="kitchen-small">Kitchen - Small appliances, dishes, cookware</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="items" type="checkbox" value="Kitechen - Refrigerator, Stoves, etc." id="kitchen-big">
                <label class="form-check-label" for="kitchen-big">Kitchen - Refrigerator, Stoves, etc.</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="items" type="checkbox" value="Dining Room - tables, chairs" id="diningRoom">
                <label class="form-check-label" for="diningRoom">Dining Room - tables, chairs</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="items" type="checkbox" value="Office - Computer" id="office">
                <label class="form-check-label" for="office">Office - Computer</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="items" type="checkbox" value="Washer/Dryer" id="washer">
                <label class="form-check-label" for="washer">Washer/Dryer</label>     
            </div>
            <div class="form-check">
                <input class="form-check-input" name="items" type="checkbox" value="Desk" id="desk">
                <label class="form-check-label" for="desk">Desk</label>           
            </div>
    </div>
    <div class="form-group col-4" id="furniture-comments">
        <label for="comment">Describe the furniture items below:</label>
        <textarea class="form-control" rows="5" id="comment"></textarea>
    </div>
    <div class="card-body">
        <h5 class="card-title">What is the approximate size of your donation(if not donating furniture or appliances)?</h5>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sizes" value="smaller" id="smaller">
            <label class="form-check-label" for="smaller">Smaller (1 - 3 Bags/Boxes)</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sizes" value="larger" id="larger">
            <label class="form-check-label" for="larger">Larger (4 - 15 Bags/Boxes)</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sizes" value="special" id="special">
            <label class="form-check-label" for="special">Special (15+ Bags/Boxes)</label>     
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sizes" value="none" id="none" checked>
            <label class="form-check-label" for="none">None/Not Applicable</label>           
        </div>
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
            <input type="text" class="form-control" id="phone-number" required>
        </div>
    </div>
</div><!--End of contact card-->

<div class="card" id="pickup-spot">
    <div class="card-body">
        <h5 class="card-title">Where will you leave your donation for us to pickup?</h5>
        <select class="custom-select class col-2" id="zipcode-select">
            <option selected>Ring Bell</option>
            <option>Front Porch</option>
            <option>Side of House</option>
            <option>Driveway</option>
            <option>Garage</option>
            <option>Alley</option>
            <option>2nd or 3rd Floor</option>
        </select>

        <input type="checkbox" name="someInfo" value="1" style="display:none !important" tabindex="-1" autocomplete="off">

    </div>
</div><!--End of contact card-->
<div class="card" id="submit-donor-card">
    <div class="card-body">
        <p>
        In order to provide you with outstanding service, It is our policy to call 10-15 min
        prior to arrival to confirm the pick up. If you need more time, please be sure to specify
        in special comments area below. Also, please add any other special requests below.
        </p> 
    <div class="form-group col-4" id="submit-comment">
        <label for="submit-comment">Special Instructions or comments</label>
        <textarea class="form-control" rows="5" id="comment"></textarea>
    </div>
        <button type="button" class="btn btn-primary" id="submit-donor-button">Submit</button>
    </div>
</div><!--End of submit card-->

</div><!--End of new donation div-->

<div class="card" id="donation-success">
    <div class="card-body">
        <h5 class="card-title">Thank you for your donation!</h5>
    </div>
</div><!--End of success card-->

