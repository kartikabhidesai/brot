var Dashboard = function(){
   
    var list = function(){
        $('body').on('click', '.zoomimage', function () {
            var id = $(this).data('id');
            var data = {id: id, _token: $('#_token').val()};
            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val(),
                },
                url: baseurl + "ajaxaction",
                data: {'action': 'getdata', 'data': data},
                success: function (data) {
                    $(".productmodel").html(data);
                    handleAjaxResponse(data);
                }
            });
        })
    }
    return{
       init: function () {
            list();
        }
    }
}();