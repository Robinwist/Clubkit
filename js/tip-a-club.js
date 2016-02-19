$(document).ready(function() {
    $('input[name="club_name"]').on('input', function() {
        if($(this).val() == "") {
            $('#preview_club_name').html('...');
        } else {
            $('#preview_club_name').html(htmlEntities($(this).val()));
        }
    });

    $('input[name="sender_name"]').on('input', function() {
        if($(this).val() == "") {
            $('#preview_sender_name').html('...');
        } else {
            $('#preview_sender_name').html(htmlEntities($(this).val()));
        }
    });

    $('textarea[name="personal_message"]').on('input', function() {
        if($(this).val() == "") {
            $('#preview_personal_message').html('');
        } else {
            $('#preview_personal_message').html(htmlEntities(' en heeft het volgende bericht toegevoegd: "' + $(this).val() + '"'));
        }
    });
});

function htmlEntities(str) {
    return String(str).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
}
