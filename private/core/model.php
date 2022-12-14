<?php

class Model extends Database
{
    public $errors = array();
    
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
    

    //Sandali

     //SELECT * FROM `rack` ORDER BY RackID DESC LIMIT 1;
    //get last row

    public function last($col1,$col2) //Getting single record
    {
        $query = "SELECT $col2 FROM $this->table ORDER BY $col1 DESC LIMIT 1";

        return $this->query($query);
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

    public function update($column,$id,$data)
    {
        //$column contains column that check with id (eg: UserID)
        
        $str = "";

        //$data is an associative array that contain post data
        foreach ($data as $key => $value){
            $str .= $key . "=:" . $key . ","; 
        }

        //Example: $str = FirstName=:FirstName,MiddleName=:MiddleName,

        $str = trim($str, ","); //Remove "," in start and end of string

        $data['id'] = $id;
        
        $query = "UPDATE $this->table SET $str WHERE $column = :id";

        //UPDATE user SET FirstName=:FirstName,MiddleName=:MiddleName WHERE id = :id;

        //Here, supply query data seperately
        return $this->query($query, $data);
    }

    public function delete($column,$id)
    {
        
        $query = "DELETE FROM $this->table WHERE $column = :id";

        //Here, supply query data seperately
        $data['id'] = $id;
        return $this->query($query, $data);
    }
     public function findLimit($start,$end) //Getting specific number of rows
    {
        
        $query = "SELECT * FROM $this->table LIMIT $start,$end";

        return $this->query($query);
    }

<<<<<<< Updated upstream
}
=======
    //kasun

    public function findLimit($start,$end) //Getting specific number of rows
    {
        
        $query = "SELECT * FROM $this->table LIMIT $start,$end";

        return $this->query($query);
    }

}
>>>>>>> Stashed changes
