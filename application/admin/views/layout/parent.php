<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.0
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

	<?php $this->load->view('layout/header'); ?>

	<body>
		<!-- Start Page Loading -->
			<div id="loader-wrapper">
				<div id="loader"></div>        
				<div class="loader-section section-left"></div>
				<div class="loader-section section-right"></div>
			</div>
		<!-- End Page Loading -->

		<!-- START HEADER -->
		
		<?php $this->load->view('layout/menu_bar');?>
		
		<!-- END HEADER -->

		<!-- START MAIN -->
			<div id="main">
				<!-- START WRAPPER -->
					<div class="wrapper">
						<!-- START LEFT SIDEBAR NAV-->
						
							<?php $this->load->view('layout/side_bar_left');?>
							
						<!-- END LEFT SIDEBAR NAV-->
		  
						<!-- START CONTENT -->
						
							<?php $this->load->view('layout/'.$child);?>
							
						<!-- END CONTENT -->
						
						<!-- START RIGHT SIDEBAR NAV-->
						
							<?php $this->load->view('layout/side_bar_right');?>
							
						<!-- LEFT RIGHT SIDEBAR NAV-->					
					</div>
				<!-- END WRAPPER -->
			</div>
		<!-- END MAIN -->
		
		<!-- START FOOTER -->
			
			<?php $this->load->view('layout/footer');?>
			
		<!-- END FOOTER -->
	</body>
</html>