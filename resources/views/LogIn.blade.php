<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

@import url('https://fonts.googleapis.com/css2?family=Merriweather:ital@1&family=Quintessential&family=Source+Serif+4&family=Ubuntu:wght@300&display=swap');

.Banner{

    color:white;
    font-size: 20px;
    text-align: center;
    font-size: 15px;
    background-color:#2F0A2B;
    font-family: 'Source Serif 4', sans-serif;
    padding: 15px 15px;
}


.login{
    margin-top: 50px;
    margin-left: 500px;
    margin-right: 500px;
    font-size: 15px;
    background-color:#C5C5C5;
    font-family: 'Source Serif 4', sans-serif;
    padding-left:130px;
    padding-top: 50px;
    padding-bottom: 50px;
    opacity: 0.8;

}
body {
    background-image: url('/CarImages/car2.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}

</style>

	<title>Rental Car System</title>

</head>
<body>
<div class="Banner">

<h2>Log In</h2>

</div>



<div class="login">
<form method="POST" action="Dashboard.blade.php" >

  <label for="fname">Email:</label><br>
  <input type="text" name="fname" class= "form-control"><br><br>

  <label for="Password">Password:</label><br>
  <input type="text" id="password" name="password" class="form control"><br><br>



<button><a href="{{url('Dashboard')}}"style='text-decoration:none;'>Log In</a></button>
</div>

</form>


</body>
</html>

