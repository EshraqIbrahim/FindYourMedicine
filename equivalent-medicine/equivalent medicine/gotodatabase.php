<?php
  mysql_connect("localhost","root","");
        mysql_select_db("drugs");
 $query = "SELECT * FROM drugs";
        $search_result = filterTable($query);
        function filterTable($query)
        {
            $filter_Result = mysql_query($query);
            return $filter_Result;
        }
        ?>
<html>
<head>
    	<style type="text/css">
		html{
background-image:url(https://thumbs.dreamstime.com/z/pharmacy-medicine-medical-white-background-decorate-design-project-54990539.jpg);
background-repeat:no-repeat;
  background-size: 1400px 1000px;
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
	font-size:30px;
    font-family:Apple Chancery, cursive;
	border-radius: 0.5em 0.5em 0.5em 0.5em;
	border-width:thick;
}
tr,td{
	border: 1px solid #667292;
    font-family:Apple Chancery, cursive;
	border-radius: 0.5em 0.5em 0.5em 0.5em;
	font-size:20px;
	text-align:center;
	border-width:thick;
	} 
	#frame1{border:2px inset #c6bcb6;
position:fixed;
width:1000px;
height:570px;
margin-top:1%;
margin-left:10%;
  background-color: #ffffff;
    border: 1px solid black;
    opacity: 0.9;
    filter: alpha(opacity=60); 
    overflow: auto;
padding-top:29px;
padding-left:15px;
}
</style>
</head>
<body>
<div id="frame1">
 <table>
     <tr>
     <th> Medicine </th>
	 <th> Effective Material </th>
         <?php while($row = mysql_fetch_assoc($search_result)):?>
            <tr>
                <td><?php echo $row['drugname'];?></td>
                
                <td><?php echo $row['effectivematerial'];?></td>
            </tr>
            <?php endwhile;?>
     </tr>
	 
  </table>
  </div>
</body>
</html>
