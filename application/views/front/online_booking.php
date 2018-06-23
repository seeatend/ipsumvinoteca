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
        <form action="<?php base_url('onlinebooking');  ?>" method="post">
            <input type="text" name="customer_name"  placeholder="customer name" size="100" required/><br>
            <input type="text" name="customer_email" placeholder="Email" size="100"required/><br>
            <input type="text" name="customer_phone" placeholder="Phone" size="100" required/><br>
            <input type="text" name="customer_message" placeholder="Message" size="100" required/><br>
      <input type="text" name="status" placeholder="status"  required/><br>
      <input type="submit" value="submit"/>
            
             
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
