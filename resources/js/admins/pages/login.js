/*======================login====================*/
const containerLogin = {};
const login = $('#fm-login');

containerLogin.init = function (){
    login.validate({
        rule:{
            username:{
                required:true,
                minLength:3,
                maxlength: 15
            },
            password:{
                required:true,
            }
        },
        messages:{
            username:{
                required:'Please enter username',
                minLength:'The username should long than or equal to 3 characters',
                maxlength:'The  username should less than or equal to 15 characters'
            },
            password:{
                required:'Please enter password',
            }
        },
        errorElement:'div',
        submitHandler: function(form) {
            form.submit();
        }
    });
};
