// Date input init
$('#reservationdate').datetimepicker({
    format: 'Y-MM-DD'
});

// Custom input init
$(function () {
    bsCustomFileInput.init();
});

//Initialize Select2 Elements
$('.select2').select2();
$('.select2-market').select2({
    tags: true
});

$('.group-select').select2({
    tags: true
});

//Initialize Select2 Elements
$('.select2bs4').select2({
    theme: 'bootstrap4'
});
