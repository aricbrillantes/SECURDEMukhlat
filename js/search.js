$(document).ready(function() {
    $('#search-topic-list').keyup(function() {
        var data = {keyword: $(this).val()};
        $.ajax({
            type: "POST",
            url: "search/topic",
            data: data,
            success: function(html) {
                $("#topic-list").empty();
                $("#topic-list").append(html);
            }
        });
    });
});