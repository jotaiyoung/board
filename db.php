<?php
    header('Content-Type: text/html; charset=utf-8');
    
    $db = new mysqli("localhost","root","whxodud2242","PHPboard");
    $db -> set_charset("utf8");
    
    function mq($sql)
    {
        global $db;        
        return $db->query($sql);
        
    }
    ?>