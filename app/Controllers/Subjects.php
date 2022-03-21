<?php

namespace App\Controllers;

use App\Models\Subject_model;


class Subjects extends BaseController
{

    public function __construct()
    {
        $this->Subject_model = new Subject_model();
    }


    public function index()
    {
        $data['rows'] = $this->Subject_model->get_all();
        echo view('common/header', $data);
        echo view('subjects');
        echo view('common/footer');
    }

    public function add()
    {
        if (isset($_POST['title'])) {
            $data = $_POST;
            $this->Subject_model->add($data);
            $this->index();
            die();
        }
        echo view('common/header');
        echo view('subjects_data');
        echo view('common/footer');
    }
    public function edit($id)
    {
        if (isset($_POST['title'])) {
            $data = $_POST;
            $this->Subject_model->edit($id, $data);
            $this->index();
            die();
        }

        $data['edit_data'] = $this->Subject_model->get($id);
        echo view('common/header', $data);
        echo view('subjects_data');
        echo view('common/footer');
    }

    public function delete($id)
    {
        $this->Subject_model->remove($id);
        $this->index();
    }
}
