<?php

class PWP_EDD{
	public static $valid = false;

	public function __construct()
	{
		$status  = get_option( 'portfolio-wp_license_key_status' );

		if ( 'valid' === $status ) {
			self::$valid = true;
		}
	}

	public static function is_valid()
	{
		return self::$valid;
	}
}