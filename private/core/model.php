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

    public function insert($data) //Getting single record
    {
        //Getting all the keys of associative array($data)
        $keys = array_keys($data);
        $columns = implode(',', $keys);
        $values = implode(',:', $keys);

        $query = "INSERT INTO $this->table ($columns) values (':'.$values)";

        //Here, supply query data seperately
        return $this->query($query, $data);
    }

    public function update($id,$data) //Getting single record
    {
        
        $query = "SELECT * FROM $this->table WHERE $column = :value";

        //Here, supply query data seperately
        return $this->query($query, ['value' => $value] );
    }

    public function delete($id) //Getting single record
    {
        
        $query = "SELECT * FROM $this->table WHERE $column = :value";

        //Here, supply query data seperately
        return $this->query($query, ['value' => $value] );
    }


}