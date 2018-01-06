<!DOCTYPE html>
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
	<link href="./css/Login.css" rel="stylesheet"/>


</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="/IKA/">ΙΚΑ</a>
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
                <p class="input_title">Email</p>
                <input type="text" id="inputEmail" class="login_box" placeholder="user01@ParentOnDuty.com" name="username" th:required="required" required="true" autofocus="true" />
                <p class="input_title">Κωδικός</p>
                <input type="password" id="inputPassword" class="login_box" placeholder="******" name="password" th:required="required" required="true"/>
                <button class="btn btn-lg btn-primary" type="submit">Σύνδεση</button>
                <a href="/IKA/user_register.php">Δεν έχετε λογαριασμό;</a>
                <hr/>
                <a href="/forget" class="text-right">Ξεχάσατε Τον Κωδικό;</a>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->
</body>

</html>
