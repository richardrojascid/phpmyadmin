<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $usuasrio="root";
        $pwd="";
           if($mbd = new PDO('mysql:host=localhost;dbname=test2',$usuario,$contraseña)){
              
                $val=$mbd->prepare('select * from persona');
                $val=$mvd->execute();
                $result=$val->fetchAll();
                echo "<pre>";
                var_dump($result);
                echo "</pre>";
            }
        ?>
    </body>
</html>
