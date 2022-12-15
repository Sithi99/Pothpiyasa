<?php

//Login controller
class AdminLogin extends Controller
{
    public function index()
    {
        $errors = array();

        if (count($_POST) > 0) {

            $user = new User();

            if ($row = $user->where('UserName', $_POST['UserName'])) {

                //$row comes as array of items (Array ( [0] => stdClass Object ( [UserID] => 1 [RegistrationNo] => 2020/CS/212....)
                $row = $row[0];

                //$row[0], (stdClass Object ( [UserID] => 1 [RegistrationNo] => 2020/CS/212..)

                if (password_verify($_POST['Password'],$row->Password)) {

                    Auth::authenticate($row);

                    
                    if($row->JobType == "Administrator")
                    {
                        $this->redirect('AdminDashboard');

                    }

                    if($row->JobType == "Librarian")
                    {
                        // $this->redirect('Librarian');
                    }

                } else {
                    $errors['UserName'] = "Invalid User Name / Password";
                }

            } else {

                $errors['UserName'] = "Invalid User Name";

            }

        }

        $this->view('admin/login', ['errors' => $errors]);
    }
}