/**
 * Created by jrossdeutscher on 19.03.16.
 */

function fakelinkFolder(tag) {
    tag.click(function(){
        var url = tag.data('href');
        $.get( url, function( data ) {
            $('#listfolder .canvas').html( data );
            $('#listfolder').css({display:'block'});

            $('#listfolder .canvas .files').each(function(){ fakelinkFiles($(this))});

        });
    });
}

function fakelinkFiles(tag) {
    tag.click(function(){
        var url = tag.data('href');
        $.get( url, function( data ) {
            $('#listfiles .canvas').html( data );
            $('#listfiles').css({display:'block'});
            $('.fancybox').fancybox({
                fitToView: false, // to show videos in their own size
                content: '<span></span>', // create temp content
                scrolling: 'no', // don't show scrolling bars in fancybox
                afterLoad: function () {
                    // get dimensions from data attributes
                    var $mediatype = $(this.element).data('mediatype');
                    if($mediatype=='movie') {
                        var $width = $(this.element).data('width');
                        var $height = $(this.element).data('height');
                        // replace temp content
                        //this.content = "file=" + this.href + " width='" + $width + "' height='" + $height;
                        this.content = '<video width="920" controls><source src="'+this.href+'" type="video/mp4"></video>';
                    } else {
                        this.content = '<img src="'+this.href+'" width="920" >';
                    }
                }
            });

//            $('#listfiles .canvas .files').each(function(){ fakelinkFiles($(this))});

        });
    });
}

$( document ).ready(function() {

    $('.folder').each(function(){ fakelinkFolder($(this))});

});

