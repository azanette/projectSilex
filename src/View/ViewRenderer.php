<?php 
namespace SON\View;

class ViewRenderer{

	private $pathTemplates;
	private $templateName;

	/**
	 * Class Constructor
	 * @param    $pathTemplates   
	 */
	public function __construct($pathTemplates)
	{
		$this->pathTemplates = $pathTemplates;
	}

	public function render($name, array $data = []){
		$this->templateName = $name;
		extract($data); //['name' => 'valor qualquer']; $name = 'valor qualquer'
		ob_start();
		include $this->pathTemplates . '/'.$this->templateName.'.php';
		$output = ob_get_clean();
		return $output;			
	}
  
}
