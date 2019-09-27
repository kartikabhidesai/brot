var Product = function () {

    var list = function () {

    }
    var addproduct = function () {

        var form = $('#addproductform');
            var rules = {
                category: {required: true},
                subcategory: {required: true},
                size: {required: true},
                productcode: {required: true},
                productname: {required: true},
                price: {required: true},
                description: {required: true},
                quantity: {required: true},
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
                    url: baseurl + "Product-ajaxaction",
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
            
            $("body").on("change",".subcategory",function(){
                var id = $(this).val();
               $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('input[name="_token"]').val(),
                    },
                    url: baseurl + "Product-ajaxaction",
                    data: {'action': 'changesize', 'id': id},
                    success: function(data) {
                        var output = JSON.parse(data);
                        var subcategoryhtml = '<option value="">Select size</option>';
                        for(var i = 0 ; i < output.length ;i++){
                            var temp_html ="";
                            temp_html ='<option value="'+output[i].id +'">'+ output[i].size +'</option>';
                            subcategoryhtml = subcategoryhtml + temp_html;
                        }
                        
                        $(".selectsize").html(subcategoryhtml);
                        $(".selectsize").html(subcategoryhtml);
//                        handleAjaxResponse(data);
                    }
                });
            });
        
    }
    var editproduct = function () {

    }

    return{
        add: function () {
            addproduct();
        },
        edit: function () {
            editproduct();
        },
        init: function () {
            list();
        }
    }
}();