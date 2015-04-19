/**
 * Lock Screen Modal
 */
var lockScreenKey = 'lockScreen';
if (window.localStorage.getItem(lockScreenKey) == 1) {
    $("#lockModal").modal('show');
} else {
    $("#lockModal").modal('hide');
}
$(".lockModal").on('click', function () {
    $.post('/manage/common/lock', {}, function (result) {
        if (result.status == 1001) {
            window.localStorage.setItem(lockScreenKey, 1);
            $("#lockModal").modal('show');
        } else {
            alert(result.result.msg);
        }
    }, 'JSON');
});

$(".unLockScreen").on('click', function () {
    var unlockPasswordInput = $("input[name=unLockPassword]");
    $.post('/manage/common/lock', {action: 'unlock', password: unlockPasswordInput.val()}, function (result) {
        if (result.status == 1001) {
            window.localStorage.setItem(lockScreenKey, 0);
            $("#lockModal").modal('hide');
        } else {
            unlockPasswordInput.val('');
            alert(result.result.msg);
        }
    }, 'JSON')
});