<!DOCTYPE html>
<html lang="en">
<?php session_start();
	if(!array_key_exists('login', $_SESSION)){
		$_SESSION['mustlogin']="Πρέπει να συνδεθείς πρώτα";
		header("location:login.php");
	}
	if($_SESSION['login']!=1){
			$_SESSION['mustlogin']="Πρέπει να συνδεθείς πρώτα";
			header("location:login.php");
	}
    require_once 'login_db.php';
    $conn = new mysqli($hn,$un,$pw,$db);
    if($conn->connect_error) die($conn->connect_error);
    $query = "SELECT * FROM Login WHERE ID =".$_SESSION['id'];
	$result = $conn -> query($query);
	if(!$result) die ($conn->error);
	$result->data_seek(0);
	$login=$result->fetch_array(MYSQLI_ASSOC);
    if($login['type']!=1 and $login['type']!=3){
        die("You are not a boss");
    }
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
                  <span style="font-size: 200%; float:right;">Βεβαίωση Εργοδοσίας</span>
              </div>
          </p>
      </div>
      <br/>
      <hr/>
      <br/>
      <div class="container">
          <h3>Στοιχεία Εργοδότη</h3>
            <p >
                <div style="font-size: small">
                    ΕΠΩΝΥΜΟ ΕΡΓΟΔΟΤΗ :
                </div>
            </p>
            <p >
                <div style="font-size: small">
                    Α.Φ.Μ. ΕΡΓΟΔΟΤΗ:
                </div>
            </p>
            <br/>
            <h3>Στοιχεία Εργαζομένου </h3>
            <p >
                <div style="font-size: small">
                    ΟΝΟΜΑΤΕΠΩΝΥΜΟ :
                </div>
            </p>
            <p>
                <div style="font-size: small">
                    Α.Μ.Κ.Α. :
                </div>
            </p>
            <p >
                <div style="font-size: small">
                    Α.Φ.Μ. :
                </div>
            </p>
            <p >
                <div style="font-size: small">
                    ΩΡΕΣ ΕΡΓΑΣΙΑΣ :
                </div>
            </p>
            <p >
                <div style="font-size: small">
                    ΚΥΡΙΑΚΕΣ :
                </div>
            </p>
            <p >
                <div style="font-size: small">
                    ΑΠΟΔΟΧΕΣ :
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
