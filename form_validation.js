$(document).ready(function() {
    //validation rules
    $("#registration").validate({
        rules: {
            firstname: "required",
            lastname: {
                required: true,
                minlength: 3
            },
            phoneno: {
                required: true,
                number: true,
                minlength: 8
            },
            emails: {
                required: true,
                email: true
            },
            pwd: {
                required: true,
                minlength: 3,
            }
        },
        messages: {
            firstname: 'First name can not be empty!!',
            lastname: { 
                required: 'Last name can not be empty!!',
                minlength: 'Must be 3 characters or more!!'
            },
            phoneno:{
                required: 'Phone no can not be empty!!',
                minlength: 'Must be 8 numbers or more!!'
            },
            pwd: {
                required: 'Password can not be empty',
                minlength: 'Must be 3 characters or more!!'
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });  
});