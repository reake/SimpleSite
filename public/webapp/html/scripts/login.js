(function ($) {
    "use strict";

    $(document).on('ready', function () {
        $("button[type=submit]").on('click', function (e) {
            e.preventDefault();
            var data = {
                email: $("input[type=email]").val(),
                password: $("input[type=password]").val()
            };
            $.post('/manage/_login', data, function (result) {
                if (result.status.code == 1001) {
                    window.location.href = result.result;
                } else {
                    alert(result.result);
                }
            }, 'JSON');
        })
    });
})(jQuery);
