<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;


/**
*
*/
class TloginController extends AppController
{
//	public $base_url;

	public function initialize()
	{
		parent::initialize();
	//	$this->base_url = Router::url("/", true);
		$this->viewBuilder()->setLayout("tlogin");

	}


	public function index()
	{

		$this->set("title","AJSFitness");
	//	$this->set("baseurl",$this->base_url);
	}
}






?>
