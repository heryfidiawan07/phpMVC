<?php
/**
 * 
 */
class About extends Controller
{

    public function index(){
        $data['title'] = 'ABOUT';
        $data['admin'] = $this->model('User_model')->getUserById(1);
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    
    public function page(){
        $data['title'] = 'ABOUT PAGE';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
    
}