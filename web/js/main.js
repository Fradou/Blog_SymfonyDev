/**
 * Created by alex on 08/11/16.
 */
$(document).ready(function () {
    /** Display mail on frontpage **/
    $("#maillink").click(function(){
        $("#maillink").hide();
        $("#mailelem").show();
    });

    /** In progress : open first log when clikcing on log title **/
    $("#log_title").click(function(){

        $(".log_article:first-child").simulate('mousedown');
    });

    /** Materialize mobile menu **/
    $(".button-collapse").sideNav({
            menuWidth: 100
        }
    );
});