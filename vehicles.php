<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />

   <!-- The core Firebase JS SDK is always required and must be listed first -->
   <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-app.js"></script>
   <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-firestore.js"></script>
   <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-auth.js"></script>

   <script src="js/picturefill.js"></script>

   <script src="js/vehicleselect.js" type="text/javascript"></script>
   
   <title>Uphill Automotive | Select a Vehicle</title>
</head>

<body>

    <div id="wrapper">

    <header>

<?php include "php/header.php" ?>

</header>

<main>

    <h2>Select a Vehicle</h2>
    <p id="selectvehicleinstructions">Please select a vehicle then click the <b>Proceed to Payment</b> button at the bottom to proceed.</p>

    <button id="signOut" onclick="signOutNow()">Sign Out</button>

<article id="vehiclesgrid">

    <!-- <ul onclick="storeCar(event)"> -->
        <ul onclick="storeCar(event)">
    
        <li id="brz2015" onclick="deleteLast(),storeCar(event)">
            <b class="carYear">2015</b>
            <b class="carName">Subaru BRZ</b>
            <b class="dollarSign">$</b>
            <b class="carPrice">67500</b>

            <p class="carKM">45000</p>
            <p class="kmSign">KM</p>

            <img src="images/brzLG.jpg">
            </li>

        <li id="veyron2018" onclick="deleteLast(),storeCar(event)">
            <b class="carYear">2018</b>
            <b class="carName">Bugatti Veyron</b>
            <b class="dollarSign">$</b>
            <b class="carPrice">750000</b>
    
            <p class="carKM">16000</p>
            <p class="kmSign">KM</p>

            <img src="images/bugattiLG.jpg">
            </li>        
 
       <li id="bus1979" onclick="deleteLast(),storeCar(event)">
            <b class="carYear">1979</b>
            <b class="carName">Volkswagon Bus</b>
            <b class="dollarSign">$</b>
            <b class="carPrice">12000</b>

            <p class="carKM">285600</p>
            <p class="kmSign">KM</p>

            <img src="images/busLG.jpg">
            </li>

        <li id="camaro2012" onclick="deleteLast(),storeCar(event)">
            <b class="carYear">2012</b>
            <b class="carName">Chevrolet Camaro</b>
            <b class="dollarSign">$</b>
            <b class="carPrice">32000</b>
    
            <p class="carKM">154750</p>
            <p class="kmSign">KM</p>

            <img src="images/camaroLG.jpg">
            </li>        
            
        <li id="challenger2014" onclick="deleteLast(),storeCar(event)">
            <b class="carYear">2014</b>
            <b class="carName">Dodge Challenger</b>
            <b class="dollarSign">$</b>
            <b class="carPrice">46000</b>

            <p class="carKM">56000</p>
            <p class="kmSign">KM</p>

            <img src="images/challengerLG.jpg">
            </li>

        <li id="laferrari2016" onclick="deleteLast(),storeCar(event)">
            <b class="carYear">2016</b>
            <b class="carName">Ferrari LaFerrari</b>
            <b class="dollarSign">$</b>
            <b class="carPrice">240500</b>
    
            <p class="carKM">36500</p>
            <p class="kmSign">KM</p>

            <img src="images/ferrariLG.jpg">
            </li>        
 
       <li id="golf2010" onclick="deleteLast(),storeCar(event)">
            <b class="carYear">2010</b>
            <b class="carName">Volkswagon Golf GTI</b>
            <b class="dollarSign">$</b>
            <b class="carPrice">15000</b>

            <p class="carKM">154000</p>
            <p class="kmSign">KM</p>

            <img src="images/golfLG.jpg">
            </li>

        <li id="gtr2017" onclick="deleteLast(),storeCar(event)">
            <b class="carYear">2017</b>
            <b class="carName">Nissan GTR</b>
            <b class="dollarSign">$</b>
            <b class="carPrice">130000</b>
    
            <p class="carKM">121750</p>
            <p class="kmSign">KM</p>

            <img src="images/gtrLG.jpg">
            </li>  
                  
        <li id="gallardo2019" onclick="deleteLast(),storeCar(event)">
            <b class="carYear">2019</b>
            <b class="carName">Lamborghini Gallardo</b>
            <b class="dollarSign">$</b>
            <b class="carPrice">420500</b>

            <p class="carKM">9000</p>
            <p class="kmSign">KM</p>

            <img src="images/lamboLG.jpg">
            </li>

        <li id="mustang2013" onclick="deleteLast(),storeCar(event)">
            <b class="carYear">2013</b>
            <b class="carName">Ford Mustang GT</b>
            <b class="dollarSign">$</b>
            <b class="carPrice">55000</b>
    
            <p class="carKM">78000</p>
            <p class="kmSign">KM</p>

            <img src="images/mustangLG.jpg">
            </li>        
 
       <li id="cooper2015" onclick="deleteLast(),storeCar(event)">
            <b class="carYear">2015</b>
            <b class="carName">Mini Cooper S</b>
            <b class="dollarSign">$</b>
            <b class="carPrice">20500</b>

            <p class="carKM">108000</p>
            <p class="kmSign">KM</p>

            <img src="images/miniLG.jpg">
            </li>

        <li id="panamera2017" onclick="deleteLast(),storeCar(event)">
            <b class="carYear">2017</b>
            <b class="carName">Porsche Panamera</b>
            <b class="dollarSign">$</b>
            <b class="carPrice">180000</b>
    
            <p class="carKM">67000</p>
            <p class="kmSign">KM</p>

            <img src="images/panameraLG.jpg">
            </li>  
                                         
                        
            
</article>

<a href="payments.php"><button id="topayment">Proceed to Payment</button></a>

<footer>
        
    <?php include "php/footer.php" ?>
      
</footer>

</div>

 

</body>

</html>