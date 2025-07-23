<?php
	
	/**
	 * Template Name: Архив портфолио по категориям
	 * Template Post Type: portfolio
	 */
	 
	include 'header.php';
	 
?>
<!-- SECTION HOME -->
<div id="sp-home"></div>
<section class="home-section home-section-shafy-cupe">
	<div class="container" id="main-divider">
		
		<div class="row row-nav">
			<div class="col-md-12 d-flex justify-content-end col-nav">
				<nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block py-0">
					<div class="container-fluid px-0">
						<!-- <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/logo-dark.svg" class="img-fluid" style="max-width: 225px;"></a> -->
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<nav class="header-nav-top navbar navbar-expand-lg navbar-light d-none d-lg-block">
							<div class="container">
								<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarSupportedContent">
									<ul class="navbar-nav ms-auto align-items-center top-navbar">
										<li class="nav-item me-3">
											<a class="nav-link" href="archive-product-portfolio.html#">
												<div class="d-flex nav-link-inner">
													<div class="nav-li-float-left">
														<img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.svg" />
													</div>
													<div class="nav-li-float-right"><?php echo $address; ?></div>
													<div style="clear: both"></div>
												</div>
											</a>
										</li>
										<li class="nav-item me-3">
											<a class="nav-link" href="archive-product-portfolio.html#">
												<div class="d-flex nav-link-inner">
													<div class="nav-li-float-left">
														<img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg" />
													</div>
													<div class="nav-li-float-right">
														Пн - Вс <br />с 8:00 до 22:00
													</div>
													<div style="clear: both"></div>
												</div>
											</a>
										</li>
										<li class="nav-item me-3">
											<a href="archive-product-portfolio.html#" class="nav-link" data-bs-toggle="modal" data-bs-target="#callback">
												<div class="d-flex nav-link-inner">
													<div class="nav-li-float-left">
														<img src="<?php echo get_template_directory_uri(); ?>/img/ico/callback-ico.svg" />
													</div>
													<div class="nav-li-float-right">
														Обратный звонок
													</div>
													<div style="clear: both"></div>
												</div>
											</a>
										</li>
										<li class="nav-item me-4">
											<a class="top-menu-tel nav-link"  href="tel:89856445775">
												<div class="d-flex nav-link-inner">
													<div class="nav-li-float-left">
														<img src="<?php echo get_template_directory_uri(); ?>/img/ico/mobile-phone-ico.svg" />
													</div>
													<div class="nav-li-float-right phone-number">
														8 (985) 644-57-75
													</div>
													<div style="clear: both"></div>
												</div>
											</a>
										</li>
										<li class="nav-item me-2">
											<a class="nav-link ico-button" href="https://t.me/+79856445775" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.svg" />
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link ico-button" href="https://wa.me/79856445775?web=1&amp;app_absent=1" target="_blank">
												<img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.svg" />
											</a>
										</li>
									</ul>
								</div>
							</div>
						</nav>
					</div>
				</nav>
			</div><!-- /.col-md-12 -->

			<div class="container">
				<div class="row row-bottom-nav d-flex">
					<div class="col-md-12 bottom-nav">
						<nav class="header-nav-bottom navbar navbar-expand-lg navbar-light header-bottom">
							<div class="container bottom-container">
								<a class="navbar-brand" href="#">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/logo.svg" />
								</a>
								<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mobail-header-collapse" aria-controls="mobail-header-collapse" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse" id="mobail-header-collapse">
									<?php
										wp_nav_menu(array(
											'theme_location' => 'mobail-header-collapse',
											'container' => false,
											'menu_class' => '',
											'fallback_cb' => '__return_false',
											'items_wrap' => '
												<ul id="%1$s" class="navbar-nav align-items-center ms-auto mb-2 mb-lg-0 %2$s">%3$s
													<!-- Mobile menu -->
													<li class="nav-item d-lg-none mobile-item">
														<a  class="nav-link active"  href="#" data-bs-toggle="modal" data-bs-target="#callback">
															Вызов замерщика (Бесплатно)
														</a>
													</li>
													<li class="nav-item d-lg-none mobile-item">
														<div>
															<img  src="'.get_template_directory_uri().'/img/ico/location-ico.svg"  style="width: 10px" class="me-1"/>
															<span><?php echo $address; ?></span>
														</div>
														<a  class="nav-link top-menu-tel pt-1 pb-1"  href="tel:89856445775">
															8 (985) 644-57-75
														</a>
														<div  class="mb-2"  style="font-size: 12px;  font-family: Gilroy-Light;  text-transform: none;">
															<img  src="'.get_template_directory_uri().'/img/ico/clock-ico.svg"  style="width: 10px; position: relative; top: 3px"  class="me-1 mb-2"/>
															Ежедневно с 8:00 до 22:00
														</div>
													</li>
													<li class="nav-item d-lg-none pb-4">
														<a class="ico-button pe-2" href="https://wa.me/79856445775?web=1&app_absent=1" target="blank">
															<img src="'.get_template_directory_uri().'/img/ico/whatsapp-ico.svg"/>
														</a>
														<a class="ico-button pe-0" href="https://t.me/+79856445775" target="blank">
															<img src="'.get_template_directory_uri().'/img/ico/telegram-ico.svg" />
														</a>
													</li>
													<!-- End mobile menu -->
												</ul>
											',
											'depth' => 2,
											'walker' => new bootstrap_5_wp_nav_menu_walker()
										));
									?>
								</div><!-- /.collapse -->
							</div><!-- /.container -->
						</nav>
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- ./row -->
	
	
		<div class="container">
			<div class="row">
				<div class="col-lg-7 offset-lg-1">
					<h1>Наши <span>работы</span></h1>
					<ul class="main-list">
						<li>
							<div class="row">
								<div class="col-2 col-md-1 offset-md-1">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/check.png" />
								</div>
								<div class="col-10 col-md-7">
									Замер и дизайн-проект — <span>бесплатно!</span>
								</div>
							</div>
						</li>
						<li>
							<div class="row">
								<div class="col-2 col-md-1 offset-md-1">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/check.png" />
								</div>
								<div class="col-10 col-md-7">
									Доставка и монтаж — <span>бесплатно!</span>
								</div>
							</div>
						</li>
						<li>
							<div class="row">
								<div class="col-2 col-md-1 offset-md-1">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/check.png" />
								</div>
								<div class="col-10 col-md-8">
									Беспроцентная <span>рассрочка&nbsp;на&nbsp;год!</span>
								</div>
							</div>
						</li>
						<li>
							<div class="row">
								<div class="col-2 col-md-1 offset-md-1">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/check.png" />
								</div>
								<div class="col-10 col-md-7">
									Работаем в Москве и Московской области
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-lg-4 px-0">
					<div class="rasschet">
						<h2 class="forma">Рассчитаем точную стоимость шкафа-купе за 15 минут!</h2>
						<p>Опишите шкаф-купе своими словами. При возможности прикрепите изображение</p>
						<form  method="post"  action="<?php echo get_template_directory_uri(); ?>/mails/get_calculate.php"  enctype="multipart/form-data">
							<textarea  type="text"  rows="3"  name="mes"  class="form-control"  placeholder="Например: длина, ширина, глубина, количество дверей, материал дверей, форма, вид шкафа и т.д."  style="height: auto; margin-top: 15px; margin-bottom: 15px"></textarea>
							<p class="input-group custom-file-button">
								<label class="input-group-text" for="inputGroupFile">
							  Прикрепить</label>
								<input  type="file"  name="file[]"  class="form-control"  id="inputGroupFile"  accept=".jpg,.jpeg,.png,.pdf,.heic"  multiple/>
							</p>
							<p>
								<input  type="text"  name="name"  class="form-control"  placeholder="Ваше Имя"/>
							</p>
							<p>
								<input  type="text"  name="tel"  id="phone_mask_3"  class="form-control telMask"  style="margin-top: 15px"  placeholder="Ваш телефон"  required/>
							</p>
							<!--label class="form-check-label" for="exampleCheck11">
								<input type="checkbox" class="form-check-input" id="exampleCheck11" checked>
								Я согласен на обработку моих <a href="#">персональных данных</a>.
							</label-->

							<input type="hidden" id="g-recaptcha-response-order-1-home" name="g-recaptcha-response">
							
							<button  type="submit"  class="btn btn-danger"  style="width: 100%">
								Отправить
							</button>
						</form>
					</div>
				</div>
			</div>
		</div><!-- /.container -->
	</div><!-- /.container #main-divider -->

	<header id="sliding-header" class="shadow">
	  <!-- Header nav bottom -->
		<nav class="header-nav-bottom navbar navbar-expand-lg navbar-light py-1 py-lg-0">
			<div class="container">
				<a class="navbar-brand" href="archive-product-portfolio.html#">
					<img src="<?php echo get_template_directory_uri(); ?>/img/ico/logo-dark-theme.svg" />
				</a>
				<div class="d-lg-none">
					<a  class="top-menu-tel pt-1 pb-0"  style="font-size: 14px"  href="tel:89856445775">
						8 (985) 644-57-75
					</a>
					<div style="font-size: 10px;  font-family: Gilroy-Light;  text-transform: none;">
						<img  src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.svg" style="width: 12px; position: relative; top: -1px"  class="me-1"/>
						Пн-Вс 8:00-22:00
					</div>
				</div>
				<button  class="navbar-toggler"  type="button"  data-bs-toggle="collapse"  data-bs-target="#sliding-header-collapse"  aria-controls="sliding-header-collapse"  aria-expanded="false"  aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="sliding-header-collapse">
					<?php
						wp_nav_menu(array(
							'theme_location' => 'sliding-header-collapse',
							'container' => false,
							'menu_class' => '',
							'fallback_cb' => '__return_false',
							'items_wrap' => '
								<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-lg-0 %2$s">%3$s
									<!-- Mobile menu -->
									<li class="nav-item d-lg-none mobile-item">
										<a  class="nav-link active modal-link"  href="#"  data-bs-toggle="modal"  data-bs-target="#callback">
											Вызов замерщика (Бесплатно)
										</a>
									</li>
									<li  class="nav-item d-lg-none mobile-item mobile-schedule mb-md-2">
										<div class="location-block">
											<img  src="'.get_template_directory_uri().'/img/ico/location-ico.svg"  style="width: 10px" class="me-1"/>
											<span>'.$address.'</span>
										</div>
										<a  class="nav-link top-menu-tel pt-1 pb-1"  href="tel:89856445775">
											8 (985) 644-57-75
										</a>
										<img  src="'.get_template_directory_uri().'/img/ico/clock-ico.svg"  style="width: 10px; position: relative; top: 2px"  class="me-1 mb-2"/>
										Ежедневно с 8:00 до 22:00
									</li>
									<li class="nav-item d-lg-none pt-2 pb-4">
										<a class="ico-button pe-2 text-decoration-none" href="https://wa.me/79856445775?web=1&app_absent=1" target="blank">
											<img src="'.get_template_directory_uri().'/img/ico/whatsapp-ico.svg" />
										</a>
										<a class="ico-button pe-0 text-decoration-none" href="https://t.me/+79856445775" target="blank">
											<img src="'.get_template_directory_uri().'/img/ico/telegram-ico.svg" />
										</a>
									</li>
									<!-- End mobile menu -->
								</ul>
							',
							'depth' => 2,
							'walker' => new bootstrap_5_wp_nav_menu_walker()
						));
					?>
				</div>
			</div>
		</nav>
	  <!-- /Header nav bottom -->
	</header>
