<!DOCTYPE html>
<?php session_start();
    if(!array_key_exists('login', $_SESSION)){
        $_SESSION['mustlogin']="Πρέπει να συνδεθείς πρώτα";
        header("location:login.php");
        die();
    }
    if($_SESSION['login']!=1){
        $_SESSION['mustlogin']="Πρέπει να συνδεθείς πρώτα";
        header("location:login.php");
        die();
    }
    require_once 'login_db.php';
    $conn = new mysqli($hn,$un,$pw,$db);
    mysqli_set_charset($conn,'utf8');
    if($conn->connect_error) die($conn->connect_error);
    mysqli_set_charset($conn,'utf8');
    $query = "SELECT * FROM Login WHERE ID =".$_SESSION['id'];
	$result = $conn -> query($query);
	if(!$result) die ($conn->error);
	$result->data_seek(0);
	$login=$result->fetch_array(MYSQLI_ASSOC);
    if($login['type']==2 or $login['type']==3){
        $_SESSION['pension_message']='Είστε ήδη συνταξιούχος';
        header("location:pension.php");
        die();
    }
    $query = "SELECT * FROM pension_request WHERE ID =".$_SESSION['id'];
	$result = $conn -> query($query);
	if(!$result) die ($conn->error);
	$result->data_seek(0);
	$login=$result->fetch_array(MYSQLI_ASSOC);
    if($result->num_rows!=0){
        $_SESSION['pension_message']='Έχετε κάνει ήδη αίτηση συνταξιοδότησης';
        header("location:pension.php");
        die();
    }
    $query = "SELECT * FROM User WHERE ID =".$_SESSION['id'];
	$result = $conn -> query($query);
	if(!$result) die ($conn->error);
	$result->data_seek(0);
	$user=$result->fetch_array(MYSQLI_ASSOC);
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $afm = $_POST['AFM'];
        $amka = $_POST['AMKA'];
        $identifier = $_POST['identifier'];
        $query = "INSERT INTO pension_request (ID,AFM,AMKA,identifier,name,surname) Values(".$_SESSION['id'].",'$afm','$amka','$identifier','$name','$surname')";
        $result = $conn -> query($query);
        if(!$result) echo " INSERT failed $query<br>". $conn->error;
        $_SESSION['welcome']='Το αίτημα συνταξιοδότησης έγινε δεκτό';
        header("location:profile.php");
    }
 ?>
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
       <script src="./js/pension.js"></script>
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
               <a href="./"><i class="fa fa-home fa-2x"></i> <span class="nav-text">Αρχική</span></a>
            </li>
            <li class="has-subnav">
               <a href="#"><i class="fa fa-files-o" ></i> <span class="nav-text">Ασφάλεια</span></a>
            </li>
            <li class="has-subnav">
               <a href="./pension.php"><i class="fa fa-money"></i> <span class="nav-text">Σύνταξη</span></a>
            </li>
            <li class="has-subnav">
               <a href="/sdi1400161/work/business.php"><i class="fa fa-building"></i> <span class="nav-text">Εργοδοσία</span></a>
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
      <div class="container ">
         <div class="row">
            <h1>Αίτημα συνταξιοδότησης</h1>
         </div>
         <div class="row">
            <h3>Στοιχεία Αιτήματος</h3>
            </br>
            <form action="retirementApp.php" onsubmit="return checkInp()" method="post" name="myForm" id="myForm">
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
                           <option>Γήρατος</option>
                           <option>Αναπηρίας</option>
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
                        <label class="control-label col-sm-12">Αριθμός Εγγράφου(*):</label>
                     </div>
                     <div class="row">
                        <div class="col-sm-8">
                           <input type="text" class="form-control" id="identifier" placeholder="ΑΙ1212" name="identifier"  required="true" autofocus="true">
                        </div>
                     </div>
                     <br/>
                     <div class="row">
                        <label class="control-label col-sm-6">Νομός:</label>
                        <label class="control-label col-sm-6">Πόλη:</label>
                     </div>
                     <div class="row">
                        <div class="col-sm-6">
                           <input type="text" class="form-control" id="region" placeholder="Αττική" name="region" >
                        </div>
                        <div class="col-sm-6">
                           <input type="text" class="form-control" id="city" placeholder="Αθήνα" name="city" >
                        </div>
                     </div>
                     <br/>
                     <div class="row">
                        <label class="control-label col-sm-8">Οδός:</label>
                        <label class="control-label col-sm-2">Αριθμός:</label>
                     </div>
                     <div class="row">
                        <div class="col-sm-8">
                           <input type="text" class="form-control" id="street" placeholder="Ευδόξου" name="document" >
                        </div>
                        <div class="col-sm-3">
                           <input type="number" min="1"  class="form-control" id="streetnumber" placeholder="13" name="streetnumber" >
                        </div>
                     </div>
                     <br/>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="well" id="welledit">
                     <div class="row">
                        <label class="control-label col-sm-12 ">ΑΦΜ(*):</label>
                     </div>
                     <div class="row">
                        <div class="col-sm-8">
                           <input type="text" class="form-control" value="<?=$user['AFM']?>" oninput="remobeBorder(this)" placeholder="ΑΦΜ" name="AFM" id="AFM"  required="true" autofocus="true">
                        </div>
                     </div>
                     <br/>
                     <div class="row">
                        <label class="control-label col-sm-12">AMKA(*):</label>
                     </div>
                     <div class="row">
                        <div class="col-sm-8">
                           <input type="text" class="form-control" value="<?=$user['AMKA']?>" oninput="remobeBorder(this)" placeholder="ΑΜΚΑ" name="AMKA" id="AMKA"  required="true" autofocus="true">
                        </div>
                     </div>
                     <br/>
                     <div class="row">
                        <label class="control-label col-sm-12">Επώνυμο(*):</label>
                     </div>
                     <div class="row">
                        <div class="col-sm-8">
                           <input type="text" class="form-control" value="<?=$user['Surname']?>" id="surname" placeholder="Πλακιάς" name="surname"  required="true" autofocus="true">
                        </div>
                     </div>
                     <br/>
                     <div class="row">
                        <label class="control-label col-sm-12">Όνομα(*):</label>
                     </div>
                     <div class="row">
                        <div class="col-sm-8">
                           <input type="text" class="form-control" value="<?=$user['Name']?>" id="name" placeholder="Απόστολος" name="name"  required="true" autofocus="true">
                        </div>
                     </div>
                     <br/>
                     <div class="row">
                        <div class="col-sm-6">
                           <button type="submit" class="btn btn-primary">Υποβολή Αιτήματος</button>
                        </div>
                        <div class="col-sm-2">
                           <button  onclick="window.location = '/sdi1400161/pension.php';" type="button" class="btn btn-danger">Επιστροφή</button>
                       </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </body>
</html>
