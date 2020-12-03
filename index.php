<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
    <title>Uphill Automotive | Home</title>
</head>
<body>

    <div id="wrapper">

    <header>

<?php include "php/header.php" ?>

</header>
      
<main>

  <h2>Welcome to Uphill Automotive</h2>
<div id="date"></div>
      
<script>

let [month, date, year] = new Date().toLocaleDateString("en-US").split("/")
document.getElementById("date").innerHTML = [month, date, year]
document.getElementById("date").style.maxWidth = "10rem"

</script>

<article>

  <p id="introP">
Welcome to the Uphill Automotive official website!
 </p>

 <p>
Here at Uphill we strive to put our customers <b>first</b> through our excellent customer service, tested and reliable vehicles and quick and easy purchase process!
 </p>

 <p>
Through our <b><a id="findVehicle" href="login.php">Find a Vehicle</a></b> service you quickly and easily find the perfect car, truck, van or motorcycle for you!
 </p>

 <p>
Have a wonderful day!
 </p>

 <p id="outroName">
- Gryphon Strother
 </p>

 <p>
   <i>
Owner and Operator
   </i>
 </p>



</article>
          
</main>
      
<footer>
        
      <?php include "php/footer.php" ?>
        
</footer>

</div>
</body>

</html>