</section>
<!-- END SECTION HOME -->


<!-- Portfolio -->
<?php /*
<section class="portfolio-section pt-4 bg-white" style="padding-bottom: 145px;">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="breadcrumbs">
					<nav class="woocommerce-breadcrumb" itemprop="breadcrumb">
						<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/breadcrumbs-ico.svg"></a> / <a href="#">Наши работы</a>
					</nav>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="row">
					<div class="col text-center">
						<h2 class="section-title">Наши работы</h2>
						<svg class="mb-5" width="62" height="14" viewBox="0 0 62 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect x="48" width="14" height="14" rx="3" fill="#DC3545"></rect>
							<rect x="24" width="14" height="14" rx="3" fill="#DC3545"></rect>
							<rect width="14" height="14" rx="3" fill="#DC3545"></rect>
						</svg>
					</div>
				</div>
				<div class="row">
					<div class="col text-center mb-4 mb-md-5">
						<div class="nav-scroller mb-0" style="text-transform: uppercase; font-family: 'HelveticaNeueCyr-Light'; font-weight: bold;">
							<ul class="nav justify-content-md-center d-flex m-auto">
								<li class="nav-item">
									<a class="nav-link" href="https://garantshkaf.ru/portfolio/">Все</a>
								</li>
								<?php
									$obj = get_queried_object();
									$current_category_name = $obj->name;
									
									$args = [
										'taxonomy' => [ 'portfolio-cat' ],
										'orderby'  		=> 'slug',
										'order'    		=> 'ASC',
									];
									
									$terms = get_terms( $args );
									
									foreach( $terms as $term ) { ?>
										<li class="nav-item">
											<a class="nav-link<?php if ( $current_category_name == $term->name ) { echo ' active'; } ?>" href="<?php echo get_term_link( $term->term_id ); ?>"><?php echo $term->name; ?></a>
										</li>
									<?php }
								?>
							</ul>
						</div>
						<div class="d-md-none text-center mb-4">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/left-right-finger.svg" style="opacity: 1; max-width: 25px;">
						</div>
					</div>
				</div>
				<div class="row">
					<?php	
						$obj = get_queried_object();
						$portfolio_cat = $obj->slug;
						$args = [
							'post_type'      => 'portfolio',
							'numberposts' 	 => 999,
							'posts_per_page' => 999,
							'portfolio-cat'  => $portfolio_cat
						];
						
						$query = new WP_Query( $args );
						$count = 1;
						while( $query->have_posts() ) : $query->the_post(); ?>
							<div class="col-md-4">
								<div id="carouselExampleIndicators<?php echo $post->ID; ?>" class="carousel slide mb-4" data-bs-ride="carousel" data-bs-interval="999999999">
									<div class="carousel-indicators" style="bottom: 5%;">
										<?php
											$count2 = 0;
											for ( $i=1; $i<=9; $i++ ) {
												if ( get_post_meta($post->ID, '_img-'.$i ) ) { ?>
													<button type="button" data-bs-target="#carouselExampleIndicators<?php echo $post->ID; ?>" data-bs-slide-to="<?php echo $i-1; ?>" <?php if ( $i == 1 ) echo ' class="active"'; ?> aria-current="true" aria-label="Slide <?php echo $i; ?>"></button>
												<?php $count2 = $count2 + 1; }
											}
										?>
									</div>
									<div class="carousel-inner rounded">
										<?php
											$count2 = 0;
											for ( $i=1; $i<=9; $i++ ) {
												if ( get_post_meta($post->ID, '_img-'.$i ) ) { ?>
													<div class="carousel-item <?php if ( $i == 1 ) echo ' active'; ?>" data-bs-interval="999999999">
														<a onClick="galleryOn('gallery-<?php echo $post->ID; ?>','img-<?php echo $post->ID; ?>-<?php echo $count2; ?>');">	
															<div class="single-product-img approximation">
																<img src="<?php echo get_post_meta($post->ID, '_img-'.$i )[0]; ?>" class="shadow rounded" alt="..." loading="lazy">
																<div class="magnifier"></div>
															</div>
														</a>
													</div>
												<?php $count2 = $count2 + 1; }
											}
										?>	
									</div>
									<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators<?php echo $post->ID; ?>"  data-bs-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="visually-hidden">Previous</span>
									</button>
									<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators<?php echo $post->ID; ?>"  data-bs-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="visually-hidden">Next</span>
									</button>
								</div>
							</div>
						
						<?php $count = $count + 1; endwhile;

						wp_reset_postdata();
					?>
					
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Portfolio -->

<!-- Gallery wrapper-->
<div id="galleryWrapper" style="background: rgba(0,0,0,0.85); display: none; position: fixed; top: 0; bottom: 0; left: 0; right: 0; z-index: 9999;">
	
	
	<?php
		// параметры по умолчанию
		$posts = get_posts( array(
			'numberposts' => 999,
			'orderby'     => 'date',
			'order'       => 'DESC',
			'post_type'   => 'portfolio',
			//'post__not_in' => array( 42 ) // Выводим все категории портфолио кроме Разное
		) );
		
		foreach( $posts as $post ) { setup_postdata($post); ?>

			<div id="gallery-<?php echo $post->ID; ?>" class="carousel slide" data-bs-ride="carousel" style="display: none; position: fixed; top: 0; height: 100%; width: 100%;">
				<div class="carousel-indicators">
					<?php
						
						/*
						$images = get_post_gallery_images();
						$count2 = 0;
						foreach ( $images as $image ) {
							
							
							if ( $count2 == 0 ) { ?>
								
								<button id="ind-<?php echo $post->ID; ?>-<?php echo $count2; ?>" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide-to="<?php echo $count2; ?>" aria-label="Slide 3"></button>
								
							<?php $count2 = $count2 + 1; } else { ?>
								
								<button id="ind-<?php echo $post->ID; ?>-<?php echo $count2; ?>" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide-to="<?php echo $count2; ?>" aria-label="Slide 3"></button>
								
							<?php $count2 = $count2 + 1; }
						}
						
						
						
						
						
						
						
						$count2 = 0;
						for ( $i=1; $i<=9; $i++ ) {
							if ( get_post_meta($post->ID, '_img-'.$i ) ) {
								if ( $count2 == 0 ) { ?>
									
									<button id="ind-<?php echo $post->ID; ?>-<?php echo $count2; ?>" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide-to="<?php echo $count2; ?>" aria-label="Slide 3"></button>
									
								<?php $count2 = $count2 + 1; } else { ?>
									
									<button id="ind-<?php echo $post->ID; ?>-<?php echo $count2; ?>" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide-to="<?php echo $count2; ?>" aria-label="Slide 3"></button>
									
								<?php $count2 = $count2 + 1; }
							}
						}
					?>
	
				</div>
				<div class="carousel-inner h-100">
					<?php
						
						/*
						$images = get_post_gallery_images();
						$count2 = 0;
						foreach ( $images as $image ) { ?>
							<div id="img-<?php echo $post->ID; ?>-<?php echo $count2; ?>" class="carousel-item h-100">
								<div class="row align-items-center h-100">
									<div class="col text-center">
										<img src="<?php echo $image; ?>" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
									</div>
								</div>
							</div>
							
						<?php  $count2 = $count2 + 1; } 
						
						
						$count2 = 0;
						for ( $i=1; $i<=9; $i++ ) {
							if ( get_post_meta($post->ID, '_img-'.$i ) ) { ?>
								<div id="img-<?php echo $post->ID; ?>-<?php echo $count2; ?>" class="carousel-item h-100 <?php // if ( $i == 1 ) echo ' active'; ?>" data-bs-interval="999999999">
									<div class="row align-items-center h-100">
										<div class="col text-center">
											<img src="<?php echo get_post_meta($post->ID, '_img-'.$i )[0]; ?>" class="img-fluid" style="max-width: 90vw; max-height: 90vh;" alt="...">
										</div>
									</div>
								</div>
							<?php $count2 = $count2 + 1; }
						}
				
					?>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		<?php } wp_reset_postdata();
	?>

	<!-- Кнопка закрытия галереи -->
	<button type="button" onClick="closeGallery();" class="btn-close btn-close-white" style="position: fixed; top: 25px; right: 25px; z-index: 99999;" aria-label="Close"></button>
</div>


<script>
	function galleryOn(gal, img) {
		var gallery = gal; // Получаем ID галереи
		var image = img; // Получаем ID картинки
		// Открываем обертку галереи
		document.getElementById('galleryWrapper').style.display = 'block';
		
		// Проверяем какие данные передаются для открытия галереи и картинки
		//alert(gallery+' '+image); 
		
		
		<?php // Открываем галерею
			$posts = get_posts( array(
				'numberposts' => 999,
				'orderby'     => 'date',
				'order'       => 'DESC',
				'post_type'   => 'portfolio',
				//'post__not_in' => array( 42 ) // Выводим все категории портфолио кроме Разное
			) );
			
			foreach( $posts as $post ) { setup_postdata($post);
				
				echo 'if ( gallery == "gallery-'.$post->ID.'" ) { document.getElementById("gallery-'.$post->ID.'").style.display = "block"; }';

			} wp_reset_postdata();
		?>
		
		
		<?php // Открываем изображения
			$posts = get_posts( array(
				'numberposts' => 999,
				'orderby'     => 'date',
				'order'       => 'DESC',
				'post_type'   => 'portfolio',
				//'post__not_in' => array( 42 ) // Выводим все категории портфолио кроме Разное
			) );
			
			foreach( $posts as $post ) {
				setup_postdata( $post );
				$count2 = 0;
				for ( $i=1; $i<=9; $i++ ) {
					echo 'if ( image == "img-'.$post->ID.'-'.$count2.'" ) { document.getElementById("img-'.$post->ID.'-'.$count2.'").classList.add("active"); document.getElementById("ind-'.$post->ID.'-'.$count2.'").classList.add("active"); } ';
					$count2 = $count2 + 1;
				}
			} wp_reset_postdata();
		?>
	}
	

	// Кнопка закрытия галереи
	function closeGallery() {
		// Закрываем обертку галереи
		document.getElementById('galleryWrapper').style.display = 'none';
		
		<?php // Открываем галерею
			$posts = get_posts( array(
				'numberposts' => 999,
				'orderby'     => 'date',
				'order'       => 'DESC',
				'post_type'   => 'portfolio',
				//'post__not_in' => array( 42 ) // Выводим все категории портфолио кроме Разное
			) );
			
			foreach( $posts as $post ) { setup_postdata($post);
				
				echo 'document.getElementById("gallery-'.$post->ID.'").style.display = "none";';

			} wp_reset_postdata();
		?>
		
		<?php // Закрываем изображения
		$posts = get_posts( array(
			'numberposts' => 999,
			'orderby'     => 'date',
			'order'       => 'DESC',
			'post_type'   => 'portfolio',
			//'post__not_in' => array( 42 ) // Выводим все категории портфолио кроме Разное
		) );
		
		/*
		foreach( $posts as $post ) { setup_postdata($post);
			$images = get_post_gallery_images();
			$count2 = 0;
			foreach ( $images as $image ) {

				echo 'document.getElementById("img-'.$post->ID.'-'.$count2.'").classList.remove("active"); document.getElementById("ind-'.$post->ID.'-'.$count2.'").classList.remove("active");';
				
				$count2 = $count2 + 1;
			}
		} wp_reset_postdata();
		
		
		foreach( $posts as $post ) {
			setup_postdata( $post );
			$count2 = 0;
			for ( $i=1; $i<=9; $i++ ) {
				echo 'document.getElementById("img-'.$post->ID.'-'.$count2.'").classList.remove("active"); document.getElementById("ind-'.$post->ID.'-'.$count2.'").classList.remove("active");';
				
				$count2 = $count2 + 1;
			}
		} wp_reset_postdata(); ?>
		
	}
</script> 
*/ ?>
		
