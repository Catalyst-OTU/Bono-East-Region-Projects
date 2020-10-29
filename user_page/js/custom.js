$(document).ready(function () {
    

    $('.checking_email').keyup(function (e) {

        var voters = $('.checking_email').val();
        //alert(email);
        $.ajax({
            type: "POST",
            url: "registration_code.php",
            data: {
                "checking_submit_btn": 1,
                "email_id": voters,
            },
            success: function (response) {
                alert(response);
                
            }
        });

    });

});