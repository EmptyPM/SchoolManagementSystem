<?php

namespace App\Controllers;

use App\Models\Marks_model;


class Marks extends BaseController
{

    public function __construct()
    {
        $this->Marks_model = new Marks_model();
    }


    public function index()
    {
        $data['rows'] = $this->Marks_model->get_all();
        echo view('common/header', $data);
        echo view('marks');
        echo view('common/footer');
    }

    public function add()
    {
        if (isset($_POST['full_name'])) {
            $data = $_POST;
            $this->Marks_model->add($data);
            $this->index();
            die();
        }
        echo view('common/header');
        echo view('marks_data');
        echo view('common/footer');
    }
    public function edit($id)
    {
        if (isset($_POST['full_name'])) {
            $data = $_POST;
            $this->Marks_model->edit($id, $data);
            $this->index();
            die();
        }

        $data['edit_data'] = $this->Marks_model->get($id);
        echo view('common/header', $data);
        echo view('marks_data');
        echo view('common/footer');
    }

    public function delete($id)
    {
        $this->Marks_model->remove($id);
        $this->index();
    }
}
