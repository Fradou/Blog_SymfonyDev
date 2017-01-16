$(document).ready(function () {
    $(document).on('click', '.tagbutton' , function () {
        var category = $(this).attr('id');
        $('.tagbutton').removeClass('accent-3');
        $(this).removeClass('accent-5').addClass('accent-3');
        $.ajax({
            type: "POST",
            url: "tagindex/" + category,
            dataType: 'json',
            timeout: 3000,
            success: function (response) {
                var articles = JSON.parse(response.data);
                html = "";
                for (i = 0; i < articles.length; i++) {
                html+= '<h3><small>' + articles[i].title + '</small></h3>' +
                    /*+'<img src="' + articles[i].img + '"/>*/ '<p>' +articles[i].content + '</p>';
                }
                $('.section_articles').html(html);
            },
            error: function () {
                $('#job_choices').text('Ajax call error');
            }
        });
    });
});
