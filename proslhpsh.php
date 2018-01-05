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
    <link rel="stylesheet" href="./css/custom.css">
    <link rel="stylesheet" href="./css/other.css" >

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
    form {
            /* Just to center the form on the page */
            margin: 0 auto;
            width: 400px;
            /* To see the outline of the form */
            padding: 1em;
            border: 1px solid #CCC;
            border-radius: 1em;
          }

          form div + div {
            margin-top: 1em;
          }

          label {
            /* To make sure that all labels have the same size and are properly aligned */
            display: inline-block;
            width: 90px;
            text-align: right;
          }

          input, textarea {
            /* To make sure that all text fields have the same font settings
               By default, textareas have a monospace font */
            font: 1em sans-serif;

            /* To give the same size to all text fields */
            width: 300px;
            box-sizing: border-box;

            /* To harmonize the look & feel of text field border */
            border: 1px solid #999;
          }

          input:focus, textarea:focus {
            /* To give a little highlight on active elements */
            border-color: #000;
          }

          textarea {
            /* To properly align multiline text fields with their labels */
            vertical-align: top;

            /* To give enough room to type some text */
            height: 5em;
          }

          .button {
            /* To position the buttons to the same position of the text fields */
            padding-left: 90px; /* same size as the label elements */
          }

          button {
            /* This extra margin represent roughly the same space as the space
               between the labels and their text fields */
            margin-left: .5em;
          }
    </style>
</head>
<body>

    <nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="/IKA/index.php">ΙΚΑ</a>
			</div>
			<ul class="nav navbar-nav homenav">

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
				<a href="/IKA/index.php"><i class="fa fa-home fa-2x"></i> <span class="nav-text">Αρχική</span></a>
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

  <form action="/my-handling-form-page" method="post">
    <div>
        <label for="name">Όνομα:</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="mail">Επίθετο:</label>
        <input type="text" id="name" name="user_surname">
    </div>
    <div>
        <label for="name">AΦΜ:</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="name">Ήμερες απασχολήσης :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="name">Κόστος Ενσημού:</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div class="button">
        <button type="submit">Υποβολή αιτήματος</button>
   </div>

</form>
</html>
