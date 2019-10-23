var Slider = function() {
    var sliderlist = function() {
        
        $('body').on('click', '.deleteslider', function() {
            
            // $('#deleteModel').modal('show');
            var id = $(this).data('id');
            var image = $(this).data('image');
           
            setTimeout(function() {
                $('.yes-sure:visible').attr('data-id', id);
                $('.yes-sure:visible').attr('data-image', image);
            }, 500);
        })

        $('body').on('click', '.yes-sure', function() {
            var id = $(this).attr('data-id');
            var image = $(this).attr('data-image');
            
            var data = {image:image,id: id, _token: $('#_token').val()};
            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val(),
                },
                url: baseurl + "slider-ajaxAction",
                data: {'action': 'deleteslider', 'data': data},
                success: function(data) {
                    handleAjaxResponse(data);
                }
            });
        });
        
        
        var dataArr = {};
        var columnWidth = {"width": "10%", "targets": 0};

         var arrList = {
             'tableID': '#slider-datatable',
             'ajaxURL': baseurl + "slider-ajaxAction",
             'ajaxAction': 'getdatatable',
             'postData': dataArr,
             'hideColumnList': [],
             'noSearchApply': [0],
             'noSortingApply': [0,4],
             'defaultSortColumn': 1,
             'defaultSortOrder': 'desc',
             'setColumnWidth': columnWidth
         };
         getDataTable(arrList);
    }
    
    
    var addslider = function(){
        var form = $('#addsilder');
        var rules = {
            silderimage: {required: true},
            slidertitle: {required: true,maxlength:15},
            slidertext: {required: true,maxlength:20},
        };
        handleFormValidate(form, rules, function (form) {
            handleAjaxFormSubmit(form, true);
        });
    }
    
    var editslider = function(){
        var form = $('#editsilder');
        var rules = {
            slidertitle: {required: true,maxlength:15},
            slidertext: {required: true,maxlength:20},
        };
        handleFormValidate(form, rules, function (form) {
            handleAjaxFormSubmit(form, true);
        });
    }
    return {
        init: function() {
            sliderlist();
        },
        add: function() {
            addslider();
        },
        edit: function() {
            editslider();
        },
    }
}();