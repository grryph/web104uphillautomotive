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




// function checkSignedIn(){
//   const user = firebase.auth().currentUser;
//   firebase.auth().currentUser;
//     if (user) {
//         console.log("signed in")
//     } else {
//         console.log("not signed in")
//     }
// }

// var user = firebase.auth().currentUser;
// var name, email, photoUrl, uid, emailVerified;

// if (user != null) {
//   name = user.displayName;
//   email = user.email;
//   photoUrl = user.photoURL;
//   emailVerified = user.emailVerified;
//   uid = user.uid;
// }

// I couldn't figure out how to check if the user was signed in or not after research. 
// This wouldn't work

function deleteLast(){

 

  db.collection("cars").doc("Subaru BRZ").delete()
  db.collection("cars").doc("Bugatti Veyron").delete()
  db.collection("cars").doc("Volkswagon Bus").delete()
  db.collection("cars").doc("Chevrolet Camaro").delete()
  db.collection("cars").doc("Dodge Challenger").delete()
  db.collection("cars").doc("Ferrari LaFerrari").delete()
  db.collection("cars").doc("Volkswagon Golf GTI").delete()
  db.collection("cars").doc("Nissan GTR").delete()
  db.collection("cars").doc("Lamborghini Gallardo").delete()
  db.collection("cars").doc("Ford Mustang GT").delete()
  db.collection("cars").doc("Mini Cooper S").delete()
  db.collection("cars").doc("Porsche Panamera").delete()
  console.log("Document successfully deleted!");


}


  function storeCar(event) {
    // console.log(event)
    let targetcar =  event.srcElement.parentNode.id
    const object1 = document.getElementById(targetcar)
    
    const carName = object1.getElementsByClassName("carName")[0]
    const carPrice = object1.getElementsByClassName("carPrice")[0]
    const carKM = object1.getElementsByClassName("carKM")[0]
    const carYear = object1.getElementsByClassName("carYear")[0]
    

    db.collection("cars").doc(carName.innerText).set({
      price: carPrice.innerText,
      km: carKM.innerText,
      name: carName.innerText,
      year: carYear.innerText
      
  })
  .then(function() {
      console.log("Document successfully written!");
      let submitButton = document.getElementById("topayment")
      submitButton.style.display = "block";
      
      
      
  })
  .catch(function(error) {
      console.error("Error writing document: ", error);
  });
  
  }

async function signOutNow(){
  
  firebase.auth().signOut().then(function() {
    // Sign-out successful.
    window.location.replace("index.php");
  }).catch(function(error) {
    // An error happened.
  });
}
