/*==============================================================*/
// Pearo Contact Form  JS
/*==============================================================*/

$("#contactForm").show();
$("#monsection").hide();
(function ($) {




    "use strict"; // Start of use strict
    $("#contactForm").validator().on("submit", function (event) {
        if (event.isDefaultPrevented()) {
            // handle the invalid form...
            formError();
            submitMSG(false, "Did you fill in the form properly?");
        } else {
            // everything looks good!
            event.preventDefault();
            submitForm();
        }
    });


    function submitForm() {
        // Initiate Variables With Form Content
        $.ajax({
            type: "POST",
            url: "base.php",
            data: $("#contactForm").serialize(),
            success: function () {
            }
        });
        $("#contactForm").hide();
        $("#monsection").show();

        $("html, body").animate({ scrollTop: $("#monsection").scrollTop() }, 1000);
        setTimeout(function () { $(window).trigger('scroll'); }, 100);
        return false;



    }

    function formSuccess() {
        $("#contactForm")[0].reset();
        submitMSG(true, "Message Submitted!")
    }

    function formError() {
        $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
            $(this).removeClass();
        });

    }

    function submitMSG(valid, msg) {
        if (valid) {
            var msgClasses = "h4 text-center tada animated text-success";
        } else {
            var msgClasses = "h4 text-center text-danger";
        }
        $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
    }
}(jQuery)); // End of use strict









