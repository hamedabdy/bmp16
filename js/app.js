// Anchor link
$('a[href^="#"]').on("click",function(){
    var t = $(this.hash);
    var t = t.length&&t||$('[id='+this.hash.slice(1)+']');
    if(t.length){
        var tOffset = t.offset().top;
        $('html,body').animate({scrollTop:tOffset-70},'slow');
        window.history.replaceState( {}, '', '#'+this.hash.slice(1));
        return false;
    }
});

// // Header menu
// $(document).ready(function() {
//   // whenever we hover over a menu item that has a submenu
//   $('li.parent').on('mouseover', function() {
//     var $menuItem = $(this),
//         $submenuWrapper = $('> .dropdown-menu', $menuItem);
    
//     // grab the menu item's position relative to its positioned parent
//     var menuItemPos = $menuItem.position();
    
//     // place the submenu in the correct position relevant to the menu item
//     $submenuWrapper.css({
//       left: menuItemPos.left
//     });
//   });
// });

// Image Slider
var myIndex = 0;
//carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 5000);
}

// Load Markdowns from txt/
$(document).ready(function(){
    if( document.documentElement.lang != 'fa' ) {
        $('#sect1 article').load('txt/about.md', function(data){
            $(this).html(marked(data));
        });
        $('#sect2 article').load('txt/visa.md', function(data){
            $(this).html(marked(data));
        });
        $('#sect3 article').load('txt/services.md', function(data){
            $(this).html(marked(data));
        });
        $('#sect4 article').load('txt/team.md', function(data){
            $(this).html(marked(data));
        });
        $('#sect5 article').load('txt/contact.md', function(data){
            $(this).html(marked(data));
        });
    }
});

// Display to top button upon scroll
$(document).on('scroll', function() {
    var h = $(this).scrollTop();
    if(h == 0) {
        $('div.totop').css('display', 'none');
    }
    if(h > 0) {
        $('div.totop').css('display', 'block');
    }
});

// AJAX online visa application form
$( '#onlineVisaApplication' ).submit(function(e) {
    e.preventDefault();
    $.post( '/visa.php', $(this).serialize(), function(response) {
        $( '#visaForm .alertmsg p' ).html( response );
        $( '#visaForm .alertmsg' ).addClass( 'hidealert' );
        setTimeout(function (){
            $( '.hidealert' ).removeClass( 'hidealert' );
            $( '#sendmailform' )[0].reset();
        }, 7000);
    });
});

// AJAX contact from
$( '#sendmailform' ).submit(function(e) {
    e.preventDefault();
    $.post( "/sendmail.php", $(this).serialize(), function(response) {
        $( '.contact-form .alertmsg p' ).html( response );
        $( '.contact-form .alertmsg' ).addClass( 'hidealert' );
        setTimeout(function() {
            $( '.hidealert' ).removeClass( 'hidealert' );
            $( '#sendmailform' )[0].reset();
        }, 7000);
    });
});

// Share buttons window size
$('.shareBtns').children('a').on('click', function(e){
    e.preventDefault();
    var e = 575,
        f = 520,
        g = (jQuery(window).width() - e) / 2,
        h = (jQuery(window).height() - f) / 2,
        i = "status=1,width=" + e + ",height=" + f + ",top=" + h + ",left=" + g;
    window.open($(this).attr("href"), "The BMP Institute", i);
});