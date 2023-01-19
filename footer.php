			<footer>
			
				<div class="footer-brand">

					<img src="<?php bloginfo('template_url');?>/images/kensingtonchelsea_tertiary_white.png" alt="" >

					<a href="/become-a-member/" class="site-button">Become a member</a>
				
				</div>

				<div class="footer-nav">

					<div class="footer-block">

					<?php dynamic_sidebar('footer1') ?>
					
					</div>

					<div class="footer-block">

					<?php dynamic_sidebar('footer2') ?>

					</div>
				
					<div class="footer-block">

					<a href="mailto:enq@theartssocietykensingtonchelsea.com"><?php dynamic_sidebar('footer3') ?></a>
					
					</div>
				
					<div class="footer-block">

					<?php dynamic_sidebar('footer4') ?>
					
					</div>
				
				</div>					
			
								
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>

		<!-- remove this for production -->

		<script src="//localhost:35729/livereload.js"></script>

	</body>

</div><!--#holder-->

</html>