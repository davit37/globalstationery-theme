   <!-- <ul class="navbar-nav mr-auto">
                    <!-- <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <?php 
                        $menus= wp_get_menu_array('Menu By Categories');

                        foreach($menus as $menu){

                            $menu_title=$menu['title'];
                            $menu_url = $menu['url'];
                            $menu_id= $menu['ID'];
                            echo '<li class="nav-item dropdown">';

                                echo "<a class='nav-link' href='#' id='navbarDropdownMenuLink$menu_id' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>$menu_title</a>";

                                echo "<div class='dropdown-menu' aria-labelledby='navbarDropdown$menu_id'>";
                                
                                    foreach($menu['children'] as $child){
                                        $child_title =$child['title'];
                                        $child_url = $child['url'];
                                        echo "<a class='dropdown-item' href='$child_url'>$child_title</a>";
                                    }
                                echo "</div>";                    }

                ?> -->
                </ul> -->


                <div class='row mt-4'>
			
			<div class='col-12  pl-0 pr-0'>
				<div class='category-slide'  data-flickity-options="" tabindex="0">
				
				
					<?php foreach (get_terms('product-category', array('hide_empty'=> false, 'parent'=>0)) as $cat) :?>
					
					<div class="carousel-cell col">
						<div class='col-inner'>
							<a href="<?php echo get_term_link($cat->term_id); ?>">

								<div class='box box-content'>
										<div class='box-image'>
											<div class='image-cover'>
											<img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" class="slider-img" alt="...">

											</div>

										</div>
										<div class="box-text text-center">
											<div class='box-text-inner'>
												<h5 class='font-weight-bold text-uppercase'><?php echo $cat->name; ?></h5>
												<p class='is-xsmall text-uppercase text-center'><?php echo wp_trim_words( $cat->description, 4, '..' ) ?></p>

											</div>
										</div>
									
								</div>
								
								
							</a>
						</div>
					</div>
					
					<?php  endforeach; ?>

				</div>

			</div>
		</div>