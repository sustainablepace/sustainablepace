<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  <?php echo css('assets/styles/styles.css') ?>
  <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css' />
  <link rel="alternate" type="application/rss+xml" href="/feed" title="RSS feed" />
  <link rel="icon" href="<?php echo url('assets/images/favicon.png') ?>" type="image/png" />
  <link rel="shortcut icon" href="<?php echo url('assets/images/favicon.png') ?>" type="image/png" />
  <link rel="apple-touch-icon" href="<?php echo url('assets/images/apple-touch-icon-iphone.png') ?>" /> 
  <link rel="apple-touch-icon" sizes="72x72" href=<?php echo url('assets/images/apple-touch-icon-ipad.png') ?>" /> 
  <link rel="apple-touch-icon" sizes="114x114" href=<?php echo url('assets/images/"apple-touch-icon-iphone4.png') ?>" />
  <link rel="apple-touch-icon" sizes="144x144" href=<?php echo url('assets/images/apple-touch-icon-ipad3.png') ?>" />
</head>
<body>
  <header>
    <h1><a href="<?php echo url() ?>"><?php echo html( $site->title() ) ?></a></h1>
  </header>

    <p class="subtitle">Work.&nbsp;Rest.&nbsp;Connect. Be&nbsp;active. Take&nbsp;notice.&nbsp;Keep&nbsp;learning.&nbsp;Give.</p>
