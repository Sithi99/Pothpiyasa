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
        return $row->FirstName . " " . $row->LastName;
    }else{
        return "None";
    }
}

//Sandali
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
            return $row1->FirstName." ".$row1->LastName;

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

//get category name
function get_BookCategory($key,$data){
   
    $category = new BookCategory();
    $data = $category->where($key,$data);
    //print_r($data);
    return $data[0]->Name;
    
    
}


//get rack id
function get_rackID($key,$data){
    $rack = new Rack();
    if($row = $rack->where($key,$data)){
        return $row[0]->RackID;
    }
    else{
        return "None";
    }
}

// //get category id

// function get_categoryID($key,$data){
//     $category = new BookCategory();
//     if($row = $category->where($key,$data)){
//         return $row[0]->CategoryID;
//     }
//     else{
//         return "None";
//     }
// }


function display_categories(){
    $category = new BookCategory();
    $data = $category->findAll();
    
    return $data;
                
}

function get_bookname($key,$data){
    $book = new Book();
    if($row = $book->where($key,$data)){
        return $row[0]->Title;
    }
    else{
        return "None";
    }
                
}

//get fine amount

function get_fine($key1,$data1,$data2){
    $book = new ReturnBook();
    if($rows = $book->where($key1,$data1)){
        $flag =0;

        foreach ($rows as $row){
            if(($row->BookID==$data2) && ($row->FineStatus==-1)){
                $flag =1;
                return $row->FineAmount;
            }
            

        }
        if($flag==0){
            return "None";
        }

    }
    else{
            return "None2";
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


//get category id
function get_categoryID($key,$data){
    $category = new BookCategory();
    if($row = $category->where($key,$data)){
        return $row[0]->CategoryID;
    }
    else{
        return "None";
    }
}

// get delete url
// function set_DeleteUrl($link){
//     $GLOBALS['deleteLink'] = $link;
// }

// function get_DeleteUrl(){
//     return $GLOBALS['deleteLink'];
// }


function get_selectedVendorDonorName($vendorID,$donorID){
if(!empty($vendorID)){
    $vendor = new Vendor();
    if($row = $vendor->where("VendorID",$vendorID)){
        return $row[0]->Name;
    }
    else{
        return "None";
    }
}
else if(!empty($donorID)){
    $donor = new Donor();
    if($row = $donor->where("DonorID",$donorID)){
        return $row[0]->Name;
    }
    else{
        return "None";
    } 
}
}

//select default button clicked
function select_redioButton($value)
{

    if (!empty($value)) {
        return "checked";
    }
    return "";
    
}

<<<<<<< Updated upstream
//get donor ID
function get_DonorID($key,$data){
    $donor = new Donor();
    if($row = $donor->where($key,$data)){
        return $row[0]->DonorID;
    }
    else{
        return "None";
    }
}

//get Vendor ID
function get_VendorID($key,$data){
    $vendor = new Vendor();
    if($row = $vendor->where($key,$data)){
        return $row[0]->VendorID;
    }
    else{
        return "None";
    }
}




=======
>>>>>>> Stashed changes

 
