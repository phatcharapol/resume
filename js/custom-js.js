
$( document ).ready(function() {

new WOW().init();
// Scroll Animat
$( "a.navlink" ).click(function( event ) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 800);
        // $(this).attr("href").addClass(' animated fadeInLeft delay-2s') ;

        // animate section
        // var section=($(this).attr("href")) ;
        // $(section+' div.container').addClass(' animated fadeIn delay-05s') ; ;
        // console.log($(section+' container')) ;
    });

	
	 // $("section").hide() ;
  //   var content = $("section#home") ;

  //   $('.header-content').prepend(content.show()) ;



// $( "a.navlink" ).click(function( event ) {
//         event.preventDefault();
   
 
//         var cur_content = $('.header-content section')


//         	cur_content.hide() ;

          
//         var section=($(this).attr("href")) ;  
//         console.log("section"+section) ;
//         var content = $("section"+section) ;

//         console.log(section) ;



//        $('.header-content').prepend(content.show()) ;

//         section=section.substring(1) ;

    	
//      	 $('header img').attr('src','asset/'+section+'.jpg') ;

//         // $(section+' div.container').addClass(' animated fadeIn delay-05s') ; ;
//     });


	// smooth scroll
	new SmoothScroll();
	function SmoothScroll(el) {
	  var t = this, h = document.documentElement;
	  el = el || window;
	  t.rAF = false;
	  t.target = 0;
	  t.scroll = 0;
	  t.animate = function() {
	    t.scroll += (t.target - t.scroll) * 0.1;
	    if (Math.abs(t.scroll.toFixed(5) - t.target) <= 0.47131) {
	      cancelAnimationFrame(t.rAF);
	      t.rAF = false;
	    }
	    if (el == window) scrollTo(0, t.scroll);
	    else el.scrollTop = t.scroll;
	    if (t.rAF) t.rAF = requestAnimationFrame(t.animate);
	  };
	  el.onmousewheel = function(e) {
	    e.preventDefault();
	    e.stopPropagation();
	    var scrollEnd = (el == window) ? h.scrollHeight - h.clientHeight : el.scrollHeight - el.clientHeight;
	    t.target += (e.wheelDelta > 0) ? -70 : 70;
	    if (t.target < 0) t.target = 0;
	    if (t.target > scrollEnd) t.target = scrollEnd;
	    if (!t.rAF) t.rAF = requestAnimationFrame(t.animate);
	  };
	  el.onscroll = function() {
	    if (t.rAF) return;
	    t.target = (el == window) ? pageYOffset || h.scrollTop : el.scrollTop;
	    t.scroll = t.target;
	  };
	}



    
});

