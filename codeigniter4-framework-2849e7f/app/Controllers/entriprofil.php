<?php

class Profile extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profile_model');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $this->load->view('profile_form');
    }

    public function submit()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('age', 'Usia', 'required|integer');
        $this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('weight', 'Berat Badan', 'required|numeric');
        $this->form_validation->set_rules('height', 'Tinggi Badan', 'required|numeric');
        $this->form_validation->set_rules('activity', 'Aktivitas Harian', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('profile_form');
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'age' => $this->input->post('age'),
                'gender' => $this->input->post('gender'),
                'weight' => $this->input->post('weight'),
                'height' => $this->input->post('height'),
                'activity' => $this->input->post('activity')
            );

            if ($this->Profile_model->save_profile($data)) {
                $this->load->view('submission_success');
            } else {
                $this->load->view('submission_failure');
            }
        }
    }
}
