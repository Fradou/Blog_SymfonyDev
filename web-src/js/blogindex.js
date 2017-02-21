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
                html+= '<div class="row"><div class="col s12"><h3>'
                    + articles[i].title
                    + '</h3></div>'
                    + ( typeof articles[i].img  !== 'object' ?  '<div class="col offset-s2 s8 offset-m3 m6 offset-l4 l4 blogindex_articles_img"><img src="../img/' + articles[i].img + '"/></div>' : "")
                    + '<div class="col offset-s1 s10 offset-l2 l8 blogindex_art_cont"><p>' + articles[i].content + '</p></div></div>';
                }
                $('.section_articles').html(html);
            },
            error: function () {
                $('#job_choices').text('Ajax call error');
            }
        });
    });
});
