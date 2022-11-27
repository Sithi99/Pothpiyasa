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