$(document).ready(function() {
    $("#phoneChange").on('change', function () {
        var matchvalue = $(this).val(); // this.value
        $.ajax({
            url: '/login',
            data: {iin: matchvalue},
            type: 'post'
        }).done(function (responseData) {
            // console.log('Done: ', responseData);
        }).fail(function (responseData) {
            // console.log('Failed');
        });
    });
})


