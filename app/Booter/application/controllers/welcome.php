<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($name = 'World')
	{
		$this->layout->addView('welcome_message', array('name' => $name));
		// Uncomment to see how the methods work
		// $this->layout->setTitle('Hi '.$name);
		// $this->layout->addCSS('<style>h1 {color:blue;}</style>');
		// $this->layout->addJS('<script>alert("Hi !");</script>');
		// $this->layout->addJS('<script src="'.base_url().'assets/js/booter.utils.js" type="text/javascript" charset="utf-8" defer></script>');
		// $this->layout->setLayout('mobile');
		$this->layout->setlayout('quicksite');
		$this->layout->printPage();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */