
	<!-- main -->
	<section id="main" class="clearfix home-default">
		<div class="container">
			<!-- banner -->
			<?php 
				if(isset($banner_search)){
					$this->load->view($banner_search);
				}
			?>
			<!-- banner -->
			
			<!-- main-content -->
			<div class="main-content">
				<!-- row -->
				<div class="row">
					<div class="hidden-xs hidden-sm col-md-2 text-center">
						<div class="advertisement">
							<a href="#"><img src="<?php echo base_url ();?>public/images/ads/2.jpg" alt="Images" class="img-responsive"></a>
						</div>
					</div>
					
					<!-- product-list -->
					<?php 
						if(isset($product_list)){
							$this->load->view($product_list);
						}
					?>
					<!-- product-list -->

					<!-- advertisement -->
					<div class="hidden-xs hidden-sm col-md-2">
						<div class="advertisement text-center">
							<a href="#"><img src="<?php echo base_url ();?>public/images/ads/1.jpg" alt="Images" class="img-responsive"></a>
						</div>
					</div><!-- advertisement -->
				</div><!-- row -->
			</div>
			<!-- main-content -->
		</div><!-- container -->
	</section>
	<!-- main -->
	

	
	