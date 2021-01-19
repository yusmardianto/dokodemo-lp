$(function() {
    // change modal title
    $('[data-target="#meetingSchedule"]').click(function() {
        const modal_title = $(this).data('title');
        $('.modal-title__type').html(modal_title)
    })
})