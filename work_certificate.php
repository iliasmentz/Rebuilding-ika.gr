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
    mysqli_set_charset($conn,'utf8');
    $query = "SELECT * FROM Login WHERE ID =".$_SESSION['id'];
	$result = $conn -> query($query);
	if(!$result) die ($conn->error);
	$result->data_seek(0);
	$login=$result->fetch_array(MYSQLI_ASSOC);
    if($login['type']!=1 and $login['type']!=3){
        die("You are not a boss");
    }

    $query = "SELECT * FROM User WHERE ID =".$login['ID'];
    $result = $conn -> query($query);
    if(!$result) die ($conn->error);
    $result->data_seek(0);
    $user=$result->fetch_array(MYSQLI_ASSOC);

    $query = "SELECT * FROM Company WHERE ID =".$login['ID'];
    $result = $conn -> query($query);
    if(!$result) die ($conn->error);
    $result->data_seek(0);
    $work=$result->fetch_array(MYSQLI_ASSOC);

    $query = "SELECT * FROM Employee WHERE company_id =".$login['ID'];
    $employee_result = $conn -> query($query);
    if(!$employee_result) die ($conn->error);
?>
  <head>
    <title>Certificate</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <style>
        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #428bca;
            color: white;
        }
    </style>
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
                    <strong>ΕΠΩΝΥΜΟ ΕΡΓΟΔΟΤΗ : </strong><?=$user['Surname']?>
				</div>
            </p>
            <p >
                <div style="font-size: small">
                    <strong>Α.Φ.Μ. ΕΡΓΟΔΟΤΗ: </strong><?=$user['AFM']?>
                </div>
            </p>
            <p >
                <div style="font-size: small">
                    <strong>ΟΝΟΜΑ ΕΡΓΟΔΟΣΙΑΣ:</strong> <?=$work['name']?>
                </div>
            </p>
            <p >
                <div style="font-size: small">
                    <strong>ΔΟΥ ΕΡΓΟΔΟΣΙΑΣ:</strong> <?=$work['DOY']?>
                </div>
            </p>
            <br/>
            <h3>Στοιχεία Εργαζομένων </h3>
            <table id="customers">
              <tr>
                <th>ΟΝΟΜΑ</th>
                <th>ΕΠΩΝΥΜΟ</th>
                <th>ΑΡ. ΤΑΥΤΟΤΗΤΑΣ</th>
                <th>ΑΠΟΔΟΧΕΣ</th>
                <th>ΑΞΙΑ ΕΝΣΗΜΟΥ</th>
              </tr>
               <?php

                   $rows = $employee_result->num_rows;
                   for ($i=0; $i < $rows; $i++) {
                       $employee_result->data_seek($i) ;
                       $row = $employee_result->fetch_array(MYSQLI_ASSOC);
                       echo "
                       <tr>
                       <td>".$row['name']."</td>
                       <td>".$row['surname']."</td>
                       <td>".$row['identifier']."</td>
                       <td>".$row['salary']."</td>
                       <td>".$row['stamp_value']."</td>
                       </tr>";
                   }
               ?>
          </table>

      </div>
    </br>
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
