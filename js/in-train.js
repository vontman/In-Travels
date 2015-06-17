/*!
 * Start Bootstrap - Freelancer Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('body').on('click', '.page-scroll a', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Floating label headings for the contact form
$(function() {
    $("body").on("input propertychange", ".floating-label-form-group", function(e) {
        $(this).toggleClass("floating-label-form-group-with-value", !! $(e.target).val());
    }).on("focus", ".floating-label-form-group", function() {
        $(this).addClass("floating-label-form-group-with-focus");
    }).on("blur", ".floating-label-form-group", function() {
        $(this).removeClass("floating-label-form-group-with-focus");
    });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-fixed-top'
})

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});
$(document).ready(function(){
    $(".viewer").click(function(){
        var trgt = $(this).parents("tr");
        var temp = trgt.children("[rel=1]");
        $("h3[lol='1']").html("Depart : "+temp.text());
        var temp = trgt.children("[rel=2]");
        $("h3[lol='2']").html("Arrival : "+temp.text());
        var temp = trgt.children("[rel=3]");
        $("h3[lol='3']").html("From : "+temp.text());
        var temp = trgt.children("[rel=4]");
        $("h3[lol='4']").html("To : "+temp.text());
        var temp = trgt.children("[rel=5]");
        $("h3[lol='5']").html("price : "+temp.text());
    });
    $(document).mousemove(function(e){
        TweenLite.to($('body'),
            .5,
            { css:
            {
                backgroundPosition: ""+ parseInt(event.pageX/8) + "px "+parseInt(event.pageY/'12')+"px, "+parseInt(event.pageX/'15')+"px "+parseInt(event.pageY/'15')+"px, "+parseInt(event.pageX/'30')+"px "+parseInt(event.pageY/'30')+"px"
            }
            });
    });
    $('#sign_in').validate({
        rules:{
            password:
            {
                required:true,
                minlength:6,
                maxlength:30
            },
            username:{
                required:true,
                minlength:6,
                maxlength:20

            }
        },

        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');

        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if(element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }

    });
    $('#sign_up').validate({
        rules:{
            email:
            {

                required:true,
                email:true
            },
            firstname:
            {
                required:true,
                minlength:4,
                maxlength:20
            },
            lastname:
            {
                required:true,
                minlength:4,
                maxlength:20
            },
            username:
            {
                required:true,
                minlength:6,
                maxlength:20
            },
            password:
            {
                required:true,
                minlength:6,
                maxlength:30
            },
            repassword:{
                equalTo:"#password"

            }
        },

        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');

        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if(element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }

    });
    jQuery.validator.addMethod("notEqualTo", function(value, element, param) {
        return this.optional(element) || value != $(param).val();
    }, "This has to be different...");

    $('#add_ticket_form').validate({
        rules:{
            to_ticket:
            {
                notEqualTo:"#from_ticket"
            }
        },

        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');

        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if(element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }

    });
});
