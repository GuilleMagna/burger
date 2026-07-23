jQuery(document).ready(function($) {

});

function notify( message, type ){
    		
    new PNotify({
        title: false,
        text: message,
        type: type,
        delay: 2000,
        addclass: 'stack-bottomleft',
        stack: {"dir1":"up","dir2":"right","push":"top"},
        buttons: { sticker: false }
    });
    
}