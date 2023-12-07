<?php

namespace App\Controllers;

use App\Core\Controller;

class Artikel extends Controller
{
	public object $model;

	public function __construct()

	{
		parent::cekLogin();

		$this->model = new \App\Models\Artikel();

	}

	public function index()

	{
		$data['rows'] = $this->model->show();
		$this->dashboard('artikel/index', $data);
	}

	public function input()
	{
		$this->dashboard('artikel/input');
	}

	public function save()
	{
		$this->model->save();
		header('location:' . URL . '/artikel');
	}

	public function edit($id)
	{
		$data['row'] = $this->model->edit($id);
		$this->dashboard('artikel/edit', $data);
	}

	public function update()
	{
		$this->model->update();
		header('location:' . URL . '/artikel');
	}

	public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/artikel');
	}
	
}
