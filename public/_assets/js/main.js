// modal
$(document).on('click', '[data-toggle=generalModal]', function (e) {
    e && e.preventDefault();
    $("#" + $(e.target).attr("data-target")).modal();
});