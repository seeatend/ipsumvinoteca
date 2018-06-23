<?php

/*
|--------------------------------------------------------------------------
| Instagram
|--------------------------------------------------------------------------
|
| Instagram client details
|
*/

$config['instagram_client_name']	= 'Redz';//Your App Name
$config['instagram_client_id']		= '1107ecd7a4b2408792844b13e93e7b29';//Your Client ID
$config['instagram_client_secret']	= 'fdc82f09744f47abbaf846b440e81fc3';//Your Secret Key
$config['instagram_callback_url']	= 'http://localhost/redz/auth/signup';//e.g. http://yourwebsite.com/authorize/get_code/
$config['instagram_website']		= 'http://localhost/redz';//e.g. http://yourwebsite.com/
$config['instagram_description']	= 'For e-commerce';//Your App Description
	
/**
 * Instagram provides the following scope permissions which can be combined as likes+comments
 * 
 * basic - to read any and all data related to a user (e.g. following/followed-by lists, photos, etc.) (granted by default)
 * comments - to create or delete comments on a user’s behalf
 * relationships - to follow and unfollow users on a user’s behalf
 * likes - to like and unlike items on a user’s behalf
 * 
 */
$config['instagram_scope'] = 'basic';

// There was issues with some servers not being able to retrieve the data through https
// If you have this problem set the following to FALSE 

$config['instagram_ssl_verify']		= FALSE;
