<div class="vbf">
    <h2 class="form_title"><i class="fa fa-calendar"></i> BOOK ONLINE</h2>
    <form class="inner form-needs"  novalidate >
       {{--  {{ route('form') }} method="POST" --}}
        @csrf
        <div style="margin-bottom: 15px;"class="form-group">
            <input class="form-control" id="form_name" name="booking-name" placeholder="Enter Your Name" type="text" required>
            <span id="error_form_name"class="error-form-hotel error_form_hidden">
                Please provide a valid zip.
            </span>
        </div>
        <div class="form-group">
            <input class="form-control" id="form_email" name="booking-email" placeholder="Enter Your Email Address" type="email" >
            <span id="error_form_email"class="error-form-hotel error_form_hidden">
                Please provide a valid zip.
            </span>
        </div>
        <div class="form-group">
            <input class="form-control" id="form_phone" name="booking-phone" placeholder="Enter Your Phone Number" type="text" required>
            <span id="error_form_phone"class="error-form-hotel error_form_hidden">
                Please provide a valid zip.
            </span>
        </div>
        <div class="form-group">
            <div class="form_select">
                <select name="booking-roomtype" class="form-control" id="form_room" value="0" title="Select Room Type" data-header="Room Type">
                    
                    <option value="Single Room"  selected="selected">Single Room</option>
                    <option value="Double Room">Double Room</option>
                    <option value="Deluxe Room">Deluxe Room</option>
                </select>
            </div>
            <span id="error_form_rooms"class="error-form-hotel error_form_hidden">
                Please provide a valid zip.
            </span>
        </div>
        <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
            <div class="form_select">
                <select  name="booking-adults" class="form-control md_noborder_right" value="0" id="form_adults" title="Adults" data-header="Adults">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            
            <span id="error_form_adults"class="error-form-hotel error_form_hidden">
               Debe seleccionar al menos un ocupante adulto
            </span>
    </div>
        <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
            <div class="form_select">
                <select name="booking-children" class="form-control" id="form_child" value="0" title="Children" data-header="Children">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <span id="error_form_child"class="error-form-hotel error_form_hidden ">
              
            </span>
            
        </div>
      
        <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
            <div class="input-group">
                <div class="form_date">
                    <input type="text" class="datepicker form-control md_noborder_right" id="form_checkin" name="booking-checkin" placeholder="Arrival Date" readonly>
                </div>
            </div>
            <span id="error_form_checkin"class="error-form-hotel error_form_hidden">
                Debe seleccionar un rago de fechas valido
            </span>
        </div>
        <div class="form-group col-md-6 col-sm-6 col-xs-12 nopadding">
            <div class="input-group">
                <div class="form_date">
                    <input type="text" class="datepicker form-control" id="form_checkout" name="booking-checkout" placeholder="Departure Date" readonly>
                </div>
            </div>
            <span id="error_form_checkin"class="error-form-hotel error_form_hidden">
                
            </span>
        </div>
        
    
        <button class="button btn_lg btn_blue btn_full" id="button_submit" type="submit">Solicitar Reserva</button>
       
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
    
    let error_name =$("#error_form_name")
    let error_email =$("#error_form_email")
    let error_phone =$("#error_form_phone")
    let error_rooms =$("#error_form_rooms")
    let error_adults =$("#error_form_adults")
    let error_child =$("#error_form_child")
    let error_checkin =$("#error_form_checkin")
    let error_checkout =$("#error_form_checkout")

    errors_form =[];

   

  

    
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

        
    
function validateInput(input ,id) {
    if (id === 'email_id') {
        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(input);
    }
    if (id === 'phone_id') {
        return ($.isNumeric(input) && input.trim().length >= 6)
    }
    if (id === 'adults_id' ) {
        return (input !== "")
    }
    if (id === 'checkin_id') {
        let diff = checkout.datepicker('getDate') - checkin.datepicker('getDate');
        let days = diff / 1000 / 60 / 60 / 24;
        console.log(days > 0);
        return (days > 0)
    }
    /* if (id === 'checkout_id') {
        let diff = checkout.datepicker('getDate') - checkin.datepicker('getDate');
        let days = diff / 1000 / 60 / 60 / 24;
        return (days > 0 )
    } */
    return (input.trim().length >= 6 )
}

function validatorForm(valor, error, id) {
    if (!validateInput(valor.val(),id)) {
       error.removeClass("error_form_hidden")
       errors_form.push({error,id})
       valor.change(()=>{
            if (validateInput(valor.val(),id)) {
                error.addClass("error_form_hidden")
                let index = errors_form.map(er =>{
                    return er.id
                }).indexOf(id)
                errors_form.splice(index)
            }else{
                error.removeClass("error_form_hidden")
                errors_form.push({error,id})
            }
        })
    }
}






    button_submit.addEventListener('click', (e) => {
    
    e.preventDefault();
       
    button_submit.innerHTML = 'Enviando Reserva';
    button_submit.classList.add("btn_red")
    button_submit.classList.remove("btn_blue")
        
    /* =========== validation ========== */

    
    validatorForm(name, error_name, 'name_id')
    validatorForm(email, error_email, 'email_id')
    validatorForm(phone, error_phone, 'phone_id')
    validatorForm(adults, error_adults, 'adults_id')
    validatorForm(adults, error_child, 'adults_id')

    validatorForm(checkin, error_checkin, 'checkin_id')
    validatorForm(checkin, error_checkout, 'checkin_id')

 

  console.log(errors_form);



  
     
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
            button_submit.innerHTML = 'Solicitar Reserva';
            button_submit.classList.add("btn_blue")
            button_submit.classList.remove("btn_red")

                inputReset()
            },
            error: function () {
               /*  Swal({
              type: "error",
              title: `Lo sentimos, hubo un error! <br id='aplicaB2c'>
              <p class='text-sm px-4 aplicaB2c'>Verifica los datos ingresado e intentalo nuevamente</p>`,
              showCloseButton: true,
              showConfirmButton: false
            }); */
          /*       button_submit.innerHTML = 'Solicitar Reserva';
            button_submit.classList.add("btn_blue")
            button_submit.classList.remove("btn_red") */
               
               
            }
           
        })
        
    
    
    
    });
    
    
    
    
    </script>
@endsection
