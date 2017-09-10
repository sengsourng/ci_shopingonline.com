				<div class="banner-form banner-form-full">
					<form action="<?php echo site_url(); ?>Categories/listsearch" method="POST">
						<!-- category-change -->
						<!-- <div class="dropdown category-dropdown"> -->
						<select class="dropdown category-dropdown" name="txtcategory">
						  <?php 
						  foreach ($category as $cat) {
						  	?>
						  	<option value="<?php echo $cat['cat_id']; ?>"><?php echo $cat['cat_name']; ?></option>
						  	<?php
						  }

						  ?>
						  
						</select>

						<!-- </div> -->
						<!-- category-change -->

						<!-- language-dropdown -->
						<div class="dropdown category-dropdown language-dropdown ">						
							<a data-toggle="dropdown" href="#"><span class="change-text">United Kingdom</span> <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu  language-change">
								<li><a href="#">United Kingdom</a></li>
								<li><a href="#">United States</a></li>
								<li><a href="#">China</a></li>
								<li><a href="#">Russia</a></li>
							</ul>								
						</div><!-- language-dropdown -->
					
						<input type="text" class="form-control" placeholder="Type Your key word">
						<button type="submit" class="form-control" value="Search">Search</button>
					</form>
				</div>