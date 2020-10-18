<?php namespace App\Controllers;

use App\Models\ContactModel;
use CodeIgniter\RESTful\ResourceController;

class Contact extends ResourceController
{
	protected $format = 'json';
	protected $modelName = 'App\Models\ContactModel';
	
	// protected $model;

	// public function __construct()
	// {
	// 	$this->model = new ContactModel();
	// }

	public function index()
	{
		$data = [
			'message' => 'success',
			'data' => $this->model->findAll()
		];

		return $this->response->setStatusCode(200)->setJSON($data);
	}

	public function show($id = null)
	{
		$data = [
			'message' => 'success',
			'data' => $this->model->find($id)
		];

		return $this->respond($data, 200);
	}

	//--------------------------------------------------------------------

}
