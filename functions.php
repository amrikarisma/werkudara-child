<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

function bensemangat_remove_scripts()
{
    wp_dequeue_style('bensemangat-styles');
    wp_deregister_style('bensemangat-styles');

    wp_dequeue_script('bensemangat-scripts');
    wp_deregister_script('bensemangat-scripts');

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action('wp_enqueue_scripts', 'bensemangat_remove_scripts', 20);

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{

    // Get the theme data
    $the_theme = wp_get_theme();
    wp_enqueue_style('animate-styles', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1');
    wp_enqueue_style('child-bensemangat-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get('Version'));
    wp_enqueue_script('jquery');
    wp_enqueue_script('animate-scripts', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', true);
    wp_enqueue_script('imagesloaded-scripts', get_stylesheet_directory_uri() . '/js/masonry/imagesloaded.pkgd.js', array(), $the_theme->get('Version'), true);
    wp_enqueue_script('masonry-scripts', get_stylesheet_directory_uri() . '/js/masonry/masonry.js', array(), $the_theme->get('Version'), true);
    wp_enqueue_script('my-responive-menu', get_stylesheet_directory_uri() . '/js/bigSlide.min.js', array(), '20161214', true);
    wp_enqueue_script('child-bensemangat-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get('Version'), true);
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

function add_child_theme_textdomain()
{
    load_child_theme_textdomain('herbalfit-child', get_stylesheet_directory() . '/languages');
}
add_action('after_setup_theme', 'add_child_theme_textdomain');

function woocommerce_remove_breadcrumb()
{
    remove_action(
        'woocommerce_before_main_content',
        'woocommerce_breadcrumb',
        20
    );
}
add_action('woocommerce_before_main_content', 'woocommerce_remove_breadcrumb');

add_filter('acf/settings/google_api_key', function () {
    // return 'AIzaSyAUEFOytD5AjiDAUV1Gvhvj63Yugeulr1o'; //Kantor
    return 'AIzaSyBy7NWJl8P_egTadGLfMopd3sMakwfSGCI';
});

function acf_google_maps()
{ ?>
    <style type="text/css">
        .acf-map {
            width: 100%;
            height: 400px;
            border: #ccc solid 1px;
            margin: 20px 0;
        }

        // Fixes potential theme css conflict.
        .acf-map img {
            max-width: inherit !important;
        }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script type="text/javascript">
        (function($) {

            /**
             * initMap
             *
             * Renders a Google Map onto the selected jQuery element
             *
             * @date    22/10/19
             * @since   5.8.6
             *
             * @param   jQuery $el The jQuery element.
             * @return  object The map instance.
             */
            function initMap($el) {

                // Find marker elements within map.
                var $markers = $el.find('.marker');

                // Create gerenic map.
                var mapArgs = {
                    zoom: $el.data('zoom') || 16,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map($el[0], mapArgs);

                // Add markers.
                map.markers = [];
                $markers.each(function() {
                    initMarker($(this), map);
                });

                // Center map based on markers.
                centerMap(map);

                // Return map instance.
                return map;
            }

            /**
             * initMarker
             *
             * Creates a marker for the given jQuery element and map.
             *
             * @date    22/10/19
             * @since   5.8.6
             *
             * @param   jQuery $el The jQuery element.
             * @param   object The map instance.
             * @return  object The marker instance.
             */
            function initMarker($marker, map) {

                // Get position from marker.
                var lat = $marker.data('lat');
                var lng = $marker.data('lng');
                var latLng = {
                    lat: parseFloat(lat),
                    lng: parseFloat(lng)
                };

                // Create marker instance.
                var marker = new google.maps.Marker({
                    position: latLng,
                    map: map
                });

                // Append to reference for later use.
                map.markers.push(marker);

                // If marker contains HTML, add it to an infoWindow.
                if ($marker.html()) {

                    // Create info window.
                    var infowindow = new google.maps.InfoWindow({
                        content: $marker.html()
                    });

                    // Show info window when marker is clicked.
                    google.maps.event.addListener(marker, 'click', function() {
                        infowindow.open(map, marker);
                    });
                }
            }

            /**
             * centerMap
             *
             * Centers the map showing all markers in view.
             *
             * @date    22/10/19
             * @since   5.8.6
             *
             * @param   object The map instance.
             * @return  void
             */
            function centerMap(map) {

                // Create map boundaries from all map markers.
                var bounds = new google.maps.LatLngBounds();
                map.markers.forEach(function(marker) {
                    bounds.extend({
                        lat: marker.position.lat(),
                        lng: marker.position.lng()
                    });
                });

                // Case: Single marker.
                if (map.markers.length == 1) {
                    map.setCenter(bounds.getCenter());

                    // Case: Multiple markers.
                } else {
                    map.fitBounds(bounds);
                }
            }

            // Render maps on page load.
            $(document).ready(function() {
                $('.acf-map').each(function() {
                    var map = initMap($(this));
                });
            });

        })(jQuery);
    </script>
<?php }

// function woocommerce_custom_breadcrumb(){
//     woocommerce_breadcrumb();
// }
// add_action( 'woo_custom_breadcrumb', 'woocommerce_custom_breadcrumb' );