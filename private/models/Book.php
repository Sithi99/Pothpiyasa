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
               $this->errors['Author'] = "Author name is not correct";
          }
          else if(!empty($DATA['AuthorName'])){
               $author = new Author();
               $data = $author->where("Name",$DATA['AuthorName']);
               if(!$data){
                    $this->errors['Author'] = "Author does not exists"; 
               } 
          
          }
          //check for publisher
          if(!preg_match('/^[a-zA-Z-, ]*$/',$DATA['Publisher']))
          {
               $this->errors['Publisher'] = "Publisher name is not correct";
          }

          //publish year
          if(!(preg_match('/^[0-9]*$/',$DATA['PublishedYear'])) || strlen(strval($DATA['PublishedYear'])) !=4)
          {
               $this->errors['PublishedYear'] = "Published year is not correct";
          }

          //check for number of pages
          if(!preg_match('/^[0-9]*$/',$DATA['NoPages'])){
               $this->errors['NoPages'] = "No Pages Should be numbers"; 
          }
          if($DATA['NoPages']<1){
               $this->errors['NoPages'] = "No Pages can not be negative";  
          }


          if(count($this->errors) == 0)
          {
               return true;
          }

          return false;
     
     }


     public function EditBookValidation($DATA){
          
          $this->errors = array();
         
          // Check for title
          if(!preg_match('/^[a-zA-Z-, ]*$/',$DATA['Title']))
          {
               $this->errors['Title'] = "Title is not correct";
          }

          //Check for ISBN
          if(!is_numeric($DATA['ISBN']) || strlen((string)$DATA['ISBN'])!=13)
          {
              
               $this->errors['ISBN'] = "ISBN is not correct";
          }

          //Check for author
          if(!preg_match('/^[a-zA-Z-, ]*$/',$DATA['AuthorName']))
          {
               $this->errors['AuthorName'] = "Author name is not correct";
          }
          else if(!empty($DATA['AuthorName'])){
               $author = new Author();
               $data = $author->where("Name",$DATA['AuthorName']);
               if(!$data){
                    $this->errors['AuthorName'] = "Author does not exists"; 
               } 
          
          }
          

          //Check for edition
          if(!preg_match('/^[0-9]+$/',$DATA['Edition']))
          {
               $this->errors['Edition'] = "Only numbers allowed";
          }

          //check for publisher
          if(!preg_match('/^[a-zA-Z-, ]*$/',$DATA['Publisher']))
          {
               $this->errors['Publisher'] = "Publisher name is not correct";
          }

          //publish year
          if(!(preg_match('/^[0-9]*$/',$DATA['PublishedYear'])) || strlen(strval($DATA['PublishedYear'])) !=4)
          {
               $this->errors['PublishedYear'] = "Published year is not correct";
          }

          //check for number of pages
          if(!preg_match('/^[0-9]*$/',$DATA['NoPages'])){
               $this->errors['NoPages'] = "No Pages Should be numbers"; 
          }
          if($DATA['NoPages']<1){
               $this->errors['NoPages'] = "No Pages can not be negative";  
          }

          if(count($this->errors) == 0)
          {
               return true;
          }

          return false;
     }

     public function opacvalidate($DATA)
     {
          print_r($DATA);
          $this->errors = array();

          // Check for title
          if(!preg_match('/^[a-zA-Z-, ]*$/',$DATA['Title']))
          {
               $this->errors['Title'] = "Only letters and white space are allowed";
          }


          //author
          if(!preg_match('/^[a-zA-Z-, ]*$/',$DATA['Author']))
          {
               $this->errors['Author'] = "Only letters and white space are allowed";
          }

          //subject
          if(!preg_match('/^[a-zA-Z-, ]*$/',$DATA['Subject']))
          {
               $this->errors['Subject'] = "Only letters and white space are allowed";
          }


          //Check for ISBN1
          
         if(!empty($DATA['ISBN1'])){

               $book = new Book();
               $data = $book->findAll();
               $flag =0;
               for ($i=0; $i < count($data) ; $i++) { 
                    if($data[$i]->ISBN == $DATA['ISBN1']){
                         $flag=1;
                    
                    }
               
               }
               if($flag==0){
                    $this->errors['ISBN1'] = "Incorrect ISBN."; 

               }


         }
          



          if(count($this->errors) == 0)
          {
               return true;
          }

          return false;
     
     }

}