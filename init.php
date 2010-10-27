<?php defined('SYSPATH') or die('No direct script access.');

/*
 * The uri's can be modified, just make sure the name & attributes stay the same.
 * 
 * Ex: To use the uri http://yoursite.com/gallery/images/ for the photo's, you can change the route to
 * Route::set('sigal-photo', 'gallery/images/<action>/<slug>/<file>')->default(array('dir....
 */

Route::set('sigal-backend', 'backend/sigal(/<controller>(/<action>(/<id>)))', array('controller' => 'photo|gallery'))
	->defaults(array(
		'directory'	=> 'backend',
		'controller' => 'gallery',
		'action' => 'index'));

Route::set('sigal-frontend', 'sigal(/<action>(/<id>))')
	->defaults(array(
		'directory'	=> 'frontend',
		'controller' => 'gallery',
		'action' => 'index'));

// NOT USED - See Sigal_Controller_Frontend_Image
Route::set('sigal-image', 'image/<action>/<slug>/<file>', array('action' => 'view|thumbnail'))
	->defaults(array(
		'directory'=>'frontend',
		'controller'=>'photo',
	));