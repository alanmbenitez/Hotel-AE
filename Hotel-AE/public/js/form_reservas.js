let button_submit = document.getElementById('button_submit')
let name = $("#form_name")
let email = $("#form_email")
let phone = $("#form_phone")
let adults = $("#form_adults")
let child = $("#form_child")
let room = $("#form_room")
let checkin = $("#form_checkin")
let checkout = $("#form_checkout")

let error_name = $("#error_form_name")
let error_email = $("#error_form_email")
let error_phone = $("#error_form_phone")
let error_rooms = $("#error_form_rooms")
let error_adults = $("#error_form_adults")
let error_child = $("#error_form_child")
let error_checkin = $("#error_form_checkin")
let error_checkout = $("#error_form_checkout")

errors_form = [];






function inputReset() {
    name.val('')
    email.val('')
    phone.val('')
    adults.val('').selectpicker('refresh')
    child.val('').selectpicker('refresh')
    room.val('').selectpicker('refresh')
    checkin.val('')
    checkout.val('')
}



function validateInput(input, id) {
    if (id === 'email_id') {
        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(input);
    }
    if (id === 'phone_id') {
        return ($.isNumeric(input) && input.trim().length >= 6)
    }
    if (id === 'adults_id') {
        return (input !== "")
    }
    if (id === 'checkout_id') {
        let diff = checkout.datepicker('getDate') - checkin.datepicker('getDate');
        let days = diff / 1000 / 60 / 60 / 24;

        return (days > 0)
    }

    return (input.trim().length >= 6)
}

function validatorForm(valor, error, id) {
    if (!validateInput(valor.val(), id)) {
        error.removeClass("error_form_hidden")
        errors_form.push({ error, id })
        valor.change(() => {
            if (validateInput(valor.val(), id)) {
                error.addClass("error_form_hidden")
                let index = errors_form.map(er => {
                    return er.id
                }).indexOf(id)
                errors_form.splice(index)
            } else {
                error.removeClass("error_form_hidden")
                errors_form.push({ error, id })
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

    validatorForm(checkout, error_checkin, 'checkout_id')
    validatorForm(checkin, error_checkin, 'checkout_id')



    console.log(errors_form.length);



    if (errors_form.length === 0) {



        $.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            type: 'POST',
            url: "{{ route('form1') }}",
            dataType: 'json',
            data: {
                name: name.val(),
                email: email.val(),
                phone: name.val(),
                adults: adults.val(),
                child: child.val(),
                room: room.val(),
                checkin: checkin.val(),
                checkout: checkout.val(),
            },
            success: function() {

                Swal({
                    type: "success",
                    title: `Muchas gracias! <br>
              <p class='text-sm px-4'>En las proximas 24hs. nos estaremos comunicando con usted para confirmar su reserva</p>`,
                    showCloseButton: true,
                    showConfirmButton: false
                });
                button_submit.innerHTML = 'Solicitar Reserva';
                button_submit.classList.add("btn_blue")
                button_submit.classList.remove("btn_red")

                inputReset()
            },
            error: function() {
                Swal({
                    type: "error",
                    title: `Lo sentimos, hubo un error! <br id='aplicaB2c'>
              <p class='text-sm px-4 aplicaB2c'>Verifica los datos ingresado e intentalo nuevamente</p>`,
                    showCloseButton: true,
                    showConfirmButton: false
                });



            }

        })


    } else {
        button_submit.innerHTML = 'Verifique los datos ingresados';
        button_submit.classList.add("btn_red")
        button_submit.classList.remove("btn_blue")

    }

});