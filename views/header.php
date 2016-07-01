<?php if ( ! isset( $_div ) ) $_div = new stdClass(); ?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= $_div->title ?: 'Default Title' ?></title>
<?php if ( is_array( $_div->css ) ) foreach ( $_div->css as $r ) { ?>
<link rel="stylesheet" href="<?= $r ?>" type="text/css">
<?php } ?>
</head>

<body>
