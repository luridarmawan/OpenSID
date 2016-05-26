<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/

$hook['pre_system']  = array(
   'class'     => 'Router',
   'function'  => 'route',
   'filename'  => 'router.php',
   'filepath'  => 'hooks'
);

$hook['post_controller']  = array(
   'class'     => 'BerkasDesa',
   'function'  => 'copy_berkas_desa',
   'filename'  => 'berkas_desa.php',
   'filepath'  => 'hooks'
);

/* End of file hooks.php */
/* Location: ./application/config/hooks.php */