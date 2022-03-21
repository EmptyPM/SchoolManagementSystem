<?php
namespace App\Controllers;
class Start extends BaseController
{

	public function index()
	{ 

			echo view('common/header');
			echo view('dashboard');
			echo view('common/footer');

		
	}
	public function teachers()
	{ 
			echo view('common/header');
			echo view('teachers');
			echo view('common/footer');
		
	}
}
