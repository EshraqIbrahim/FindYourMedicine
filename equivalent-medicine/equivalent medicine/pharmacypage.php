<?php
session_start();
?>
<?php
$paharmacyname = $_SESSION['username'];
$location = $_SESSION['location'];
$str='';
$check = false;
 mysql_connect("localhost","root","");
        mysql_select_db("drugs");
   $query = "SELECT * FROM drugs";
        $search_result = filterTable($query);
 function filterTable($query)
        {
            $filter_Result = mysql_query($query);
            return $filter_Result;
        }
        $index = "1";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pharmacy</title>
		<style type="text/css">
		html{
background-image:url(https://thumbs.dreamstime.com/z/pharmacy-medicine-medical-white-background-decorate-design-project-54990539.jpg);
background-repeat:no-repeat;
  background-size: 1500px 1000px;
}
.frame {
    margin-top:40px;
    margin-left:120px;
	width:1100px;
    height:570px;
    background-color: #ffffff;
    border: 1px solid black;
    opacity: 0.6;
    filter: alpha(opacity=60); 
    overflow: auto;
}
h{
font-weight:bold;
font-size:280%;
color:#667292;
font-family:Brush Script Std, Brush Script MT, cursive;
padding-left:30px;
}
h1{
font-weight:bold;
font-size:180%;
font-family:Brush Script Std, Brush Script MT, cursive;
text-align:center;
}
h2{
font-weight:bold;
font-size:100%;
padding-left:10px;
}
h3{
font-weight:bold;
font-size:130%;
padding-left:10px;
}
.sub {
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
#sub1{
position:absolute;
left:43%;
top: 98%;
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
    top:8%;
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
    top:8%;
	left:70%; }
		</style>
    </head>
    <body>
	<div class="frame">
       <h>PHAR <?php echo $_SESSION['username'];?></h>
	   <div id="button1"> <a href="editaccphar.php"><button class="b">Edit Acc</button></a></div>
           <form action="logout.php"><div id="button2"><button class="b1">Logout</button></a></div></form>
       <hr width="95%"/>
       
       <form method="POST">
       <?php $size1= 0; 
       $checkeddrugs;
       ?>
       <h3> Mark the drugs avaliable in your store: </h3>
       <?php while($row = mysql_fetch_assoc($search_result)):?>
       <?php $name = $row['drugname'] ; ?>
       <?php $found = false;
        $queryy = "SELECT * FROM pharma WHERE drugname = '$name' AND pharmacy = '$paharmacyname'";
         $sqll = mysql_query($queryy);
      if( !$rows = mysql_fetch_assoc($sqll) ){
          $found= false;
      }
      else{
        $checkk = "checked";
           $found = true;   
      }
 
       ?>
       
       <?php if($found ==false){
           $str ='<h2><input type ="checkbox" name = "medicine[]"  value = "'.$name.'" tabindex="'.$index.'" /> '.$row['drugname'].'<br/></h2>'; 
       }
       else
       {
           $checkeddrugs[$size1] = $name;
           $size1++;
            $str ='<h2><input type ="checkbox" name = "medicine[]"  value = "'.$name.'" tabindex="'.$index.'" checked ="checked" /> '.$row['drugname'].'<br/></h2>'; 
 
       }
       ?>
              
             <?php echo $str ?>
                <?php $index++; ?> 
 
            <?php endwhile;?>
       <div id="sub1"><a href="pharmacypage.php"><input type="submit" name= "submit" value="submit" class="sub"/> </a></div>
    </form>		  
    </div>
    </body>
</html>
<?php
$size2=0;
$updateddrugs;
if(isset($_POST["submit"]))
{
    if(!empty($_POST["medicine"]))
    {
  foreach($_POST["medicine"] as $medicine)  
  {
      $updateddrugs[$size2] = $medicine;
      $size2++;
      $queryy = "SELECT * FROM pharma WHERE drugname = '$medicine' AND pharmacy = '$paharmacyname'";
      $sqll = mysql_query($queryy);
      if(! $rows = mysql_fetch_assoc($sqll) ){
           $query="INSERT INTO pharma(drugname,pharmacy,location) VALUES ('$medicine','$paharmacyname','$location')";
           mysql_query($query);
 
      }
 
    }
 
 
}
if($size1!= 0&&$size2!=0){
for($x=0;$x<count($checkeddrugs);$x++){
    $found = false;
    for($z=0;$z<count($updateddrugs);$z++){
          if($checkeddrugs[$x]==$updateddrugs[$z]){
           $found = true;   
          }
}
if(!$found){
    $namee =  $checkeddrugs[$x];
     $query="DELETE FROM pharma WHERE drugname = '$namee' AND pharmacy = '$paharmacyname'";
        mysql_query($query);
 
}
}
}
 
if($size2==0){
    for($x=0;$x<count($checkeddrugs);$x++){
         $namee =  $checkeddrugs[$x];
     $query="DELETE FROM pharma WHERE drugname = '$namee' AND pharmacy = '$paharmacyname'";
        mysql_query($query);
    }
}
}

