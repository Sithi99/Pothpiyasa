<?php

//Books controller
class Books extends Controller
{

    public function index()
    {
        if(!Auth::logged_in())
        {
            $this->redirect('login');
        }

        $book = new Book();
        $data = $book->findAll();
        $this->view('librarian/book.view',['rows' => $data]);
    }

    public function add()
    {
        $errors = array();
        $flag = array(0);
        
        if(count($_POST) > 0)
        {
            $book = new Book();
            
            if($book->validate($_POST))
            {
                $imgName = $_FILES['Image']['name'];
                $imgSize = $_FILES['Image']['size'];
                $tempName = $_FILES['Image']['tmp_name'];
                $error = $_FILES['Image']['error'];

                if($error == 0){
                    if($imgSize>125000){
                        $em = "Sorry your file is too large";
                        echo $em;
                    }
                    else{
                        $imgEx = pathinfo($imgName,PATHINFO_EXTENSION);
                        $imgExLc = strtolower($imgEx);
                        $allowedExs = array("jpg","jpeg","png");

                        if(in_array($imgExLc,$allowedExs)){
                            $newImgName = uniqid("IMG-",true).'.'.$imgExLc;
                            $imgUploadPath = 'uploads/'.$newImgName;
                            move_uploaded_file($tempName,$imgUploadPath);
                            $bookData['Image'] = $newImgName;
                        }
                    }
                }

                
                $bookData['ISBN'] = $_POST['ISBN'];
                $bookData['Title'] = $_POST['Title'];
                $bookData['Edition'] = $_POST['Edition'];
                $bookData['NoPages'] = $_POST['NoPages'];
                $bookData['Language'] = $_POST['Languages'];
                $bookData['PublishedYear'] = $_POST['PublishedYear'];
                $bookData['Publisher'] = $_POST['Publisher'];
                $bookData['ReceivedDate'] = $_POST['ReceivedDate'];

                //add data vendor
                if(!empty($_POST['VendorID'])){
                    $bookData['VendorID']=$_POST['VendorID'];
                }else{
                    $bookData['VendorID'] = NULL;
                }

                //add data donor
                if(!empty($_POST['DonorID'])){
                    $bookData['DonorID']=$_POST['DonorID'];
                }else{
                    $bookData['DonorID'] = NULL;
                }
                // $bookData['Condition'] = $_POST['Condition'];
                $bookData['RackID'] = $_POST['RackID'];
                $bookData['Category'] = $_POST['Category'];

                // add staff id 
            
                $bookData['AddStaffID'] = get_userID("UserID",Auth::profileID());

                // add author ID

                // $author = new Author();
                // $data2 = $author->findAll();
                // for ($i=0; $i <count($data2) ; $i++) { 
                //     if($_POST['AuthorName']==$data2[$i]->Name){
                //         $bookData['AuthorID'] = $data2[$i]->AuthorID;
                //     }
                // }
                $bookData['AuthorID'] = get_authorID("Name",$_POST["AuthorName"]);
                  
                $book->insert($bookData);
                echo '<script type="text/javascript">
                        window.onload = function () { alert("Welcome"); }; </script>'; 
                
                // $this->redirect('home');
                $flag[0] = 1;

            }else{
                $errors = $book->errors;
                print_r($errors) ;
                
            }
            
        }
        
        $this->view('librarian/book.add',['errors'=>$errors,'flag'=>$flag]);

    }
    //edit book
    public function edit($id = Null){
        $book = new Book();
        $row = $book->where("BookID",$id);
        
        $this->view("librarian/book.edit",['row'=>$row]);
    }

    //delete book
    public function delete($id = Null){
        $book = new Book();
        $book->delete("BookID",$id);

        $this->redirect('books?page=1');
        
        
    }

    //delete book
    public function viewSpecific($id = Null){
        $book = new Book();
        $row =$book->where("BookID",$id);
        
        $this->view("librarian/book.view.view",['row'=>$row]);
        
        
    }

}


