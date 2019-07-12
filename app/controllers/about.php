<?php
/**
 * 
 */
class About extends Controller
{

    public function index($nama = 'Heri Fidiawan', $alias = 'Hery_Dev__'){
        $data['nama'] = $nama;
        $data['alias'] = $alias;
        $data['title'] = 'ABOUT';
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