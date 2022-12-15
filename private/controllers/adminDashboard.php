<?php

class AdminDashboard extends Controller
{
    public function index()
    {
        if(!Auth::logged_in())
        {
            $this->redirect('AdminLogin');
        }
        $this->view('admin/adminDashboard');
    }
}