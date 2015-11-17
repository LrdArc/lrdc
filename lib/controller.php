<?php

if ( $_csc->uri[1] == 'csc' ) {
	chdir( 'csc' );
	include( 'index.php' );
}
elseif ( file_exists( 'views/' . $csc->uri[1] . '.php' ) ) include( 'views/' . $csc->uri[1] . '.php' );
else echo '404';
