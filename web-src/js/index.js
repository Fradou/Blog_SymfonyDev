// Shaking effect for the tiles images.


$(document).ready(function(){
    $( '.hoverable img' ).hover(function() {
        $( this ).effect( "shake" );
    });
});
