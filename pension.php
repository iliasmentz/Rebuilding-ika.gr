<!DOCTYPE html>
<html>
<head>
    <title>W3.CSS Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/IKA/css/custom.css">
    <link rel="stylesheet" href="/IKA/css/other.css" >

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
				<a class="navbar-brand" href="/IKA/">ΙΚΑ</a>
			</div>
			<ul class="nav navbar-nav homenav">
				<li class="active">
					<a href="/IKA/pension.php">Σύνταξη</a>
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
					<a href="/IKA/login.php">Είσοδος/Έγγραφη</a>
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
                <a href="/IKA/business.php"><i class="fa fa-building"></i> <span class="nav-text">Επιχειρήσεις</span></a>
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

<div class="mymenu">
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
                            <a class="c-fi-link ga-event" data-event-action="Feature Image Click" href="/benefits/retirement/" style="background-image:url(/IKA/img/certificate.jpg)">
                                <div class="c-fi-text">Βεβαίωση Σύνταξης</div>
                            </a>
                        </div>
                        <div class="c-fi-cell">
                            <a class="c-fi-link ga-event" data-event-action="Feature Image Click" href="/benefits/medicare/prescriptionhelp/" style="background-image:url(/IKA/img/calculating.jpg)">
                                <div class="c-fi-text">Υπολογισμός Σύνταξης</div>
                            </a>
                        </div>
                        <div class="c-fi-cell">
                            <a class="c-fi-link ga-event" data-event-action="Feature Image Click" href="https://faq.ssa.gov/ics/support/KBAnswer.asp?questionID=3704" style="background-image:url(/IKA/img/request.jpg)">
                                <div class="c-fi-text">Ηλεκτρονική Υποβολή <br/>Αίτησης Συνταξιοδότησης</div>
                            </a>
                        </div>
            </div>
        </div>
    </section>
</div>
</html>
