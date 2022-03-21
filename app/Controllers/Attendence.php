<?php

namespace App\Controllers;

use App\Models\Attendence_model;
use App\Models\Student_model;


class Attendence extends BaseController
{

    public function __construct()
    {
        $this->Attendence_model = new Attendence_model();
        $this->Student_model = new Student_model();
    }


    public function index()
    {


        $data['rows'] = $this->Attendence_model->get_all();

        echo view('common/header', $data);
        echo view('attendence');
        echo view('common/footer');
    }


    public function add()
    {
        $students = $this->Student_model->get_all();

        if (isset($_POST['male_count']) && isset($_POST['female_count'])) {

            $data = $_POST;
            $data['class'] = 3;
            $data['a_date'] = date("y-m-d", strtotime("today"));

            $this->Attendence_model->add($data);
            return redirect()->to('/attendence/edit/4');
        }

        echo view('common/header');
        echo view('attendence_data');
        echo view('common/footer');
    }


    public function edit()
    {

        if (isset($_POST['male_count']) && isset($_POST['female_count'])) {

            $data = $_POST;
            $data['class'] = 3;
            $data['a_date'] = date("y-m-d", strtotime("today"));

            $this->Attendence_model->edit($data);
        }


        $data['edit_data'] = $this->Attendence_model->get(3);

        echo view('common/header', $data);
        echo view('attendence_data');
        echo view('common/footer');
    }




    // public function add()
    // {
    //     $students = $this->Student_model->get_all();

    //     if (isset($_POST['submit'])) {


    //         $present_students = array();

    //         foreach ($students as $key => $student) {

    //             if (isset($_POST['sub_' . $student->id])) {

    //                 array_push($present_students, $student->id);
    //             }
    //         }


    //         $data['present_students'] = json_encode($present_students);
    //         $data['class'] = 3;
    //         $data['a_date'] = date("y-m-d", strtotime("today"));


    //         $this->Attendence_model->add($data);
    //     }

    //     $data['students'] = $students;

    //     echo view('common/header', $data);
    //     echo view('attendence_data');
    //     echo view('common/footer');
    // }
    // public function edit()
    // {
    //     $students = $this->Student_model->get_all();

    //     if (isset($_POST['submit'])) {


    //         $present_students = array();

    //         foreach ($students as $key => $student) {

    //             if (isset($_POST['sub_' . $student->id])) {

    //                 array_push($present_students, $student->id);
    //             }
    //         }


    //         $data['present_students'] = json_encode($present_students);
    //         $data['class'] = 3;
    //         $data['a_date'] = date("y-m-d", strtotime("today"));


    //         $this->Attendence_model->edit($data);
    //     }

    //     $data['edit_data'] = $this->Attendence_model->get(3);
    //     $data['students'] = $students;

    //     echo view('common/header', $data);
    //     echo view('attendence_data');
    //     echo view('common/footer');
    // }

    public function delete($id)
    {
        $this->Attendence_model->remove($id);
        $this->index();
    }
}
