$(document).ready(function() {
    if($("form#registration #reference").val() == "4" || $("form#registration #reference").val() == "5" || $("form#registration #reference").val() == "7") {
        $("form#registration .reference_detail").slideDown('fast');
    }

    $("form#registration #street").keyup(function() {
        $("form#registration #post_street").val($(this).val());
    });

    $("form#registration #home_number").keyup(function() {
        $("form#registration #post_home_number").val($(this).val());
    });

    $("form#registration #home_number_addition").keyup(function() {
        $("form#registration #post_home_number_addition").val($(this).val());
    });

    $("form#registration #postal_code").keyup(function() {
        $("form#registration #post_postal_code").val($(this).val());
    });

    $("form#registration #city").keyup(function() {
        $("form#registration #post_city").val($(this).val());
    });

    $("form#registration #reference").change(function() {
        if($(this).val() == "4" || $(this).val() == "5" || $(this).val() == "7") {
            $("form#registration .reference_detail").slideDown('fast');
        } else {
            $("form#registration .reference_detail").slideUp('fast');
        }
    });
});
