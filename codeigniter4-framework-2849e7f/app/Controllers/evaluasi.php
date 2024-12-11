<?php
class Evaluation extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Evaluation_model');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $this->load->view('evaluation_form');
    }

    public function submit()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('saran', 'Kritik & Saran', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('evaluation_form');
        } else {
            $data = array(
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'saran' => $this->input->post('saran')
            );

            if ($this->Evaluation_model->save_evaluation($data)) {
                $this->load->view('submission_success');
            } else {
                $this->load->view('submission_failure');
            }
        }
    }
}
