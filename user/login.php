<!DOCTYPE html>
<?php
    session_start();
    // check if he has logged in
    if(array_key_exists('login', $_SESSION)){
        if($_SESSION['login']==1){
            header("location:../index.php");
            die();
        }
	}
    $_SESSION['message']='';
    require_once '../login_db.php';
    $conn = new mysqli($hn,$un,$pw,$db);
    if($conn->connect_error) die($conn->connect_error);
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $email = $_POST['email'];
        $query = "SELECT * FROM Login WHERE email='$email'";
        $result = $conn -> query($query);
        if(!$result) die ($conn->error);
        if($result->num_rows==0){
            $_SESSION['message']='Το email είναι λάθος';
        }else{
            $result->data_seek(0);
            $login=$result->fetch_array(MYSQLI_ASSOC);
            if($login['password']==$_POST['password']){
                $_SESSION['login'] = 1;
                $query = "SELECT * FROM User WHERE ID =".$login['ID'];
                $result = $conn -> query($query);
                if(!$result) die ($conn->error);
                $result->data_seek(0);
                $user=$result->fetch_array(MYSQLI_ASSOC);
                $_SESSION['username'] = $user['Name'];
                $_SESSION['id'] = $user['ID'];
                header("location:../index.php");
                die();
            }else{
                $_SESSION['message']='Ο κωδικός είναι λάθος';
            }
        }
    }
 ?>
<html lang="en">

<head>

    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>

    <title>LogIn</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="/sdi1400161/css/Login.css" rel="stylesheet"/>


</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="/sdi1400161/">ΙΚΑ</a>
        </div>
        <ul class="nav navbar-nav homenav">
          <li class="active"><a href="#">Σύνδεση</a></li>
        </ul>
      </div>
    </nav>

    <div class="container">
    <h1 class="welcome text-center">Καλώς Ήρθατε</h1>
        <div class="card card-container">
        <h2 class='login_title text-center'><b>Σύνδεση</b></h2>
            <hr/>
            <form class="form-signin" method="post">
                <span id="reauth-email" class="reauth-email"></span>
                <?
                    if(array_key_exists('mustlogin', $_SESSION)){
                        echo '<h2>'.$_SESSION['mustlogin'].'</h2>';
                        $_SESSION['mustlogin']='';
                    }
                ?>
                <h2><?=$_SESSION['message']?></h2>
                <p class="input_title">Email</p>
                <input type="email" id="inputEmail" class="login_box" placeholder="user01@ParentOnDuty.com" name="email"  required="true" autofocus="true" />
                <p class="input_title">Κωδικός</p>
                <input type="password" id="inputPassword" class="login_box" placeholder="******" name="password"  required="true"/>
                <button class="btn btn-lg btn-primary" type="submit">Σύνδεση</button>
                <a href="/sdi1400161/user/user_register.php">Δεν έχετε λογαριασμό;</a>
                <hr/>
                <a href="/forget" class="text-right">Ξεχάσατε Τον Κωδικό;</a>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->
</body>

</html>
