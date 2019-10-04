var Product = function () {

    var list = function () {
        $('body').on('click', '.delete', function () {
            var id = $(this).data('id');
            setTimeout(function () {
                $('.yes-sure:visible').attr('data-id', id);
            }, 500);
        })

        $('body').on('click', '.yes-sure', function () {
            var id = $(this).attr('data-id');
            var data = {id: id, _token: $('#_token').val()};
            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val(),
                },
                url: baseurl + "Product-ajaxaction",
                data: {'action': 'deleteProduct', 'data': data},
                success: function (data) {
                    handleAjaxResponse(data);
                }
            });
        });
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
        handleFormValidate(form, rules, function (form) {
            handleAjaxFormSubmit(form, true);
        });
        $("body").on("change", ".category", function () {
            var id = $(this).val();
            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val(),
                },
                url: baseurl + "Product-ajaxaction",
                data: {'action': 'changecategory', 'id': id},
                success: function (data) {
                    var output = JSON.parse(data);

                    var subcategoryhtml = '<option value="">Select sub category</option>';
                    for (var i = 0; i < output.length; i++) {
                        var temp_html = "";
                        temp_html = '<option value="' + output[i].id + '">' + output[i].subcategoryname + '</option>';
                        subcategoryhtml = subcategoryhtml + temp_html;
                    }

                    $(".selectsubcategory").html(subcategoryhtml);
//                        handleAjaxResponse(data);
                }
            });
        });

        $("body").on("change", ".subcategory", function () {
            var id = $(this).val();
            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val(),
                },
                url: baseurl + "Product-ajaxaction",
                data: {'action': 'changesize', 'id': id},
                success: function (data) {
                    var output = JSON.parse(data);
                    var subcategoryhtml = '<option value="">Select size</option>';
                    for (var i = 0; i < output.length; i++) {
                        var temp_html = "";
                        temp_html = '<option value="' + output[i].id + '">' + output[i].size + '</option>';
                        subcategoryhtml = subcategoryhtml + temp_html;
                    }

                    $(".selectsize").html(subcategoryhtml);
//                        handleAjaxResponse(data);
                }
            });
        });
        $('body').on("click", ".addimage", function () {
            var html = '<div class="form-group removediv">' +
                    '<div class="row">' +
                    '<div class="col-md-10 col-sm-10">' +
                    '<label for="simpleFormEmail">Product Image</label>' +
                    '<input type="file" class="form-control product" id="image" name="image[]">' +
                    '</div>' +
                    '<div class="col-md-2 col-sm-2">' +
                    '<label for="simpleFormEmail">&nbsp;</label>' +
                    '<button class="form-control btn btn-danger removeimage" data-dir="up" type="button"><span class="fa fa-minus"></span></button>' +
                    '</div>' +
                    '</div>' +
                    '</div>';
            $(".appendproduct").append(html);
        });
        $('body').on("click", ".removeimage", function () {
            $(this).closest('.removediv').remove();
        });

    }
    var editproduct = function () {
        var form = $('#editproductform');
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
        handleFormValidate(form, rules, function (form) {
            handleAjaxFormSubmit(form, true);
        });

        $("body").on("change", ".category", function () {
            var id = $(this).val();
            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val(),
                },
                url: baseurl + "size-ajaxaction",
                data: {'action': 'changecategory', 'id': id},
                success: function (data) {
                    var output = JSON.parse(data);

                    var subcategoryhtml = '<option value="">Select sub category</option>';
                    for (var i = 0; i < output.length; i++) {
                        var temp_html = "";
                        temp_html = '<option value="' + output[i].id + '">' + output[i].subcategoryname + '</option>';
                        subcategoryhtml = subcategoryhtml + temp_html;
                    }

                    $(".selectsubcategory").html(subcategoryhtml);
//                        handleAjaxResponse(data);
                }
            });
        });

        $("body").on("change", ".subcategory", function () {
            var id = $(this).val();
            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val(),
                },
                url: baseurl + "Product-ajaxaction",
                data: {'action': 'changesize', 'id': id},
                success: function (data) {
                    var output = JSON.parse(data);
                    
                    var sizehtml = '<option value="">Select size</option>';
                    for (var i = 0; i < output.length; i++) {
                        var temp_html = "";
                        temp_html = '<option value="' + output[i].id + '">' + output[i].size + '</option>';
                        sizehtml = sizehtml + temp_html;
                    }

                    $(".selectsize").html(sizehtml);
//                        handleAjaxResponse(data);
                }
            });
        });
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