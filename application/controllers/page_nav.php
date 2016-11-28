<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class page_nav extends CI_Controller {

    public function goto_home(){
        $this->load->view('home');
    }

    public function goto_services(){
        $this->load->view('Services');
    }

    public function goto_about_us(){
        $this->load->view('page-about-us');
    }

    public function goto_contact(){
        $this->load->view('contact');
    }

    public function goto_weddings(){
        $this->load->view('weddings');
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

    public function goto_pirith(){
        $this->load->view('pirith');
    }

    public function goto_make_your_own(){
        $this->load->view('make-your-own');
    }

    public function goto_login(){
        $this->load->view('page-login');
    }

    public function goto_sign_up(){
        $this->load->view('page-sign-up');
    }

    public function goto_wed_hall_deco(){
        $this->load->view('wedding/hall_deco');
    }

    public function goto_wed_halls(){
        $this->load->view('wedding/halls');
    }
    public function goto_wed_cakes(){
        $this->load->view('wedding/cakes');
    }
    public function goto_wed_catering(){
        $this->load->view('wedding/catering');
    }
    public function goto_wed_dresses(){
        $this->load->view('wedding/dresses');
    }
    public function goto_wed_makeup(){
        $this->load->view('wedding/make_up');
    }

    public function goto_wed_photo(){
        $this->load->view('wedding/photography');
    }

    public function goto_wed_printing(){
        $this->load->view('wedding/printing');
    }

    public function goto_wed_sounds(){
        $this->load->view('wedding/sounds');
    }





}

?>