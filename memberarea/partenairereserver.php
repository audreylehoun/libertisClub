<?php
include("verif.php");
 include("mesfonctions.php");


/*session_start(); */
?>
<!DOCTYPE html>
<html>
    
   
    
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
#id01 input[type=text], #id01 input[type=password] ,input[type=date],input[type=time]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
#id01 input[type=text]:focus, input[type=password]:focus, input[type=date],input[type=time]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
#id01 button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

#id01 button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
#id01 .cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
#id01 .cancelbtn, #id01 .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
#id01 .container {
  padding: 16px;
}

/* The Modal (background) */
 .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
#id01 .modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
#id01 hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
#id01 .close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

#id01 .close:hover,
#id01 .close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
#id01 .clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
 #id01 .cancelbtn,  #id01.signupbtn {
     width: 100%;
  }
}
</style>
<body>

<h2>Modal Signup Form</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      <h1>Réservation</h1>
      <p>Veuillez indiquer pour quand désirez-vous résever le partenaire.</p>
      <hr>
      <label for="ladate"><b>Date désirée</b></label>
      <input type="date" placeholder="jj/mm/AAAA" name="ladate" required>

      <label for="lheure"><b>Heure voulue</b></label>
      <input type="time" placeholder="Heure voulue" name="lheure" required>

     
      <p>Faites votre réservations nous allons vous la confirmer juste après quelques temps. <a href="#" style="color:dodgerblue">Libertis Club</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Annuler</button>
        <button type="submit" class="signupbtn">Réserver</button>
      </div>
    </div>
      
      
      
      
      

      
      
      
      
  </form>
    
    
    
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>


