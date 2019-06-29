<?php

?>
<style>
  body {font-family: Arial, Helvetica, sans-serif;}
  /* The Modal (background) */
  .modal {
  padding-right: 42px;
  display: none; /* Hidden by default */
  z-index: 1; /* Sit on top */
  padding-top: 60px; /* Location of the box */
  width: 50%; /* Full width */
  height: auto; /* Full height */
  overflow-x: hidden; /* Enable scroll if needed */
  overflow-y:auto;
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  left:0;
  right:0;
  margin-left: auto;
  margin-right: auto;
  top:0%;
  }
  /* Modal Content */
  .modal-content {
  background-color: #45E6E2;
  left: 0;
  right:0;
  padding: 20px;
  border: 1px solid #888;
  width: 100%;
  }
  /* The Close Button */
  .close, .close1 {
  color: #000;
  float: right;
  font-size: 28px;
  font-weight: bold;
  }
  .close:hover,
  .close:focus,
  .close1:hover,
  .close1:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
  }
</style>
<?php
  function star1(){
  echo "Heyyy";
  }
  ?>
<br><br>
<div class="span5" align="center" style="margin-left:6%;>
  <div class="centered service">
  <div class="circle-border zoom-in" style="padding:10px;" >
    <h4 id="myBtn">Rate this service</h4>
  </div>
  <div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2 style="color:#181A1C"><b>Rate this service</b></h2>
      <table>
        <tr>
          <td ><img id="star1" src="images/800px-Star_empty.svg.png" width="60" height="60" ></td>
          <td ><img id="star2" src="images/800px-Star_empty.svg.png" width="60" height="60" ></td>
          <td ><img id="star3" src="images/800px-Star_empty.svg.png" width="60" height="60" ></td>
          <td ><img id="star4" src="images/800px-Star_empty.svg.png" width="60" height="60" ></td>
          <td ><img id="star5" src="images/800px-Star_empty.svg.png" width="60" height="60" ></td>
        </tr>
      </table>
      <br><br>
      <button type=submit onclick="gotoURL()">Submit</button>
    </div>
  </div>
</div>
<div class="span5" align="center" style="margin-left:9%;>
  <div class="centered service">
  <div class="circle-border zoom-in"  style="padding:10px;">
    <h4 id="myBtn1">Review this service</h4>
  </div>
  <div id="myModal1" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <span class="close1">&times;</span>
      <h2 style="color:#181A1C"><b>Review this service</b></h2>
      <img src="images/803px-4.5_stars.svg.png" width="220px" height="180px"><br><br>
      <button type=submit>Submit</button>
    </div>
  </div>
</div>
<script>
  // Get the modal
  var modal = document.getElementById('myModal');
  var modal1 = document.getElementById('myModal1');
  // Get the button that opens the modal
  var btn = document.getElementById("myBtn");
  var btn1 = document.getElementById("myBtn1");
  
  var star1= document.getElementById("star1");
  var star2= document.getElementById("star2");
  var star3= document.getElementById("star3");
  var star4= document.getElementById("star4");
  var star5= document.getElementById("star5");
  var star = 0;
  var url = ""
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  var span1 = document.getElementsByClassName("close1")[0];
  
  // When the user clicks the button, open the modal 
  btn.onclick = function() {
    modal.style.display = "block";
  }
  btn1.onclick = function() {
    modal1.style.display = "block";
  }
  star1.onclick = function() {
  star1.src="images/800px-Star_full.svg.png";
  star2.src="images/800px-Star_empty.svg.png";
  star3.src="images/800px-Star_empty.svg.png";
  star4.src="images/800px-Star_empty.svg.png";
  star5.src="images/800px-Star_empty.svg.png";
  }
  star2.onclick = function() {
  star1.src ="images/800px-Star_full.svg.png";
  star2.src="images/800px-Star_full.svg.png";
  star3.src="images/800px-Star_empty.svg.png";
  star4.src="images/800px-Star_empty.svg.png";
  star5.src="images/800px-Star_empty.svg.png";
  
   }
  star3.onclick = function() {
  star1.src =  "images/800px-Star_full.svg.png";
  star2.src="images/800px-Star_full.svg.png";
  star3.src="images/800px-Star_full.svg.png";
  star4.src="images/800px-Star_empty.svg.png";
  star5.src="images/800px-Star_empty.svg.png";
  
  }
  star4.onclick = function() {
  star1.src ="images/800px-Star_full.svg.png";
  star2.src="images/800px-Star_full.svg.png";
  star3.src="images/800px-Star_full.svg.png";
  star4.src="images/800px-Star_full.svg.png";
  star5.src="images/800px-Star_empty.svg.png";
 
  }
  star5.onclick = function() {
  star1.src = "images/800px-Star_full.svg.png";
  star2.src="images/800px-Star_full.svg.png";
  star3.src="images/800px-Star_full.svg.png";
  star4.src="images/800px-Star_full.svg.png";
  star5.src="images/800px-Star_full.svg.png";
   }
  
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }
  span1.onclick = function() {
    modal1.style.display = "none";
  }
  
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
  window.onclick = function(event) {
    if (event.target == modal1) {
      modal1.style.display = "none";
    }
  }
  
</script>
