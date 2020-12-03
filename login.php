<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
   
   <!-- The core Firebase JS SDK is always required and must be listed first -->
   <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-app.js"></script>
   <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-firestore.js"></script>
   <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-auth.js"></script>

   <script src="js/login.js" type="text/javascript"></script>
   
    <title>Uphill Automotive | Log In</title>
</head>

<body>

    <div id="wrapper">

<header>

    <?php include "php/header.php" ?>

</header>


<main>

<h2>Log In/Create Account</h2>

<article id="registerAccount">

    <h3 id="registerHeading">
        Register
    </h3>

    
    <label id="newEmail">Email: </label><input id="newUser" autocomplete="off"></input>
    <label id="newPassword1">Password: </label><input id="newPass1"autocomplete="off"></input>
    <label id="newPassword2">Repeat Password: </label><input id="newPass2"autocomplete="off"></input>

    <button id="signUp" onclick="register()">Sign Up</button>
    
</article>






<article id="signinAccount">

    <h4 id="signinHeading">
        Sign In
    </h4>
   

<label id="existingEmail">Email: </label><input id="username"></input>
<label id="existingPassword">Password: </label><input id="password"></input>

<button id="signIn" onclick="signIn()">Log In</button>

</article>






</main>
      
<footer>

<?php include "php/footer.php" ?>

</footer>

</div>

</body>

</html>