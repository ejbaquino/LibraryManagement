<?php
defined('BASEPATH') OR EXIT('No direct script access allowed');

class Circulation extends CI_Controller{

    function __construct(){
        parent:: __construct();
        $this->load->model('circulation_model','model');
    }

    function index(){
        //echo "Hello";
        $data['records'] = $this->model->getCirculation();
        $this->load->view('circulation/index', $data);
        $this->load->view('layout/header');
    }

    public function add(){
        $this->load->view('layout/header');
        $this->load->view('circulation/add');

    }

    public function submit(){
        $result = $this->model->submit();
        if($result){
            $this->session->set_flashdata('success_msg', 'Record added successfully');
        }
        else{
            $this->session->set_flashdata('error_msg', 'Failed adding record');
        }
        redirect(base_url('circulation/index'));

    }

    public function edit($id){
        $data['record'] = $this->model->getCirculationById($id);
        $this->load->view('layout/header');
        $this->load->view('circulation/edit',$data);

    }

    public function update(){
        $result = $this->model->update();
        if($result){
            $this->session->set_flashdata('success_msg', 'Record updated successfully');
        }
        else{
            $this->session->set_flashdata('error_msg', 'Failed updating record');
        }
        redirect(base_url('circulation/index'));
    }

    public function returned(){
        $result = $this->model->return();
        if($result){
            $this->session->set_flashdata('success_msg', 'Book has been returned');
        }
        else{
            $this->session->set_flashdata('error_msg', 'Failed');
        }
        redirect(base_url('circulation/index'));
    }
}
