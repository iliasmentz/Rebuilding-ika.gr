<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <!-- <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'> -->
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


    <link rel="stylesheet" href="./css/login.css">
      <link rel="stylesheet" href="./css/custom.css">
      <link rel="stylesheet" href="./css/other.css" >

</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">ΙΚΑ</a>
            </div>
            <ul class="nav navbar-nav homenav">
                <li class="active">
                    <a href="#">Σύνδεση / Εγγραφή</a>
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
                    <a href="#">Είσοδος/Έγγραφη</a>
                </li>
            </ul>
        </div>
    </nav>
    <nav class="main-menu">
        <ul>
            <li>
                <a href="http://justinfarrow.com"><i class="fa fa-home fa-2x"></i> <span class="nav-text">Αρχική</span></a>
            </li>
            <li class="has-subnav">
                <a href="#"><i class="fa fa-files-o" ></i> <span class="nav-text">Ασφάλεια</span></a>
            </li>
            <li class="has-subnav">
                <a href="#"><i class="fa fa-money"></i> <span class="nav-text">Σύνταξη</span></a>
            </li>
            <li class="has-subnav">
                <a href="#"><i class="fa fa-building"></i> <span class="nav-text">Επιχειρήσεις</span></a>
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
    <div class="mymenu"</div>
          <div class="form">

              <ul class="tab-group">
                <li class="tab active"><a href="#signup">Εγγραφή</a></li>
                <li class="tab"><a href="#login">Σύνδεση</a></li>
              </ul>

              <div class="tab-content">
                <div id="signup">
                  <h1>Εγγραφείτε στις Ηλεκτρονικές Υπηρεσίες του ΙΚΑ</h1>

                  <form action="/" method="post">

                  <div class="top-row">
                    <div class="field-wrap">
                      <label>
                        Όνομα<span class="req">*</span>
                      </label>
                      <input type="text" required autocomplete="off" />
                    </div>

                    <div class="field-wrap">
                      <label>
                        Επώνυμο<span class="req">*</span>
                      </label>
                      <input type="text"required autocomplete="off"/>
                    </div>
                  </div>

                  <div class="field-wrap">
                    <label>
                      Email<span class="req">*</span>
                    </label>
                    <input type="email"required autocomplete="off"/>
                  </div>

                  <div class="field-wrap">
                    <label>
                      Δώστε τον κωδικό σας<span class="req">*</span>
                    </label>
                    <input type="password"required autocomplete="off"/>
                  </div>

                  <button type="submit" class="button button-block"/>Εγγραφή</button>

                  </form>

                </div>

                <div id="login">
                  <h1>Καλώς ήρθατε!</h1>

                  <form action="/" method="post">

                    <div class="field-wrap">
                    <label>
                      Email<span class="req">*</span>
                    </label>
                    <input type="email"required autocomplete="off"/>
                  </div>

                  <div class="field-wrap">
                    <label>
                      Κωδικός<span class="req">*</span>
                    </label>
                    <input type="password"required autocomplete="off"/>
                  </div>

                  <p class="forgot"><a href="#">Ξεχάσατε τον κωδικό σας;</a></p>

                  <button class="button button-block"/>Σύνδεση</button>

                  </form>

                </div>

              </div><!-- tab-content -->

        </div> <!-- /form -->
    </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



    <script  src="js/login.js"></script>




</body>

</html>
