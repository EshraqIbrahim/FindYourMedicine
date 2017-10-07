<?php
session_start();
?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Medicines.com</title>
<style type="text/css">
html{
background-image:url(http://i.imgur.com/xYNA4Qc.jpg);
background-repeat:no-repeat;
  background-size: 1600px 790px;
}
div.frame {
    margin-top:40px;
    margin-left:120px;
	width:79%;
    height:94%;
    background-color: #ffffff;
    border: 1px solid black;
    opacity: 0.6;
    filter: alpha(opacity=60); 
}
h{
font-weight:bold;
font-size:280%;
color:#667292;
font-family:Brush Script Std, Brush Script MT, cursive;
padding-left:30px;
}
.cir1{
position:fixed;
width:350px;
height:350px;
border-radius:350px;
top:18%;
left:10%;
background:#77a8a8;
font-family:Brush Script Std, Brush Script MT, cursive;
font-size:400%;

}
div.cir1:hover {  
    background:#bc5a45;
}
.cir2{
position:fixed;
width:390px;
height:390px;
border-radius:390px;
top:40%;
left:33%;
background:#77a8a8;
font-family:Brush Script Std, Brush Script MT, cursive;
font-size:270%;
}
div.cir2:hover {  
    background:#bc5a45;
}
.cir3{
position:fixed;
width:400px;
height:400px;
border-radius:400px;
top:18%;
left:59%;
background:#77a8a8;
font-family:Brush Script Std, Brush Script MT, cursive;
font-size:320%;
}
div.cir3:hover {  
    background:#bc5a45;
}
#search-box-wrapper {
    display: inline-flex;
    font-size: 20px;
	position:absolute;
	top:58%;
	left:8%;
}
h2{
font-family:Brush Script Std, Brush Script MT, cursive;
font-size:200%;
}
.search-box-input {
    font-size: inherit;
    border: 0.2em solid black;
    border-radius: 0.5em 0 0 0.5em;
    padding: 0.2em 0.5em;
    outline: 0;
}
.search-box-button {
    font-size: inherit;
    border: 0.2em solid black;
    border-radius: 0 0.5em 0.5em 0;
    background-color: black;
    border-left: 0;
    padding: 0 0.75em;
    color: white;
    font-weight: bold;
    outline: 0;
    cursor: pointer;
	font-size:20px;
}
#add1 {
    display: inline-flex;
    font-size: 20px;
	position:absolute;
	top:45%;
	left:18%;
}

.addb1 {
    font-size: inherit;
    border: 0.2em solid black;
    border-radius: 0.5em 0.5em 0.5em 0.5em;
    padding: 0.2em 0.5em;
    outline: 0;
}
#add2 {
    display: inline-flex;
    font-size: 20px;
	position:absolute;
	top:70%;
	left:18%;
}

.addb2 {
    font-size: inherit;
    border: 0.2em solid black;
    border-radius: 0.5em 0.5em 0.5em 0.5em;
    padding: 0.2em 0.5em;
    outline: 0;
}
#b{
    position:absolute;
    top:83%;
	left:35%;
}
.button {
    font-size: inherit;
    border: 1px solid black;
    border-radius: 0.5em 0.5em 0.5em 0.5em;
    background-color: black;
    border-left: 0;
    padding: 0 0.75em;
    color: white;
    font-weight: bold;
    outline: 0;
    cursor: pointer;
	font-size:30px;
}
.b{
font-size: inherit;
    border: 1px solid black;
    border-radius: 0.5em 0.5em 0.5em 0.5em;
    background-color:#667292;
    border-left: 0;
    padding: 0 0.75em;
    color: white;
    font-weight: bold;
    outline: 0;
    cursor: pointer;
	font-size:23px;
}
#button1{
 position:absolute;
    top:10%;
	left:60%; }
	.b1{
font-size: inherit;
    border: 1px solid black;
    border-radius: 0.5em 0.5em 0.5em 0.5em;
    background-color:#667292;
    border-left: 0;
    padding: 0 0.75em;
    color: white;
    font-weight: bold;
    outline: 0;
    cursor: pointer;
	font-size:23px;
}
#button2{
 position:absolute;
    top:10%;
	left:72%; }
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
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    -webkit-animation-name: fadeIn; /* Fade in the background */
    -webkit-animation-duration: 0.4s;
    animation-name: fadeIn;
    animation-duration: 0.4s
}

/* Modal Content */
.modal-content {
    position: fixed;
    bottom: 0;
    background-color: #fefefe;
    width: 100%;
    -webkit-animation-name: slideIn;
    -webkit-animation-duration: 0.4s;
    animation-name: slideIn;
    animation-duration: 0.4s
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 0.2px 16px;
    background-color: #bc5a45;
    color: white;
}

.modal-body {padding: 51px 16px;}

/* Add Animation */
@-webkit-keyframes slideIn {
    from {bottom: -300px; opacity: 0} 
    to {bottom: 0; opacity: 1}
}

@keyframes slideIn {
    from {bottom: -300px; opacity: 0}
    to {bottom: 0; opacity: 1}
}

@-webkit-keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
}

@keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
}
#home{
font-weight:bold;
color:black;
font-size:110%;
position:absolute;
left:90px;
font-family:Brush Script Std, Brush Script MT, cursive;
}
#home{
font-weight:bold;
color:black;
font-size:110%;
position:absolute;
left:90px;
font-family:Brush Script Std, Brush Script MT, cursive;
}
</style>
</head>
<body>
<div class="frame">
<h>DR <?php echo $_SESSION['username']; ?></h>
<div id="button1"> <a href="editdr.php"><button class="b">Edit Acc</button></a></div>
<form action="logout.php"><div id="button2"><button class="b1">Logout</button></a></div></form>
<hr width="95%"/>
<div class="cir1">
    <a href="gotodatabase.php"><div id="home">&ensp;Go&ensp;&ensp;&ensp;&ensp;To&ensp;&ensp;DataBase</div></a>
</div>
<div class="cir2">
<p>&ensp;&ensp;&ensp;&ensp;&ensp;Search For<br/>&ensp;&ensp;Medicines to know if it <br/>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;exists</p>
<form action="search.php" method="POST">
<div id="search-box-wrapper">
 <input type="text" name="search" placeholder="Search...." class="search-box-input">
<button class="search-box-button" name="button">&#128269;</button>
</div>
</form>
</div>
<div class="cir3">
<p>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;ADD<br/>&ensp;&ensp;Effective Material</p>
<form action="add.php" method="POST">
<div id="add1">
    <input type="text" name="eff" placeholder="Effective Material...." class="addb1">
</div>
<p>&ensp;&ensp;&ensp;&ensp;&ensp;Medicine</p>
<div id="add2">
    <input type="text" name="med" placeholder="Medicine...." class="addb2">
</div>
<div id="b"><button name="button" class="button">ADD</button></div>
</form>
</div>
</div>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Search For Medicine</h2>
    </div>
    <div class="modal-body">
      <p>exist or not</p>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>  
</body>
</html>



