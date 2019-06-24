//@prepros-prepend intersection-observer.js
//@prepros-prepend lozad.min.js

// as the page loads, call these scripts
jQuery(document).ready(function($) {

    // Initialize lozad

    lozad(".lazy-load", {
    	rootMargin: "300px 0px",
        loaded: function (el) {
			el.classList.add("is-loaded");
		}
    }).observe();

    // FIRST TIME POPUP

    $(function() {
        var shownMOOC= localStorage.getItem('isshowMOOC');

        if(shownMOOC !="t"){
            $('#ipmNews').removeClass("hide");
        }

        $(".hideIpmNews").click(function(){
            localStorage.setItem('isshowMOOC', 't');
            $("#ipmNews").toggleClass("hide");
        });

        $("#yesMOOC").click(function(){
            localStorage.setItem('isshowMOOC', 't');
            $("#yesMOOC-email").toggleClass("hide");
            $("#MOOC-question").toggleClass("hide");
        });

        $("#noMOOC").click(function(){
            localStorage.setItem('isshowMOOC', 't');
            $("#noMOOC-response").toggleClass("hide");
            $("#MOOC-question").toggleClass("hide");
        })

    });

    // NEW ITEMS MENU FLAGS

    $(function() {
        var shown= localStorage.getItem('isshow');

        if(shown !="JUN2019NEWCLASS"){
            $('#NewClassesFlag').removeClass("hide");
        }

        $("#activities").click(function(){
            localStorage.setItem('isshow', 'JUN2019NEWCLASS');
            $("#NewClassesFlag").addClass("hide");
        });

        var shownPodcast= localStorage.getItem('isShownPodcast');

        if(shownPodcast !="DEC2018NEWPODCAST"){
            $('#NewPodcastFlag').removeClass("hide");
        }

        $("#videos").click(function(){
            localStorage.setItem('isShownPodcast', 'DEC2018NEWPODCAST');
            $(".new-flag").addClass("hide");
        });
    });

    // For Sticky Post Title

    $(function() {
        //caches a jQuery object containing the header element
        var stickyPostTitle = $("#stickyPostTitle");
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                stickyPostTitle.removeClass("unactiveSticky").addClass("activateSticky");
            } else {
                stickyPostTitle.removeClass("activateSticky").addClass("unactiveSticky");
            }
        });
    });

    // Showing and Hiding the Menus

    $(".mainNavToggle").click(function(){
        $("#mainNav").toggleClass("is-visible");
        $("#mask").toggleClass("is-visible");
    });

    $(".supportNavToggle").click(function(){
        $("#supportNav").toggleClass("is-visible");
        $("#mask").toggleClass("is-visible");
    });

    $("#mask").click(function(){
        $("#mainNav").removeClass("is-visible");
        $("#mask").removeClass("is-visible");
        $("#supportNav").removeClass("is-visible");
    });

    // Simple Accordion Lists https://uniondesign.ca/simple-accordion-without-jquery-ui/

    $('.accordion').find('.accordion-toggle').click(function(){

      //Expand or collapse this panel
      $(this).next().slideToggle('fast');

      //Hide the other panels
      $(".accordion-content").not($(this).next()).slideUp('fast');

    });

}); /* end of as page load scripts */
