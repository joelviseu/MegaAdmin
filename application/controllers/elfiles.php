<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Elfiles extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		/* Standard Libraries */
		$this->load->database();
		$this->load->helper('url');
		/* ------------------ */	
		
	
	}
	
	
	
	/* Standalone Elfinder */
	public function elfinder_files()
	{
		$this->load->view('elfinder_view');
		
		
	}
	
	/* Popup Elfinder in TinyMCE */
	public function elfinder_popup()
	{
		$this->load->view('elfinder_popup_view');
	}
	
	/* Elfinder initialization */
	public function elfinder_init()
	{
		$opts = array(
			'debug' => true,
			
			'roots' => array(
				array(
					'driver' => 'LocalFileSystem',
					'path' =>  'myuploads',
					'URL' => base_url('myuploads'),
					'alias' => 'My Uploads',
					'uploadMaxSize' => '2M',
					'attributes' => array(
						array(
							'pattern' => '/\.tmb$/',
							'read' => false,
							'write' => false,
							'locked' => true,
							'hidden' => true
						)
					),
				)
			)
		);
		$this->load->library('elfinder_lib/Elfinder_lib', $opts);
		
	}
	
}
