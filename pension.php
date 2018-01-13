<!DOCTYPE html>
<html>
<head>
    <title>Retirement</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/sdi1400161/css/custom.css">
    <link rel="stylesheet" href="/sdi1400161/css/other.css" >

    <style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
    .w3-sidebar {
      z-index: 3;
      width: 250px;
      top: 43px;
      bottom: 0;
      height: inherit;
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
				<a class="navbar-brand" href="/sdi1400161/">ΙΚΑ</a>
			</div>
			<ul class="nav navbar-nav homenav">
				<li class="active">
					<a href="/sdi1400161/pension.php">Σύνταξη</a>
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
                            echo '<a href="/sdi1400161/profile.php">'.$_SESSION['username'].'</a>
                            </li>
                            <li>
                                <a href="/sdi1400161/logout.php">Αποσύνδεση</a>
                            </li>
                            ';
                        }else{
                            echo '<a href="/sdi1400161/login.php">Είσοδος/Έγγραφη</a>';
                        }
                    }else{
                        echo '<a href="/sdi1400161/login.php">Είσοδος/Έγγραφη</a>';
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
                <a href="/sdi1400161/pension.php"><i class="fa fa-money"></i> <span class="nav-text">Σύνταξη</span></a>
            </li>
            <li class="has-subnav">
                <a href="/sdi1400161/business.php"><i class="fa fa-building"></i> <span class="nav-text">Εργοδοσία</span></a>
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
    if (array_key_exists('pension_message', $_SESSION)) {
            echo "<h1 style=\"text-align:center; color:red; \">".$_SESSION['pension_message']."</h1>";
            $_SESSION['pension_message']='';
        }?>
    <h1 style="text-align:center;"> Σύνταξη </h1>
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
                            <a class="c-fi-link ga-event" data-event-action="Feature Image Click" href="/sdi1400161/pension_certificate.php" target="_blank" style="background-image:url(/sdi1400161/img/certificate.jpg)">
                                <div class="c-fi-text">Βεβαίωση Σύνταξης</div>
                            </a>
                        </div>
                        <div class="c-fi-cell">
                            <a class="c-fi-link ga-event" data-event-action="Feature Image Click" href="/sdi1400161/pension_calc.php" style="background-image:url(/sdi1400161/img/calculating.jpg)">
                                <div class="c-fi-text">Υπολογισμός Σύνταξης</div>
                            </a>
                        </div>
                        <div class="c-fi-cell">
                            <a class="c-fi-link ga-event" data-event-action="Feature Image Click" href="/sdi1400161/retirementApp.php" style="background-image:url(/sdi1400161/img/request.jpg)">
                                <div class="c-fi-text">Ηλεκτρονική Υποβολή <br/>Αίτησης Συνταξιοδότησης</div>
                            </a>
                        </div>
            </div>
        </div>
    </section>
</div>
</html>
