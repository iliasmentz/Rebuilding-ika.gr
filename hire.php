<!DOCTYPE html>
<html>
   <head>
      <title>Πρόσληψη Εργαζομένου</title>
      <meta charset="UTF-8">
      <meta content="width=device-width, initial-scale=1" name="viewport">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                  <a href="/IKA/business.php">Εργοδοσία</a>
               </li>
               <li class="active">
                  <a href="/IKA/stamp.php">Απόδοση Ενσυμάτων</a>
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
            <h1>Πρόσληψη Εργαζόμενου</h1>
            </br>
            </br>
         </div>
         <div class="row">
            <div class="col-md-8">
               <h3>Στοιχεία εργαζομένου</h3>

               <form class="" action="" method="get">
                  <div class="well" id="welledit">

                      <div class="row">
                          <label for="sel1" class="control-label col-sm-12">Τύπος Πρόσληψης</label>
                      </div>
                      <div class="row col-sm-4" >
                          <select class="form-control" id="sel1" name="sel1">
                              <option>Πρόσληψη σε Εταιρία</option>
                              <option>Κατ'οίκον Πρόσληψη</option>
                          </select>
                      </div>
                    </br>
                    </br>
                    </br>

                     <div class="row">
                        <label class="control-label col-sm-4">Όνομα Εργαζομένου:</label>
                     </div>
                     <div class="row">
                        <div class="col-sm-6">
                           <input type="text" class="form-control" id="workage" placeholder="Όνομα" name="workage"  required="true" autofocus="true">
                        </div>
                     </div>
                     <br/>
                        <div class="row">
                           <label class="control-label col-sm-4">Επίθετο Εργαζομένου:</label>
                        </div>
                        <div class="row">
                           <div class="col-sm-6">
                              <input type="text" class="form-control" id="workage" placeholder="Επίθετο" name="workage"  required="true" autofocus="true">
                           </div>
                        </div>
                        <br/>
                    <div class="row">
                        <label class="control-label col-sm-4">Αριθμός Ταυτότητας:</label>
                    </div>
                     <div class="row">
                        <div class="col-sm-6">
                           <input type="text" class="form-control" id="code" placeholder="ΧΧ ΧΧΧΧΧΧ" name="code"  required="true" autofocus="true">
                        </div>
                     </div>
                     <br/>
                     <div class="row">
                        <label class="control-label col-sm-4">Ημερομηνία έναρξης ενσημοδότησης</label>
                     </div>
                     <div class="row">
                        <div class="col-sm-6">
                           <input id="input-date" type="date" id="birthday" placeholder="ΜΜ/ηη/ΧΧΧΧ" name="birtdate"  required="true" autofocus="true">
                        </div>
                     </div>
                     <br/>
                     <div class="row">
                        <label class="control-label col-sm-4">Μηνιαίες Αποδοχές</label>
                     </div>
                     <div class="row">
                        <div class="col-sm-6">
                            <input type="number" min="0" class="form-control" id="salary" placeholder="Αξία" name="salary"  required="true" autofocus="true">
                        </div>
                     </div>
                     <br/>
                     <div class="row">
                        <label class="control-label col-sm-4">Αξία Ενσήμου:</label>
                     </div>
                     <div class="row">
                        <div class="col-sm-6">
                           <input type="number" min="0" class="form-control" id="stamp" placeholder="Αξία" name="stamp"  required="true" autofocus="true">
                        </div>
                     </div>
                     <br/>
                     <br/>
                     <div class="row">
                        <div class="col-sm-6">
                           <button type="submit" class="btn btn-primary">Πρόσληψη</button>
                        </div>
                        <div class="col-sm-2">
                           <button  onclick="window.location = '/IKA/business.php';" type="button" class="btn btn-danger">Επιστροφή</button>
                        </div>
                     </div>
                  </form>
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
