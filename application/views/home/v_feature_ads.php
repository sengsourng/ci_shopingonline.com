<?php 
	for($i=1;$i<5;$i++){
		?>
		<!-- featured -->
									<div class="featured">
										<div class="featured-image">
											<a href="details.html"><img src="<?php echo base_url ();?>public/images/featured/<?php echo $i; ?>.jpg" alt="" class="img-respocive"></a>
											<a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
										</div>
										
										<!-- ad-info -->
										<div class="ad-info">
											<h3 class="item-price">$800.00</h3>
											<h4 class="item-title"><a href="#">Apple MacBook Pro with Retina Display</a></h4>
											<div class="item-cat">
												<span><a href="#">Electronics & Gedgets</a></span> 
											</div>
										</div><!-- ad-info -->
										
										<!-- ad-meta -->
										<div class="ad-meta">
											<div class="meta-content">
												<span class="dated"><a href="#">7 Jan 10:10 pm </a></span>
											</div>									
											<!-- item-info-right -->
											<div class="user-option pull-right">
												<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="Dealer"><i class="fa fa-suitcase"></i> </a>											
											</div><!-- item-info-right -->
										</div><!-- ad-meta -->
									</div>
									<!-- featured -->

		<?php
	}
?>

