<?php

namespace App\Controllers;

use App\Models\Parent_model;


class Parents extends BaseController
{

    public function __construct()
    {
        $this->Parent_model = new Parent_model();
    }


    public function index()
    {
        $data['rows'] = $this->Parent_model->get_all();
        echo view('common/header', $data);
        echo view('parents');
        echo view('common/footer');
    }

    public function add()
    {
        if (isset($_POST['full_name'])) {
            $data = $_POST;
            $this->Parent_model->add($data);
            $this->index();
            die();
        }
        echo view('common/header');
        echo view('parents_data');
        echo view('common/footer');
    }
    public function edit($id)
    {
        if (isset($_POST['full_name'])) {
            $data = $_POST;
            $this->Parent_model->edit($id, $data);
            $this->index();
            die();
        }

        $data['edit_data'] = $this->Parent_model->get($id);
        echo view('common/header', $data);
        echo view('parents_data');
        echo view('common/footer');
    }

    public function delete($id)
    {
        $this->Parent_model->remove($id);
        $this->index();
    }
}
