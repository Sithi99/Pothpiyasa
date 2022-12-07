<?php

//Return user fill and submitted values
function get_var($key)
{

    if (isset($_POST[$key])) {
        return $_POST[$key];
    }
    
    return "";
    
}

//For selecting input fields
function get_select($key,$value)
{
    if (isset($_POST[$key])) 
    {
        if($_POST[$key] == $value)
        {
            return "selected";
        }    
    }
    
    return "";

}

//Escape harmful code
function esc($var)
{
    return htmlspecialchars($var);

}

function random_string($length)
{
    $array = array(0,1,2,3,4,5,6,7,8,9);
    $text = "";

    for($x = 0; $x < $length; $x++)
    {

        $random = rand(0,11);
        $text .= $array[$random];
    }

    return $text;
}