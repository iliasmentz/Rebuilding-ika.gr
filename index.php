<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="./css/custom.css" />

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

<div class="mymenu">
    <section class="c-fi">
        <div class="c-fi-wrapper">
            <div class="c-fi-grid">
                <div class="c-fi-cell hero">
                    <a class="c-fi-link ga-event" data-event-action="Feature Hero Image Click" href="/onlineservices/" style="background-image:url(/img/en/2017/home/hero-online-services.jpg)">
                        <div class="c-fi-text">Putting you in control…<br>Learn what you can do online</div>
                    </a>
                </div>
                <div class="c-fi-cell">
                    <div class="c-fi-grid nested">
                        <div class="c-fi-cell">
                            <a class="c-fi-link ga-event" data-event-action="Feature Image Click" href="/benefits/disability/" style="background-image:url(/img/en/2017/home/featured-disability.jpg)">
                                <div class="c-fi-text">Disability</div>
                            </a>
                        </div>
                        <div class="c-fi-cell">
                            <a class="c-fi-link ga-event" data-event-action="Feature Image Click" href="/benefits/retirement/" style="background-image:url(/img/en/2017/home/featured-retirement.jpg)">
                                <div class="c-fi-text">Retirement</div>
                            </a>
                        </div>
                        <div class="c-fi-cell">
                            <a class="c-fi-link ga-event" data-event-action="Feature Image Click" href="/benefits/medicare/prescriptionhelp/" style="background-image:url(/img/en/2017/home/featured-prescriptionhelp.jpg)">
                                <div class="c-fi-text">Extra Help with <br /> Medicare Prescription <br /> Drug Plan Costs</div>
                            </a>
                        </div>
                        <div class="c-fi-cell">
                            <a class="c-fi-link ga-event" data-event-action="Feature Image Click" href="https://faq.ssa.gov/ics/support/KBAnswer.asp?questionID=3704" style="background-image:url(/img/en/2017/home/featured-change-address-ff.jpg)">
                                <div class="c-fi-text">Change of Address</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="bg-gray-100">
    <div class="wrapper pt0 l-pb0">
        <div class="m-row">
            <div class="mb3 m-col m-fx m-ta-c m-w-50 l-w-25">
                <a class="bg-white bs1 db ga-event pa3 l-bg-clear l-bs0 l-pa0" data-event-action="Feature Icon Click" data-event-label="my Social Security" href="/myaccount/">
                    <img alt="" class="dn m-db mx-auto my3 svg6" src="/img/icons/home/color-myss.svg">
                    <p class="link-color fw5 mb2">
                        <span class="my">my</span>
                        <span class="ssa">Social Security</span>
                    </p>
                    <p class="gray">Check out your
                        <em>Social Security Statement</em>, change your address &amp; manage your benefits online today.</p>
                    </a>
          </div>
          <div class="mb3 m-col m-fx m-ta-c m-w-50 l-w-25">
            <a class="bg-white bs1 db ga-event pa3 l-bg-clear l-bs0 l-pa0" data-event-action="Feature Icon Click" data-event-label="Social Security Number" href="/ssnumber/">
              <img alt="" class="dn m-db mx-auto my3 svg6" src="/img/icons/home/color-ssn-card.svg">
              <p class="link-color fw5 mb2">Social Security Number</p>
              <p class="gray">Your Social Security number remains your first and continuous link with Social Security.</p>
            </a>
          </div>
          <div class="mb3 m-col m-fx m-ta-c m-mb0 m-w-50 l-w-25">
            <a class="bg-white bs1 db ga-event pa3 l-bg-clear l-bs0 l-pa0" data-event-action="Feature Icon Click" data-event-label="Retirement Estimator" href="/benefits/retirement/estimator.html">
              <img alt="" class="dn m-db mx-auto my3 svg6" src="/img/icons/home/color-calculator.svg">
              <p class="link-color fw5 mb2">Retirement Estimator</p>
              <p class="gray">Calculate your benefits based on your actual Social Security earnings record.</p>
            </a>
          </div>
          <div class="mb3 m-col m-fx m-ta-c m-mb0 m-w-50 l-w-25">
            <a class="bg-white bs1 db ga-event pa3 l-bg-clear l-bs0 l-pa0" data-event-action="Feature Icon Click" data-event-label="Frequently Asked Questions" href="/ask/">
              <img alt="" class="dn m-db mx-auto my3 svg6" src="/img/icons/home/color-faq.svg">
              <p class="link-color fw5 mb2">FAQs</p>
              <p class="gray">Get answers to frequently asked questions about Social Security.</p>
            </a>
          </div>
        </div>
      </div>
    </section>
<!-- END MAIN -->

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>
