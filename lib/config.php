<?php
/**
 * Lrdc Web Framework
 * Copyright (C) 2015 Cscpro Labs
 * https://www.cscpro.org/labs/framework/
 *
 * Set these variables to suit your needs
 * or just leave it if you don't know what to do
 *
 */

/* Reporting error but not the variable */
error_reporting( E_ALL & ~E_NOTICE );

/* Default timezone */
date_default_timezone_set( 'Asia/Jakarta' );

/* Database config*/
$_db = new stdClass;
$_db->name = ''; // YOUR DB name HERE
$_db->user = ''; // YOUR DB username HERE
$_db->pass = ''; // YOUR DB password HERE

