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

    public function findAll() //Getting all records(rows)
    {
        
        $query = "SELECT * FROM $this->table";

        return $this->query($query);
    }

    public function insert($data)
    {
        //Getting all the keys of associative array($data)
        $keys = array_keys($data);
        $columns = implode(',', $keys); //(FirstName,MiddleName ...)
        $values = implode(',:', $keys); //(FirstName,:MiddleName ...)

        $query = "INSERT INTO $this->table ($columns) values (:$values)";

        //Here, supply query data seperately
        return $this->query($query, $data);
    }

    public function update($id,$data)
    {
        
        $str = "";

        //$data is an associative array
        foreach ($data as $key => $value){
            $str .= $key . "=:" . $key . ","; 
        }

        //Example: $str = FirstName=:FirstName,MiddleName=:MiddleName,

        $str = trim($str, ","); //Remove "," in start and end of string

        $data['id'] = $id;
        $query = "UPDATE $this->table SET $str WHERE id = :id";
        //UPDATE user SET FirstName=:FirstName,MiddleName=:MiddleName WHERE id = :id;

        //Here, supply query data seperately
        return $this->query($query, $data);
    }

    public function delete($id)
    {
        
        $query = "DELETE FROM $this->table WHERE id = :id";

        //Here, supply query data seperately
        $data['id'] = $id;
        return $this->query($query, $data);
    }


}