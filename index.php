<?php
require("povezivanje_baza.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <form action="" method="post">
        <div class="mb-3">
          <label for="emailin" class="form-label">Email</label>
          <input type="email" class="form-control" name="emailin" id="emin" aria-describedby="emailHelpId" placeholder="abc@mail.com">
        </div>
        <div class="mb-3">
          <label for="psw" class="form-label">Password</label>
          <input type="password" class="form-control" name="psw" id="pswin" placeholder="Password">
        </div>
        <button type="submit">Log in</button>
    </form>

</div>
    
    
</body>
</html>