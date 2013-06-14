<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Layout
{
	private $CI;
	private $var = array();
	private $layout = 'default';

/*
|===============================================================================
| Constructor
|===============================================================================
*/

public function __construct ()
{
	$this->CI = get_instance();
	$this->var['output'] = '';
	$this->var['title'] = ucfirst($this->CI->router->fetch_method()) . ' - ' . ucfirst($this->CI->router->fetch_class());
	$this->var['js'] = '';
	$this->var['css'] = '';
}

/*
|===============================================================================
| Methods to load the views
|   . printPage
|   . addView
|===============================================================================
*/

/*
| Shows the whole page with the different added views.
*/
public function printPage ()
{
	$this->CI->load->view('layout/'.$this->layout, $this->var);
}

/*
| Add a view to be printed.
*/
public function addView ($name, $data = array())
{
	$this->var['output'] .= $this->CI->load->view($name, $data, true);
	return $this;
}

/*
|===============================================================================
| Methods to modify the variables sent to the layout
|   . setTitle
|   . addJS
|   . addCSS
|   . setLayout
|===============================================================================
*/

public function setTitle ($title) {
	if (is_string($title) && !empty($title)) {
		$this->var['title'] = $title;
		return true;
	}
	return false;
}

public function addJS ($js) {
	if (is_string($js) && !empty($js)) {
		$this->var['js'] .= $js;
		return true;
	}
	return false;
}

public function addCSS ($css) {
	if (is_string($css) && !empty($css)) {
		$this->var['css'] .= $css;
		return true;
	}
	return false;
}

public function setLayout ($layout) {
	if(is_string($layout) AND !empty($layout) AND file_exists('./application/views/layout/' . $layout . '.php'))
	{
		$this->layout = $layout;
		return true;
	}
	return false;
}

}

/* End of file layout.php */
/* Location: ./application/libraries/layout.php */