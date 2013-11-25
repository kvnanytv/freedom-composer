<footer>
	<div class="container">
		<div class="wrap">
			<h4>Freedom!</h4>
			<p>Copyright &copy; 2013, by any.TV, All rights reserved.</p>
			<p class="frdm-sm-ico"><i class="fa fa-youtube-play fa-2x"></i><i class="fa fa-facebook fa-2x"></i><i class="fa fa-twitter fa-2x"></i></p>
		</div>
	</div>
</footer>


	<!-- Scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
   


    <script>

    		$( window ).scroll(function() {
    			if(window.scrollY > $('#hero').height()){
    				$('#freedom-nav').addClass('navbar-fixed-top');
    				$('#slide1').addClass('sld1-mrgn-tp');
    			} else {
    				$('#freedom-nav').removeClass('navbar-fixed-top');
    				$('#slide1').removeClass('sld1-mrgn-tp');
    			}
    		});


			$('a#main').click(function(){
		    $('html, body').animate({
		        scrollTop: $( $(this).attr('href') ).offset().top

		    }, 1100);
		    return false;
		});

						$('a.navbar-brand').click(function(){
		    $('html, body').animate({
		        scrollTop: $( $(this).attr('href') ).offset().top

		    }, 1100);
		    return false;
		});

    </script>