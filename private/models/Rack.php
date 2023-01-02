<?php  
    class Rack extends Model
    {



       
     //Validation is differ from one model to another
     public function validate($DATA)
     {
          
          $this->errors = array();
          
                //Check for NoOfBooks is a number

          if(!preg_match('/^[0-9]*$/',$DATA['NoOfBooks1']))
          {
               $this->errors['NoOfBooks1'] = "Only numbers are allowed";
           
          }

           //Check for NoOfBooks is negative value
          if(($DATA['NoOfBooks1'])<=0)
          {
               $this->errors['NoOfBooks1'] = "Enter correct book count.";
          }


          
          //Check for NoOfBooks is a number

          if(!preg_match('/^[0-9]*$/',$DATA['NoOfBooks2']))
                {
                     $this->errors['NoOfBooks2'] = "Only numbers are allowed";
                 
                }
      


          //check book count for category 2
           if($DATA['bookcategory2']!=' '){

               if($DATA['NoOfBooks2'] <= 0)
                {
                     $this->errors['NoOfBooks2'] = "Enter correct book count.";
                }

           }

          

          if($DATA['NoOfBooks2'])
            {
                    if($DATA['bookcategory2']==' '){
                    
                         $this->errors['bookcategory2'] = "Select a category first.";
                   }
                   

           }

           //Check for categories is unique
                 if($DATA['bookcategory1'] == $DATA['bookcategory2'])
                 {
                      $this->errors['bookcategory2'] = "Cannot Select Same Category.";
                 }

          if(count($this->errors) == 0)
          {
               return true;
          }

          return false;
     }


     public function validateEdit($DATA,$var)
     {
         
          $this->errors = array();
          
                //Check for NoOfBooks is a number

          if(!preg_match('/^[0-9]*$/',$DATA['NoOfBooks1']))
          {
               $this->errors['NoOfBooks1'] = "Only numbers are allowed.";
           
          }

         

          if($DATA['bookcategory1']== $var)
          {
               $this->errors['bookcategory1'] = "This Category already exists.";
           
          }

           //Check for NoOfBooks is negative value
          if(($DATA['NoOfBooks1'])<=0)
          {
               $this->errors['NoOfBooks1'] = "Enter correct book count.";
          }



          if(count($this->errors) == 0)
          {
               return true;
          }

          return false;
   

     }


        
    }
    