<?php
// Получаем текущую категорию
$obj = get_queried_object();
$portfolio_cat = $obj->slug;

// Получаем записи портфолио для текущей категории
$args = [
	'post_type'      => 'portfolio',
	'numberposts'    => 999,
	'posts_per_page' => 999,
	'portfolio-cat'  => $portfolio_cat
];

$query = new WP_Query($args);
$all_images = []; // Массив всех изображений
$portfolio_data = []; // Данные портфолио
$image_index = 0; // Глобальный индекс изображений

// Собираем все изображения в один массив
while ($query->have_posts()):
	$query->the_post();
	$portfolio_images = [];

	// Собираем изображения текущего портфолио
	for ($i = 1; $i <= 9; $i++) {
		$img_url = get_post_meta($post->ID, '_img-' . $i, true);
		if ($img_url) {
			$portfolio_images[] = $img_url;
			$all_images[] = [
				'url' => $img_url,
				'portfolio_id' => $post->ID,
				'portfolio_title' => get_the_title()
			];
		}
	}

	// Сохраняем данные портфолио
	if (!empty($portfolio_images)) {
		$portfolio_data[] = [
			'id' => $post->ID,
			'title' => get_the_title(),
			'images' => $portfolio_images,
			'start_index' => $image_index // С какого индекса начинается в общем массиве
		];
		$image_index += count($portfolio_images);
	}
