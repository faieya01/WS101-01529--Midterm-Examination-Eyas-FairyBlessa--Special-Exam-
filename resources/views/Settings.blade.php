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
  background-color:#5DCA93;
}


.Banner{
    color:white;
    font-size: 30px;
    text-align: center;
    font-size: 15px;
    background-color:#2E2E2E;
    font-family: 'Source Serif 4', sans-serif;
    padding: 15px 15px;
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
        <li style="float:right"><a href="{{url('LogIn')}}">Log out</a></li>
    </ul>

</body>
</html>

