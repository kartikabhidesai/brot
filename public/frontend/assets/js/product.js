var Product = function () {

    var getdata = function () {

        $('body').on('click', '.addtocart', function () {
            var id = $(this).attr('data-id');
            var sizeid = $('#size').val();
            if (sizeid == '') {
                alert('Please Select Size');
            } else {
                var quantity = $('#quantity').val();
                var data = {quantity: quantity, 'id': id, 'sizeid': sizeid, _token: $('#_token').val()};
                $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('input[name="_token"]').val(),
                    },
                    url: baseurl + "cart-ajaxaction",
                    data: {'action': 'addtocart', 'data': data},
                    success: function (data) {
                        handleAjaxResponse(data);
//                    $(this).parent().parent().parent().find(".remove").text(html);
                    }
                });
            }
        });
    }
    return{
        init: function () {
            getdata();
        }
    }
}();