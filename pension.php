<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="./css/custom.css" />

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
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-theme-l1">ΙΚΑ</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Αναζήτηση</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Γλώσσα</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Είσοδος/Εγγραφή</a>
  </div>
</div>

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b>Μενού</b></h4>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Αρχική</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Ασφάλεια</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Σύνταξη</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Επιχειρήσεις</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Οφειλές</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Άτομα με ειδικές Αναπηρίες</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Ενημερώσεις</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Συχνές Ερωτήσεις</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Επικοινωνία</a>
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
                            <a class="c-fi-link ga-event" data-event-action="Feature Image Click" href="/benefits/retirement/" style="background-image:url(./img/certificate.jpg)">
                                <div class="c-fi-text">Βεβαίωση Σύνταξης</div>
                            </a>
                        </div>
                        <div class="c-fi-cell">
                            <a class="c-fi-link ga-event" data-event-action="Feature Image Click" href="/benefits/medicare/prescriptionhelp/" style="background-image:url(./img/calculating.jpg)">
                                <div class="c-fi-text">Υπολογισμός Σύνταξης</div>
                            </a>
                        </div>
                        <div class="c-fi-cell">
                            <a class="c-fi-link ga-event" data-event-action="Feature Image Click" href="https://faq.ssa.gov/ics/support/KBAnswer.asp?questionID=3704" style="background-image:url(./img/request.jpg)">
                                <div class="c-fi-text">Ηλεκτρονική Υποβολή <br/>Αίτησης Συνταξιοδότησης</div>
                            </a>
                        </div>
            </div>
        </div>
    </section>
</div>
</html>