endwhile;
wp_reset_postdata();
?>

<!-- Portfolio -->
<section class="portfolio-section pt-4 bg-white" style="padding-bottom: 145px;">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="breadcrumbs">
					<nav class="woocommerce-breadcrumb" itemprop="breadcrumb">
						<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/breadcrumbs-ico.svg"></a> / <a href="#">Наши работы</a>
					</nav>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="row">
					<div class="col text-center">
						<h2 class="section-title">Наши работы</h2>
						<svg class="mb-5" width="62" height="14" viewBox="0 0 62 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect x="48" width="14" height="14" rx="3" fill="#DC3545"></rect>
							<rect x="24" width="14" height="14" rx="3" fill="#DC3545"></rect>
							<rect width="14" height="14" rx="3" fill="#DC3545"></rect>
						</svg>
					</div>
				</div>
				<div class="row">
					<div class="col text-center mb-4 mb-md-5">
						<div class="nav-scroller mb-0" style="text-transform: uppercase; font-family: 'HelveticaNeueCyr-Light'; font-weight: bold;">
							<ul class="nav justify-content-md-center d-flex m-auto">
								<li class="nav-item">
									<a class="nav-link" href="https://garantshkaf.ru/portfolio/">Все</a>
								</li>
								<?php
									$obj = get_queried_object();
									$current_category_name = $obj->name;
									
									$args = [
										'taxonomy' => ['portfolio-cat'],
										'orderby'  => 'slug',
										'order'    => 'ASC',
									];
									
									$terms = get_terms($args);
									
									foreach($terms as $term) { ?>
										<li class="nav-item">
											<a class="nav-link<?php if ($current_category_name == $term->name) { echo ' active'; } ?>" href="<?php echo get_term_link($term->term_id); ?>"><?php echo $term->name; ?></a>
										</li>
									<?php }
								?>
							</ul>
						</div>
						<div class="d-md-none text-center mb-4">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/left-right-finger.svg" style="opacity: 1; max-width: 25px;">
						</div>
					</div>
				</div>
				<div class="row">
					<?php foreach ($portfolio_data as $portfolio): ?>
						<div class="col-md-4">
							<?php $image_count = count($portfolio['images']); ?>

							<?php if ($image_count > 1): ?>
								<!-- Карусель для нескольких изображений -->
								<div id="carousel-<?php echo $portfolio['id']; ?>" class="carousel slide mb-4" data-bs-ride="carousel"
									data-bs-interval="999999999">
									<!-- Индикаторы показываем только если больше 1 изображения -->
									<div class="carousel-indicators" style="bottom: 5%;">
										<?php for ($i = 0; $i < $image_count; $i++): ?>
											<button type="button" data-bs-target="#carousel-<?php echo $portfolio['id']; ?>"
												data-bs-slide-to="<?php echo $i; ?>" <?php echo $i === 0 ? 'class="active"' : ''; ?>
												aria-label="Slide <?php echo $i + 1; ?>"></button>
										<?php endfor; ?>
									</div>

									<div class="carousel-inner rounded">
										<?php foreach ($portfolio['images'] as $index => $img_url): ?>
											<div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>" data-bs-interval="999999999">
												<a href="#" onclick="openGallery(<?php echo $portfolio['start_index'] + $index; ?>); return false;">
													<div class="single-product-img approximation position-relative">
														<img src="<?php echo $img_url; ?>" class="shadow rounded" alt="..." loading="lazy">
														<div class="magnifier"></div>
													</div>
												</a>
											</div>
										<?php endforeach; ?>
									</div>

									<button class="carousel-control-prev" type="button"
										data-bs-target="#carousel-<?php echo $portfolio['id']; ?>" data-bs-slide="prev">
										<span class="carousel-control-prev-icon"></span>
									</button>
									<button class="carousel-control-next" type="button"
										data-bs-target="#carousel-<?php echo $portfolio['id']; ?>" data-bs-slide="next">
										<span class="carousel-control-next-icon"></span>
									</button>
								</div>
							<?php else: ?>
								<!-- Одно изображение без карусели и индикаторов -->
								<div class="mb-4">
									<a href="#" onclick="openGallery(<?php echo $portfolio['start_index']; ?>); return false;">
										<div class="single-product-img approximation position-relative">
											<img src="<?php echo $portfolio['images'][0]; ?>" class="shadow rounded" alt="..." loading="lazy">
											<div class="magnifier"></div>
										</div>
									</a>
								</div>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Portfolio -->

