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

    /**
     *
     var options = [
     {selector: '.class', offset: 200, callback: customCallbackFunc },
     {selector: '.other-class', offset: 200, callback: function() {
         customCallbackFunc();
         }
     }
     ];
     Materialize.scrollFire(options);
     */


    /**
     *      MATERIALIZE
     **/

    //   Activate carousel
    $('.carousel').carousel({indicators: true, dist: -100, time_constant: 500});
    function autoplay() {
        $('.carousel').carousel('next');
        setTimeout(autoplay, 2500);
    }
 //   autoplay();

    //  Materialize mobile menu
    $(".button-collapse").sideNav({
            menuWidth: 100
        }
    );

    //  Initialize collapse button
    $(".button-collapse2").sideNav();
    $('.collapsible').collapsible();


});