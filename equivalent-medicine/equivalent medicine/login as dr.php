<!doctype html>
<html>
<head>
<title>Login|DR</title>
<style type="text/css">
body{
background-color:rgb(65, 148, 138);
}
h{
font-weight:bold;
font-size:190%;
color:rgb(102, 217, 255);
}
#frame{border:2px inset white;
position:absolute;
width:75%;
height:65%;
top:15%;
left:10%;
background-color:white;
padding-top:25px;
padding-left:15px;
}
.input-box{font-size: inherit;
          border: 0.6em solid #2dc5d3;
          border-radius: 0.5em 0.5em 0.5em 0.5em;
          padding: 0.2em 0.5em;
          outline: 0;
		  }
#form{	position:absolute;
        top:30%;
        left:9%;
}	
.login{	font-size: 110%;
    border: 0.3em solid #2dc5d3;
    border-radius: 0.5em 0.5em 0.5em 0.5em;
    background-color: #2dc5d3;
    border-left: 0.6em;
    padding: 0 0.75em;
    color: white;
    font-weight: bold;}
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
</style>
</head>
<body>
<div id="frame">
<h><img src="http://i.imgur.com/ify43ph.png" height="30"/>LOG IN|DOCTOR</h>
<hr width="95%"/>
<div id="form">
<form action="check.php" method="POST">
<strong>E-mail Address *</strong>
<br/>
<br/>
<input required="required" type="text" name="email" class="input-box" size="100"/>
<br/>
<br/>
<strong>Password *</strong>
<br/>
<br/>
<input required="required" type="password" name="password" class="input-box" size="100"/>
<br/>
<br/>
<input required="required" type="submit" name="login" value="Log in" class="login"/>
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
