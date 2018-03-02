<!DOCTYPE html>
<html lang="cz">
<head>
    <meta charset="utf-8">
    <link href="css/global.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Medula+One' rel='stylesheet' type='text/css'>
    <?php $uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);
    if($uri_parts[0] == '/index.php') { ?>
      <link href="css/index.css" rel="stylesheet">
      <title>Mahony Pharma - <?php echo $page->read('menu', 'index'); ?></title>
    <?php } elseif($uri_parts[0] == '/division.php') { ?>
      <link href="css/division.css" rel="stylesheet">
      <title>Mahony Pharma - <?php echo $page->read('menu', 'division'); ?></title>
    <?php } elseif($uri_parts[0] == '/products.php') { ?>
      <link href="css/products.css" rel="stylesheet">
      <title>Mahony Pharma - <?php echo $page->read('menu', 'products'); ?></title>
    <?php } elseif($uri_parts[0] == '/activities.php') { ?>
      <link href="css/activities.css" rel="stylesheet">
      <title>Mahony Pharma - <?php echo $page->read('menu', 'activities'); ?></title>
    <?php } elseif($uri_parts[0] == '/notices.php') { ?>
      <link href="css/notices.css" rel="stylesheet">
      <title>Mahony Pharma - <?php echo $page->read('menu', 'notices'); ?></title>
    <?php } elseif($uri_parts[0] == '/communication.php') { ?>
      <link href="css/communication.css" rel="stylesheet">
      <title>Mahony Pharma - <?php echo $page->read('menu', 'communication'); ?></title>
    <?php } elseif($uri_parts[0] == '/contact.php') { ?>
      <link href="css/contact.css" rel="stylesheet">
      <title>Mahony Pharma - <?php echo $page->read('menu', 'contact'); ?></title>
    <?php } else { ?>
      <link href="css/index.css" rel="stylesheet">
      <title>Mahony Pharma - <?php echo $page->read('menu', 'index'); ?></title>
    <?php } ?>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
</head>

<body>
  <div class="container">
    <div class="header">
      <h1>Mahony Pharma</h1>
      <a class="logo" href="/index.php">
        <img src="images/logo-mahony-2014.jpg" alt="Mahony Pharma logo" width="500" height="200">
      </a>
      <ul class="lang">
        <li>
          <a href="<?php echo $_SERVER['PHP_SELF'] ?>?lang=cz"><img src="images/cz.png" alt="CZ"></a>
          <a href="<?php echo $_SERVER['PHP_SELF'] ?>?lang=en"><img src="images/gb.png" alt="EN"></a>
          <a href="<?php echo $_SERVER['PHP_SELF'] ?>?lang=fr"><img src="images/fr.png" alt="FR"></a>
          <a href="<?php echo $_SERVER['PHP_SELF'] ?>?lang=it"><img src="images/it.png" alt="IT"></a>
          <a href="<?php echo $_SERVER['PHP_SELF'] ?>?lang=ru"><img src="images/ru.png" alt="RU"></a>
        </li>
      </ul>
      <div class="clear"></div>
      <ul class="menu">
        <li class="menu-li"><a class="menu-a" href="/index.php"><?php echo $page->read('menu', 'index'); ?></a></li>
        <li class="menu-li"><a class="menu-a" href="/division.php"><?php echo $page->read('menu', 'division'); ?></a></li>
        <li class="menu-li"><a class="menu-a" href="/products.php"><?php echo $page->read('menu', 'products'); ?></a></li>
        <li class="menu-li"><a class="menu-a" href="/activities.php"><?php echo $page->read('menu', 'activities'); ?></a></li>
        <li class="menu-li"><a class="menu-a" href="/notices.php"><?php echo $page->read('menu', 'notices'); ?></a></li>
        <li class="menu-li"><a class="menu-a" href="/communication.php"><?php echo $page->read('menu', 'communication'); ?></a></li>
        <li class="menu-li"><a class="menu-a" href="/contact.php"><?php echo $page->read('menu', 'contact'); ?></a></li>
      </ul>
    </div>
    <div class="page-container">