<!-- Единое модальное окно для всех изображений -->
<div id="galleryModal"
	style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.9); z-index: 9999;">
	<div id="mainGallery" class="carousel slide h-100" data-bs-ride="carousel" data-bs-interval="999999999">
		<div class="carousel-indicators">
			<?php foreach ($all_images as $index => $image): ?>
				<button type="button" data-bs-target="#mainGallery" data-bs-slide-to="<?php echo $index; ?>"
					aria-label="Slide <?php echo $index + 1; ?>"></button>
			<?php endforeach; ?>
		</div>

		<div class="carousel-inner h-100">
			<?php foreach ($all_images as $index => $image): ?>
				<div class="carousel-item h-100" data-bs-interval="999999999">
					<div class="d-flex align-items-center justify-content-center h-100">
						<img src="<?php echo $image['url']; ?>" class="img-fluid" style="max-width: 90vw; max-height: 90vh;"
							alt="<?php echo $image['portfolio_title']; ?>">
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<button class="carousel-control-prev" type="button" data-bs-target="#mainGallery" data-bs-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#mainGallery" data-bs-slide="next">
			<span class="carousel-control-next-icon"></span>
		</button>
	</div>

	<!-- Кнопка закрытия -->
	<button type="button" onclick="closeGallery();" class="btn-close btn-close-white"
		style="position: fixed; top: 25px; right: 25px; z-index: 99999;"></button>
