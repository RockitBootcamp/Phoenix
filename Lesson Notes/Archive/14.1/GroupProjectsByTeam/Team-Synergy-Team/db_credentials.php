<?php

/****************************************
*    DBCredentials                      *
*****************************************/

/**
 * This class houses database credentials
 */
class DBCredentials {

	/****************************************
	*    AUTHENTICATION                     *
	*****************************************/

	/**
	* This function returns a set of credentials, determined by the set parameter given
	*/
	public static function get_credentials() {

		$credentials['host']		= '68.178.143.149';
		$credentials['username']	= 'teamsynergy';
		$credentials['password']	= 'Bootcamp!1';
		$credentials['database']	= 'teamsynergy';

		// Return variables as array
		return $credentials;

	}

}