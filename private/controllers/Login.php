<?php

//Login controller
class Login extends Controller
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
                    $this->redirect('home');

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