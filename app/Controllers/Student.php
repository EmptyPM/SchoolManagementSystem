<?php

namespace App\Controllers;

use App\Models\Student_model;


class Student extends BaseController
{

    public function __construct()
    {
        $this->Student_model = new Student_model();
    }


    public function index()
    {
        $data['rows'] = $this->Student_model->get_all();
        echo view('common/header', $data);
        echo view('students');
        echo view('common/footer');
    }

    public function add()
    {
        if (isset($_POST['full_name'])) {
            $data = $_POST;
            $this->Student_model->add($data);
            $this->index();
            die();
        }
        echo view('common/header');
        echo view('students_data');
        echo view('common/footer');
    }
    public function edit($id)
    {
        if (isset($_POST['full_name'])) {
            $data = $_POST;
            $this->Student_model->edit($id, $data);
            $this->index();
            die();
        }

        $data['edit_data'] = $this->Student_model->get($id);
        echo view('common/header', $data);
        echo view('students_data');
        echo view('common/footer');
    }

    public function delete($id)
    {
        $this->Student_model->remove($id);
        $this->index();
    }
}
