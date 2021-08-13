<?php
  
   require 'Db.php';

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="UTF-8">
<title> ConversionRate</title>
<script src="conversion.js"> </script>

</head>

<body>


<div style="width: 450px;
  height:  500px;
  border: 5px solid black;
  margin-left: 400px;">


  <h3 style="color: red;">Page 3 [History]</h3>
  <h3 style="color: red;">Conversion Site</h3>
  <p><a href="home.php">1.Home</a><a href="conversionrate.php">2.Coversion Rate</a><a href="history.php">3.History</a></p>
  
  

<h1>Search List</h1>
    <form action="/ajax/home.php" method="Get">
     <input type="text" name="username" value="">
    <input type="submit" name="search" value="Search">
<a href="Home.php">Go back Home</a>
</div>
<script>
             function isvalid()
             {
                 var flag = true;
                 var searchErr=document.getElementById("searchErr");
                 
                 var search=document.forms["search"]["search"].value;
                 
                 searchErr.innerHTML="";
                 
                if(username ==="")
                {
                    searchErr.innerHTML="* Search can not be empty.";
                    flag=false;
                }

                return flag;

             }
         </script>
<div id= "comments">
	<?php
	$sql = " SELECT * FROM comments LIMIt ";
	$result = mysqli_query($sql);
  ?>

	<if (mysqli_num_row($result) > 0 ){


} 
 else 
{echo "string"} 



</div>


<!--<button> Show more commnets 

</button> -->


</body>
</html>