<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> ConversionRate</title>
<script src="conversion.js"> </script>
</head>
<body>
  


 <?php 

            $flag=false;
            $userNameErr=$successfulMessage=$errorMessage=$passwordErr="";

            if($_SERVER['REQUEST_METHOD']=='POST')
            {
            $userName=test_name($_POST['Feet']);
            $password=test_name($_POST['Kilometer']);
            $password=test_name($_POST['Hour']);
            $password=test_name($_POST['Feet']);
            $password=test_name($_POST['USD']);

            if(empty($_POST['Feet']))
            {
                $userNameErr="* Feet name can not be empty.";
                $flag=true;
                
            }
            
            if(empty($_POST['Kilometer']))
            {
                $passwordErr="* Kilometer can not be  empty.";
                $flag=true;
                
                
            }
            if(empty($_POST['Hour']))
            {
                $passwordErr="* Hour can not be  empty.";
                $flag=true;
                
                
            }
            if(empty($_POST['Feet']))
            {
                $passwordErr="* Feet can not be  empty.";
                $flag=true;
                
                
            }
            if(empty($_POST['USD']))
            {
                $passwordErr="* USD can not be  empty.";
                $flag=true;
                
                
            }

           
            


            function test_name($data)
            {
            $data=trim($data);
            $data=stripcslashes($data);
            $data=htmlspecialchars($data);
            return $data;
            }

        ?>
        <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" name="submit" onsubmit="return isvalid()" >



<div style="width: 450px;
  height:  630px;
  border: 5px solid black;
  margin-left: 400px;">

  <h3 style="color: red;">Page 1 [Home]</h3>
  <h3 style="color: red;">Conversion Site</h3>
  <p><a href="home.php">  1.Home  &nbsp &nbsp</a>
  <a href="conversionrate.php">  2.Conversion Rate &nbsp &nbsp</a> 
<a href="history.php">  3.History </a></p>
 
  <p>
  <label>Enter feet: </label>
  <input id="inputFeet" type="number" placeholder="Feet" oninput="LengthConverter1(this.value)" onchange="LengthConverter1(this.value)">
  
</p>

Feet to Inch: <div id="outputInches" style="border: 1px solid black;height: 20px;width: 150px;margin: 0px;"<p><span id="outputInches"></span></p></div>

<script>

             function isvalid()
             {
                 var flag = true;
                 var feetErr=document.getElementById("feetErr");
                 
                 var feet=document.forms[""]["search"].value;
                 
                 feetErr.innerHTML="";
                 
                if(feet ==="")
                {
                    searchErr.innerHTML="* This can not be empty.";
                    flag=false;
                }

                return flag;

             }
         
function LengthConverter1(valNum) {
  document.getElementById("outputInches").innerHTML=valNum*12;
}


</script>

<p>
  <label>Enter Kilometer: </label>
<input id="inputKilometer" type="number" placeholder="Kilometer" oninput="LengthConverter2(this.value)" onchange="LengthConverter2(this.value)">

</p>
Kilometer to Meter: <div id="outputMeter" style="border: 1px solid black;height: 20px;width: 150px;margin: 0px;"<p><span id="outputMeter"></span></p></div>
<script>
  function isvalid()
             {
                 var flag = true;
                 var kilometerErr=document.getElementById("kilometerErr");
                 
                 var kilometer=document.forms["kilometer"]["kilometer"].value;
                 
                 kilometerErr.innerHTML="";
                 
                if(kilometer ==="")
                {
                    kilometerErr.innerHTML="* Kilometer can not be empty.";
                    flag=false;
                }

                return flag;

             }
  function LengthConverter2(valNum) {
  document.getElementById("outputMeter").innerHTML=valNum*1000;
}


</script>
 <p>
  <label>Enter Hour: </label>
  <input id="inputhour" type="number" placeholder="Hour" oninput="LengthConverter3(this.value)" onchange="LengthConverter3(this.value)">
  
</p>

Hour to Second: <div id="outputSecond" style="border: 1px solid black;height: 20px;width: 150px;margin: 0px;"<p><span id="outputSecond"></span></p></div>

<script>
  function isvalid()
             {
                 var flag = true;
                 var hourErr=document.getElementById("hourErr");
                 
                 var hour=document.forms["hour"]["hour"].value;
                 
                 hourErr.innerHTML="";
                 
                if(hour ==="")
                {
                    hourErr.innerHTML="* This can not be empty.";
                    flag=false;
                }

                return flag;

             }
function LengthConverter3(valNum) {
  document.getElementById("outputSecond").innerHTML=valNum*3600;
}


</script>
 <p>
  <label> Enter Feet: </label>
  <input id="inputFeet" type="number" placeholder="Feet" oninput="LengthConverter4(this.value)" onchange="LengthConverter4(this.value)">
  
</p>

Feet to Centimeter: <div id="outputCentimeter" style="border: 1px solid black;height: 20px;width: 150px;margin: 0px;"<p><span id="outputCentimeter"></span></p></div>

<script>
  function isvalid()
             {
                 var flag = true;
                 var feetErr=document.getElementById("feetErr");
                 
                 var feet=document.forms["form"]["feet"].value;
                 
                 feetErr.innerHTML="";
                 
                if(feet ==="")
                {
                    feetErr.innerHTML="* This can not be empty.";
                    flag=false;
                }

                return flag;

             }
function LengthConverter4(valNum) {
  document.getElementById("outputCentimeter").innerHTML=valNum*30.48;
}


</script>
 <p>
  <label>Enter USD: </label>
  <input id="inputUSD" type="number" placeholder="USD" oninput="LengthConverter5(this.value)" onchange="LengthConverter5(this.value)">
  
</p>

USD to BDT: <div id="outputBDT" style="border: 1px solid black;height: 20px;width: 150px;margin: 0px;"<p><span id="outputBDT"></span></p></div>

<script>
  function isvalid()
             {
                 var flag = true;
                 var usdErr=document.getElementById("usdErr");
                 
                 var usd=document.forms["USD"]["USD"].value;
                 
                 usdErr.innerHTML="";
                 
                if(usd ==="")
                {
                    usdErr.innerHTML="* This can not be empty.";
                    flag=false;
                }

                return flag;

             }
function LengthConverter5(valNum) {
  document.getElementById("outputBDT").innerHTML=valNum*85.88;
}



</script>

    
    </form>



</div>
 


 <center>
 <br>

      <input type="submit" value="Submit">

      </form>
      <br>

</center>  
</body>
</html>


