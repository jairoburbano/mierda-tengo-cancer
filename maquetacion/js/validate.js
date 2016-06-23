(function($) {
    function validateSingle() {
        $('<div class="message"></div>').hide().appendTo('.contactForm');
        $('.contactForm').each(function() {
            $(this).validate({
                rules: {
                    name: "required",
                    lastname: "required",
                    subject: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    message: {
                        required:true,
                        minlength:8
                    },
                },
                messages: {
                    name: {
                        required: "Usa solo letras"
                    },
                    lastname: {
                        required: "Usa solo letras"
                    },
                    subject: {
                        required: "Usa solo letras"
                    },
                    email: {
                        required: "Ingresa un Email válido",
                        email: "Ingresa un Email válido"
                    },
                    message: {
                        required: "Ingresar un mensaje/consulta"
                    }
                },
                errorElement: 'p',
                errorClass: 'error',
                validClass: 'form-valid',
                highlight: function (element, errorClass, validClass) {
                    $(element).parent().addClass(errorClass).removeClass(validClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).parent().removeClass(errorClass).addClass(validClass);
                },
                submitHandler: function (form) {
                    $('.form-single .loading').css({opacity: 0}).animate({opacity: 1});
                    $.post($('.contactForm').attr('action'), $('.contactForm').serialize(), function (data) {
                        var obj = $.parseJSON(data);
                        $('.form-single .loading').fadeOut();
                        if (obj.exito === 'exito') {
                            $('.form-single .message').html('<p class="success-msg">Thanks for your message.</p>').fadeIn().delay('3000').fadeOut();
                            $('.contactForm').find('.form__valid').removeClass('form__valid');
                            $('.contactForm')[0].reset();
                        } else {
                            $('.contactForm .message').html('<p class="warning-msg">' + obj.mensaje + '</p>').removeClass('hidden');
                        }
                    });
                    return false;
                }
            });
        });
    }
    function validateTestimonios() {
        $('<div class="message"></div>').hide().appendTo('.form-contact');
        $('.form-contact').validate({
            rules: {
                name: "required",
                lastname: "required",
                email: {
                    required: true,
                    email: true
                },
                age: "required",
                diagnostico: "required",
                photo: "required",
                historia: "required",
                "categoria[]": "required",
                "message[]": {
                    required:true,
                    minlength:8
                },
            },
            messages: {
                name: {
                    required: "Usa solo letras"
                },
                lastname: {
                    required: "Usa solo letras"
                },
                email: {
                    required: "Ingresa un Email válido",
                    email: "Ingresa un Email válido"
                },
                age: {
                    required: "Usa solo letras"
                },
                diagnostico: {
                    required: "Usa solo letras"
                },
                photo: {
                    required: "Elige un archivo"
                },
                "message[]": {
                    required: "Ingresar un mensaje/consulta"
                },
                "categoria[]": {
                    required: "Ingresar un mensaje/consulta"
                },
                historia: {
                    required: "Ingresar un mensaje/consulta"
                }
            },
            errorElement: 'p',
            errorClass: 'error',
            validClass: 'form-valid',
            highlight: function (element, errorClass, validClass) {
                $(element).parent().addClass(errorClass).removeClass(validClass);
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parent().removeClass(errorClass).addClass(validClass);
            },
            submitHandler: function (form) {
                var form = $('.form-contact'),
                    formURL = form.attr("action"),
                    loader = $('.bubbles');
                $.ajax( {
                    url: formURL,
                    type: 'POST',
                    data: new FormData($('.form-contact')[0]),
                    processData: false,
                    contentType: false,
                    beforeSend: function(XHR){
                        //form.find('.bubbles').fadeIn(300);
                    },
                    success : function() {
                        $('.form-contact')[0].reset();
                        //form.find('.bubbles').fadeOut(300);
                        form.find('.send').hide();
                        form.parent().find('.message').html('<p class="success-msg">Thanks for your message.</p>').fadeIn().delay('3000').fadeOut();
                        form.find('.validate').removeClass('validate');
                    }
                } );
                return false;
            }
        });
    }
    validateTestimonios();
    validateSingle();
})(jQuery);