<?php
    if ($_GET['action'] == 'set')
    {
        $cookie_name = $_GET['name'];
        $value = $_GET['value'];
        if(!isset($_COOKIE[$cookie_name]))
        {
            setcookie($cookie_name, $value, time() + (86400 * 30), "/");
        }
    }
    else if ($_GET['action'] == 'del')
    {
        $cookie_name = $_GET['name'];
        setcookie($cookie_name, '', time() - (86400 * 30), "/");
    }
    else if ($_GET['action'] == 'get')
    {
        $cookie_name = $_GET['name'];
        if(!isset($_COOKIE[$cookie_name]))
        {
            echo "\n";
        }
        else
        {
            echo $_COOKIE[$cookie_name];
        }
    }
?>