<?php

// logo carousel shortcode
function wpl_logo_carousel_free_shortcode( $atts ) {
	extract( shortcode_atts( array(
		'nav'                => 'true',
		'nav_bg'             => '#f0f0f0',
		'nav_hover_bg'       => '#f5903b',
		'nav_color'          => '#afafaf',
		'nav_hover_color'    => '#ffffff',
		'dots'               => 'true',
		'dots_color'         => '#bbbbbb',
		'dots_active_color'  => '#f5903b',
		'border_hover_color' => '#f5903b',
	), $atts, 'logo_carousel_free' ) );


	$que = new WP_Query(
		array(
			'post_type'      => 'logo-carousel-free',
			'orderby'        => 'date',
			'order'          => 'ASC',
			'posts_per_page' => '-1'
		)
	);

	$custom_id = uniqid();

	$outline = '';

	$outline .= '<style>
		div#wpl-logo-carousel' . $custom_id . '.wpl-logo-carousel .wpl-logo:hover{
			border-color: ' . $border_hover_color . ';
		}';
	if ( $dots == 'true' ) {
		$outline .= '
			div#wpl-logo-carousel' . $custom_id . '.wpl-logo-carousel.wpl-logo-carousel-free-area ul.slick-dots li button{background-color: ' . $dots_color . '; }
			div#wpl-logo-carousel' . $custom_id . '.wpl-logo-carousel.wpl-logo-carousel-free-area ul.slick-dots li.slick-active button{background-color: ' . $dots_active_color . '; }
			';
	}
	if ( $nav == 'true' ) {
		$outline .= '
			div#wpl-logo-carousel' . $custom_id . '.wpl-logo-carousel.wpl-logo-carousel-free-area .slick-prev,
			div#wpl-logo-carousel' . $custom_id . '.wpl-logo-carousel.wpl-logo-carousel-free-area .slick-next{
				background-color: ' . $nav_bg . '; color: ' . $nav_color . ';
			}
			div#wpl-logo-carousel' . $custom_id . '.wpl-logo-carousel.wpl-logo-carousel-free-area .slick-prev:hover,
			div#wpl-logo-carousel' . $custom_id . '.wpl-logo-carousel.wpl-logo-carousel-free-area .slick-next:hover{
				background-color: ' . $nav_hover_bg . '; color: ' . $nav_hover_color . ';
			}';
	}
	$outline .= '</style>';

	$outline .= '
	    <script type="text/javascript">
	    jQuery(document).ready(function() {
			jQuery("#wpl-logo-carousel' . $custom_id . '").slick({
		        dots: ' . $dots . ',
		        infinite: true,
		        slidesToShow: 5,
		        slidesToScroll: 1,
		        autoplay: true,
	            arrows: ' . $nav . ',
	            prevArrow: "<div class=\'slick-prev\'><i class=\'fa fa-angle-left\'></i></div>",
                nextArrow: "<div class=\'slick-next\'><i class=\'fa fa-angle-right\'></i></div>",
	            responsive: [
					    {
					      breakpoint: 1000,
					      settings: {
					        slidesToShow: 4
					      }
					    },
					    {
					      breakpoint: 900,
					      settings: {
					        slidesToShow: 3
					      }
					    },
					    {
					      breakpoint: 600,
					      settings: {
					        slidesToShow: 2
					      }
					    },
					    {
					      breakpoint: 460,
					      settings: {
					        slidesToShow: 1
					      }
					    }
					  ]
	        });

	    });
	    </script>';


	$outline .= '<div id="wpl-logo-carousel' . $custom_id . '" class="wpl-logo-carousel wpl-logo-carousel-free-area">';
	while ( $que->have_posts() ) : $que->the_post();
		$ids       = get_the_ID();
		$lcf_image = get_the_post_thumbnail_url( $ids, 'large', false );

		$outline .= '<div class="wpl-logo"><img src="' . $lcf_image . '" alt="' . get_the_title() . '" /></div>';
	endwhile;
	$outline .= '</div>';


	wp_reset_query();

	return $outline;


}

add_shortcode( 'logo_carousel_free', 'wpl_logo_carousel_free_shortcode' );