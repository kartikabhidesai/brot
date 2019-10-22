var Slider = function() {
    var sliderlist = function() {
        var dataArr = {};
        var columnWidth = {"width": "10%", "targets": 0};

         var arrList = {
             'tableID': '#slider-datatable',
             'ajaxURL': baseurl + "slider-ajaxAction",
             'ajaxAction': 'getdatatable',
             'postData': dataArr,
             'hideColumnList': [],
             'noSearchApply': [0],
             'noSortingApply': [3,5],
             'defaultSortColumn': 0,
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
            slidertext: {required: true,maxlength:40},
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
    }
}();