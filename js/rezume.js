$("document").ready(function () {
    $("#send").click(function () {

        var danni = $("form").serialize();

        $.ajax({
            url: 'db_rezume.php',
            type: 'POST',
            data: danni,
            success: function (data) {
                $('#message').html(data + "<div class='clear'></div>");
                $('#message').show();
                $('#form')[0].reset();

            }
        });
    });
});