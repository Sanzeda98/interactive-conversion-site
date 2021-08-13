<!DOCTYPE html>
<html>
<title>Feet to Inch Length Converter</title>
<body>
<h1>Page 1 [Home] </h1>
<h2>Conversion Site</h2>

<p><a href="home.php">1.Home</a></p>
<p><a href="conversionrate.php">2.conversionrate</a></p>
<p><a href="history.php">3.History</a></p>

converter:
<p>
  <label>Feet</label>
  <input id="inputFeet" type="number" placeholder="Feet to Inch" oninput="LengthConverter(this.value)" onchange="LengthConverter(this.value)">
</p>
<p>Inch: <span id="outputInchs"></span></p>

<script>
function LengthConverter(valNum) {
  document.getElementById("outputInchs").innerHTML=valNum * 12;
}
</script>
</body>
</html>