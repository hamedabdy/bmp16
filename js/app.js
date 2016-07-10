// Anchor link
$('a[href^=#]').on("click",function(){
    var t= $(this.hash);
    var t=t.length&&t||$('[id='+this.hash.slice(1)+']');
    if(t.length){
        var tOffset=t.offset().top;
        $('html,body').animate({scrollTop:tOffset-20},'slow');
        window.history.replaceState( {}, '', window.location.hostname+'#'+this.hash.slice(1));
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