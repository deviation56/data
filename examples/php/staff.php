<?php

/*
 * Example PHP implementation used for the index.html example
 */

// DataTables PHP library
include( "../../php/DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Join,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate;

// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'datatables_demo' )
	->fields(
		Field::inst( 'building' )->validator( 'Validate::notEmpty' ),
		Field::inst( 'room' )->validator( 'Validate::notEmpty' ),
		Field::inst( 'manufacturer' )->validator( 'Validate::notEmpty' ),
		Field::inst( 'name' )->validator( 'Validate::notEmpty' ),
		Field::inst( 'model' )->validator( 'Validate::notEmpty' ),
		Field::inst( 'serial_number' )->validator( 'Validate::notEmpty' ),
		Field::inst( 'service_company' )->validator( 'Validate::notEmpty' ),
		Field::inst( 'technician' )->validator( 'Validate::notEmpty' ),
		Field::inst( 'photo' ),
		Field::inst( 'mfrs_link' ),
		Field::inst( 'notes' )
	->process( $_POST )
	->json();
