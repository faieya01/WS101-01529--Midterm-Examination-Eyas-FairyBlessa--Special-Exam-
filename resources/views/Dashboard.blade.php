<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

@import url('https://fonts.googleapis.com/css2?family=Merriweather:ital@1&family=Quintessential&family=Source+Serif+4&family=Ubuntu:wght@300&display=swap');


ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  font-size:15px;
  background-color:#C5C5C5;
}

li {
  float: left;
}

li a {
  display: block;
  color:black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color:#F9D8F5;
}


.Banner{
    color:white;
    font-size: 30px;
    text-align: center;
    font-size: 25px;
    background-color:#2F0A2B;
    font-family: 'Source Serif 4', sans-serif;
    padding: 15px 15px;
}
 table{
   margin-top: 30px;
    border:1px solid black;
  border-collapse: collapse;
  width: 100%;
  text-align:center;
  padding-bottom: 10px;
 }
 tr:hover {
    background-color:#D8D8CD;
 }

 table, th{
     font-size: 20px;
    border:1px solid black;
 }

</style>

	<title>Rental Car System</title>

</head>
<body>
<div class="Banner">

Rental Car System

</div>


    <ul>
		<li><a href="{{url('#')}}">Dashboard</a></li>
		<li><a href="{{url('Transaction')}}">Transaction</a></li>
        <li><a href="{{url('Settings')}}">Settings</a></li>
        <li style="float:right"><a href="{{url('LogIn')}}">Log out</a></li>
    </ul>

<h2>Available Cars</h2>

<table>
<tr>
    <th>Car Model</th>
    <th>Price</th>
    <th>License</th>
</tr>
<tr>
    <td> Toyota: Hilux</td>
    <td>Php 8,000</td>
    <td>hjkdsuT123</td>
</tr>
<tr>
<td> Toyota: Vios</td>
<td> Php 9,500</td>
<td>Kuuua12xx</td>
</tr>
<tr>
    <td>Lhamborghini Aventador</td>
    <td>Php 15,000</td>
    <td>maxWell0024xx</td>
</tr>
</table>

<br><br>

<h2>Unavailable Cars</h2>

<table>
<tr>
    <th>Car Model</th>
    <th>Price</th>
    <th>License</th>
</tr>
<tr>
    <td> Mitsubishi: Lancer</td>
    <td>Php 8,500</td>
    <td>fsatweT123</td>
</tr>
<tr>
<td> Mitsubishi: Eclipse</td>
<td> Php 9,500</td>
<td>gfaagtwsx</td>
</tr>
<tr>
    <td>Mazda 2</td>
    <td>Php 11,000</td>
    <td>adfqwsfwx</td>
</tr>

</table>

</body>
</html>

