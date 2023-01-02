<<<<<<< Updated upstream
<?php

class LibraryStaffDashboard extends Controller
{
    public function index()
    {
        if(!Auth::logged_in())
        {
            $this->redirect('login');
        }
        $this->view('librarystaff\home');
    }
=======
<?php

class LibraryStaffDashboard extends Controller
{
    public function index()
    {
        if(!Auth::logged_in())
        {
            $this->redirect('login');
        }
        $this->view('librarystaff\home');
    }
>>>>>>> Stashed changes
}