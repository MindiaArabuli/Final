$(document).ready(function() {

    // Menu script
    $("#burger").click(function() {
        $(".anim").toggleClass("active");
    });
    $(".menu__items-item a").click(function() {
        $(".anim").toggleClass("active");
    });

    //Scroll to ID
    $(document).on('click', 'a[href^="#"]', function(e) {
        var id = $(this).attr('href');
        var $id = $(id);
        if ($id.length === 0){return;}
        e.preventDefault();
        var pos = $id.offset().top - 60;
        $('body, html').animate({scrollTop: pos});
    });
});

//Form Validation
/*$(function() {
    $("#contactForm").validate({
        rules: {
            name: "required",
            gender: "required",
            subject: "required",
            email: {
                required: true,
                email: true
            },
            text: {
                required: true,
                minlength: 5
            }
        },
        messages: {
            name: "please write your name",
            subject: "please write subject  ",
            gender: "please choose your gender",
            text: "please write text",
            email: "please write your email"
        },

        submitHandler: function() {
            document.getElementById('formSuccess').innerText = "Thank you for your intereset for us, your message has been sent!";
        }
    });
});*/