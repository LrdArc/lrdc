<?php
/**
 * Lrdc Web Framework
 * Copyright (C) 2015 Cscpro Labs
 * https://www.cscpro.org/labs/framework/

 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.

 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 */

/* Include core class library */
require( 'lib/csc_core.php' );
require( 'lib/csc_func.php' );


/* Let the MAD begins */
$_csc = new csc_core();
$_csc->theuri = $_SERVER['REQUEST_URI'];
$_csc->port = $_SERVER['SERVER_PORT'];
$_csc->get_uri();


/* Initiate session & DB */
if ( ! isset( $argc ) && ! $csc->is_static ) session_start(); // session doesn't count on non-browser
if ( ! $csc->is_static ) {
	$_csc->redirect_to_slash();
	require_once( 'lib/config.php' );
	require_once( 'lib/csc_pdo.php' );

	if ( $dbs ) {
		$db = new csc_pdo( $dbs->user, $dbs->pass, $dbs->name );
		$db->pfx = '';
		unset( $dbs );
	}
}


/* Main Category */
if ( ! $_csc->uri[1] || $_csc->uri[1] == 'index' ) include( 'view/index.php' );
elseif ( $_csc->is_static ) include( 'lib/static.php' );
else include( 'lib/controller.php' );
