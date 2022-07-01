<?php

$user_name = isset($_POST['user_name']) ?$_POST['user_name'] : '';
$mail_adress = isset($_POST['mail_adress']) ?$_POST['mail_adress'] : '';
$pass_word = isset($_POST['pass_word']) ?$_POST['pass_word'] : '';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>ユーザー登録</title>
  </head>
  <body>
    <h1>ユーザー登録</h1>

    <form method="POST" action="./check.php">
            <div class="row mb-3">
                <label for="user_name" class="col-sm-2 col-form-label">User_Name</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="user_name" value ="<?php echo $user_name;?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="mail_adress" class="col-sm-2 col-form-label">Email_Adress</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" id="mail" name="mail_adress" value ="<?php echo $mail_adress;?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="pass_word" class="col-sm-2 col-form-label">PassWord</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="pass"name="pass_word" value ="<?php echo $pass_word;?>">
                </div>
            </div>
            <button type= "submit" class="btn btn-primary">submit</button>
        </form>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>