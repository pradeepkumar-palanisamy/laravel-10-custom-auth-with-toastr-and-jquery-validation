$(document).ready(function () {
    $('#registrationForm').validate({ 
        rules: {
            username: {
                required: true,
                minlength: 5
            },
            password: {
                required: true,
                minlength: 5
            },
            confirm_password: {
                required: true,
                minlength: 5,
                equalTo: "#password"
            },
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            username: {
                required: "Please enter a username",
                minlength: "Your username must consist of at least 5 characters"
            },
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            confirm_password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long",
                equalTo: "Please enter the same password as above"
            },
            email: "Please enter a valid email address"
        }
    });
});

$(document).ready(function () {
    $('#loginform').validate({ 
        rules: {
            password: {
                required: true,
            },
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            password: {
                required: "Please provide a password",
               
            },
            email: "Please enter a valid email address"
        }
    });
});