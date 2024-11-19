<!DOCTYPE html>
<html lang="en">

<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- This site is optimized -->
<?php
  foreach ($d as $res) {
?>
<title><?=$res['title'];?></title>
<meta name="description" content="<?=$res['description'];?>">
<link rel="canonical" href="<?=base_url()?><?=$res['slug'];?>" />

<meta property="og:title" content="<?=$res['title'];?>" />
    <meta property="og:description" content="<?=$res['description'];?>" />
    <meta property="og:url" content="<?=base_url()?><?=$res['slug'];?>" />
  
 <?php   
 }
?>

    
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    
    <meta property="og:site_name" content="Cobalt Zebra Private Limited" />
    
    <meta property="og:image" content="" />
    <meta property="og:image:width" content="150" />
    <meta property="og:image:height" content="150" />
    <meta property="og:image:type" content="image/png" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:label1" content="Est. reading time" />
    <meta name="twitter:data1" content="1 minute" />
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url();?>assets/images/favicon.png" />
    <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=base_url();?>assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?=base_url();?>assets/css/flaticon.css" />
    <link rel="stylesheet" href="<?=base_url();?>assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?=base_url();?>assets/css/owl.theme.css" />
    <link rel="stylesheet" href="<?=base_url();?>assets/css/magnific-popup.css" />
  <link rel="prelaod" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" onload="this.onload=null;this.rel='stylesheet';" />
    <link rel="stylesheet" href="<?=base_url();?>assets/css/style.css" />
    <link rel="stylesheet" href="<?=base_url();?>assets/css/royal-preload.css" />
    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/plugins/revolution/revolution/css/settings.css">   
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/plugins/revolution/revolution/css/navigation.css">
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K3Z7HPT');</script>
<!-- End Google Tag Manager -->
</head>

<body>