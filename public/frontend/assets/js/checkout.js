var Checkout = function(){
   
    var check = function(){
       
       $('body').on('change', '.country', function () {

           var id = $(this).val();
           var data = {id: id, _token: $('#_token').val()};
           $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val(),
                },
                url: baseurl + "checkout-ajaxaction",
                data: {'action': 'getstate', 'data': data},
                success: function (data) {
                    var output = JSON.parse(data);
                    var state = '<ul class="list">';
                    for (var i = 0; i < output.length; i++) {
                        var temp_html = "";
                        temp_html = '<li value="'+ output[i].id +'" class="option">' + output[i].name + '</li>';
                        state = state + temp_html;
                    }

                    $(".state").html(state);
                }
            });
       });
       $('body').on('change', '.state', function () {
          
           var id = $(this).closest('.li').attr('value');
           alert(id);
           var data = {id: id, _token: $('#_token').val()};
           $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('input[name="_token"]').val(),
                },
                url: baseurl + "checkout-ajaxaction",
                data: {'action': 'getcity', 'data': data},
                success: function (data) {
                    var output = JSON.parse(data);
                    var city = '<ul class="list">';
                    for (var i = 0; i < output.length; i++) {
                        var temp_html = "";
                        temp_html = '<li data-value="'+ output[i].id +'" class="option">' + output[i].name + '</li>';
                        city = city + temp_html;
                    }

                    $(".city").html(city);
                }
            });
       });
    }
    return{
       init: function () {
            check();
        }
    }
}();