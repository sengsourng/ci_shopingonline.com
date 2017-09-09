<div class="col-md-8">
						<!-- categorys -->
						
					<?php 
						if(isset($top_categories)){
							$this->load->view($top_categories);
						}
					?>
						<!-- category-ad -->	
						
						<!-- featureds -->
						<div class="section featureds">
							<div class="row">
								<div class="col-sm-12">
									<div class="section-title featured-top">
										<h4>Featured Ads</h4>
									</div>
								</div>
							</div>
							
							<!-- featured-slider -->
							<div class="featured-slider">
								<div id="featured-slider" >

									<?php 
										if(isset($feature_ads)){
											$this->load->view($feature_ads);
										}
									?>
									
								</div><!-- featured-slider -->
							</div><!-- #featured-slider -->
						</div><!-- featureds -->

						<!-- ad-section -->						
						<div class="ad-section text-center">
							<a href="#"><img src="<?php echo base_url ();?>public/images/ads/3.jpg" alt="Image" class="img-responsive"></a>
						</div><!-- ad-section -->

						<!-- trending-ads -->
						<?php 
							if(isset($trending_ads)){
								$this->load->view($trending_ads);
							}
						?>

						<!-- trending-ads -->		

						<!-- cta -->
						<div class="section cta text-center">
							<div class="row">


								<!-- single-cta -->
								<div class="col-sm-4">
									<div class="single-cta">
										<!-- cta-icon -->
										<div class="cta-icon icon-secure">
											<img src="<?php echo base_url ();?>public/images/icon/13.png" alt="Icon" class="img-responsive">
										</div><!-- cta-icon -->

										<h4>Secure Trading</h4>
										<p>Duis autem vel eum iriure dolor in hendrerit in</p>
									</div>
								</div>
								<!-- single-cta -->

								<!-- single-cta -->
								<div class="col-sm-4">
									<div class="single-cta">
										<!-- cta-icon -->
										<div class="cta-icon icon-support">
											<img src="<?php echo base_url ();?>public/images/icon/14.png" alt="Icon" class="img-responsive">
										</div><!-- cta-icon -->

										<h4>24/7 Support</h4>
										<p>Duis autem vel eum iriure dolor in hendrerit in</p>
									</div>
								</div><!-- single-cta -->

								<!-- single-cta -->
								<div class="col-sm-4">
									<div class="single-cta">
										<!-- cta-icon -->
										<div class="cta-icon icon-trading">
											<img src="<?php echo base_url ();?>public/images/icon/15.png" alt="Icon" class="img-responsive">
										</div><!-- cta-icon -->

										<h4>Easy Trading</h4>
										<p>Duis autem vel eum iriure dolor in hendrerit in</p>
									</div>
								</div>
								<!-- single-cta -->

							</div><!-- row -->
						</div><!-- cta -->
					</div>