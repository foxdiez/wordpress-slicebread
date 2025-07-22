<?php
	// Enqueue parent theme styles
	function enqueue_parent_styles() {
		wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	}
	add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

	function woocommerce_block_edits() {
		// Declaring support for block templates & FSE features
		add_theme_support( 'full-site-editing' );

		// WooCommerce block support
		add_theme_support( 'woocommerce' );
		add_theme_support( 'woocommerce-block-templates' );
	}
	add_action( 'after_setup_theme', 'woocommerce_block_edits' );

	function enqueue_custom_swiper_assets() {
		wp_enqueue_style('swiper-bundle', get_stylesheet_directory_uri() . '/assets/swiper-bundle.min.css', array(), '1.0' );
		wp_enqueue_script('swiper-bundle', get_stylesheet_directory_uri() . '/assets/swiper-bundle.min.js', array(), '1.0');
	}
	add_action( 'wp_enqueue_scripts', 'enqueue_custom_swiper_assets' );

	function custom_product_gallery() {
		if ( is_product() ) {
			ob_start();
			include get_stylesheet_directory() . '/template-parts/custom-product-gallery.php';
			return ob_get_clean();
		}
	}
	add_shortcode('custom_product_gallery', 'custom_product_gallery');

	function enqueue_custom_product_gallery() {
		if ( is_product() ) {
			wp_enqueue_style('custom-product-gallery', get_stylesheet_directory_uri() . '/assets/css/custom-product-gallery.css', array(), '1.0' );
			wp_enqueue_script('custom-product-gallery', get_stylesheet_directory_uri() . '/assets/js/custom-product-gallery.js', array(), '1.0', true);
		}
	}
	add_action( 'wp_enqueue_scripts', 'enqueue_custom_product_gallery' );

	function custom_stock_status_shortcode() {
		global $product;

		if ( ! $product ) {
			return '';
		}

		$stock_status = $product->get_stock_status();
		$image_divider = wp_get_attachment_image( 22, 'medium');
		$image_stock = wp_get_attachment_image( 23, 'medium');

		if ($stock_status === 'instock') {
			return '
				'. $image_divider .'
				<div class="product-stock-status uppercase in-stock">
					' . $image_stock . '
					<p>
						In stock
					</p>
				</div>
			';
		} elseif ($stock_status === 'onbackorder') {
			return '
				'. $image_divider .'
				<div class="product-stock-status uppercase backorder">
					' . $image_stock . '
					<p>
						Available on backorder
					</p>	
				</div>
			';
		} else {
			return '
				'. $image_divider .'
				<div class="product-stock-status uppercase out-of-stock">
					' . $image_stock . '
					<p>
						Out of stock
					</p>
				</div>
			';
		}
	}
	add_shortcode( 'custom_stock_status_shortcode', 'custom_stock_status_shortcode' );

	function custom_product_description() {
		global $product;

		if ( ! $product ) {
			return '';
		}

		return '
			<div class="artistic-description d-mt-30">
				' . apply_filters( 'the_content', $product->get_description() ) . '
			</div>
		';
	}
	add_shortcode( 'custom_product_description', 'custom_product_description' );

	function single_product_quote_form() {
		ob_start();
		include get_stylesheet_directory() . '/template-parts/single-product-quote-form.php';
		return ob_get_clean();
	}
	add_shortcode('single_product_quote_form', 'single_product_quote_form');

	function enqueue_single_product_quote_form() {
		if ( is_product() ) {
			wp_enqueue_style('single-product-quote-form', get_stylesheet_directory_uri() . '/assets/css/single-product-quote-form.css', array(), '1.0' );
			wp_enqueue_script('single-product-quote-form', get_stylesheet_directory_uri() . '/assets/js/single-product-quote-form.js', array(), '1.0', true);
		}
	}
	add_action( 'wp_enqueue_scripts', 'enqueue_single_product_quote_form' );

	function product_info_accordion() {
		ob_start();
		include get_stylesheet_directory() . '/template-parts/product-info-accordion.php';
		return ob_get_clean();
	}
	add_shortcode('product_info_accordion', 'product_info_accordion');

	function enqueue_product_info_accordion() {
		if ( is_product() ) {
			wp_enqueue_script('product-info-accordion', get_stylesheet_directory_uri() . '/assets/js/product-info-accordion.js', array(), '1.0', true);
		}
	}
	add_action( 'wp_enqueue_scripts', 'enqueue_product_info_accordion' );
?>