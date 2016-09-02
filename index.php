<?php
/**
 * Lrdc Web Framework
 * https://www.cscpro.org/labs/framework/
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 */

/* Include core class library */
require_once( 'config/config.php' );
require_once( $_config['lib'] . '/csc_core.php' );
require_once( $_config['lib'] . '/csc_func.php' );


/* Let the MAD begins */
$_csc = new csc_core();
$_csc->config = $_config;
$_csc->theuri = $_SERVER['REQUEST_URI'];
$_csc->port = $_SERVER['SERVER_PORT'];
$_csc->get_uri();
unset( $_config );


/* Session doesn't count on non-browser */
if ( ! isset( $argc ) && ! $_csc->is_static ) session_start();

/* Initiate session & DB */
if ( ! $_csc->is_static ) {
	$_csc->redirect_to_slash();
	require_once( $_csc->config['lib'] . '/csc_pdo.php' );

	if ( $_db->name ) {
		$db = new csc_pdo( $_db->user, $_db->pass, $_db->name );
		$db->pfx = $_db->pfx;
		unset( $_db );
	}

	require_once( 'config/auth.php' );
}


/* Main Category */
if ( ! $_csc->uri[1] || $_csc->uri[1] == 'index' ) include( 'views/index.php' );
elseif ( $_csc->is_static ) include( 'static/index.php' );
else include( 'config/controller.php' );

// END of code
