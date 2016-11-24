<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class page_nav extends CI_Controller {

    public function goto_services(){
        $this->load->view('Services');
    }

    public function goto_conferences(){
        $this->load->view('conferences');
    }

    public function goto_custom_parties(){
        $this->load->view('custom-parties');
    }

    public function goto_get_together(){
        $this->load->view('get-together');
    }

    public function goto_weddings(){
        $this->load->view('weddings');
    }

    public function goto_about_us(){
        $this->load->view('page-about-us');
    }

    public function goto_contact(){
        $this->load->view('contact');
    }

    public function goto_home(){
        $this->load->view('home');
    }


}

?>