<!DOCTYPE html>
<html>
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
	if(isset($_POST['user_info'])){
		$username = $_POST['name'];
		$surname = $_POST['surname'];
		$amka = $_POST['AMKA'];
		$afm = $_POST['AFM'];
		$email = $_POST['email'];
		// $doy = $_POST['DOY'];
		$street = $_POST['street'];
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

		header("location: profile.php");
	}
    else if (isset($_POST['doy_update'])) {
        # code...
        $doy = $_POST['DOY'];
        if($doy!=''){
            $query = "UPDATE User SET DOY ='$doy' WHERE User.ID =".$_SESSION['id'];
			$result = $conn -> query($query);

			if(!$result) die ($conn->error);
        }
        header("location: profile.php");
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
	<link rel="stylesheet" href="./css/custom.css">
    <link rel="stylesheet" href="./css/other.css" >
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="./">ΙΚΑ</a>
			</div>
			<ul class="nav navbar-nav homenav">
				<li >
					<a href="#">Ασφάλεια</a>
				</li>
                <li class="active">
                    <a href="./profile.php">Ο Λογαριασμός μου</a>
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
		                    echo '<a href="/IKA/profile.php">'.$_SESSION['username'].'</a>
		                    </li>
		                    <li>
		                        <a href="/IKA/logout.php">Αποσύνδεση</a>
		                    </li>
		                    ';
		                }else{
		                    echo '<a href="/IKA/login.php">Είσοδος/Έγγραφη</a>';
		                }
		            }else{
		                echo '<a href="/IKA/login.php">Είσοδος/Έγγραφη</a>';
		            }
		             ?>
		        </li>
			</ul>
		</div>
	</nav>
	<nav class="main-menu">
		<ul>
			<li>
				<a href="./"><i class="fa fa-home fa-2x"></i> <span class="nav-text">Αρχική</span></a>
			</li>
			<li class="has-subnav">
				<a href="#"><i class="fa fa-files-o" ></i> <span class="nav-text">Ασφάλεια</span></a>
			</li>
			<li class="has-subnav">
				<a href="./pension.php"><i class="fa fa-money"></i> <span class="nav-text">Σύνταξη</span></a>
			</li>
			<li class="has-subnav">
				<a href="./business.php"><i class="fa fa-building"></i> <span class="nav-text">Εργοδοσία</span></a>
			</li>
			<li>
				<a href="#"><i class="fa fa-credit-card"></i> <span class="nav-text">Οφειλές</span></a>
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
	<div class="container ">
		<div class="row">
		<?php
			if(array_key_exists('welcome', $_SESSION)){
				echo '<h2>'.$_SESSION['welcome'].'</h2>';
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
					<button type="button"  class="btn btn-link btn-xs" id="nochange" onclick="show_auto()">Αλλαγή Στοιχείων</button>
		          </div>
				  <div class="well" style="display:none;" id="welledit">
				  	<form class="" action="profile.php" method="post">
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
								<button type="submit" class="btn btn-default" name="user_info">Υποβολή</button>
							</div>
							<div class="col-sm-2">
								<button  onclick="hide_auto()" type="button" class="btn btn-default">Ακύρωση</button>
							</div>
						</div>
					</form>
				  </div>
		    </div>
			<div class="col-md-6">
				<h3>Ασφάλιση</h3>
				<div class="well" id="wellinfo2">
					<p style="font-size: large;" >Αριθμός Μητρώου Ασφάλισης: <?=$user['ID']?> </p>
					<p style="font-size: large;" >ΔΟΥ: <?=$user['DOY']?> </p>
                    <button type="button"  class="btn btn-link btn-xs" id="nochange2" onclick="show_auto2()">Αλλαγή Στοιχείων</button>
                </div>
                <div class="well" style="display:none;" id="welledit2">
                    <form class="" action="profile.php" method="post">
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
                                <input type="text" class="form-control" id="street"  name="doy" value="<?=$user['DOY']?>">
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-default" name="doy_update">Υποβολή</button>
                            </div>
                            <div class="col-sm-2">
                                <button  onclick="hide_auto2()" type="button" class="btn btn-default">Ακύρωση</button>
                            </div>
                        </div>
                    </form>
			</div>
		</div>
		<div class="row">
			<?php
				if($login['type']==1 || $login['type']==3){
					$query = "SELECT * FROM Company WHERE ID =".$login['ID'];
					$result = $conn -> query($query);
					if(!$result) die ($conn->error);
					$result->data_seek(0);
					$boss=$result->fetch_array(MYSQLI_ASSOC);
					echo "<div class=\"col-md-6\">
							<h3>Εργοδότης</h3>
							<div class=\"well\">
								<p style=\"font-size: large;\" >Όνομα Εργοδοσίας: ".$boss['name']."</p>
							</div>
						  </div>";
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
								<p style=\"font-size: large;\" >Είδος Σύνταξης: ".$pension['type']."</p>
								<p style=\"font-size: large;\" >Ποσό Σύνταξης: ".$pension['amount']."</p>
							</div>
						  </div>";
				}
			 ?>
		</div>
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
</script>
</html>
