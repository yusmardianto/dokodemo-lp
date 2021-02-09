// input only allow number
function isNumberKey(e){
    var charCode = (e.which) ? e.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode !== 43)
        return false;
    return true;
}

$(function() {

    // reset modal
    $(".modal.modal--meeting .close").click(function() {
        $(this).parents(".modal-header").siblings("form").trigger("reset");
    })

    // change modal title
    $('[data-target="#meetingSchedule"]').click(function() {
        const modal_title = $(this).data('title');
        const jp_greeting = $('#meetingSchedule').find('.modal-title__greetings');

        $('.modal-title__type').html(modal_title);
        $('#meeting_type').attr('value', modal_title);
        
        if (modal_title === 'オンライン') {
            jp_greeting.html('オンラインでDokodemo-Kerjaのご説明をしデモをお見せいたします。');
        } else if (modal_title === 'オフライン') {
            jp_greeting.html('御社へのご訪問、もしくは当社へご来訪いただき、デモをお見せし、導入メリットをご説明いたします。');
        }
    });

    // step input time with button
    $('.input--time-step .time-step').click(function() {
        const button_type = $(this).data('buttonType');
        const input_id = $(this).siblings('input').attr("id");
        const input_time = document.getElementById(input_id);
        let start_time; 

        if (button_type === 'up') {
            input_time.stepUp(1)
        } else if (button_type === 'down') {
            input_time.stepDown(1)
        }

        if (input_id === "time_preffered_start" && button_type === 'up') {   
            start_time = $("#time_preffered_start").val();  

            $("#time_preffered_end")
                .val(start_time)
                .attr("min", start_time);
        }
    })

})