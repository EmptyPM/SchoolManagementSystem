<?php

namespace App\Controllers;

use App\Models\Event_model;


class Event extends BaseController
{

    public function __construct()
    {
        $this->Event_model = new Event_model();
    }


    public function index()
    {
        $data['rows'] = $this->Event_model->get_all();
        echo view('common/header', $data);
        echo view('events');
        echo view('common/footer');
    }

    public function add()
    {
        if (isset($_POST['title'])) {
            $data = $_POST;
            $this->Event_model->add($data);
            $this->index();
            die();
        }
        echo view('common/header');
        echo view('events_data');
        echo view('common/footer');
    }
    public function edit($id)
    {
        if (isset($_POST['title'])) {
            $data = $_POST;
            $this->Event_model->edit($id, $data);
            $this->index();
            die();
        }

        $data['edit_data'] = $this->Event_model->get($id);
        echo view('common/header', $data);
        echo view('events_data');
        echo view('common/footer');
    }

    public function delete($id)
    {
        $this->Event_model->remove($id);
        $this->index();
    }
}
