var Size = function() {
    
     var list = function() {
        
     }
     var addCategory = function() {
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
            alert("Hell");
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