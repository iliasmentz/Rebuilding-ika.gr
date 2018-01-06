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
            <h1>Υποβολή αίτησης απόδοσης ενσημάτων</h1>
            </br>
            </br>
         </div>
         <div class="row">
            <div class="col-md-8">
               <h3>Στοιχεία εργαζομένου</h3>
               <div class="well" id="welledit">
                  <form class="" action="" method="get">
                     <div class="row">
                        <label class="control-label col-sm-4">Όνομα Εργαζομένου:</label>
                     </div>
                     <div class="row">
                        <div class="col-sm-6">
                           <input type="text" class="form-control" id="workage" placeholder="Όνομα" name="workage">
                        </div>
                     </div>
                     <br/>
                        <div class="row">
                           <label class="control-label col-sm-4">Επίθετο Εργαζομένου:</label>
                        </div>
                        <div class="row">
                           <div class="col-sm-6">
                              <input type="text" class="form-control" id="workage" placeholder="Επίθετο" name="workage">
                           </div>
                        </div>
                        <br/>
                    <div class="row">
                        <label class="control-label col-sm-4">Ημέρες Εργασίας:</label>
                    </div>
                     <div class="row">
                        <div class="col-sm-6">
                           <input type="text" class="form-control" id="workage" placeholder="Ημέρες" name="workage">
                        </div>
                     </div>
                     <br/>
                     <div class="row">
                        <label class="control-label col-sm-4">Αξία Ενσήμου:</label>
                     </div>
                     <div class="row">
                        <div class="col-sm-6">
                           <input type="text" class="form-control" id="salary" placeholder="Αξία" name="salary">
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
