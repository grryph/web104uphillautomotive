<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
   
   <!-- The core Firebase JS SDK is always required and must be listed first -->
   <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-app.js"></script>
   <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-firestore.js"></script>
   <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-auth.js"></script>

   <script src="js/paymentcalc.js" type="text/javascript"></script>
   
    <title>Uphill Automotive | Payment Calculator</title>
</head>

<body>

    <div id="wrapper">

<header>

    <?php include "php/header.php" ?>

</header>


<main>

<h2>Payment Calculator</h2>

<button id="signOut" onclick="signOutNow()">Sign Out</button>

<div id="showVehicleSelected">
</div>

<article id="calc">



<!-- <label id="vehicleprice">Vehicle Price: </label>
<label id="dollarsign">$</label>
    <input id="price" type="number" min ="0" max="9999999" size="6" required> -->

<!--  REMOVE LATER WHEN STYLING -->

<!-- <br><br> -->

<!--  REMOVE LATER WHEN STYLING -->

<label id="downpayment">Down Payment: </label>
<label id="dollarsign">$</label>
    <input id="down" type="number" min ="0" max="9999999" size="6" required>
<!-- <label id="cents">.00</label> -->


<!--  REMOVE LATER WHEN STYLING -->

<!-- <br><br> -->

<!--  REMOVE LATER WHEN STYLING -->

<label id="paymentfrequency">Payment Frequency:</label>
    <select id="frequency" required>
        <option value="weekly">Weekly</option>
        <option value="biweekly">Bi Weekly</option>
        <option value="monthly">Monthly</option>
    </select>

<!--  REMOVE LATER WHEN STYLING -->

<!-- <br><br> -->

<!--  REMOVE LATER WHEN STYLING -->

<label id="interestrate">Interest Rate (OAC):</label>
    <select id="rate" required>
        <option value="7">7</option>
        <option value="10">10</option>
        <option value="12">12</option>
        <option value="15">15</option>
    </select>
    <label id="percent">percent</label>

<!--  REMOVE LATER WHEN STYLING -->

<!-- <br><br> -->

<!--  REMOVE LATER WHEN STYLING -->

<label id="loanterm">Loan Term:</label>
    <select id="term" required>
        <option value="12">12</option>
        <option value="24">24</option>
        <option value="36">36</option>
        <option value="48">48</option>
        <option value="60">60</option>
        <option value="72">72</option>
    </select>
<label id="months">months</label>

<!-- REMOVE LATER WHEN STYLING -->

<!-- <br><br> -->

<!-- REMOVE LATER WHEN STYLING -->

<button id="submit" onclick="calcPayment()">Calculate Payment</button>

</article>

<article id="result">

<hr>

<span id="totalPayment"></span>
<span id="totalFrequency"></span>
<span id="totalTerm"></span>


</article>

<button id="printPage" onclick="window.print();">Print This Page</button>

</main>
      
        <footer>
        
      <?php include "php/footer.php" ?>
        
      </footer>

</div>

</body>

</html>