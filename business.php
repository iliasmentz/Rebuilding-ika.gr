<!DOCTYPE html>
<html>
<head>
	<title>Business</title>
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
	<link rel="stylesheet" href="/IKA/css/custom.css">
	<link href="/IKA/css/other.css" rel="stylesheet">
  <style>
  div.relative {
    position: relative;
    left: 600px;
  }

	p{
			/*align-content: center;*/
			align-items: center;
			width: 600px;
			/*padding: 10px;*/
			border: 0px ;
			margin: 0 auto;
	}

  </style>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
            <div class="navbar-header">
				<a class="navbar-brand" href="/IKA/">ΙΚΑ</a>
			</div>
			<ul class="nav navbar-nav homenav">
				<li class="active">
					<a href="/IKA/business.php">Εργοδοσία</a>
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
				<a href="/IKA/"><i class="fa fa-home fa-2x"></i> <span class="nav-text">Αρχική</span></a>
			</li>
			<li class="has-subnav">
				<a href="#"><i class="fa fa-files-o" ></i> <span class="nav-text">Ασφάλεια</span></a>
			</li>
			<li class="has-subnav">
				<a href="/IKA/pension.php"><i class="fa fa-money"></i> <span class="nav-text">Σύνταξη</span></a>
			</li>
			<li class="has-subnav">
				<a href="/IKA/business.php"><i class="fa fa-building"></i> <span class="nav-text">Εργοδοσία</span></a>
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

	<div class="mymenu"><?
	    if (array_key_exists('work_message', $_SESSION)) {
	            echo "<h1 style=\"text-align:center; color:red; \">".$_SESSION['work_message']."</h1>";
	            $_SESSION['work_message']='';
	        }?>
	    <h1 style="text-align:center;"> Εργοδοσία </h1>
        <br/>
        <br/>
        <p style="text-align:center;"><i>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</i></p>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>

	    <section class="c-fi">
	        <div class="c-fi-wrapper">
	            <div class="c-fi-grid">
                            <div class="c-fi-cell">
                                <a class="c-fi-link ga-event" data-event-action="Feature Image Click" target="_blank" href="/IKA/work_certificate.php" style="background-image:url(/IKA/img/index.jpeg)">
                                    <div class="c-fi-text">Έκδοση Βεβαιώσης Εργοδότη</div>
                                </a>
                            </div>

	                        <div class="c-fi-cell">
	                            <a class="c-fi-link ga-event" data-event-action="Feature Image Click" href="/IKA/stamp.php/" style="background-image:url(/IKA/img/calc.jpg)">
	                                <div class="c-fi-text">Υπολογισμός Ενσήμων Εργαζόμενου</div>
	                            </a>
	                        </div>
                            <br/>
	                        <div class="c-fi-cell">
	                            <a class="c-fi-link ga-event" data-event-action="Feature Image Click" href="/IKA/hire.php" style="background-image:url(/IKA/img/shakehands.jpg)">
	                                <div class="c-fi-text">Πρόσληψη Εργαζόμενου</div>
	                            </a>
	                        </div>

	            </div>
	        </div>
	    </section>
	</div>


</body>
</html>