</div>

<script>
	let galleryCarousel = null;

	// Простые функции для управления галереей
	function openGallery(startIndex) {
		const modal = document.getElementById('galleryModal');
		const carouselElement = document.getElementById('mainGallery');

		// Показываем модальное окно
		modal.style.display = 'block';

		// Уничтожаем предыдущий экземпляр карусели если есть
		if (galleryCarousel) {
			galleryCarousel.dispose();
		}

		// Сначала устанавливаем активные элементы
		updateActiveIndicator(startIndex);

		// Создаем новый экземпляр карусели
		galleryCarousel = new bootstrap.Carousel(carouselElement, {
			interval: false,
			wrap: true
		});
	}

	function closeGallery() {
		const modal = document.getElementById('galleryModal');
		modal.style.display = 'none';

		// Уничтожаем карусель при закрытии
		if (galleryCarousel) {
			galleryCarousel.dispose();
			galleryCarousel = null;
		}
	}

	function updateActiveIndicator(index) {
		// Убираем active у всех индикаторов
		document.querySelectorAll('#mainGallery .carousel-indicators button').forEach(btn => {
			btn.classList.remove('active');
		});

		// Убираем active у всех слайдов
		document.querySelectorAll('#mainGallery .carousel-item').forEach(item => {
			item.classList.remove('active');
		});

		// Добавляем active к нужным элементам
		const indicators = document.querySelectorAll('#mainGallery .carousel-indicators button');
		const slides = document.querySelectorAll('#mainGallery .carousel-item');

		if (indicators[index]) indicators[index].classList.add('active');
		if (slides[index]) slides[index].classList.add('active');
	}

	// Закрытие по клику на фон
	document.getElementById('galleryModal').addEventListener('click', function (e) {
		if (e.target === this) {
			closeGallery();
		}
	});

	// Закрытие по ESC и навигация стрелками
	document.addEventListener('keydown', function (e) {
		if (e.key === 'Escape') {
			closeGallery();
		}

		// Навигация стрелками только если модальное окно открыто
		if (document.getElementById('galleryModal').style.display === 'block' && galleryCarousel) {
			if (e.key === 'ArrowLeft') {
				e.preventDefault();
				galleryCarousel.prev();
			} else if (e.key === 'ArrowRight') {
				e.preventDefault();
				galleryCarousel.next();
			}
		}
	});
