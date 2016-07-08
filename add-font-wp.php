<?php
/*
Plugin Name: Font Whitney
Description: Добавляет шрифт на сайт
Author: Anatoly Yumashev
Version: 1.0
*/


//Add inline style eneque via WP hook
add_action( 'wp_head', function(){

  $font_base_url = plugins_url('inc/whitney', __FILE__);


  ?>
    <style id="add-font-whitney" type="text/css">

      @font-face {
          font-family: 'Whitney';
          src: url('<?php echo $font_base_url ?>/WhitneyLight/WhitneyLight.eot'); /* IE9 Compat Modes */
          src: url('<?php echo $font_base_url ?>/WhitneyLight/WhitneyLight.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
               url('<?php echo $font_base_url ?>/WhitneyLight/WhitneyLight.woff') format('woff'), /* Modern Browsers */
               url('<?php echo $font_base_url ?>/WhitneyLight/WhitneyLight.ttf')  format('truetype');
         font-weight: 100;
      }

      @font-face {
          font-family: 'Whitney';
          src: url('<?php echo $font_base_url ?>/WhitneyBook/WhitneyBook.eot'); /* IE9 Compat Modes */
          src: url('<?php echo $font_base_url ?>/WhitneyBook/WhitneyBook.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
               url('<?php echo $font_base_url ?>/WhitneyBook/WhitneyBook.woff') format('woff'), /* Modern Browsers */
               url('<?php echo $font_base_url ?>/WhitneyBook/WhitneyBook.ttf')  format('truetype');
         font-weight: 300;
      }

      @font-face {
          font-family: 'Whitney';
          src: url('<?php echo $font_base_url ?>/WhitneyMedium/WhitneyMedium.eot'); /* IE9 Compat Modes */
          src: url('<?php echo $font_base_url ?>/WhitneyMedium/WhitneyMedium.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
               url('<?php echo $font_base_url ?>/WhitneyMedium/WhitneyMedium.woff') format('woff'), /* Modern Browsers */
               url('<?php echo $font_base_url ?>/WhitneyMedium/WhitneyMedium.ttf')  format('truetype');
         font-weight: 400;
      }


      @font-face {
          font-family: 'Whitney';
          src: url('<?php echo $font_base_url ?>/WhitneySemiBold/WhitneySemiBold.eot'); /* IE9 Compat Modes */
          src: url('<?php echo $font_base_url ?>/WhitneySemiBold/WhitneySemiBold.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
               url('<?php echo $font_base_url ?>/WhitneySemiBold/WhitneySemiBold.woff') format('woff'), /* Modern Browsers */
               url('<?php echo $font_base_url ?>/WhitneySemiBold/WhitneySemiBold.ttf')  format('truetype');
         font-weight: bold;
      }


  	</style>


    <style id="font-whitney" type="text/css">
        body {
          font-family: 'Whitney';
        }
        h1,h2,h3,h4,h5,h6 {
          font-family: 'Whitney';
        }
    </style>


  <?php

}, 99999999999999999999);
