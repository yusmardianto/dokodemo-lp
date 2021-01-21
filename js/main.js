$(function() {

    // change modal title
    $('[data-target="#meetingSchedule"]').click(function() {
        const modal_title = $(this).data('title');
        $('.modal-title__type').html(modal_title);
        $('#meeting_type').attr('value', modal_title);
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