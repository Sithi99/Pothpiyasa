<?php 
    class BookCategory extends Model
    {
  
 
     //Validation is differ from one model to another
     public function validate($DATA)
     {
          
          $this->errors = array();
          
          
          if(!preg_match('/^[a-zA-Z-, ]*$/',$DATA['Name']))
          {
               $this->errors['bookCategoryName'] = "Only letters and white space are allowed";
               //"Only letters allowed in category  name";
          }

          if($this->where('Name',($DATA['Name'])))
          {
               $this->errors['bookCategoryName'] = "This Category is already exists.";
          }


          if(count($this->errors) == 0)
          {
               return true;
          }

          return false;
     }


     public function validateEdit($DATA)
     {
          
          $this->errors = array();
         
          if(!preg_match('/^[a-zA-Z-, ]*$/',$DATA['Name']))
          {
               $this->errors['Name'] = "Only letters and white space are allowed";
               //"Only letters allowed in category name";
          }

        
          if(count($this->errors) == 0)
          {
               return true;
          }

          return false;
     }

    }
    