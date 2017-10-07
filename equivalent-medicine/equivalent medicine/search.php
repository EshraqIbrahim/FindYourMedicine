 <?php
        mysql_connect("localhost","root","");
        mysql_select_db("drugs");
        $drug = mysql_real_escape_string($_POST['search']);
        $sql = mysql_query("SELECT * FROM drugs WHERE drugname = '$drug' ");
        $effectivematerial = 'effectivematerial';
        $rows = mysql_fetch_assoc($sql); 
        $name = $rows[$effectivematerial];
       
        $query = "SELECT * FROM drugs WHERE effectivematerial = '$name'";
        $search_result = filterTable($query);
        function filterTable($query)
        {
            $filter_Result = mysql_query($query);
            return $filter_Result;
        }
        $queryy = "SELECT * FROM pharma WHERE drugname = '$drug'";
        $searchh_result = filterTable($queryy);
        ?>
<html>
<head>
<title>Search</title>
<style type="text/css">
html{
background-image:url(https://thumbs.dreamstime.com/z/pharmacy-medicine-medical-white-background-decorate-design-project-54990539.jpg);
background-repeat:no-repeat;
  background-size: 1520px 1000px;
}
#frame1{border:2px inset #c6bcb6;
position:fixed;
width:420px;
height:540px;
margin-top:3%;
margin-left:6%;
  background-color: #ffffff;
    border: 1px solid black;
    opacity: 0.7;
    filter: alpha(opacity=60); 
    overflow: auto;
padding-top:25px;
padding-left:15px;
}
#frame2{border:2px inset #c6bcb6;
position:fixed;
width:670px;
height:540px;
margin-top:3%;
margin-left:42%;
  background-color: #ffffff;
    border: 1px solid black;
    opacity: 0.7;
    filter: alpha(opacity=90); 
    overflow: auto;
padding-top:25px;
padding-left:15px;
}
#tab{
position:absolute;
left:10%;
}
#tab1{
position:absolute;
top:11%;
left:2%;
}
table
     {
     border: 1px solid #667292;
	  width: 100%;
	  border-radius: 0.3em 0.3em 0.3em 0.3em;
	  border-width:thick;
     }
th{
	border: 1px solid #667292;
	color:#667292;
	font-size:27px;
    font-family:Apple Chancery, cursive;
	border-radius: 0.5em 0.5em 0.5em 0.5em;
	border-width:thick;
}
td{
	border: 1px solid #667292;
    font-family:Apple Chancery, cursive;
	border-radius: 0.5em 0.5em 0.5em 0.5em;
	font-size:20px;
	text-align:center;
	border-width:thick;
	} 
        tr{
	border: 1px solid #667292;
    font-family:Apple Chancery, cursive;
	border-radius: 0.5em 0.5em 0.5em 0.5em;
	font-size:15px;
	text-align:center;
	border-width:thick;
	} 
h{
	color:#667292;
	font-size:200%;
	font-style:bold;
	}
</style>
</head>
<body>
<div id="frame1">
<div id="tab">
    <?php $found = true;?>
    <?php if(!($checks = mysql_fetch_assoc($search_result))){
        $found = false;
    }
        ?>
    <?php if(!$found){?>
    <h> <?php echo"NO EQUIVALENT MEDICINE FOUND!" ?></h>
    <?php } ?>
    <?php if($found){?>
<h>Effective Material :<?php  echo " ".$rows[$effectivematerial];?> </h>

  <table>
     <tr>
     <th> Equivalent Medicine </th>
      </tr>
      <td><?php echo $checks['drugname'];?></td>
            <?php while($row = mysql_fetch_assoc($search_result)):?>
            <tr>
                <td><?php echo $row['drugname'];?></td>
               
            </tr>
            <?php endwhile;?>
    <?php }?>
  </tr>
  </table>
  </div>
  </div>
  <div id="frame2">
 <div id="tab1">
  
     
         <?php $foound = true;?>
    <?php if(!($checkss = mysql_fetch_assoc($searchh_result))){
        $foound = false;
    }
        ?>
    <?php if(!$foound){?>
    <h> <?php echo"THIS MEDICINE IS NOT AVALIABLE!" ?></h>
    <?php } ?>
    <?php if($foound){?>
    <table>
     <tr>
    <th> Pharmacies </th>
	 <th> Location</th>
     </tr>
    <td><?php echo $checkss['pharmacy'];?></td>
                <td><?php echo $checkss['location'];?></td>
          <?php while($roww = mysql_fetch_assoc($searchh_result)):?>
            <tr>
                <td><?php echo $roww['pharmacy'];?></td>
                <td><?php echo $roww['location'];?></td>
               
            </tr>
            <?php endwhile;?>
  
    <?php }?>
               </tr>
	 
  </table>
  </div> 
</div>  
</body>
</html>