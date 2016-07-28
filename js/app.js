// Anchor link
$('a[href^="#"]').on("click",function(){
    var t= $(this.hash);
    var t=t.length&&t||$('[id='+this.hash.slice(1)+']');
    if(t.length){
        var tOffset=t.offset().top;
        $('html,body').animate({scrollTop:tOffset-20},'slow');
        window.history.replaceState( {}, '', '#'+this.hash.slice(1));
        return false;
    }
});

$(document).ready(function(){
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
});


$(document).on('scroll', function() {
    var h = $(this).scrollTop();
    if(h == 0) {
        $('div.totop').css('display', 'none');
    }
    if(h > 0) {
        $('div.totop').css('display', 'block');
    }
});

$( '#sendmailform' ).submit(function(e) {
    e.preventDefault();
    // $( '#submit:hover' ).css( 'cursor', 'wait' );
    // $( '#submit' ).prop( 'disabled', 'true' );
    $.post( "/sendmail.php", $(this).serialize(), function(response) {
        // $( '#alertmsg' ).css( 'display', 'block' );
        $( '#alertmsg' ).html( response );
        $( '#alertmsg' ).addClass( 'hidealert' );
        setTimeout(function() {
            $( '.hidealert' ).removeClass( 'hidealert' );
            $( '#sendmailform' )[0].reset();
        }, 7300);
        // $( '#submit:hover' ).css( 'cursor', 'pointer' );
        // $( '#submit' ).removeAttr( 'disabled' );
    });
});