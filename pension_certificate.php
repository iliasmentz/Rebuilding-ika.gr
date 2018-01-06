<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Receipt</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>

  </head>

  <body>
      <hr/>
      <div class="container">
          <p style="size text-align:left;">
              <div style="font-size: medium">
                  <img style="height: 120px; width: 200px;"src="/IKA/img/ika.jpg" alt="IKA">
                  <span style="font-size: 200%; float:right;">Βεβαίωση Σύνταξης</span>
              </div>
          </p>
      </div>
      <br/>
      <hr/>
      <br/>
      <div class="container">
            <p >
                <div style="font-size: small">
                    ΥΠΟΚΑΤΑΣΤΗΜΑ :
                </div>
            </p>
            <p >
                <div style="font-size: small">
                    ΚΑΤΗΓΟΡΙΑ :
                </div>
            </p>
            <p>
                <div style="font-size: small">
                    Α.Μ.Κ.Α. :
                </div>
            </p>
            <p >
                <div style="font-size: small">
                    Α.Φ.Μ. :
                </div>
            </p>
            <p >
                <div style="font-size: small">
                    ΟΝΟΜΑΤΕΠΩΝΥΜΟ :
                </div>
            </p>
            <p >
                <div style="font-size: small">
                    ΤΑΧΥΔΡΟΜΙΚΗ ΔΙΕΥΘΥΝΣΗ :
                </div>
            </p>
            <p >
                <div style="font-size: small">
                    ΠΟΣΟ ΣΥΝΤΑΞΗΣ :
                </div>
            </p>
      </div>
      <script>
        function Myprint() {
            window.print();
         }
      </script>
      <div class="container">
          <div class="pull-right">
              <button class="btn btn-primary btn-md" onclick="Myprint()">Εκτύπωση Απόδειξης</button>
          </div>
      </div>
  </body>
</html>