</script>
		
<div id="sp-contacts"></div>
<footer id="footer">
	<div  class="container" style="max-width: 1700px; border-right: 1px solid rgba(153, 153, 153, 0.9);  border-left: 1px solid rgba(153, 153, 153, 0.9);">
		<div class="row">
			<div class="col-md-3 offset-md-1">
				<img src="<?php echo get_template_directory_uri(); ?>/img/ico/logo.png" class="img-fluid logo" />
				<p><span>Время работы:</span></p>
				<p>Пн. - Вс. с 8:00 до 22:00</p>
				<p><span>Адрес производства:</span></p>
				<p>Московская обл., гор. Лобня, ул. Промышленная, д. 4Д.</p>
			</div>
			<div class="col-md-4 offset-md-1">
				<h2>КАРТА САЙТА</h2>
				<div class="row">
					<div class="col-md-6">
						<ul>
							<li><a href="/">Главная</a></li>
							<li><a href="#sp-video">Видеопрезентация</a></li>
							<li><a href="/portfolio" class="active">Наши работы</a></li>
							<li><a href="#sp-about">О нас</a></li>
							<li><a href="#sp-testimonials">Отзывы</a></li>
							<li><a href="#sp-kak-zakazat">Как заказать</a></li>
							<li><a href="#sp-faq">Частые вопросы</a></li>
							<li><a href="#sp-contacts">Контакты</a></li>
						</ul>
					</div>
					<div class="col-md-6">
						<ul>
							<li><a href="/">Корпусная мебель</a></li>
							<li><a href="/shkafy-cupe">Шкафы-купе</a></li>
							<li><a href="/dveri-cupe">Двери-купе</a></li>
							<li><a href="/shkafy-raspashnye">Шкафы распашные</a></li>
							<li><a href="/garderobnye">Гардеробные</a></li>
							<li><a href="/rabochie-zony">Рабочие зоны</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-2">
				<h2>Контакты</h2>
				<p><span style="padding-top: 0px">Телефоны:</span></p>
				<a href="tel:89856445775">8 (985) 644-57-75</a>
				<!--a href="tel:89646443123">8 (964) 644-31-23</a-->
				<p><span>E-mail:</span></p>
				<a href="mailto:garantshkaf@mail.ru">garantshkaf@mail.ru</a>
				<p><span>Соц. сети:</span></p>
				<div class="social">
					<a  href="https://wa.me/79856445775?web=1&amp;app_absent=1"  target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.svg" class="ico-button"/>
					</a>
					<!-- a href="https://vk.com/mebelnaya_fabrika_garantshkaf" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico/vk.png" class="img-fluid" />
					</a -->
					<a href="https://t.me/+79856445775" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.svg" class="ico-button" />
					</a>
					<!-- a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico/telega.png" class="img-fluid" />
					</a -->
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col p-0 mb-3">
				<hr class="" />
			</div>
		</div>
		<div id="footer1" class="row align-items-center">
			<div class="col">
				<p class="font-weight-bold text-center mb-0">©<?php echo date('Y'); ?>г. Мебельная фабрика «Гарантшкаф»</p>
				<p class="font-weight-light m-0 text-center fs-16">Создание и продвижение: <a href="https://site100.ru" target="_blank">site<span class="text-danger">100</span>.ru</a></p>
			</div>
		</div>
	</div>
</footer>

<?php include 'footer.php'; ?>