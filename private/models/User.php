<?php

//Each table in the database that should have this kind of model

class User extends Model
{

     //Validation is differ from one model to another
     public function validate($DATA)
     {

          $this->errors = array();

          //Check for first name
          // if (!preg_match('/^[a-zA-Z]+$/', $DATA['FirstName'])) {
          //      $this->errors['FirstName'] = "Only letters allowed in first name";
          // }

          //Check for last name
          if (!preg_match('/^[a-zA-Z]+$/', $DATA['LastName'])) {
               $this->errors['LastName'] = "Only letters allowed in last name";
          }

          //Check for email
          if (!filter_var($DATA['Email'], FILTER_VALIDATE_EMAIL)) {
               $this->errors['Email'] = "Email is not valid";
          }

          //Check if email exist
          if ($this->where('Email', ($DATA['Email']))) {
               $this->errors['Email'] = "This email is already in use";
          }

          //Check if registration no exist
          if ($this->where('RegistrationNo', ($DATA['RegistrationNo']))) {
               $this->errors['RegistrationNo'] = "This Registration Number is already exist";
          }


          if (count($this->errors) == 0) {

               return true;
          }

          return false;
        
     }

     public function validateEdit($DATA)
     {

          $this->errors = array();

          //Check for first name
          // if (!preg_match('/^[a-zA-Z]+$/', $DATA['FirstName'])) {
          //      $this->errors['FirstName'] = "Only letters allowed in first name";
          // }

          //Check for last name
          if (!preg_match('/^[a-zA-Z]+$/', $DATA['LastName'])) {
               $this->errors['LastName'] = "Only letters allowed in last name";
          }

          //Check for email
          if (!filter_var($DATA['Email'], FILTER_VALIDATE_EMAIL)) {
               $this->errors['Email'] = "Email is not valid";
          }

          //Check if email exist
          // if ($this->where('Email', ($DATA['Email']))) {
          //      $this->errors['Email'] = "This email is already in use";
          // }

          //Check if registration no exist
          // if ($this->where('RegistrationNo', ($DATA['RegistrationNo']))) {
          //      $this->errors['RegistrationNo'] = "This Registration Number is already exist";
          // }


          if (count($this->errors) == 0) {

               return true;


          }

          return false;
     
          
     }


}