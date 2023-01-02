<?php

//Users controller
class BookCategories extends Controller
{

    public function index()
    {
        if(!Auth::logged_in())
        {
            $this->redirect('login');
        }

        $category = new BookCategory();
        
        if (isset($_POST['filter_type_category'])) {

            $column = $_POST['category_filter_type'];
            $value = $_POST['category_filter_typo_input'];
            
            if ($column == 'CategoryID') {
                $data = $category->where($column, $value);

            } elseif ($column == 'Name') {
                $data = $category->where($column, $value);

            } else {
                $data = $category->findAll();
            }

        } else {

            $data = $category->findAll();

        }


        $this->view('librarian/bookcategories.view',['rows' => $data]);
    }

   

    public function add()
    {
        $errors = array();
        $flag = array(0);

        if(count($_POST) > 0)
        {
            $category = new BookCategory();
           
            if($category->validate($_POST))
            {
          
                $categoryData['Name'] = $_POST['Name'];
                
                //get staffid from userid
                $value = Auth::profileID();
                $categoryData['AddStaffID'] = get_staffid('UserID', $value);


                $category->insert($categoryData);

                //$this->redirect('librariandashboard/home');
                $flag[0] = 1;

           


            }else{
                
                $errors = $category->errors;
                //print_r($errors);
                
            }
        }

        $this->view('librarian/bookcategories.add',['errors'=>$errors,'flag'=>$flag]);
    }

    public function edit($id = null)
    {
       
        $errors = array();
        $flag = array(0);


        $category = new BookCategory();

       
        //Getting existing data from database
        $row = $category->where('CategoryID', $id);

        if (count($_POST) > 0) {

           
            
            if ($category->validateEdit($_POST)) {

                $categoryData['Name'] = $_POST['Name'];
               
                 //get staffid from userid
                 $value = Auth::profileID();
                 $categoryData['AddStaffID'] = get_staffid('UserID', $value);
 

                

                //Insert data to user table
                $category->update('CategoryID',$id, $categoryData);

                


                
               // $this->redirect('bookcategories');
               $flag[0] = 1;





            } else {
                $errors = $category->errors;
                //print_r($errors);

            }
        }

        
        $this->view('librarian/bookcategories.edit',['row' => $row,'errors'=>$errors,'flag'=>$flag]);
    }

    public function delete($id = null)
    {
      
        $category = new BookCategory();

        //Getting existing data from database
        $row = $category->where('CategoryID', $id);

      
          
            //Delete data from user table
            $category->delete('CategoryID',$id);
            $this->redirect('bookcategories');

    } 
    
    

}

