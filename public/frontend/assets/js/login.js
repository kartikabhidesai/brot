var Login = function(){
    
    var register = function(){
        var form = $('#registerform');
        var rules = {
            fname: {required: true},
            lname: {required: true},
            email: {required: true},
            mobile: {required: true, minlength:10, maxlength:10},
            password: {required: true},
            confirmpassword: {equalTo: "#password"},
        };
        handleFormValidate(form, rules, function (form) {
            handleAjaxFormSubmit(form);
        });
    }
    var login = function(){
        var form = $('#loginform');
        var rules = {
            email: {required: true, email: true},
                password: {required: true},
        };
        handleFormValidate(form, rules, function (form) {
             handleAjaxFormSubmit(form);
        });
    }
    
    return{
        init: function(){
            register();
        },
        add: function(){
            login();
        }
    }
}();