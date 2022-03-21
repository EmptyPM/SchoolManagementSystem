<?php

namespace App\Controllers;

use App\Models\Class_model;
use App\Models\Subject_model;


class Classes extends BaseController
{

    public function __construct()
    {
        $this->Class_model = new Class_model();
        $this->Subject_model = new Subject_model();
    }


    public function index()
    {
        $data['rows'] = $this->Class_model->get_all();
        echo view('common/header', $data);
        echo view('classes');
        echo view('common/footer');
    }

    public function add()
    {
        $subjects = $this->Subject_model->get_all();

        if (isset($_POST['title'])) {



            $selected_subjects = array();
            foreach ($subjects as $key => $subject) {

                if (isset($_POST['sub_' . $subject->id])) {
                    array_push($selected_subjects, $subject->id);
                }
            }

            print_r($selected_subjects);


            $data['subjects'] = json_encode($selected_subjects);
            $data['title'] = $_POST['title'];


            $this->Class_model->add($data);
            $this->index();
            die();
        }

        $data['subjects'] = $subjects;

        echo view('common/header', $data);
        echo view('classes_data');
        echo view('common/footer');
    }
    public function edit($id)
    {
        $subjects = $this->Subject_model->get_all();
        if (isset($_POST['title'])) {
            $selected_subjects = array();
            foreach ($subjects as $key => $subject) {

                if (isset($_POST['sub_' . $subject->id])) {
                    array_push($selected_subjects, $subject->id);
                }
            }



            $data['subjects'] = json_encode($selected_subjects);
            $data['title'] = $_POST['title'];
            $this->Class_model->edit($id, $data);
            $this->index();
            die();
        }

        $data['edit_data'] = $this->Class_model->get($id);
        $data['subjects'] = $subjects;

        echo view('common/header', $data);
        echo view('classes_data');
        echo view('common/footer');
    }

    public function delete($id)
    {
        $this->Class_model->remove($id);
        $this->index();
    }
}
