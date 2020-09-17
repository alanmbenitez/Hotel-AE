<section style="padding-top: 0px" class="white_bg" id="contact">
    <div class="container">
        <div class="main_title mt_wave a_center">
            <h2>ESCRÍBENOS</h2>
        </div>
        <p class="main_description a_center">Dejanos tu consulta por alguna de nuestras habitaciones o bien alguna sugerencia que tengas respecto al hotel o nuestra web.</p>
        
        <div   class="box_contact_maps row">
            <div class=" div_iframe_maps_contact col-md-6">
                
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.791761159093!2d-58.41696268463274!3d-34.60942686530742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccaf50463b04b%3A0x3d351e879d404aba!2sAires%20Express!5e0!3m2!1ses-419!2sar!4v1599589680833!5m2!1ses-419!2sar" 
                   class="iframe_maps" 
                    frameborder="0" 
                    style="border:0;" 
                    allowfullscreen="" 
                    aria-hidden="false" 
                    tabindex="0">
                </iframe>
                
            </div>
            <div class="col-md-6 form_contact">
                <div style="margin-top: 0" class="main_title a_center">
                    <h2>Envíenos su consulta o sugerencia</h2>
                </div>
                <form >
                    @csrf
                    <div class="form-group">
                        <input class="form-control" id="form_name_contact" name="name" placeholder="Nombre" type="text">
                        <span id="error_name_contact" class="error-form-hotel error_form_hidden">
                            Nombre inválido.
                        </span>
                    </div>
                    <div class="form-group">
                        <input class="form-control"  id="form_email_contact" name="email" type="email" placeholder="Email">
                        <span id="error_email_contact" class="error-form-hotel error_form_hidden">
                            Email inválido.
                        </span>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="form_text_contact" name="message" placeholder="Mensaje"></textarea>
                        <span id="error_text_contact" class="error-form-hotel error_form_hidden">
                            Mensaje incorrecto.
                        </span>
                    </div>
                    <button class="button btn_lg btn_blue btn_full upper" id="button_contact" type="submit"><i class="fa fa-location-arrow"></i>Enviar mensaje</button>
                   
                </form>
            </div>
        </div> 
    </div>        
</section>
@section('script2')
    <script>
    let name_contact = $("#form_name_contact")
    let email_contact = $("#form_email_contact")
    let text_contact = $("#form_text_contact")
    let button_contact = document.getElementById('button_contact')


      
    let error_name_contact = $("#error_name_contact")
    let error_email_contact = $("#error_email_contact")
    let error_text_contact = $("#error_text_contact")

    let errors_form_contact =[]

    function inputResetContact(){
        name_contact.val('')
        email_contact.val('')
        text_contact.val('')
        
        }

    

button_contact.addEventListener('click' ,(e) => {

    e.preventDefault();

 
     button_contact.innerHTML = 'Mensaje Enviado!';
    button_contact.classList.add("btn_red")
    button_contact.classList.remove("btn_blue")


    validatorForm(name_contact, error_name_contact, 'name_id', errors_form_contact)
    validatorForm(email_contact, error_email_contact, 'email_id', errors_form_contact)
    validatorForm(text_contact, error_text_contact, 'text_id', errors_form_contact)



    if (errors_form_contact.length === 0) {

    $.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            type:'POST',
            url:"{{ route('form2') }}",
            dataType: 'json',
            data:   {   
                        name: name_contact.val(),
                        email: email_contact.val(),
                        contact: text_contact.val(),

                        
                    },
            success: function () {
              
                 Swal({
              type: "success",
              title: `Muchas gracias! <br>
              <p class='text-sm px-4'>En las próximas 24 horas nos estaremos comunicando con usted para responder a su consulta o sugerencia.</p>`,
              showCloseButton: true,
              showConfirmButton: false
            });
            button_contact.innerHTML = 'Enviar Mensaje';
            button_contact.classList.add("btn_blue")
            button_contact.classList.remove("btn_red")
            inputResetContact()


                /* inputReset() */
            },
            error: function (xhr, status, error) {
                var err = eval("(" + xhr.responseText + ")");
                console.log(err);
                Swal({
              type: "error",
              title: `Lo sentimos, hubo un error! <br id='aplicaB2c'>
              <p class='text-sm px-4 aplicaB2c'>Verifica los datos ingresados e intentalo nuevamente</p>`,
              showCloseButton: true,
              showConfirmButton: false
            });
         
               
               
            }
           
        })

    }else{
            button_contact.innerHTML = 'Verifique los datos ingresados';
            button_contact.classList.add("btn_red")
            button_contact.classList.remove("btn_blue")
    
  }

        
})



    </script>
@endsection