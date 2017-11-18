$(document).ready(function () {

    var lcard = [];
    $(".project-card").each(function(){
        lcard.push($(this).height());
    });
    var maxh = Math.max.apply(null, lcard);
    console.log(lcard);
    console.log(maxh);
    $(".project-card").each(function(){
        $(this).height(maxh);
    })

});
