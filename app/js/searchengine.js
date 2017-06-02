$(document).ready(function () {
    $('#search').keyup(function () {
        $.post(
            '/api/article/keyword/',
            { keyword: $(this).val() },
            function (data) {
                var dataObj = JSON.parse(data);
                $('.articles').html('');
                view(dataObj);
                console.log(dataObj);
            }
        );
    });

    function view(data) {
        for (var i = 0; i < data.length; i++)
        {
            $('.articles').append(
                '<div class="row-fluid">'
                + data[i].title +
                '</div>'
            );
        }
    }
});