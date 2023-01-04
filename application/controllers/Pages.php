<?php 
    class Pages extends CI_Controller{
        public function view($page = 'home'){
            if(!file_exists(APPPATH . 'views/pages/'. $page . '.php')){
                show_404();
                // echo "this works";
            }

            $data['products'] = $this->product_model->get_preporucujemo();

            $naslov['title'] = 'Pro-technology Electronics sistemi za PCB montažu,lemilice,antistatik';;
            $this->load->view('templates/header', $naslov);
            $this->load->view('pages/' . $page, $data);
            $this->load->view('templates/menu');
            $this->load->view('templates/recommended');
            $this->load->view('templates/partneri');
            $this->load->view('templates/about');
            $this->load->view('templates/footer');
        }
        public function galerija($page = 'galerija') {
            $naslov['title'] = 'Pro-technology Electronics sistemi za PCB montažu,lemilice,antistatik';;
            $this->load->view('templates/header', $naslov);
            $this->load->view('pages/' . $page);
            $this->load->view('templates/about');
            $this->load->view('templates/footer');
        }
    }