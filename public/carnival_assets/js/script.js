///////////////////////////////
// Fix the Home Height
///////////////////////////////

$(function() {
    var setHomeBannerHeight = function(){
        var homeHeight= $(window).height();
        $('#window-height').height(homeHeight);
    }

    setHomeBannerHeight();
});



  ///////////////////////////////
  // Header Fixed
  ///////////////////////////////


$(document).ready(function(){

    var menu = $('#navigation');
    var origOffsetY = menu.offset().top;

    function scroll() {
       if ($(window).scrollTop() >= origOffsetY) {
            $('#navigation').addClass('nav-wrap');
            $('#header').addClass('exp');
            //$('.content').addClass('menu-padding');
        } else {
            $('#navigation').removeClass('nav-wrap');
            $('#header').removeClass('exp');
            //$('.content').removeClass('menu-padding');
        }



        if($(window).scrollTop() + $(window).height() == $(document).height()) {
            addPackery();
        }


    }

    document.onscroll = scroll;

});

///////////////////////////////
// showing icon in placeholder
///////////////////////////////

$(document).ready(function() {
	$('.iconified').on('keyup', function() {
        var input = $(this);
        if(input.val().length === 0) {
            input.addClass('empty');
        } else {
            input.removeClass('empty');
        }
    });
});


/*=======================================
            Fancybox
========================================*/

$(document).ready(function() {
    $(".fancybox").fancybox();
});



/*============================================
            File Input Button
================================================*/

$(document).on('change', '.btn-file :file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
});

$(document).ready( function() {
    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) 
            {
                 console.log(input.context.id);
                 var str1 = "#";
                 getIdofSelected = str1.concat(input.context.id);
                 getIdofSelected = getIdofSelected.concat('_btn');
                 console.log(getIdofSelected);
                 $(getIdofSelected).text("File Selected");
                 alert("File Selected Successfully");
            }
        }
        
    });
});