<?php

class Book extends Model
{
    public function validate($DATA)
     {
          // print_r($DATA);
          $this->errors = array();

          // Check for title
          if(!preg_match('/^[a-zA-Z-, ]*$/',$DATA['Title']))
          {
               $this->errors['Title'] = "Title can not correct";
          }

          //Check for ISBN
          if(!is_numeric($DATA['ISBN']) || strlen((string)$DATA['ISBN'])!=13)
          {
              echo strlen((string)$DATA['ISBN']);
               $this->errors['ISBN'] = "ISBN can not correct";
          }

          $book = new Book();
          $data = $book->findAll();
          
          for ($i=0; $i < count($data) ; $i++) { 
               if($data[$i]->ISBN == $DATA['ISBN']){
                    $this->errors['ISBN'] = "ISBN already exists"; 
               }
              
          }
          


          //Check for edition
          if(!preg_match('/^[0-9]+$/',$DATA['Edition']))
          {
               $this->errors['Edition'] = "Only numbers allowed";
          }

          //Check for author
          if(!preg_match('/^[a-zA-Z-, ]*$/',$DATA['AuthorName']))
          {
               $this->errors['Author'] = "Author name can not correct";
          }

          // $author = new Author();
          // $data1 = $author->findAll();

          // for ($i=0; $i < count($data1) ; $i++) { 
          //      if($data1[$i]->Name != $DATA['AuthorName']){
          //           echo $data1[$i]->Name;
          //           $this->errors['AuthorName'] = "Author should be defined"; 
          //      }
              
          // }

          //check for number of pages
          if(!preg_match('/^[0-9]*$/',$DATA['NoPages'])){
               $this->errors['NoPages'] = "No Pages Should be numbers"; 
          }

          if(count($this->errors) == 0)
          {
               return true;
          }

          return false;
     
     }
}