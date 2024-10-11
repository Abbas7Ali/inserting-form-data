<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Php Testing</title>
<style>
  body {
    font-family: arial, sans-serif;
  }
  form {
    width: 205px;
    padding: 10px ;
    border:2px solid green;
  }
  input, select {
    padding:5px;
    margin:10px;
  }

div {
  margin-top:10px;
}
.submit-btn{
  background-color: #2483cf;
    color: white;
    padding: 7px;
    border: none;
    border-radius: 8px;
    width: 80px;
}
.submit-btn:hover {
  cursor: pointer;
  opacity: 0.9;
}

</style>
</head>
<body>
	<form method="post" action="checking.php">
		<input type="text" name="name" placeholder="enter your name">
		<input type="email" name="email" placeholder="enter your email">
		
<div>
  <label>Country: </label>
<select name="country[]">
<option value="Pakistan">Pakistan</option>
<option value="Iran">Iran</option>
<option value="India">India</option>
<option value="Bangladesh">Bangladesh</option>
</select>
</div>

<div>
  <label>City:</label>
<select name="city[]">
<option value="Karachi">Karachi</option>
<option value="Lahore">Lahore</option>
<option value="Quetta">Quetta</option>
<option value="Kashmeer">Kashmeer</option>
</select>
</div>

<div>
  <label>Gender</label>
<div><input type="radio" value="Male" name="radio">male</div>
<div><input type="radio" value="Female" name="radio">female</div>
<div><input type="radio" value="Other" name="radio">other</div>
</div>

<div>
<label>Terms of Agreements</p>
<input type="checkbox" name="checkbox" value="Agree">Agree
<input type="checkbox" name="checkbox" value="Disagree">Disagree
</div>


<input type="submit" name="submit" class="submit-btn">
	</form>

  </body>
</html>                                                                                                                               