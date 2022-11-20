<?php

class Model extends Database
{
    
    public function __construct()
    {
        if(!property_exists($this, 'table'))
        {
            $this->table = strtolower($this::class);
        }
    }

    //Functions that common to every model 
    public function where($column,$value) //Getting single record
    {
        $column = addslashes($column);
        $query = "SELECT * FROM $this->table WHERE $column = :value";

        //Here, supply query data seperately
        return $this->query($query, ['value' => $value] );
    }

    public function findAll() //Getting single record
    {
        
        $query = "SELECT * FROM $this->table";

        return $this->query($query);
    }


}