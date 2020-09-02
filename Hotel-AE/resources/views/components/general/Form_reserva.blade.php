<div class="vbf">
    <h2 class="form_title"><i class="fa fa-calendar"></i> BOOK ONLINE</h2>
    <form class="inner" method="POST" {{ route('form') }}>
        @csrf
        <div class="form-group">
            <input class="form-control" name="booking-name" placeholder="Enter Your Name" type="text" required>
        </div>
        <div class="form-group">
            <input class="form-control" name="booking-email" placeholder="Enter Your Email Address" type="email" required>
        </div>
        <div class="form-group">
            <input class="form-control" name="booking-phone" placeholder="Enter Your Phone Number" type="text" required>
        </div>
        <div class="form-group">
            <div class="form_select">
                <select name="booking-roomtype" class="form-control" title="Select Room Type" data-header="Room Type">
                    <option value="Single Room">Single Room</option>
                    <option value="Double Room">Double Room</option>
                    <option value="Deluxe Room">Deluxe Room</option>
                </select>
            </div>
        </div>
        <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
            <div class="form_select">
                <select name="booking-adults" class="form-control md_noborder_right" title="Adults" data-header="Adults">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
        </div>
        <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
            <div class="form_select">
                <select name="booking-children" class="form-control" title="Children" data-header="Children">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
        </div>
        <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
            <div class="input-group">
                <div class="form_date">
                    <input type="text" class="datepicker form-control md_noborder_right" name="booking-checkin" placeholder="Arrival Date" readonly>
                </div>
            </div>
        </div>
        <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
            <div class="input-group">
                <div class="form_date">
                    <input type="text" class="datepicker form-control" name="booking-checkout" placeholder="Departure Date" readonly>
                </div>
            </div>
        </div>
        <button class="button btn_lg btn_blue btn_full" type="submit">BOOK A ROOM NOW</button>
        <div class="a_center mt10">
            <a href="booking-form.html" class="a_b_f">Advanced Booking Form</a>
        </div>
    </form>
</div>
</div>