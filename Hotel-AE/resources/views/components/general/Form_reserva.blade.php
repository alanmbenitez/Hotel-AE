<div class="vbf">
    <h2 class="form_title"><i class="fa fa-calendar"></i> BOOK ONLINE</h2>
    <form class="inner form-needs"  novalidate >
       {{--  {{ route('form') }} method="POST" --}}
        @csrf
        <div class="form-group">
            <input class="form-control" id="form_name" name="booking-name" placeholder="Enter Your Name" type="text" required>
            {{-- <div class="invalid-feedback">
                Please provide a valid zip.
              </div> --}}
        </div>
        <div class="form-group">
            <input class="form-control" id="form_email" name="booking-email" placeholder="Enter Your Email Address" type="email" required>
            {{-- <div class="invalid-feedback">
                Please provide a valid zip.
              </div> --}}
        </div>
        <div class="form-group">
            <input class="form-control" id="form_phone" name="booking-phone" placeholder="Enter Your Phone Number" type="text" required>
            {{-- <div class="invalid-feedback">
                Please provide a valid zip.
              </div> --}}
        </div>
        <div class="form-group">
            <div class="form_select">
                <select name="booking-roomtype" class="form-control" id="form_room" title="Select Room Type" data-header="Room Type">
                    <option value="Single Room">Single Room</option>
                    <option value="Double Room">Double Room</option>
                    <option value="Deluxe Room">Deluxe Room</option>
                </select>
                {{-- <div class="invalid-feedback">
                    Please provide a valid zip.
                  </div> --}}
            </div>
        </div>
        <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
            <div class="form_select">
                <select name="booking-adults" class="form-control md_noborder_right" value="default" id="form_adults" title="Adults" data-header="Adults">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                {{-- <div class="invalid-feedback">
                    Please provide a valid zip.
                  </div> --}}
            </div>
        </div>
        <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
            <div class="form_select">
                <select name="booking-children" class="form-control" id="form_child" title="Children" data-header="Children">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                {{-- <div class="invalid-feedback">
                    Please provide a valid zip.
                  </div> --}}
            </div>
        </div>
        <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
            <div class="input-group">
                <div class="form_date">
                    <input type="text" class="datepicker form-control md_noborder_right" id="form_checkin" name="booking-checkin" placeholder="Arrival Date" readonly>
                    {{-- <div class="invalid-feedback">
                        Please provide a valid zip.
                      </div> --}}
                </div>
            </div>
        </div>
        <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
            <div class="input-group">
                <div class="form_date">
                    <input type="text" class="datepicker form-control" id="form_checkout" name="booking-checkout" placeholder="Departure Date" readonly>
                    {{-- <div class="invalid-feedback">
                        Please provide a valid zip.
                      </div> --}}
                </div>
            </div>
        </div>
        <button class="button btn_lg btn_blue btn_full" id="button_submit" type="submit">BOOK A ROOM NOW</button>
        <div class="a_center mt10">
            <a href="booking-form.html" class="a_b_f">Advanced Booking Form</a>
        </div>
    </form>
</div>

</div>
@include('sweet::alert')
@section('script')
<script>
    let button_submit = document.getElementById('button_submit')
        let name = $("#form_name")
        let email = $("#form_email")
        let phone = $("#form_phone")
        let adults = $("#form_adults")
        let child = $("#form_child")
        let room = $("#form_room")
        let checkin = $("#form_checkin")
        let checkout = $("#form_checkout")
        
    
    
        function inputReset(){
        name.val('')
        email.val('')
        phone.val('')
        adults.val('').selectpicker('refresh')
        child.val('').selectpicker('refresh')
        room.val('').selectpicker('refresh')
        checkin.val('')
        checkout.val('')
        }
        
    button_submit.addEventListener('click', (e) => {
    
        e.preventDefault();
       
       
 


     
        $.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            type:'POST',
            url:"{{ route('form1') }}",
            dataType: 'json',
            data:   {   
                        name: name.val(),
                        email:email.val(),
                        phone: name.val(),
                        adults: adults.val(),
                        child: child.val(),
                        room: room.val(),
                        checkin: checkin.val(),
                        checkout: checkout.val(),
                    },
            success: function () {
                 Swal({
              type: "success",
              title: `Muchas gracias! <br id='aplicaB2c'>
              <p class='text-sm px-4 aplicaB2c'>En las proximas 24hs. nos estaremos comunicando con usted para confirmar su reserva</p>`,
              showCloseButton: true,
              showConfirmButton: false
            });
            

                inputReset()
            },
            error: function () {
                console.log("!dsfdfsd");
            }
           
        })
        
    
    
    
    });
    
    
    
    
    </script>
@endsection
