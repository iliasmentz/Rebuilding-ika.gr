<!DOCTYPE html>
<html>
<title>Home Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="./css/custom.css" />

<body>

<!-- Navbar -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">ΙΚΑ</a>
    </div>
    <ul class="nav navbar-nav homenav">
      <li class="active"><a href="#">Αρχική</a></li>
    </ul>
    <ul class="nav navbar-nav mynavbar" >
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
                    echo '<a href="/IKA/logout.php">Αποσύνδεση</a>
                    </li>
                    <li>
                        <a href="/IKA/profile.php">'.$_SESSION['username'].'</a>
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

<div class="mymenu">
    <section class="c-fi">
        <div class="c-fi-wrapper">
            <div class="c-fi-grid">
                <div class="c-fi-cell hero">
                    <a class="c-fi-link ga-event" data-event-action="Feature Hero Image Click" href="/onlineservices/" style="background-image:url(./img/security-cover.jpg)">
                        <div class="c-fi-text">Ασφάλεια</div>
                    </a>
                </div>
                <div class="c-fi-cell">
                    <div class="c-fi-grid nested">
                        <div class="c-fi-cell">
                            <a class="c-fi-link ga-event" data-event-action="Feature Image Click" href="./pension.php/" style="background-image:url(./img/pension-cover.jpg)">
                                <div class="c-fi-text">Σύνταξη</div>
                            </a>
                        </div>
                        <div class="c-fi-cell">
                            <a class="c-fi-link ga-event" data-event-action="Feature Image Click" href="./business.php/" style="background-image:url(./img/work-cover.jpg)">
                                <div class="c-fi-text">Εργοδοσία</div>
                            </a>
                        </div>
                        <div class="c-fi-cell">
                            <a class="c-fi-link ga-event" data-event-action="Feature Image Click" href="/benefits/medicare/prescriptionhelp/" style="background-image:url(./img/debt-cover.jpg)">
                                <div class="c-fi-text">Οφειλές</div>
                            </a>
                        </div>
                        <div class="c-fi-cell">
                            <a class="c-fi-link ga-event" data-event-action="Feature Image Click" href="https://faq.ssa.gov/ics/support/KBAnswer.asp?questionID=3704" style="background-image:url(./img/disability-cover.jpg)">
                                <div class="c-fi-text">Άτομα με ειδικές αναπηρίες</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

    <div class="sub-menu">
        <div class="m-row">

          <div class="mb3 m-col m-fx m-ta-c l-w-25">
            <a class=" selection-sub-menu bg-white bs1 db ga-event pa3 l-bg-clear l-bs0 l-pa0" data-event-action="Feature Icon Click" data-event-label="Social Security Number" href="/ssnumber/">
              <img alt="" class="dn m-db mx-auto my3 svg6" src="./img/newsfeed.png">
              <p class="link-color fw5 mb2">Ενημερώσεις</p>
            </a>
          </div>
          <div class="mb3 m-col m-fx m-ta-c l-w-25">
              <a class="selection-sub-menu bg-white bs1 db ga-event pa3 l-bg-clear l-bs0 l-pa0" data-event-action="Feature Icon Click" data-event-label="my Social Security" href="/myaccount/">
                  <img alt="" class="dn m-db mx-auto my3 svg6" src="./img/faq.png">
                  <p class="link-color fw5 mb2">Συχνές Ερωτήσεις</p>
              </a>
        </div>
          <div class="mb3 m-col m-fx m-ta-c m-mb0  l-w-25">
            <a class="selection-sub-menu bg-white bs1 db ga-event pa3 l-bg-clear l-bs0 l-pa0" data-event-action="Feature Icon Click" data-event-label="Frequently Asked Questions" href="/ask/">
              <img alt="" class="dn m-db mx-auto my3 svg6" src="./img/contact.png">
              <p class="link-color fw5 mb2">Επικοινωνία</p>
            </a>
          </div>
        </div>
      </div>
<!-- END MAIN -->

</body>
</html>
