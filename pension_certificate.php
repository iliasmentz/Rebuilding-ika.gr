<!DOCTYPE html>
<html lang="en">
<?php session_start();
	if(!array_key_exists('login', $_SESSION)){
		$_SESSION['mustlogin']="Πρέπει να συνδεθείς πρώτα";
		header("location:login.php");
		die();
	}
	if($_SESSION['login']!=1){
			$_SESSION['mustlogin']="Πρέπει να συνδεθείς πρώτα";
			header("location:login.php");
			die();
	}
    require_once 'login_db.php';
    $conn = new mysqli($hn,$un,$pw,$db);
    if($conn->connect_error) die($conn->connect_error);
    mysqli_set_charset($conn,'utf8');
    $query = "SELECT * FROM Login WHERE ID =".$_SESSION['id'];
	$result = $conn -> query($query);
	if(!$result) die ($conn->error);
	$result->data_seek(0);
	$login=$result->fetch_array(MYSQLI_ASSOC);
	if($login['type']!=2 and $login['type']!=3){
		$_SESSION['pension_message']='Δεν είστε συνταξιούχος για να εκτυπώσετε βεβαίωση';
		header("location: pension.php");
		die();
	}
    $query = "SELECT * FROM User WHERE ID =".$login['ID'];
	$result = $conn -> query($query);
	if(!$result) die ($conn->error);
	$result->data_seek(0);
	$user=$result->fetch_array(MYSQLI_ASSOC);
    $query = "SELECT * FROM Pension WHERE ID =".$login['ID'];
	$result = $conn -> query($query);
	if(!$result) die ($conn->error);
	$result->data_seek(0);
	$pension=$result->fetch_array(MYSQLI_ASSOC);
?>
  <head>
    <title>Certificate</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>

  </head>

  <body>
      <hr/>
      <div class="container">
          <p style="size text-align:left;">
              <div style="font-size: medium">
                  <img style="height: 120px; width: 200px;"src="/IKA/img/ika.jpg" alt="IKA">
                  <span style="font-size: 200%; float:right;">Βεβαίωση Σύνταξης</span>
              </div>
          </p>
      </div>
      <br/>
      <hr/>
      <br/>
      <div class="container">
            <p >
                <div style="font-size: small">
                <strong>    ΥΠΟΚΑΤΑΣΤΗΜΑ </strong>: <?=$user['DOY']?>
                </div>
            </p>
            <p >
                <div style="font-size: small">
                <strong>    ΚΑΤΗΓΟΡΙΑ :</strong> <?=$pension['type']?>
                </div>
            </p>
            <p>
                <div style="font-size: small">
                    <strong>Α.Μ.Κ.Α. : </strong>  <?=$user['AMKA']?>
                </div>
            </p>
            <p >
                <div style="font-size: small">
                    <strong>Α.Φ.Μ. :</strong>  <?=$user['AFM']?>
                </div>
            </p>
            <p >
                <div style="font-size: small">
                    <strong>ΟΝΟΜΑ : </strong><?=$user['Name']?>
                </div>
            </p>
            <p >
                <div style="font-size: small">
                    <strong>ΕΠΩΝΥΜΟ :</strong> <?=$user['Surname']?>
                </div>
            </p>
            <p >
                <div style="font-size: small">
                    <strong>ΤΑΧΥΔΡΟΜΙΚΗ ΔΙΕΥΘΥΝΣΗ :</strong> <?=$user['street']?>
                </div>
            </p>
            <p >
                <div style="font-size: small">
                    <strong>ΠΟΣΟ ΣΥΝΤΑΞΗΣ : </strong><?=$pension['amount']?>
                </div>
            </p>
      </div>
      <script>
        function Myprint() {
            window.print();
         }
      </script>
      <div class="container">
          <div class="pull-right">
              <button class="btn btn-primary btn-md" onclick="Myprint()">Εκτύπωση Απόδειξης</button>
          </div>
      </div>
  </body>
</html>
