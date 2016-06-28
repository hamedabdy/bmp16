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