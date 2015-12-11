<?php if ( ! isset( $_div ) ) $_div = new stdClass(); ?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $_div->title ?: 'Default Title' ?></title>
<link rel="shortcut icon" type="image/x-icon" href="/image/favicon.png">
<link rel="stylesheet" href="/style/main.css" type="text/css">
<link href="//fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" type="text/css">
<?php if ( is_array( $_div->css ) ) foreach ( $_div->css as $r ) { ?>
<link rel="stylesheet" href="/style/<?= $r ?>.css" type="text/css">
<?php } ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
</head>

<body>
