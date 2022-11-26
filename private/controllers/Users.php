<?php

//Users controller
class Users extends Controller
{
    public function index()
    {
        //$this->view('login');
    }

    public function add()
    {
        $this->view('admin/users.add');
    }
}