<?php
if (!($_POST["login"]) || $_POST["login"] != NULL && !$_POST["passwd"] || $_POST["passwrd"] != "")
{
    echo "ERROR\n";
    exit();
}
if(!file_exists("../private"))
    mkdir("../private");
if(!file_exists("../private/passwd"))
    file_put_contents("../private/passwd", NULL);
$users = unserialize(file_get_contents("../private/passwd"));
if ($users)
{
    foreach($users as $key => $value)
    {
        if ($value === $_POST["login"])
        {
            foreach($users as $key => $value2)
            {
                if ($value2 === hash(adler32, $_POST["oldpw"])
                {
                    str_replace(hash(adler32, $_POST["oldpw"]), hash(adler32, $_POST["newpw"]), $users);
                    echo "OK\n";
                }
            }
            echo "ERROR\n";
            exit();
        }
    }
}
$users["login"] += $_POST["login"];
$users["passwd"] += hash(adler32, $_POST["passwd"]);
file_put_contents("../private/passwd", serialize($users));
echo "OK\n";
?>