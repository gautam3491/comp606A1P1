$(document).ready(function() {
    $('form[id="registration"]').validate({
        rules: {
            firstname: 'required',
            lastname: 'required',
            email: {
                required: true,
                email: true,
            },
            pwd: {
                required: true,
                minlength: 8,
            }
        },
        messages: {
            lastname: 'This field is required',
            email: 'Enter a valid email',
            pwd: {
            minlength: 'Password must be at least 8 characters long'
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });  
});