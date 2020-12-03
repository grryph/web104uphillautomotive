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



  db.collection("cars").get().then(function(querySnapshot) {
    querySnapshot.forEach(function(doc) {
        // doc.data() is never undefined for query doc snapshots
        console.log(doc.id, " => ", doc.data());

        let pickedCar = document.getElementById("showVehicleSelected");
        pickedCar.innerHTML = doc.data().year + " " + doc.data().name + " " + "$" + doc.data().price;


    });
});
        


function calcPayment(){

    db.collection("cars").get().then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            // doc.data() is never undefined for query doc snapshots
            console.log(doc.id, " => ", doc.data());
    
            let pickedCar = document.getElementById("showVehicleSelected");
            pickedCar.innerHTML = doc.data().year + " " + doc.data().name + " " + "$" + doc.data().price;
    
    
   
let price = doc.data().price;
let down = document.getElementById("down").value;
let frequency = document.getElementById("frequency").value;


let interestRate = document.getElementById("rate").value;
let loanTerm = document.getElementById("term").value;

let totalPayment = document.getElementById("totalPayment");
let totalFrequency = document.getElementById("totalFrequency");
let totalTerm = document.getElementById("totalTerm");



let interestDecimal = interestRate / 100;

let pricePerWeek = (price - down) / ((loanTerm / 12) * 52);
let weeklyPayment = pricePerWeek + (interestDecimal * pricePerWeek);

let biWeeklyPayment = (pricePerWeek * 2) + (interestDecimal * pricePerWeek);

let pricePerMonth = (price - down) / loanTerm;
let monthlyPayment = pricePerMonth + (interestDecimal * pricePerMonth);

if(frequency == "monthly") {
    
    totalPayment.innerHTML = "$ " + monthlyPayment.toFixed(2);
    totalPayment.style.fontSize = "2.75rem";
    totalPayment.style.border = "2px solid black";
    totalPayment.style.padding = "0 0.5rem";
    totalPayment.style.backgroundColor = "#cac2d1"
    totalPayment.style.borderRadius = "8px";
    totalFrequency.innerHTML = frequency + " for";
    totalFrequency.style.padding = "0 1.1rem 0 1.1rem";
    totalTerm.innerHTML = loanTerm + " months";
    totalTerm.style.fontSize = "2.75rem";
    totalTerm.style.border = "2px solid black";
    totalTerm.style.padding = "0 0.5rem";
    totalTerm.style.backgroundColor = "#cac2d1";
    totalTerm.style.borderRadius = "8px";
   

}

if(frequency == "weekly") {
    totalPayment.innerHTML = "$ " + weeklyPayment.toFixed(2);
    totalPayment.style.fontSize = "2.75rem";
    totalPayment.style.border = "2px solid black";
    totalPayment.style.padding = "0 0.5rem";
    totalPayment.style.backgroundColor = "#cac2d1"
    totalPayment.style.borderRadius = "8px";
    totalFrequency.innerHTML = frequency + " for";
    totalFrequency.style.padding = "0 1.1rem 0 1.1rem";
    totalTerm.innerHTML = loanTerm + " months";
    totalTerm.style.fontSize = "2.75rem";
    totalTerm.style.border = "2px solid black";
    totalTerm.style.padding = "0 0.5rem";
    totalTerm.style.backgroundColor = "#cac2d1";
    totalTerm.style.borderRadius = "8px";
    
}
if(frequency == "biweekly") {
    totalPayment.innerHTML = "$ " + biWeeklyPayment.toFixed(2);
    totalPayment.style.fontSize = "2.75rem";
    totalPayment.style.border = "2px solid black";
    totalPayment.style.padding = "0 0.5rem";
    totalPayment.style.backgroundColor = "#cac2d1"
    totalPayment.style.borderRadius = "8px";
    totalFrequency.innerHTML = frequency + " for";
    totalFrequency.style.padding = "0 1.1rem 0 1.1rem";
    totalTerm.innerHTML = loanTerm + " months";
    totalTerm.style.fontSize = "2.75rem";
    totalTerm.style.border = "2px solid black";
    totalTerm.style.padding = "0 0.5rem";
    totalTerm.style.backgroundColor = "#cac2d1";
    totalTerm.style.borderRadius = "8px";
    

}

let pageprintbutton = document.getElementById("printPage")

pageprintbutton.style.display = "block"


});
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
  
