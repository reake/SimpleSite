(function ($) {
    'use strict';
    // Ajax加载数据事件效果
    if ($.support.pjax) {
        $.pjax.defaults.maxCacheLength = 0;
        var container = $('#view');
        $(document).on('click', 'a[data-pjax], [data-pjax] a, #aside .nav a', function (event) {
            $.pjax.click(event, {container: container, timeout: 6000, fragment: '#view'});
        });

        $(document).on('pjax:start', function () {
            $(document).trigger("pjaxStart");
        });
        // fix js
        $(document).on('pjax:end', function (event) {

            $(event.target).find('[ui-jp]').uiJp();
            $(event.target).uiInclude();

            $(document).trigger("pjaxEnd");
        });
    }
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
})(jQuery);
