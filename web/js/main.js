/**
 * Created by alex on 08/11/16.
 */
$(document).ready(function () {
    $("#maillink").click(function(){
        $("#maillink").hide();
        $("#mailelem").show();
    });
    $("#log_title").click(function(){

        $(".log_article:first-child").simulate('mousedown');
    });
});