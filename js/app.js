// Anchor link
$('a[href^="#"]').on("click",function(){
    var t = $(this.hash);
    var t = t.length&&t||$('[id='+this.hash.slice(1)+']');
    if(t.length){
        var tOffset = t.offset().top;
        $('html,body').animate({scrollTop:tOffset-20},'slow');
        window.history.replaceState( {}, '', '#'+this.hash.slice(1));
        return false;
    }
});

// Image Slider
var myIndex = 0;
carousel();

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
    $('#sect1 article').load('txt/services.md', function(data){
        $(this).html(marked(data));
    });
    $('#sect2 article').load('txt/consult.md', function(data){
        $(this).html(marked(data));
    });
    $('#sect3 article').load('txt/farhang.md', function(data){
        $(this).html(marked(data));
    });
    $('#sect4 article').load('txt/about.md', function(data){
        $(this).html(marked(data));
    });
    $('#sect5 article').load('txt/contact.md', function(data){
        $(this).html(marked(data));
    });
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
    window.open($(this).attr("href"), "Le Concert d'a Coté", i);
});

$(document).ready(function() {
    // ONLINE FORM onclick
    $('#online-link').on('click', function(){
        $('.visa-form').addClass('show');
    });
});