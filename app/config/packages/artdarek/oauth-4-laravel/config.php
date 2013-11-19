<?php 

return array( 
	
	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => 'Session', 

	/**
	 * Consumers
	 */
	'consumers' => array(

		/**
		 * Facebook
		 */
        'Facebook' => array(
            'client_id'     => '',
            'client_secret' => '',
            'scope'         => array(),
        ),		

		'Google' => array(
   			'client_id'     => '782090744144-hfu26g0bki6v6c2plt7qtj2mljnjfc2a.apps.googleusercontent.com',
    		'client_secret' => 'notasecret',
    		'scope'         => array('userinfo_email', 'userinfo_profile'),
		),  

	)

);