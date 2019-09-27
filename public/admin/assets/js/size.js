var Size = function() {
    
     var list = function() {
        $('body').on('click', '.delete', function() {
                var id = $(this).data('id');
                setTimeout(function() {
                    $('.yes-sure:visible').attr('data-id', id);
                }, 500);
            })

            $('body').on('click', '.yes-sure', function() {
                var id = $(this).attr('data-id');
                var data = {id: id, _token: $('#_token').val()};
                $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('input[name="_token"]').val(),
                    },
                    url: baseurl + "size-ajaxaction",
                    data: {'action': 'deleteSize', 'data': data},
                    success: function(data) {
                        handleAjaxResponse(data);
                    }
                });
            });
     }
     var addCategory = function() {
            var submitFrom = true;
            var customValid = true;
            var validateTrip = true;
            $('#addsizeform').validate({
                rules: {
                    category: {required: true},
                    subcategory: {required: true},
                },
            invalidHandler: function (event, validator) {
                validateTrip = false;
                customValid = customerInfoValid();
            },
            highlight: function (element) { // hightlight error inputs
                $(element).closest('.c-input, .form-control').addClass('has-error'); // set error class to the control group
            },
            unhighlight: function (element) {
                $(element).closest('.c-input, .form-control').removeClass('has-error');
            },
            errorPlacement: function (error, element) {
                return false;
            },
            submitHandler: function (form) {
                customValid = customerInfoValid();
                if (submitFrom && customValid)
                {
                    var options = {
                        resetForm: false, // reset the form after successful submit
                        success: function (output) {
                            //   App.stopPageLoading();
                            handleAjaxResponse(output);
                        }
                    };
                    $(form).ajaxSubmit(options);
                }
            }
        });

        function customerInfoValid() {

            var customValid = true;

            $('.size').each(function () {
                if ($(this).is(':visible')) {
                    if ($(this).val() == '') {
                        $(this).addClass('has-error');
                        customValid = false;
                    } else {
                        $(this).removeClass('has-error');
                    }
                }
            });

            return customValid;
        };
    
            
            
            $("body").on("change",".category",function(){
                var id = $(this).val();
               $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('input[name="_token"]').val(),
                    },
                    url: baseurl + "size-ajaxaction",
                    data: {'action': 'changecategory', 'id': id},
                    success: function(data) {
                        var output = JSON.parse(data);
                      
                        var subcategoryhtml = '<option value="">Select sub category</option>';
                        for(var i = 0 ; i < output.length ;i++){
                            var temp_html ="";
                            temp_html ='<option value="'+output[i].id +'">'+ output[i].subcategoryname +'</option>';
                            subcategoryhtml = subcategoryhtml + temp_html;
                        }
                        
                        $(".selectsubcategory").html(subcategoryhtml);
//                        handleAjaxResponse(data);
                    }
                });
            });
           $('body').on("click",".addsize", function(){
                var html ='<div class="row removediv">'+
                            '<div class="col-md-10 col-sm-10">'+
                                '<label for="simpleFormEmail">&nbsp;</label>'+
                                '<input type="text" class="form-control size"  id="size" name="size[]" placeholder="Enter size">'+
                            '</div>'+
                            '<div class="col-md-2 col-sm-2">'+
                                '<label for="simpleFormEmail">&nbsp;</label>'+
                                '<button class="form-control btn btn-danger removesize" data-dir="up" type="button"><span class="fa fa-minus"></span></button>'+
                            '</div>'+
                        '</div>';
                $(".appendsize").append(html);
            });
            
            $('body').on("click",".removesize", function(){
                $(this).closest('.removediv').remove();
            });
            
            
     }
     var editCategory = function() {
            var form = $('#editsizeform');
            var rules = {
                category: {required: true},
                subcategory: {required: true},
                size: {required: true},
            };
            handleFormValidate(form, rules, function(form) {
                handleAjaxFormSubmit(form,true);
            });
            
            $("body").on("change",".category",function(){
                var id = $(this).val();
               $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('input[name="_token"]').val(),
                    },
                    url: baseurl + "size-ajaxaction",
                    data: {'action': 'changecategory', 'id': id},
                    success: function(data) {
                        var output = JSON.parse(data);
                      
                        var subcategoryhtml = '<option value="">Select sub category</option>';
                        for(var i = 0 ; i < output.length ;i++){
                            var temp_html ="";
                            temp_html ='<option value="'+output[i].id +'">'+ output[i].subcategoryname +'</option>';
                            subcategoryhtml = subcategoryhtml + temp_html;
                        }
                        
                        $(".selectsubcategory").html(subcategoryhtml);
//                        handleAjaxResponse(data);
                    }
                });
            });
     }
   
    return {
        init: function() {
            list();
        },
        add: function() {
            addCategory();
        },
        edit: function() {
            editCategory();
        }
    }
}();