<?php
class TangBlog extends CI_Controller{
  public function index(){
      $this->load->view('header');
      $this->load->view('index');
      $this->load->view('footer');
  }

  public function left_sidebar(){
      $this->load->view('header');
      $this->load->view('left_sidebar');
      $this->load->view('footer');
  }
}
 ?>
