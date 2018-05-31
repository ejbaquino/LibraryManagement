<?php
defined('BASEPATH') OR EXIT('No direct script access allowed');

class Sample extends CI_Controller{

    function __construct(){
        parent:: __construct();
        $this->load->model('sample_model','model');
    }

    function index(){
        //echo "Hello";
        $data['records'] = $this->model->getSample();
        $this->load->view('sample/index', $data);
        $this->load->view('layout/header');
    }

    public function add(){
        $this->load->view('layout/header');
        $this->load->view('sample/add');

    }

    public function submit(){
        $result = $this->model->submit();
        if($result){
            $this->session->set_flashdata('success_msg', 'Record added successfully');
        }
        else{
            $this->session->set_flashdata('error_msg', 'Failed adding record');
        }
        redirect(base_url('sample/index'));

    }

    public function edit($id){
        $data['record'] = $this->model->getSampleById($id);
        $this->load->view('layout/header');
        $this->load->view('sample/edit',$data);

    }

    public function update(){
        $result = $this->model->update();
        if($result){
            $this->session->set_flashdata('success_msg', 'Record updated successfully');
        }
        else{
            $this->session->set_flashdata('error_msg', 'Failed updating record');
        }
        redirect(base_url('sample/index'));
    }
}
