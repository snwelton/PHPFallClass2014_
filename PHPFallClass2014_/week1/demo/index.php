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
        // phpinfo();
        $text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
        echo strip_tags($text);
        echo "\n";

        // Allow <p> and <a>
        echo strip_tags($text, '<p><a>');
        ?>
        ?>
    </body>
</html>