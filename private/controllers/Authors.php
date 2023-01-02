<?php

//Users controller
class Authors extends Controller
{

    public function index()
    {
        if(!Auth::logged_in())
        {
            $this->redirect('login');
        }

        $author = new Author();
        if (isset($_POST['filter_type_author'])) {

            $column = $_POST['author_filter_type'];
            $value = $_POST['author_filter_typo_input'];

            if ($column == 'Name') {
                $data = $author->where($column, $value);

            } elseif ($column == 'AuthorID') {
                $data = $author->where($column, $value);

            } else {
                $data = $author->findAll();
            }

        } else {

            $data = $author->findAll();

        }
        $this->view('librarian/authors.view',['rows' => $data]);
    }

    public function viewOne($id = null)
    {

        $author = new Author();

       
        //Getting existing data from database
        $row = $author->where('AuthorID', $id);
        $this->view('librarian/authors.view.view',['row' => $row]);
    }

    public function add()
    {
        $errors = array();
        $flag = array(0);


        if(count($_POST) > 0)
        {
            $author = new Author();
            
            $img_name =$_FILES['imagefile']['name'];
            $img_size =$_FILES['imagefile']['size'];
            $tmp_name =$_FILES['imagefile']['tmp_name'];
            $error =$_FILES['imagefile']['error'];

            $img_ex =pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc =strtolower($img_ex);
            $allowed_exs = array("jpg","jpeg","png");
            
           
            
            if($author->validate($_POST,$img_size,$img_ex_lc))
            {

         

                if(in_array($img_ex_lc, $allowed_exs)){
                    $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
                    $img_upload_path = 'uploads/'.$new_img_name;
                    move_uploaded_file($tmp_name,$img_upload_path);
                    //$_POST['imagefile']=$img_upload_path;
                    $authorData['ImgUrl'] = $new_img_name;
                    //print_r($authorData['ImgUrl']);
                }


                $authorData['Name'] = $_POST['Name'];
                $authorData['Sex'] = $_POST['Sex'];
                $authorData['Email'] = $_POST['Email'];
                
                //get staffid from userid
                $value = Auth::profileID();
                $authorData['AddStaffID'] = get_staffid('UserID', $value);


                $author->insert($authorData);

               //$this->redirect('librariandashboard/home');
               $flag[0] = 1;
              
            }else{
                
                $errors = $author->errors;
                //print_r($errors);
                
            }
           
                
        }


            
        

        $this->view('librarian/authors.add',['errors'=>$errors,'flag'=>$flag]);
    }

    public function edit($id = null)
    {
       
        $errors = array();
        $flag = array(0);

        $author = new Author();

       
        //Getting existing data from database
        $row = $author->where('AuthorID', $id);

        if (count($_POST) > 0) {

            $img_name =$_FILES['imagefile']['name'];
            $img_size =$_FILES['imagefile']['size'];
            $tmp_name =$_FILES['imagefile']['tmp_name'];
            $error =$_FILES['imagefile']['error'];

            $img_ex =pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc =strtolower($img_ex);
            $allowed_exs = array("jpg","jpeg","png");
            
            
            if ($author->validateEdit($_POST)) {

                
                if(in_array($img_ex_lc, $allowed_exs)){
                    $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
                    $img_upload_path = 'uploads/'.$new_img_name;
                    move_uploaded_file($tmp_name,$img_upload_path);
                    //$_POST['imagefile']=$img_upload_path;
                    $authorData['ImgUrl'] = $new_img_name;
                    //print_r($authorData['ImgUrl']);
                }

                $authorData['Name'] = $_POST['Name'];
                $authorData['Sex'] = $_POST['Sex'];
                $authorData['Email'] = $_POST['Email'];
                
                //get staffid from userid
                $value = Auth::profileID();
                $authorData['AddStaffID'] = get_staffid('UserID', $value);


                

                //Insert data to user table
                $author->update('AuthorID',$id, $authorData);


                
                //$this->redirect('authors');
                $flag[0] = 1;

 


            } else {
                $errors = $author->errors;
                //print_r($errors);

            }
        }

        
        $this->view('librarian/authors.edit',['row' => $row,'errors'=>$errors,'flag'=>$flag]);
    }

    // public function delete($id = null)
    // {
      
    //     $author = new Author();

    //     //Getting existing data from database
    //     $row = $author->where('AuthorID', $id);

      
          
    //         //Delete data from user table
    //         $author->delete('AuthorID',$id);
    //         $this->redirect('authors');

    // } 

      //delete author
      public function delete($id = Null){
        $author = new Author();
        $flag = array(0);
        
         //Delete data from user table
         $row = $author->delete('AuthorID',$id);
        if(empty($row)){
            $flag[0]=1;
        }
            
            $this->view("librarian/authors.delete",['row'=>$row,'flag'=>$flag]);
        
      
        
        
    }

     //delete preview author
     public function deletePreview($id = Null){
        $author = new Author();
   //Getting existing data from database
        $row = $author->where('AuthorID', $id);            
        $this->view("librarian/authors.deletePreview",['row'=>$row]);
        
      
        
        
    }
    
    

}

