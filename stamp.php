<!DOCTYPE html>
<html>

<head>
    <title>Υποβολή αίτησης απόδοσης ενσημάτων</title>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/IKA/css/custom.css">
    <link rel="stylesheet" href="/IKA/css/other.css">
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/IKA/">ΙΚΑ</a>
            </div>
            <ul class="nav navbar-nav homenav">
                <li>
                    <a href="/IKA/business.php">Εργοδοσία</a>
                </li>
                <li class="active">
                    <a href="/IKA/stamp.php">Υπολογισμός Ενσήμων</a>
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
            <h1>Υποβολή αίτησης απόδοσης ενσημάτων</h1>
            </br>
            </br>
        </div>
        <h3>Στοιχεία εργαζομένου</h3>
        <form class="" action="" method="get" onsubmit="return false">
            <div class="row">
                <div class="col-md-6">
                    <div class="well" id="welledit">
                        <div class="row">
                            <label class="control-label col-sm-4">Όνομα Εργαζομένου:</label>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="name" placeholder="Όνομα" name="name" required="true" autofocus="true">
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <label class="control-label col-sm-4">Επίθετο Εργαζομένου:</label>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="surname" placeholder="Επίθετο" name="surname" required="true" autofocus="true">
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <label class="control-label col-sm-4">Αριθμός Ταυτότητας:</label>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="code" placeholder="ΧΧ ΧΧΧΧΧΧ" name="code" required="true" autofocus="true">
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <label class="control-label col-sm-4">Ημερομηνία έναρξης ενσημοδότησης</label>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input id="input-date" type="date" id="birthday" placeholder="ΜΜ/ηη/ΧΧΧΧ" name="birtdate">
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <label class="control-label col-sm-4">Ημερομηνία πάυσης ενσημοδότησης</label>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input id="input-date" type="date" id="birthday" placeholder="ΜΜ/ηη/ΧΧΧΧ" name="birtdate">
                            </div>
                        </div>
                        <br/>
                        <br/>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="well">
                        <div class="row">
                            <label class="control-label col-sm-4">Ημέρες Εργασίας:</label>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="workage" placeholder="Ημέρες" name="workage" required="true" autofocus="true">
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <label class="control-label col-sm-4">Αξία Ενσήμου:</label>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="worth" placeholder="Αξία" name="worth" required="true" autofocus="true">
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <label for="sel2" class="control-label col-sm-12">Τύπος Απασχόλησης</label>
                        </div>
                        <div class="row">
                            <div class=" col-sm-6">
                                <select class="form-control" id="type" name="type">
                                <option value="1">Πλήρης Απασχόληση</option>
                                <option value="0.5">Ημιαπασχόληση</option>
                            </select>
                            </div>
                        </div>
                        </br>
                        <div class="row">
                            <label class="control-label col-sm-4">Υπερωρίες:</label>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="extra" placeholder="Υπερωρίες" value="0" name="extra" required="true" autofocus="true">
                            </div>
                        </div>
                    </br>
                        <div class="row">
                            <div class="col-sm-6">
                                <button onclick="stamp_calc()" type="submit" class="btn btn-primary">Υπολογισμός</button>
                            </div>
                            <div class="col-sm-2">
                               <button  onclick="window.location = '/IKA/business.php';" type="button" class="btn btn-danger">Επιστροφή</button>
                           </div>

                    </div>

                    </div>
                        <div class="well" id="result" style="display:none;">
                            <h3 id="myHeader">Συνολική αξία ενσήμων: </h3>
                        </div>
                </div>
            </div>
        </form>
    </div>
</body>
<script>
    function stamp_calc(){
          var days = document.getElementById("workage").value;
          var price = document.getElementById("worth").value;
          var hours = document.getElementById("type").value;
          var extrahours = document.getElementById("extra").value;

          var total = days*price*hours + extrahours*price;

          myHeader.innerText ="Συνολική αξία ενσήμων: " +  total + "€";
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
