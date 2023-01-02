<<<<<<< Updated upstream
<?php

class LibrarianDashboard extends Controller
{
    public function index()
    {
        if(!Auth::logged_in())
        {
            $this->redirect('login');
        }
        $this->view('librarian/home');
    }
=======
<?php

class LibrarianDashboard extends Controller
{
    public function index()
    {
        if(!Auth::logged_in())
        {
            $this->redirect('login');
        }
        $this->view('librarian/home');
    }
>>>>>>> Stashed changes
}