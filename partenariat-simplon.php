<?php
/*
Plugin Name: simplon
Plugin URI: https://github.com/JMGuicher/partenariat-simplon
Description: Un plugin d'ajout de mention simplon
Version: 0.1
Author: Jim
Author URI: https://github.com/JMGuicher/partenariat-simplon
License: GPL2
*/


function simplon() {
   return '
   <p>
       <img src="https://simplon.co/wp-content/themes/DiviChildV2/images/logo.png" width="100" height="70">
       La publication de cet article est possible grâce à mon super partenaire <a href="https://simplon.co">Simplon.co</a> - une entreprise de l\'économie sociale et solidaire et un réseau de « fabriques » (écoles) qui propose des formations GRATUITES pour devenir développeur web.
   </p>';
}

add_shortcode('simplon', 'simplon');
?>