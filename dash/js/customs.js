//Get P/L
function GetPL() {
    $.ajax("{{url('/dashboard/getpl').'/'.Auth::user()->id}}", {
        type: 'GET',
        success: function(response) {
            var pl = document.getElementById('p_l');

            if (response < 0) {
                $("#p_l").css("color", 'red')
            }
            if (response > 0) {
                $("#p_l").css("color", 'green')
            }

            pl.innerHTML = "{{$settings->currency}}" + response;
        }
    });
}

// function googleTranslateElementInit() {
//     new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
// }

var badWords = [
    '<!--Start of Tawk.to Script-->',
    '<script type="text/javascript">',
    '<!--End of Tawk.to Script-->'
];
$(':input').on('blur', function() {
    var value = $(this).val();
    $.each(badWords, function(idx, word) {
        value = value.replace(word, '');
    });
    $(this).val(value);
});

$(document).ready(function() {
    $('#ShipTable').DataTable({
        order: [
            [0, 'desc']
        ],
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'print', 'excel', 'pdf'
        ]
    });
});

$('#usernameinput').on('keypress', function(e) {
    return e.which !== 32;
});

$(document).ready(function() {
    $('.UserTable').DataTable({
        order: [
            [0, 'desc']
        ]
    });
});