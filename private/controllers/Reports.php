<?php

class Reports extends Controller
{
    
    public function index()
    {
        if(!Auth::logged_in())
        {
            $this->redirect('AdminLogin');
        }
        
        $this->view('admin/reports/main.report');

    }

    public function issued_books()
    {
        // $book = new Book();
        // $data = $book->findAll();

        if(!Auth::logged_in())
        {
            $this->redirect('AdminLogin');
        }
        
        $this->view('admin/reports/issued.report');

    }

    public function damaged_books()
    {
        if(!Auth::logged_in())
        {
            $this->redirect('AdminLogin');
        }
        
        $this->view('admin/reports/damaged.report');

    }

    public function returned_books()
    {
        if(!Auth::logged_in())
        {
            $this->redirect('AdminLogin');
        }
        
        $this->view('admin/reports/returned.report');

    }

    public function withdrawn_books()
    {
        if(!Auth::logged_in())
        {
            $this->redirect('login');
        }
        
        $this->view('admin/reports/withdrawn.report');

    }

    public function lost_books()
    {
        if(!Auth::logged_in())
        {
            $this->redirect('AdminLogin');
        }
        
        $this->view('admin/reports/lost.report');

    }

    public function fine_report()
    {
        if(!Auth::logged_in())
        {
            $this->redirect('AdminLogin');
        }
        
        $this->view('admin/reports/fine.report');

    }

    public function missing()
    {
        if(!Auth::logged_in())
        {
            $this->redirect('AdminLogin');
        }
        
        $this->view('admin/reports/missing.report');

    }

    public function inventory_report()
    {
        if(!Auth::logged_in())
        {
            $this->redirect('AdminLogin');
        }
        
        $this->view('admin/reports/inventory.report');

    }

    


}