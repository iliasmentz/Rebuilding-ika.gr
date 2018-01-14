<!DOCTYPE html>
<html>
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
	$_SESSION['message_register']='';
	require_once '../login_db.php';
    $conn = new mysqli($hn,$un,$pw,$db);
    if($conn->connect_error) die($conn->connect_error);
	mysqli_set_charset($conn,'utf8');
	// echo $_SESSION['id'];
	$query = "SELECT * FROM Login WHERE ID =".$_SESSION['id'];
	$result = $conn -> query($query);
	if(!$result) die ($conn->error);
	$result->data_seek(0);
	$login=$result->fetch_array(MYSQLI_ASSOC);
	$query = "SELECT * FROM User WHERE ID =".$login['ID'];
	$result = $conn -> query($query);
	if(!$result) die ($conn->error);
	$result->data_seek(0);
	$user=$result->fetch_array(MYSQLI_ASSOC);
	$query = "SELECT * FROM Company WHERE ID =".$login['ID'];
	$result = $conn -> query($query);
	if(!$result) die ($conn->error);
	$result->data_seek(0);
	$boss=$result->fetch_array(MYSQLI_ASSOC);
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$username = $_POST['name'];
		$surname = $_POST['surname'];
		$amka = $_POST['AMKA'];
		$afm = $_POST['AFM'];
		$email = $_POST['email'];
		$doy = $_POST['doy'];
		$street = $_POST['street'];
		$name2 = $_POST['name2'];
		$doy2 = $_POST['doy2'];
        if($doy!='' and $user['DOY']!=$doy){
            $query = "UPDATE User SET DOY ='$doy' WHERE User.ID =".$_SESSION['id'];
			$result = $conn -> query($query);
			if(!$result) die ($conn->error);
        }
		if($username!='' and $user['Name']!=$username){
			$query = "UPDATE User SET Name ='$username' WHERE User.ID =".$_SESSION['id'];
			$result = $conn -> query($query);
            $_SESSION['username'] = $username;
			if(!$result) die ($conn->error);
			$_SESSION['username']= $username;
		}
		if($surname!='' and $user['Surname']!=$surname){
			$query = "UPDATE User SET Surname ='$surname' WHERE User.ID =".$_SESSION['id'];
			$result = $conn -> query($query);
			if(!$result) die ($conn->error);
		}
		if($amka!='' and $user['AMKA']!=$amka){
			$query = "UPDATE User SET AMKA ='$amka' WHERE User.ID =".$_SESSION['id'];
			$result = $conn -> query($query);
			if(!$result) die ($conn->error);
		}
		if($email!='' and $login['email']!=$email){
			$query = "UPDATE Login SET email ='$email' WHERE Login.ID =".$_SESSION['id'];
			$result = $conn -> query($query);
			if(!$result) die ($conn->error);
		}
		if($afm!='' and $user['AFM']!=$afm){
			$query = "UPDATE User SET AFM ='$afm' WHERE User.ID =".$_SESSION['id'];
			$result = $conn -> query($query);
			if(!$result) die ($conn->error);
		}
		if($street!='' and $user['street']!=$street){
			$query = "UPDATE User SET street ='$street' WHERE User.ID =".$_SESSION['id'];
			$result = $conn -> query($query);
			if(!$result) die ($conn->error);
		}
		if($doy2!='' and $boss['DOY']!=$doy2){
			$query = "UPDATE Company SET DOY ='$doy2' WHERE Company.ID =".$_SESSION['id'];
			$result = $conn -> query($query);
			if(!$result) die ($conn->error);
		}
		if($name2!='' and $boss['name']!=$name2){
			$query = "UPDATE Company SET name ='$name2' WHERE Company.ID =".$_SESSION['id'];
			$result = $conn -> query($query);
			if(!$result) die ($conn->error);
		}

		header("location: profile.php");
		die();
	}
	else if(isset($_GET['delete'])){
		$query = "DELETE FROM pension_request WHERE ID=".$login['ID'];
		$result = $conn -> query($query);
		if(!$result) die ($conn->error);
		$_SESSION['welcome']='Το αίτημα ακυρώθηκε με επιτυχία';
		header("location: profile.php");
		die();
	}
 ?>
