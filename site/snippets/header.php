<!DOCTYPE HTML>

<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!-- RWD Viewport -->
    <meta name="viewport" content="width=device-width">

    <!-- Title -->
    <title><?php echo $site->title()->html() ?></title>
    <meta name="description" content="<?php echo $site->description()->html() ?>">
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo url('assets/images/favicon.png') ?>">
        
    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    
    <!-- Feature Detection and script / css loader -->
    <script src="<?php echo url('assets/js/head.js') ?>" type="text/javascript"></script>
    
 
</head>

<body>

    <div class="wrap">
        
        <!-- Header -->
        <header>
          
          <!-- Logo -->
            <div class="logo">
                <a href="<?php echo url() ?>">Geraldine</a>
            </div>

        <!-- Search Box -->
            <div class="search">

  
            
            <form action="<?php echo $site->page('search')?>">
             
               <label>S</label>  <input type="text" name="q" />

            </form>

            </div>



        </header>

         