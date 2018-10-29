<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;


/**
*
*/
class ContactController extends AppController
{
	public $base_url;

	public function initialize()
	{
		parent::initialize();
		$this->base_url = Router::url("/", true);
		$this->viewBuilder()->setLayout("ContactUs");

	}


	public function index()
	{

		$this->set("title","Contact");
		$this->set("baseurl",$this->base_url);
	}
}






?>
