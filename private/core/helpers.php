<?php

//Return user fill and submitted values
function get_var($key,$default ="")
{

    if (isset($_POST[$key])) {
        return $_POST[$key];
    }
    
    return $default;
    
}

//For selecting input fields
function get_select($key,$value,$default = "")
{
    if (isset($_POST[$key])) 
    {
        if($_POST[$key] == $value)
        {
            return "selected";
        }    
    }

    if ($default == $value)
    {
        return "selected";

    }
    
    return "";

}

//Escape harmful code
function esc($var)
{
    return htmlspecialchars($var);

}

function random_string($length)
{
    $number = "";

    for($x = 0; $x < $length; $x++)
    {

        $random = rand(0,9);
        $number .= $random;
    }

    return $number;
}

//This function return the date like, 15th Aug, 2022
function get_date($date)
{
    return date("jS M, Y", strtotime($date));
}

//When give the 
function get_user_name($key,$value)
{
    $user = new User();
    if ($row = $user->where($key, $value)) {
        $row = $row[0];
        return $row->FirstName . " " . $row->MidName;
    }else{
        return "None";
    }
}

function get_staff_name($key,$value)
{
    $user = new LibraryStaff();
    if ($row = $user->where($key, $value)) {
        $row = $row[0];
        $value1 = $row->UserID;
        //return $value1;

         $member = new User();
        if($row1= $member->where('UserID',$value1)){
            $row1 = $row1[0];
            return $row1->FirstName."".$row1->MidName." ".$row1->LastName;

        }
       
    }else{
        return "None";
    }
}

function get_staffid($key,$value)
{
    $user = new LibraryStaff();
    if ($row = $user->where($key, $value)) {
        $row = $row[0];
        return $row->StaffID;

 
       
    }else{
        return "None";
    }
}


function get_bookid($key,$value)
{
    $user = new LibraryStaff();
    if ($row = $user->where($key, $value)) {
        $row = $row[0];
        return $row->StaffID;

 
       
    }else{
        return "None";
    }
}


function viewbooksforauthor($authorID)
    {
       
        $book = new Book();
        $data = $book->where("AuthorID",$authorID);
        return $data;
   }


 
