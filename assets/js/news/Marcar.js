$(document).ready(function() {
    $('body').on('click', '#selectAll', function() {
        if ($(this).hasClass('allChecked')) {
            $('input[type="checkbox"]', '#example').prop('checked', false);
        } else {
            $('input[type="checkbox"]', '#example').prop('checked', true);
        }
        $(this).toggleClass('allChecked');
    })
})