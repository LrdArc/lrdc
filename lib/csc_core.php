<?php
/**
 * Lrdc Web Framework
 * Copyright (C) 2015 Cscpro Labs
 * https://www.cscpro.org/labs/framework/
 *
 */

class csc_core {

	public $allowed = array( 'js', 'css', 'jpg', 'png', 'gif', 'jpeg' );
	public $theuri;
	public $port = 80;
	
	public function get_uri() {

		// Get current url before the "?"
		$sx = explode( '?', $this->theuri );

		// Get the file type (last ".")
		$this->format = strpos( $sx[0], '.' ) ? endexplode( '.', $sx[0] ) : false;

		// The url without extension
		$this->syntax = ( $this->format ) ? str_replace( '.' . $this->format, '', $sx[0] ) : $sx[0];

		// Explode every "/" on the url
		$this->uri = explode( '/', $this->syntax );

		// Checking is it https
		$this->ssl = ( $this->port == 443 ) ? true : false;

		// Checking is it static files
		$this->is_static = in_array( $this->format, $this->allowed ) ? true : false;

		if ( strpos( $this->uri[1], '_' ) ) {
			$opt = explode( '_', $this->uri[1] );
			$this->uri[1] = $opt[0];
		}

	}

	public function redirect_to_slash() {
		if ( $csc->uri[1] && ! $csc->format &&
			substr( $csc->syntax, -1 ) != '/' &&
			! strpos( $csc->syntax, '+' ) 
		) {
			header( "Location: $csc->syntax/" );
			exit;
		}
	}

}
