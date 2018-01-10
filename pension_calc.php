<!DOCTYPE html>
<html>
<head>
	<title>Pension Calculator</title>
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
					<a href="/IKA/pension.php">Σύνταξη</a>
				</li>
                <li class="active">
                    <a href="/IKA/profile.php">Υπολογισμός Σύνταξης</a>
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
		            <?php session_start(); ?>
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
			<h1>Υπολογισμός Σύνταξης</h1>
		</div>
        <div class="row">
        <h3>Στοιχεία για υπολογισμό μελλοντικής σύνταξης</h3>
        </br>
        <form class="" action="" method="get" onsubmit="return false" >

		<div class="row">
            <div class="col-md-6">
				<div class="row">
					<div class="well" id="wellratio">
						<div class="row">
							<label for="sel1" class="control-label col-sm-12">Συνταξιοδοτικός Φορέας</label>
						</div>
						<div class="row col-sm-6" >
							<select class="form-control" id="sel1" name="sel1">
								<option>ΙΚΑ-ΕΤΑΜ</option>
								<option>ΙΚΑ</option>
								<option>ΕΤΑΜ</option>
							</select>
						</div>
						</br>
						</br>
						<div class="row">
							<label for="sel2" class="control-label col-sm-12">Τύπος Σύνταξης</label>
						</div>
						<div class="row col-sm-6" >
							<select class="form-control" id="sel2" name="sel2">
								<option value="1">Γήρατος</option>
								<option value="1.5">Αναπηρίας</option>
								<option value="1.2">Θάνατος Ασφαλισμένου</option>
								<option value="1.1">Θάνατος Συνταξιούχου</option>
							</select>
						</div>
					</br>
					</br>
					</div>
				</div>
				<div class="row">
					<div class="well" id="result" style="display:none;">
							<h3 id="myHeader">Ποσό Μελλοντικής Σύνταξης: </h3>
					</div>
				</div>
			</div>
		      <div class="col-md-6">
				  <div class="well" id="welledit">
					  <div class="row">
						  <label class="control-label col-sm-4">Ημερομηνία Γέννησης</label>
					  </div>
					  <div class="row">
						  <div class="col-sm-6">
							  <input id="input-date" type="date" value="1996-04-09"  required="true" autofocus="true">
						  </div>
					  </div>
					  <br/>
						<div class="row">
							<label class="control-label col-sm-4">Έτη εργασίας έως σήμερα:</label>
						</div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="number" min="0" class="form-control" id="workage" placeholder="Έτη εργασίας" name="workage"  required="true" autofocus="true">
                            </div>
						</div>
                        <br/>
						<div class="row">
							<label class="control-label col-sm-4">Μηνιαίες Αποδοχές Σήμερα:</label>
						</div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="number" min="0" class="form-control" id="salary" placeholder="Αποδοχές" name="salary"  required="true" autofocus="true">
                            </div>
                        </div>
                        <br/>

                        <div class="row">
                            <label class="control-label col-sm-4">Ηλικία Συνταξιοδότησης</label>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="number" min="55" max="70" class="form-control" id="age" placeholder="Ηλικία Συνταξιοδότησης" name="pension_age"  required="true" autofocus="true">
                            </div>
                        </div>
						<br/>
						<div class="row">
							<div class="col-sm-6">
								<button onclick="pension_calculate()" type="submit" class="btn btn-primary">Υπολογισμός</button>
							</div>
							 <div class="col-sm-2">
								<button  onclick="window.location = '/IKA/pension.php';" type="button" class="btn btn-danger">Επιστροφή</button>
							</div>
						</div>
				  </div>
		    </div>
		</div>
    </form>

	</div>
</body>

<script>
function pension_calculate(){
	var option2 = document.getElementById('sel2').value;
	var ages = document.getElementById('workage').value*0.1;
	var salary = document.getElementById('salary').value*0.05;
	var age = document.getElementById('age').value*0.1;
	var result =option2*ages*salary*age;
	result = result.toFixed(2);
	myHeader.innerText ="Μελλοντικό Ποσό Σύνταξης: "+ result+"€";
	document.getElementById("result").style.display="block";
}
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
</script>
</html>
