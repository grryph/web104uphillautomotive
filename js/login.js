  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyA72kVxhZJHaTCW2jjoqt5pO8ubL-ZhN-g",
    authDomain: "uphill-automotive.firebaseapp.com",
    databaseURL: "https://uphill-automotive.firebaseio.com",
    projectId: "uphill-automotive",
    storageBucket: "uphill-automotive.appspot.com",
    messagingSenderId: "185124067431",
    appId: "1:185124067431:web:a59b5c7fc15b12ed701cc2"
  };

  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  const db = firebase.firestore();
  
  async function register(){
    // let email = document.getElementById("testinput").value
    
    let email = document.getElementById("newUser").value;
    let y = document.getElementById("newPass1").value;
    let password = document.getElementById("newPass2").value;

    if (y != password) {alert("Your Passwords Do Not Match");
    document.getElementById("newPass1").value = "";
    document.getElementById("newPass2").value = "";}

    else {
    firebase.auth().createUserWithEmailAndPassword(email,password)

    .then(() => {
        window.location.replace("vehicles.php");
    
        
    })
    .catch(function(error) {
      // Handle Errors here.
      var errorCode = error.code;
      var errorMessage = error.message;
      // ...
  
      alert("User Already Registered Under This Email / You Did Not Enter Enough Information")
      document.getElementById("newPass1").value = "";
      document.getElementById("newPass2").value = "";
      document.getElementById("newUser").value = "";
    
    });
    }
}

async function signIn(){
    let email = document.getElementById("username").value;
    let password = document.getElementById("password").value;

    firebase.auth().signInWithEmailAndPassword(email, password)
    
    .then(() => {
        window.location.replace("vehicles.php");
    })
    
    .catch(function(error) {
      // Handle Errors here.
      var errorCode = error.code;
      var errorMessage = error.message;
      alert("Incorrect Email or Password")
      document.getElementById("username").value = "";
      document.getElementById("password").value = ""
      // ...
    });
    }

