<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License


  <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    
 */
 
$cakeDescription = 'Paseociudad';

?>

<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
<head itemscope itemtype="http://schema.org/WebSite">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-M8HLK2L');</script>
    <!-- End Google Tag Manager -->

    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title itemprop='name'>
        <?= $cakeDescription ?>
       
    </title>
    <link rel="canonical" href="https://paseociudad.com/" itemprop="url">
    <!-- metadata open graph -->
    <meta property="og:title" content="Paseociudad Guaminí" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://paseociudad.com" />
    <meta property="og:image" content="https://paseociudad.com/img/metaimg2.jpg" />
    <meta property="og:description" 
  content="Todo lo que busques en Guaminí desde la comodidad de tu hogar" />
    <!-- end metadata open graph -->

    <?= $this->Html->meta('icon') ?>


     <!--  CSS y JS -->
     
    <?= $this->element('CSSyJS-to-Layouts') ?>
     
    

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body itemscope itemtype="http://schema.org/WebPage">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M8HLK2L"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->  
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '1212074235563654',
          xfbml      : true,
          version    : 'v2.10'
        });
        FB.AppEvents.logPageView();
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
        <?= $this->element('nav') ?>



    

    <?= $this->Flash->render() ?>
    <div class="">
        <?= $this->fetch('content') ?>
    </div>
    
  <?= $this->Html->script('owl.carousel.min'); ?>
</body>
</html>
