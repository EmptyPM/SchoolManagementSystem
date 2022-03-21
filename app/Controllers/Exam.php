<?php

namespace App\Controllers;

use App\Models\Exam_model;


class Exam extends BaseController
{

    public function __construct()
    {
        $this->Exam_model = new Exam_model();
    }


    public function index()
    {
        $data['rows'] = $this->Exam_model->get_all();
        echo view('common/header', $data);
        echo view('exams');
        echo view('common/footer');
    }

    public function add()
    {
        if (isset($_POST['title'])) {
            $data = $_POST;
            $this->Exam_model->add($data);
            $this->index();
            die();
        }
        echo view('common/header');
        echo view('exams_data');
        echo view('common/footer');
    }
    public function edit($id)
    {
        if (isset($_POST['title'])) {
            $data = $_POST;
            $this->Exam_model->edit($id, $data);
            $this->index();
            die();
        }

        $data['edit_data'] = $this->Exam_model->get($id);
        echo view('common/header', $data);
        echo view('exams_data');
        echo view('common/footer');
    }

    public function delete($id)
    {
        $this->Exam_model->remove($id);
        $this->index();
    }
}
