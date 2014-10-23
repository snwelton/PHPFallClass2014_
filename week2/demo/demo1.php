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
        // put your code here
        $hello = 'hello';
        $hello .= 50;   // the period will concatenate before it echos the string
        
        echo $hello, ' world', '<br />', '<p>Hello again/p>';   
        //single and double quotes mean different things. double parse the value of the variable then display. single will just show the variable. 
        ?>
    </body>
</html>