<head>
	<title>Profile</title>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
	</script>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/sdi1400161/css/custom.css">
    <link rel="stylesheet" href="/sdi1400161/css/other.css" >
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
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="/sdi1400161/">ΙΚΑ</a>
			</div>
			<ul class="nav navbar-nav homenav">
				<li >
					<a href="#">Ασφάλεια</a>
				</li>
                <li class="active">
                    <a href="/sdi1400161/user/profile.php">Ο Λογαριασμός μου</a>
                </li>
			</ul>
			<ul class="nav navbar-nav mynavbar">
				<li>
					<a href="#">Αναζήτηση</a>
				</li>
				<li>
					<a href="#">Γλώσσα</a>
				</li>
				<li>
		            <?
		            if (array_key_exists('login', $_SESSION)) {
		                if($_SESSION['login']==1){
		                    echo '<a href="/sdi1400161/user/profile.php">'.$_SESSION['username'].'</a>
		                    </li>
		                    <li>
		                        <a href="/sdi1400161/logout.php">Αποσύνδεση</a>
		                    </li>
		                    ';
		                }else{
		                    echo '<a href="/sdi1400161/user/login.php">Είσοδος/Έγγραφη</a>';
		                }
		            }else{
		                echo '<a href="/sdi1400161/user/login.php">Είσοδος/Έγγραφη</a>';
		            }
		             ?>
		        </li>
			</ul>
		</div>
	</nav>
	<nav class="main-menu">
		<ul>
			<li>
				<a href="/sdi1400161/"><i class="fa fa-home fa-2x"></i> <span class="nav-text">Αρχική</span></a>
			</li>
			<li class="has-subnav">
				<a href="#"><i class="fa fa-files-o" ></i> <span class="nav-text">Ασφάλεια</span></a>
			</li>
			<li class="has-subnav">
				<a href="/sdi1400161/pension/pension.php"><i class="fa fa-money"></i> <span class="nav-text">Σύνταξη</span></a>
			</li>
			<li class="has-subnav">
				<a href="/sdi1400161/work/business.php"><i class="fa fa-building"></i> <span class="nav-text">Εργοδοσία</span></a>
			</li>
			<li>
				<a href="#"><i class="fa fa-user-md"></i> <span class="nav-text">Γιατροί</span></a>
			</li>
			<li>
				<a href="#"><i class="fa fa-wheelchair"></i> <span class="nav-text">Άτομα με ειδικές Αναπηρίες</span></a>
			</li>
			<li>
				<a href="#"><i class="fa fa-newspaper-o"></i> <span class="nav-text">Ενημερώσεις</span></a>
			</li>
			<li>
				<a href="#"><i class="fa fa-question-circle-o"></i> <span class="nav-text">Συχνές Ερωτήσεις</span></a>
			</li>
			<li>
				<a href="#"><i class="fa fa-info fa-2x"></i> <span class="nav-text">Επικοινωνία</span></a>
			</li>
		</ul>
	</nav>
	<form class="" action="profile.php" method="post">
	<div class="container ">
		<div class="row">
		<?php
			if(array_key_exists('welcome', $_SESSION)){
				echo '<h2 style= color:green; \">'.$_SESSION['welcome'].'</h2>';
				$_SESSION['welcome']="";
			}
		?>
		<h1>Ο λογαριασμός μου</h1>
		</div>
		<div class="row">
		      <div class="col-md-6">
		          <h3>Τα Στοιχεία Μου</h3>
		          <div class="well" id="wellinfo">
		          	<p style="font-size: large;" ><strong>Όνομα:</strong> <?=$user['Name']?> </p>
					<p style="font-size: large;" ><strong>Επώνυμο:</strong> <?=$user['Surname']?></p>
					<p style="font-size: large;" ><strong>E-mail:</strong> <?=$login['email']?></p>
					<p style="font-size: large;" ><strong>Α.Φ.Μ.:</strong> <?=$user['AFM']?></p>
					<p style="font-size: large;" ><strong>Α.Μ.Κ.Α.:</strong> <?=$user['AMKA']?></p>
					<p style="font-size: large;" ><strong>Οδός Κατοικίας:</strong> <?=$user['street']?></p>
					<button type="button" class="btn btn-primary" id="nochange" onclick="show_auto()">Αλλαγή Στοιχείων</button>
		          </div>
				  <div class="well" style="display:none;" id="welledit">
						<div class="row">
							<label class="control-label col-sm-2">Όνομα:</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="name" placeholder="Αλλαγή Ονόματος" name="name" value="<?=$user['Name']?> ">
							</div>
						</div>
						<br/>
						<div class="row">
							<label class="control-label col-sm-2">Επίθετο:</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="surname" placeholder="Αλλαγή Επίθετου" name="surname" value="<?=$user['Surname']?>">
							</div>
						</div>
						<br/>
						<div class="row">
							<label class="control-label col-sm-2">Email:</label>
							<div class="col-sm-6">
								<input type="email" class="form-control" id="email" placeholder="Αλλαγή Email" name="email" value="<?=$login['email']?>">
							</div>
						</div>
						<br/>
						<div class="row">
							<label class="control-label col-sm-2">Α.Φ.Μ.:</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="AFM" placeholder="Αλλαγή Α.Φ.Μ." name="AFM" value="<?=$user['AFM']?>">
							</div>
						</div>
						<br/>
						<div class="row">
							<label class="control-label col-sm-2">Α.Μ.Κ.Α.:</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="AMKA" placeholder="Αλλαγή Α.Μ.Κ.Α." name="AMKA" value="<?=$user['AMKA']?>">
							</div>
						</div>
						<br/>
						<div class="row">
							<label class="control-label col-sm-2">Οδός Κατοικίας:</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="street" placeholder="Αλλαγή οδού" name="street" value="<?=$user['street']?>">
							</div>
						</div>
						<br/>
						<div class="row">
							<div class="col-sm-6">
								<button type="submit" class="btn btn-primary" name="user_info">Υποβολή</button>
							</div>
							<div class="col-sm-2">
								<button  onclick="hide_auto()" type="button" class="btn btn-danger">Ακύρωση</button>
							</div>
						</div>

				  </div>
		        </div>
		<div class="col-md-6">
				<h3>Ασφάλιση</h3>
				<div class="well" id="wellinfo2">
					<p style="font-size: large;" ><strong>Αριθμός Μητρώου Ασφάλισης:</strong> <?=$user['ID']?> </p>
					<p style="font-size: large;" ><strong>ΔΟΥ:</strong> <?=$user['DOY']?> </p>
                    <button type="button"  class="btn btn-primary" id="nochange2" onclick="show_auto2()">Αλλαγή Στοιχείων</button>
                </div>
                <div class="well" style="display:none;" id="welledit2">
                        <div class="row">
                            <label class="control-label col-sm-2">Αριθμός Μητρώου Ασφάλισης:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="name" value="<?=$user['ID']?>" readonly>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <label class="control-label col-sm-2">ΔΟΥ:</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="doy"  name="doy" value="<?=$user['DOY']?>">
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-primary" name="user_info">Υποβολή</button>
                            </div>
                            <div class="col-sm-2">
                                <button  onclick="hide_auto2()" type="button" class="btn btn-danger">Ακύρωση</button>
                            </div>
                        </div>
			</div>
		</div>


            <?
                $query = "SELECT * FROM pension_request WHERE ID =".$login['ID'];
                $result = $conn -> query($query);
                if(!$result) die ($conn->error);
                if($result->num_rows!=0){
					$result->data_seek(0);
					$request=$result->fetch_array(MYSQLI_ASSOC);
                    echo "
                    <div class=\"col-md-6\">
                    <h3>Το αίτημα συνταξιοδότησης σας έχει υποβληθεί</h3>
                    <div class=\"well\" >
						<div class=\"row\">
	                        <div class=\"progress\">
	                            <div class=\"progress-bar progress-bar-success progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:60%\">
	                            Κατάσταση: Περιμένει Έγκριση.
	                            </div>
	                            <div class=\"progress-bar\" role=\"progressbar\" style=\"width:40%\"></div>
	                        </div>
						</div>
						<div class=\"row\">
							<button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\"  data-target=\"#request\">
							  Πληροφορίες Αιτήματος</button>
							  <button type=\"button\" class=\"btn btn-danger\"  data-toggle=\"modal\"  data-target=\"#delete\" >
  							  Ακύρωση αιτήματος</button>
						</div>
						<!-- Modal -->
						<div id=\"request\" class=\"modal fade\" role=\"dialog\">
						  <div class=\"modal-dialog\">

							<!-- Modal content-->
							<div class=\"modal-content\">
							  <div class=\"modal-header\">
								<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
								<h4 class=\"modal-title\">Πληροφορίες αιτήματος συνταξιοδότησης</h4>
							  </div>
							  <div class=\"modal-body\">
								  	<p style=\"font-size: large;\" ><strong>Αριθμός Μητρώου Ασφάλισης:</strong>".$request['ID']."</p>
									<p style=\"font-size: large;\" ><strong>ΑΦΜ:</strong>".$request['AFM']."   </p>
									<p style=\"font-size: large;\" ><strong>ΑΜΚΑ:</strong>  ".$request['AMKA']." </p>
									<p style=\"font-size: large;\" ><strong>Αριθμός Ταυτότητας:</strong>  ".$request['identifier']." </p>
									<p style=\"font-size: large;\" ><strong>Όνομα:</strong> ".$request['name']." </p>
									<p style=\"font-size: large;\" ><strong>Επώνυμο:</strong> ".$request['surname']." </p>
							  </div>
							  <div class=\"modal-footer\">
								<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">κλείσιμο</button>
							  </div>
							</div>

						  </div>
						</div>
						<div id=\"delete\" class=\"modal fade\" role=\"dialog\">
						  <div class=\"modal-dialog\">

							<!-- Modal content-->
							<div class=\"modal-content\">
							  <div class=\"modal-header\">
								<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
								<h4 class=\"modal-title\">Είστε σίγουροι ότι θέλετε να ακυρώσετε το αίτημα συνταξιοδότησης; </h4>
							  </div>
							  <div class=\"row\">
							  	<div class=\"col-sm-3 \">
							  	</div>
							  	<div class=\"col-sm-4 \">
									<form>
								  		<input type=\"button\" class=\"btn btn-success \"  data-dismiss=\"modal\" value=\"Ναι\"  onclick=\"location.href = 'profile.php?delete=true';\"></input>
									</form method=\"get\" action=\"profile.php\" >
								</div>
								  <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Όχι</button>
							  	</div>
							</div>

						  </div>
						</div>

					</div>
                    </div>";
                }
            ?>

		</div>
		<div class="row">
			<?php
				if($login['type']==1 || $login['type']==3){
					$query = "SELECT * FROM Company WHERE ID =".$login['ID'];
					$result = $conn -> query($query);
					if(!$result) die ($conn->error);
					$result->data_seek(0);
					$boss=$result->fetch_array(MYSQLI_ASSOC);
					echo "<div class=\"col-md-6\" >
							<h3>Εργοδότης</h3>
							<div class=\"well\" id=\"wellinfo3\">
								<p style=\"font-size: large;\" ><strong>Όνομα Εργοδοσίας:</strong> ".$boss['name']."</p>
                                <p style=\"font-size: large;\" ><strong>ΔΟΥ Εργοδοσίας:</strong> ".$boss['DOY']."</p>

                                <button type=\"button\" class=\"btn btn-primary\" id=\"nochange3\" onclick=\"show_auto3()\">Αλλαγή Στοιχείων</button>
                                <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#employees\">
                                  Εμφάνιση Εργαζομένων</button>
                                <div class=\"modal fade\" id=\"employees\">
                                  <div class=\"modal-dialog\" role=\"document\">
                                    <div class=\"modal-content\">
                                      <div class=\"modal-header\">
                                        <h5 class=\"modal-title\">Εργαζόμενοι
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Κλείσιμο\">
                                          <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                        </h5>
                                      </div>
                                      <div class=\"modal-body\">
                                      <table id=\"customers\">
                                      <tr>
                                        <th>ΟΝΟΜΑ</th>
                                        <th>ΕΠΩΝΥΜΟ</th>
                                        <th>ΑΡ. ΤΑΥΤΟΤΗΤΑΣ</th>
                                        <th>ΑΠΟΔΟΧΕΣ</th>
                                        <th>ΑΞΙΑ ΕΝΣΗΜΟΥ</th>
                                      </tr>";
                                      $query = "SELECT * FROM Employee WHERE company_id =".$login['ID'];
                                      $employee_result = $conn -> query($query);
                                      if(!$employee_result) die ($conn->error);
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
                    echo "</table>
                                    </div>
                                      <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Κλείσιμο</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
							</div>
						 <div class=\"well\" style=\"display:none;\" id=\"welledit3\">
                          <div class=\"row\">
                              <label class=\"control-label col-sm-2\">Όνομα Εργοδοσίας:</label>
                              <div class=\"col-sm-6\">
                                  <input type=\"text\" class=\"form-control\" id=\"name2\" name=\"name2\" value=\"".$boss['name']."\" >
                              </div>
                          </div>
                          <br/>
                          <div class=\"row\">
                              <label class=\"control-label col-sm-2\">ΔΟΥ:</label>
                              <div class=\"col-sm-6\">
                                  <input type=\"text\" class=\"form-control\" id=\"doy2\"  name=\"doy2\"  value=\"".$boss['DOY']."\">
                              </div>
                          </div>
                          </br>
                          <div class=\"row\">
                              <div class=\"col-sm-6\">
                                  <button type=\"submit\" class=\"btn btn-primary\" name=\"user_info\">Υποβολή</button>
                              </div>
                              <div class=\"col-sm-2\">
                                  <button  onclick=\"hide_auto3()\" type=\"button\" class=\"btn btn-danger\">Ακύρωση</button>
                              </div>
                          </div>
                      </div>
                      </div>
                      ";
				}
			 ?>
			<?php
				if($login['type']==2 || $login['type']==3){
					$query = "SELECT * FROM Pension WHERE ID =".$login['ID'];
					$result = $conn -> query($query);
					if(!$result) die ($conn->error);
					$result->data_seek(0);
					$pension=$result->fetch_array(MYSQLI_ASSOC);
					echo "<div class=\"col-md-6\">
							<h3>Σύνταξη</h3>
							<div class=\"well\">
								<p style=\"font-size: large;\" ><strong>Είδος Σύνταξης:</strong> ".$pension['type']."</p>
								<p style=\"font-size: large;\" ><strong>Ποσό Σύνταξης:</strong> ".$pension['amount']."</p>
							</div>
						  </div>";
				}
			 ?>
		</div>
        <!-- </form> -->
	</form>
	</div>
</body>

<script>
function hide_auto(){
		document.getElementById("welledit").style.display="none";
		document.getElementById("nochange").style.display="block";
		document.getElementById("wellinfo").style.display="block";
}

function show_auto(){
		document.getElementById("welledit").style.display="block";
		document.getElementById("nochange").style.display="none";
		document.getElementById("wellinfo").style.display="none";
}

function hide_auto2(){
		document.getElementById("welledit2").style.display="none";
		document.getElementById("nochange2").style.display="block";
		document.getElementById("wellinfo2").style.display="block";
}

function show_auto2(){
		document.getElementById("welledit2").style.display="block";
		document.getElementById("nochange2").style.display="none";
		document.getElementById("wellinfo2").style.display="none";
}
function hide_auto3(){
		document.getElementById("welledit3").style.display="none";
		document.getElementById("nochange3").style.display="block";
		document.getElementById("wellinfo3").style.display="block";
}

function show_auto3(){
		document.getElementById("welledit3").style.display="block";
		document.getElementById("nochange3").style.display="none";
		document.getElementById("wellinfo3").style.display="none";
}
</script>
</html>
