var Cart = function () {

    var list = function () {

        $('body').on('click', '.delete', function () {
            var id = $(this).data('id');
            setTimeout(function () {
                $('.yes-sure:visible').attr('data-id', id);
            }, 500);
        });

        $('body').on('click', '.yes-sure', function () {
            var id = $(this).attr('data-id');
            var data = {id: id, _token: $('#_token').val()};
            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val(),
                },
                url: baseurl + "cart-ajaxaction",
                data: {'action': 'deleteProduct', 'data': data},
                success: function (data) {
                    handleAjaxResponse(data);
                }
            });
        });

        $('body').on('click', '.qtybtn', function () {

//            var value = $('#kontity').val();
//            var total = document.getElementById('total').getAttribute('value');
//            var html = 'INR ' + (value * total) + '.00';
//            $(".subtotal").html(html);
        });

    }
    return{
        init: function () {
            list();
        }
    }
}();