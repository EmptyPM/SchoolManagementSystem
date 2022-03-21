<?php

namespace App\Controllers;

use App\Models\Property_model;


class Property extends BaseController
{

    public function __construct()
    {
        $this->Property_model = new Property_model();
    }


    public function index()
    {
        $data['rows'] = $this->Property_model->get_all();
        echo view('common/header', $data);
        echo view('properties');
        echo view('common/footer');
    }

    public function add()
    {
        if (isset($_POST['title'])) {
            $data = $_POST;
            $this->Property_model->add($data);
            $this->index();
            die();
        }
        echo view('common/header');
        echo view('properties_data');
        echo view('common/footer');
    }
    public function edit($id)
    {
        if (isset($_POST['title'])) {
            $data = $_POST;
            $this->Property_model->edit($id, $data);
            $this->index();
            die();
        }

        $data['edit_data'] = $this->Property_model->get($id);
        echo view('common/header', $data);
        echo view('properties_data');
        echo view('common/footer');
    }

    public function delete($id)
    {
        $this->Property_model->remove($id);
        $this->index();
    }
}
