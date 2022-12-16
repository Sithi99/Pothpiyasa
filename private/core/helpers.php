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

//When give the 
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


   function get_BookCategory($key,$data){
    $staff = new RackBookBookCategory();
    if($row = $staff->where($key,$data)){
        $userID= $row[0]->CategoryID;
    }
    $user = new BookCategory();
    if($row2 = $user->where("ID",$userID)){
       return $row2[0]->FirstName." ".$row2[0]->LastName;
    }
    else{
        return "None";
    }
}




   
//kasun



//get userID
function get_userID($key,$data){
    $staff = new LibraryStaff();
    if($row = $staff->where($key,$data)){
        return $row[0]->StaffID;
    }
    else{
        return "None";
    }
}

//get authorID
function get_authorID($key,$data){
    $author = new Author();
    if($row = $author->where($key,$data)){
        return $row[0]->AuthorID;
    }
    else{
        return "None";
    }
}

//get authorName
function get_authorName($key,$data){
    $author = new Author();
    if($row = $author->where($key,$data)){
        return $row[0]->Name;
    }
    else{
        return "None";
    }
}

//get Vendor Name
function get_VendorName($key,$data){
    $vendor = new Vendor();
    if($row = $vendor->where($key,$data)){
        return $row[0]->Name;
    }
    else{
        return "None";
    }
}

//get donor Name
function get_DonorName($key,$data){
    $donor = new Donor();
    if($row = $donor->where($key,$data)){
        return $row[0]->Name;
    }
    else{
        return "None";
    }
}

//get staff Name
function get_StaffName($key,$data){
    $staff = new LibraryStaff();
    if($row = $staff->where($key,$data)){
        $userID= $row[0]->UserID;
    }
    $user = new User();
    if($row2 = $user->where("UserID",$userID)){
       return $row2[0]->FirstName." ".$row2[0]->LastName;
    }
    else{
        return "None";
    }
}

//get category name
function get_CategoryName($key,$data){
    $category = new BookCategory();
    if($row = $category->where($key,$data)){
        return $row[0]->Name;
    }
    else{
        return "None";
    }
}