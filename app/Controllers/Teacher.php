<?php

namespace App\Controllers;

use App\Models\Teacher_model;


class Teacher extends BaseController
{

    public function __construct()
    {
        $this->Teacher_model = new Teacher_model();
    }


    public function index()
    {
        $data['rows'] = $this->Teacher_model->get_all();
        echo view('common/header', $data);
        echo view('teachers');
        echo view('common/footer');
    }

    public function add()
    {
        if (isset($_POST['name'])) {
            $data = $_POST;
            $this->Teacher_model->add($data);
            $this->index();
            die();
        }
        echo view('common/header');
        echo view('teachers_data');
        echo view('common/footer');
    }
    public function edit($id)
    {
        if (isset($_POST['name'])) {
            $data = $_POST;
            $this->Teacher_model->edit($id, $data);
            $this->index();
            die();
        }

        $data['edit_data'] = $this->Teacher_model->get($id);
        echo view('common/header', $data);
        echo view('teachers_data');
        echo view('common/footer');
    }

    public function delete($id)
    {
        $this->Teacher_model->remove($id);
        $this->index();
    }
}
