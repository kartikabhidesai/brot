var Checkout = function(){
   
    var check = function(){
       
       var form = $('#checkoutform');
        var rules = {
            fname: {required: true},
            lname: {required: true},
            email: {required: true, email: true},
            mobile: {required: true, maxlength: 10, minlength: 10},
            country: {required: true},
            state: {required: true},
            city: {required: true},
            pincode: {required: true},
            address: {required: true},
        };
        handleFormValidate(form, rules, function (form) {
            handleAjaxFormSubmit(form);
        });
    }
    return{
       init: function () {
            check();
        }
    }
}();