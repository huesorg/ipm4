// IE8 ployfill for GetComputed Style (for Responsive Script below)
if (!window.getComputedStyle) {
    window.getComputedStyle = function(el, pseudo) {
        this.el = el;
        this.getPropertyValue = function(prop) {
            var re = /(\-([a-z]){1})/g;
            if (prop == 'float') prop = 'styleFloat';
            if (re.test(prop)) {
                prop = prop.replace(re, function () {
                    return arguments[2].toUpperCase();
                });
            }
            return el.currentStyle[prop] ? el.currentStyle[prop] : null;
        }
        return this;
    }
}

// as the page loads, call these scripts
jQuery(document).ready(function($) {

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

        if(shown !="AUG2018NEWCLASS"){
            $('#NewClassesFlag').removeClass("hide");
        }

        $("#activities").click(function(){
            localStorage.setItem('isshow', 'AUG2018NEWCLASS');
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

    const greeting = `

.####.########..##.....##
..##..##.....##.###...###
..##..##.....##.####.####
..##..########..##.###.##
..##..##........##.....##
..##..##........##.....##
.####.##........##.....##

uncopyright by Sam Killermann

sam@itspronouncedmetrosexual.com

source: github.com/killermann/ipm4

    `;

    console.log(greeting);

}); /* end of as page load scripts */


/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
*/
(function(w){
	// This fix addresses an iOS bug, so return early if the UA claims it's something else.
	if( !( /iPhone|iPad|iPod/.test( navigator.platform ) && navigator.userAgent.indexOf( "AppleWebKit" ) > -1 ) ){ return; }
    var doc = w.document;
    if( !doc.querySelector ){ return; }
    var meta = doc.querySelector( "meta[name=viewport]" ),
        initialContent = meta && meta.getAttribute( "content" ),
        disabledZoom = initialContent + ",maximum-scale=1",
        enabledZoom = initialContent + ",maximum-scale=10",
        enabled = true,
		x, y, z, aig;
    if( !meta ){ return; }
    function restoreZoom(){
        meta.setAttribute( "content", enabledZoom );
        enabled = true; }
    function disableZoom(){
        meta.setAttribute( "content", disabledZoom );
        enabled = false; }
    function checkTilt( e ){
		aig = e.accelerationIncludingGravity;
		x = Math.abs( aig.x );
		y = Math.abs( aig.y );
		z = Math.abs( aig.z );
		// If portrait orientation and in one of the danger zones
        if( !w.orientation && ( x > 7 || ( ( z > 6 && y < 8 || z < 8 && y > 6 ) && x > 5 ) ) ){
			if( enabled ){ disableZoom(); } }
		else if( !enabled ){ restoreZoom(); } }
	w.addEventListener( "orientationchange", restoreZoom, false );
	w.addEventListener( "devicemotion", checkTilt, false );
})( this );
