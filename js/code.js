$(document).ready(function(){
    $('.slider').slider({full_width: true});
    $('.collapsible').collapsible({
        accordion : false
    });
    $(".owl-demo").owlCarousel({
        autoPlay: 3000, //Set AutoPlay to 3 seconds
        items : 2,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]

    });
    $("#owl-demo1").owlCarousel({
        autoPlay: 3000, //Set AutoPlay to 3 seconds
        items : 2,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]

    });

    //hacer imagen mas grande

    $(document).ready(function(){
        $('.materialboxed').materialbox();
    });

    $('.dropdown-button').dropdown({
            inDuration: 300,
            outDuration: 225,
            constrain_width: false, // Does not change width of dropdown to that of the activator
            hover: true, // Activate on hover
            gutter: 0, // Spacing from edge
            belowOrigin: true, // Displays dropdown below the button
            alignment: 'left' // Displays dropdown with edge aligned to the left of button
        }
    );

});

