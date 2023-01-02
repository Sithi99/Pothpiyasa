<?php

//Users controller
class Racks extends Controller
{

    public function index()
    {
        if(!Auth::logged_in())
        {
            $this->redirect('login');
        }

        $rack = new Rack();

        if (isset($_POST['filter_type_rack'])) {

            $column = $_POST['rack_filter_type'];
            $value = $_POST['rack_filter_typo_input'];
            
            if ($column == 'RackID') {
                $data = $rack->where($column, $value);

            } elseif ($column == 'CategoryID') {
                $data = $rack->where($column, $value);

            } elseif ($column == 'Name') {
                $category = new BookCategory();
                $column1 = $category->where($column,$value);
                $data = $rack->where('CategoryID', $column1[0]->CategoryID);


            } else {
                $data = $rack->findAll();
            }

        } else {

            $data = $rack->findAll();

        }


        $this->view('librarian/racks.view',['rows' => $data]);
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
            $rack = new Rack();
            //print_r($_POST);
           
            if($rack->validate($_POST))
            {
            
                

                $rackData['NoOfBooks'] = $_POST['NoOfBooks1'];
                $rackData['CategoryID'] =$_POST['bookcategory1'];
                
                
                //get staffid from userid
                $value = Auth::profileID();
                $rackData['AddStaffID'] = get_staffid('UserID', $value);
                $rack->insert($rackData);
                $racklast = new Rack();
                $data =$racklast->last('RackID','RackID');
                //print_r($data);
                
                

                if(($_POST['bookcategory2'])!=' '){

                   
                    $rack1 = new Rack();
                           
                            $rackData1['RackID']=$data[0]->RackID;
                            $rackData1['NoOfBooks'] = $_POST['NoOfBooks2'];
                            $rackData1['CategoryID'] = $_POST['bookcategory2'];
                            
                            
                            //get staffid from userid
                            $value1 = Auth::profileID();
                            $rackData1['AddStaffID'] = get_staffid('UserID', $value1);
                           

                            

                            $rack1->insert($rackData1);
                        
                            


                
               
                

              }
              ///$this->redirect('librariandashboard/home');
              $flag[0] = 1;


        }else{
                
            $errors = $rack->errors;
           

            
        }

      }
        $this->view('librarian/racks.add',['errors'=>$errors,'flag'=>$flag]);
    }

    public function edit($id = null,$id2=null)
    {
       
        $errors = array();
        $flag = array(0);


        $rack = new Rack();

       
        //Getting existing data from database
        $row = $rack->where('CategoryID', $id2);
        $this->view('librarian/racks.edit',['row' => $row,'errors'=>$errors]);
        
        if (count($_POST) > 0) {
            
            if ($rack->validateEdit($_POST,$id2)) {

                $rackData['NoOfBooks'] = $_POST['NoOfBooks1'];
                $rackData['CategoryID'] =$_POST['bookcategory1'];
                
                //get staffid from userid
                $value = Auth::profileID();
                $rackData['AddStaffID'] = get_staffid('UserID', $value);


               

                //Insert data to user table
                $rack->update('RackID',$id, $rackData);


               
                //$this->redirect('racks');
                $flag[0] = 1;


            } else {
                $errors = $rack->errors;
                //print_r($errors);

            }
        }

        
    }

    public function delete($id = null)
    {
      
        $author = new Author();

        //Getting existing data from database
        $row = $author->where('AuthorID', $id);

      
          
            //Delete data from user table
            $author->delete('AuthorID',$id);
            $this->redirect('authors');

    } 
    
    

}

