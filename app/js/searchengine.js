$(document).ready(function () {
    $('#search').keyup(function () {
        $.post(
            '/api/article/keyword/',
            { keyword: $(this).val() },
            function (data) {
                console.log(data);
            }
        );
    });
});