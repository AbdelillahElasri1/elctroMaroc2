<?php 

    // all pages class controller
    class Pages extends Controller
    {
        public function index()
        {
            $data = [
                'title' => 'sharePost',
                'description' => 'lorennnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn'
            ];
            $this->view('pagesClients/index',$data);
        }
        public function about()
        {
            $this->view('pagesClients/about');
        }
        public function contact()
        {
            $this->view('pagesClients/contact');
        }
        public function categorie()
        {
            $this->view('pagesClients/categorie');
        }
        public function product()
        {
            $this->view('pagesClients/product');
        }
        public function login()
        {
            $this->view('pagesClients/login');
        }
        public function register()
        {
            $this->view('pagesClients/register');
        }
    }