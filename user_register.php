<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>

    <title>Εγγραφή</title>

    <!-- Bootstrap Core CSS -->
    <link href="./css/host_register.css" rel="stylesheet"/>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body >
    <!-- Navbar -->
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="/IKA/">ΙΚΑ</a>
        </div>
        <ul class="nav navbar-nav homenav">
          <li class="active"><a href="#">Εγγραφή</a></li>
        </ul>
      </div>
    </nav>
    <div class="container">
    <h1 class="welcome text-center">Καινούργιος Λογαριασμός</h1>
        <div class="card card-container">
            <h2 class='login_title text-center'><b>Εγγραφή</b></h2>
            <form class="form-signin" method="post">
                <span id="reauth-email" class="reauth-email"></span>
                <p class="input_title">Email</p>
                <input type="text" id="inputEmail" class="login_box" placeholder="user01@email.com" name="Email" required="True" autofocus="True"/>
                <p class="input_title">Ψευδώνυμο</p>
                <input type="text" id="inputUserName" class="login_box" placeholder="User1234" name="Username" required="True" autofocus="True"/>

                <p class="input_title">Κωδικός</p>
                <input type="password" id="inputPassword" class="login_box" placeholder="******" name="Pwd" required="True"/>
                <p class="input_title">Επαλήθευση Κωδικού</p>
                <input type="password" id="inputRePassword" class="login_box" placeholder="******" name="RePwd" required="True"/>
                <div class="checkbox" id="safe">
                    <label ><input type="checkbox"  onclick="checkAddress(this)" value="">Ασφαλησμένος</label>
                </div>
                <div id="safe_info" style="display:none;">
                    <p class="input_title">ΙΚΑ κωδικός</p>
                    <input type="text" id="ika_code" class="login_box" placeholder="1313113" name="ika_code"/>
                    <p class="input_title">Ψευδώνυμο</p>
                    <input type="text" id="inputUserName" class="login_box" placeholder="User1234" name="Username"/>
                </div>
                <div class="checkbox" id="booss">
                    <label ><input type="checkbox"  onclick="checkBoss(this)" value="">Εργοδότης</label>
                </div>
                <div id="boss_info" style="display:none;">
                    <p class="input_title">Κωδικός Εργοδότη</p>
                    <input type="text" id="boss_code" class="login_box" placeholder="1313113" name="boss_code"/>
                </div>
                <br>
                <button class="btn btn-lg btn-primary" type="submit">Εγγραφή</button>
				<a href="/IKA/login.php" class="text-right">Έχετε ήδη Λογαριασμό;</a>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->
</body>
<script>
    function checkAddress(checkbox)
    {
        if (checkbox.checked)
        {
            document.getElementById("safe_info").style.display="block";
        }
        else
        {
            document.getElementById("safe_info").style.display="none";
        }
    }
    function checkBoss(checkbox)
    {
        if (checkbox.checked)
        {
            document.getElementById("boss_info").style.display="block";
        }
        else
        {
            document.getElementById("boss_info").style.display="none";
        }
    }
</script>
</html>
