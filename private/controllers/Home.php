<?php

class Home extends Controller
{
    public function index()
    {
    
        $user = new User();

        $data = $user->where('FirstName','Sithija');
        //$data = $user->findAll();
    
        $this->view('home', ['rows' => $data]);
    }
}
