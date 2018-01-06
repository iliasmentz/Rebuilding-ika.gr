<!DOCTYPE html>
<html>
   <head>
      <title>Retirement Application</title>
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
               <li>
                  <a href="./pension.php">Σύνταξη</a>
               </li>
               <li class="active">
                  <a href="./retirementApp.php">Αίτημα Σύνταξης</a>
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
            <h1>Αίτημα συνταξιοδότησης</h1>
         </div>
         <div class="row">
            <h3>Στοιχεία Αιτήματος</h3>
            </br>
            <form class="" action="" method="get">
               <div class="col-md-6">
                  <div class="well" id="wellratio">
                     <div class="row">
                        <label for="sel1" class="control-label col-sm-12">Συνταξιοδοτικός Φορέας</label>
                     </div>
                     <div class="row col-sm-8" >
                        <select class="form-control" id="sel1" name="sel1">
                           <option>ΙΚΑ-ΕΤΑΜ</option>
                           <option>ΙΚΑ</option>
                           <option>ΕΤΑΜ</option>
                        </select>
                     </div>
                     </br>
                     </br>
                     <div class="row">
                        <label for="sel2" class="control-label col-sm-12">Τύπος Σύνταξης</label>
                     </div>
                     <div class="row col-sm-8" >
                        <select class="form-control" id="sel2" name="sel2">
                           <option>Γεράματος</option>
                           <option>Αναπυρίας</option>
                           <option>Θάνατος Ασφαλισμένου</option>
                           <option>Θάνατος Συνταξιούχου</option>
                        </select>
                     </div>
                     </br>
                     </br>
                     <div class="row">
                        <label for="sel2" class="control-label col-sm-12">Τύπος Εγγράφου</label>
                     </div>
                     <div class="row col-sm-8" >
                        <select class="form-control" id="sel3" name="sel3">
                           <option>Ταυτότητα</option>
                           <option>Διαβατήριο</option>
                        </select>
                     </div>
                     </br>
                     </br>
                     <div class="row">
                        <label class="control-label col-sm-12">Αριθμός Εγγράφου:</label>
                     </div>
                     <div class="row">
                        <div class="col-sm-8">
                           <input type="text" class="form-control" id="document" placeholder="ΑΙ1212" name="document">
                        </div>
                     </div>
                     <br/>
                     <div class="row">
                        <label class="control-label col-sm-6">Νομός:</label>
                        <label class="control-label col-sm-6">Πόλη:</label>
                     </div>
                     <div class="row">
                        <div class="col-sm-6">
                           <input type="text" class="form-control" id="region" placeholder="Αττική" name="region">
                        </div>
                        <div class="col-sm-6">
                           <input type="text" class="form-control" id="city" placeholder="Αθήνα" name="city">
                        </div>
                     </div>
                     <br/>
                     <div class="row">
                        <label class="control-label col-sm-8">Οδός:</label>
                        <label class="control-label col-sm-2">Αριθμός:</label>
                     </div>
                     <div class="row">
                        <div class="col-sm-8">
                           <input type="text" class="form-control" id="street" placeholder="Ευδόξου" name="document">
                        </div>
                        <div class="col-sm-3">
                           <input type="number" min="1"  class="form-control" id="streetnumber" placeholder="13" name="streetnumber">
                        </div>
                     </div>
                     <br/>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="well" id="welledit">
                     <div class="row">
                        <label class="control-label col-sm-12">Ημερομηνία Γέννησης</label>
                     </div>
                     <div class="row">
                         <div class="col-sm-6">
                             <input id="input-date" type="date" value="1996-04-09">
                         </div>
                     </div>
                     <br/>
                     <div class="row">
                        <label class="control-label col-sm-12">ΑΦΜ:</label>
                     </div>
                     <div class="row">
                        <div class="col-sm-8">
                           <input type="text" class="form-control" id="afm" placeholder="ΑΦΜ" name="afm">
                        </div>
                     </div>
                     <br/>
                     <div class="row">
                        <label class="control-label col-sm-12">AMKA:</label>
                     </div>
                     <div class="row">
                        <div class="col-sm-8">
                           <input type="text" class="form-control" id="amka" placeholder="ΑΜΚΑ" name="amka">
                        </div>
                     </div>
                     <br/>
                     <div class="row">
                        <label class="control-label col-sm-12">Επώνυμο:</label>
                     </div>
                     <div class="row">
                        <div class="col-sm-8">
                           <input type="text" class="form-control" id="surname" placeholder="Πλακιάς" name="surname">
                        </div>
                     </div>
                     <br/>
                     <div class="row">
                        <label class="control-label col-sm-12">Όνομα:</label>
                     </div>
                     <div class="row">
                        <div class="col-sm-8">
                           <input type="text" class="form-control" id="onoma" placeholder="Απόστολος" name="onoma">
                        </div>
                     </div>
                     <br/>
                     <div class="row">
                        <div class="col-sm-6">
                           <button type="submit" class="btn btn-default">Υποβολή Αιτήματος</button>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </body>
</html>
