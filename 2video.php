<?php
if ( !isset( $_GET['id'] ) || !$_GET['id'] ) {
	header( 'Content-Type: application/json' );
	$log = array(
		'error' => true,
		'message' => 'CARLOS NO TIENES EL "id" BAKA.'
	);
	exit( json_encode( $log ) );
}
$id = $_GET['id'];
$source = sprintf( '%s', $id );
$altsource = sprintf( '%s', $id );
$image = sprintf( '%s', $id );
?>