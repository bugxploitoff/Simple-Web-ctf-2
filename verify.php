<html>
<head>
  <title>Verify your flag</title>
      <style>
h1 {
  text-align: center;
}

h2 {
  text-align: center;
}

h3 {
   margin-left: 10px;
  text-align: center;
}
p {
  text-align: center;
}
  .button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #4CAF50;} /* Green */
.button2 {background-color: #008CBA;} /* Blue */
.container {
  height: 400px;
  position: relative;
}

.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
  .form-center {
  display:flex;
  justify-content: center;
}
  </style>
</head>

  <body>
    <h1> You can verify the flag </h1>
    
<div class="container">
<div class="center">
  <h2> Enter your flag value(case sesntive)</h2>
  <div class="form-center">
<form action="/auth/flagmain.php" method="post">
  <input type="text" placeholder="CVE{XXX_XXX_XXXX}" name="flag" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
  <button type="submit" value="Submit" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">Submit</button>
  
</form>
  </div>
  </div>
  </div>

</body>
</html>