<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Sample_model extends CI_Model{

    public function getSample(){
        $query = $this->db->get('circulation');
        if($query->num_rows() > 0){
            return $query->result();
        }
        else{
            return false;
        }
    }

    public function submit(){
        $field = array(
            'circulation_id'=>$this->input->post('txt_circulation_id'),
            'user_id'=>$this->input->post('txt_user_id'),
            'book_id'=>$this->input->post('txt_book_id'),
            'date_borrowed'=>$this->input->post('txt_date_borrowed'),
            'due_date'=>$this->input->post('txt_due_date')

        );
        $this->db->insert('circulation',$field);
        if($this->db->affected_rows()>0){
            return true;
        }
        else{
            return false;
        }
    }

    public function getSampleById($id){
            $this->db->where('id',$id);
            $query = $this->db->get('circulation');
            if($query->num_rows() > 0){
                return $query->row();
            }
            else{
                return false;
            }
    }

    public function update(){
        $id = $this->input->post('txt_hidden'); 
        $field = array(
            'circulation_id'=>$this->input->post('txt_circulation_id'),
            'user_id'=>$this->input->post('txt_user_id'),
            'book_id'=>$this->input->post('txt_book_id'),
            'date_borrowed'=>$this->input->post('txt_date_borrowed'),
            'due_date'=>$this->input->post('txt_due_date')

        );
        $this->db->where('id',$id);
        $this->db->update('circulation',$field);
        if($this->db->affected_rows()>0){
            return true;
        }
        else{
            return false;
        }
    }
}



 ?>
