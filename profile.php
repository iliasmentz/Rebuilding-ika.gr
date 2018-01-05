<!DOCTYPE html>
<html>
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
				<li class="active">
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
					<a href="./login.php">Είσοδος/Έγγραφη</a>
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
				<a href="./business.php"><i class="fa fa-building"></i> <span class="nav-text">Επιχειρήσεις</span></a>
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
			<h1>Ο λογαριασμός μου</h1>
		</div>
		<div class="row">
		      <div class="col-md-8">
		          <h3>Τα Στοιχεία Μου</h3>
		          <div class="well" id="wellinfo">
		          	<p style="font-size: large;" th:inline="text">Όνομα: Απόστολος </p>
					<p style="font-size: large;" th:inline="text">Επώνυμο: Πλακιάς</p>
					<p style="font-size: large;" th:inline="text">ΑΦΜ: 113211313</p>
					<p style="font-size: large;" th:inline="text">E-mail: apostp@</p>
					<button type="button"  class="btn btn-link btn-xs" id="nochange" onclick="show_auto()">Αλλαγή Στοιχείων</button>
		          </div>
				  <div class="well" style="display:none;" id="welledit">
				  	<form class="" action="" method="get">
						<div class="row">
							<label class="control-label col-sm-2">Όνομα:</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="name" placeholder="Αλλαγή Ονόματος" name="name">
							</div>
						</div>
						<br/>
						<div class="row">
							<label class="control-label col-sm-2">Επίθετο:</label>
							<div class="col-sm-6">
								<input type="text" class="form-control" id="surname" placeholder="Αλλαγή Επίθετου" name="surname">
							</div>
						</div>
						<br/>
						<div class="row">
							<label class="control-label col-sm-2">Email:</label>
							<div class="col-sm-6">
								<input type="email" class="form-control" id="email" placeholder="Αλλαγή Email" name="email">
							</div>
						</div>
						<br/>
						<div class="row">
							<div class="col-sm-6">
								<button type="submit" class="btn btn-default">Υποβολή</button>
							</div>
							<div class="col-sm-2">
								<button  onclick="hide_auto()" type="button" class="btn btn-default">Ακύρωση</button>
							</div>
						</div>
					</form>
				  </div>
		    </div>
		</div>
		<div class="row">
		      <div class="col-md-8">
		          <h3>Ασφάλιση</h3>
		          <div class="well">
					  <p style="font-size: large;" th:inline="text">Κωδικός Ασφάλισης: 111</p>
		          </div>
		    </div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<h3>Εργοδότης</h3>
				<div class="well">
					<p style="font-size: large;" th:inline="text">Όνομα Εταιρείας: Γερμανός</p>
				</div>
			</div>
		</div>
		<div class="row">
		      <div class="col-md-8">
		          <h3>Σύνταξη</h3>
		          <div class="well">
					  <p style="font-size: large;" th:inline="text">Ποσό Σύνταξη: 111$</p>
		          </div>
		    </div>
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
</script>
</html>
