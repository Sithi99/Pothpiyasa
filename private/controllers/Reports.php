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
        
        if(!Auth::logged_in())
        {
            $this->redirect('AdminLogin');
        }

        $issuebook = new IssueBook();

        if (isset($_POST['issue_filter_typo_search'])) {

            $column = $_POST['issue_user_filter_typo'];

            $value = $_POST['issue_user_filter_typo_input'];

            if ($column == 'BookID') {
                $data = $issuebook->where($column, $value);

            } elseif ($column == 'UserID') {
                $data = $issuebook->where($column, $value);

            } elseif ($column == 'StaffID') {
                $data = $issuebook->where($column, $value);

            } else {
                $data = $issuebook->findAll();
            }

        } else {

             $data = $issuebook->findAll();
            
        }

        
        $this->view('admin/reports/issued.report',['rows' => $data]);

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

        $returnbook = new ReturnBook();

        if (isset($_POST['issue_filter_typo_search'])) {

            $column = $_POST['issue_user_filter_typo'];

            $value = $_POST['issue_user_filter_typo_input'];

            if ($column == 'BookID') {
                $data = $returnbook->where($column, $value);

            } elseif ($column == 'UserID') {
                $data = $returnbook->where($column, $value);

            } elseif ($column == 'StaffID') {
                $data = $returnbook->where($column, $value);

            } else {
                $data = $returnbook->findAll();
            }

        } else {

             $data = $returnbook->findAll();
            
        }
        
        $this->view('admin/reports/returned.report',['rows' => $data]);

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

        $returnbook = new ReturnBook();

        if (isset($_POST['issue_filter_typo_search'])) {

            $column = $_POST['issue_user_filter_typo'];

            $value = $_POST['issue_user_filter_typo_input'];

            if ($column == 'BookID') {
                $data = $returnbook->where($column, $value);

            } elseif ($column == 'UserID') {
                $data = $returnbook->where($column, $value);

            } elseif ($column == 'StaffID') {
                $data = $returnbook->where($column, $value);

            } else {
                $data = $returnbook->findAll();
            }

        } else {

             $data = $returnbook->findAll();
            
        }
        
        $this->view('admin/reports/fine.report',['rows' => $data]);

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

    public function withdrawn_books_T()
    {
        if(!Auth::logged_in())
        {
            $this->redirect('AdminLogin');
        }
        
        $this->view('admin/reports/withdrawn(t).report');

    }

    public function fine_payment()
    {
        if(!Auth::logged_in())
        {
            $this->redirect('AdminLogin');
        }
        
        $this->view('admin/reports/finePayment.report');

    }

    public function photocopies()
    {
        if(!Auth::logged_in())
        {
            $this->redirect('AdminLogin');
        }
        
        $this->view('admin/reports/photocopies.report');

    }

    public function donors_vendors()
    {
        if(!Auth::logged_in())
        {
            $this->redirect('AdminLogin');
        }
        
        $this->view('admin/reports/donorsVendors.report');

    }

    


}