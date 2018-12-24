$(document).ready(function(){

    $("form").submit(function () {
        var th = $(this);
        $.ajax({
            type: "POST",
            url: "post1.php",
            data: th.serialize()
        }).done(function () {
            alert("Дякую вам!");
            setTimeout(function () {
                th.trigger("reset");
            }, 1000);
        });
        return false;
    });




});
