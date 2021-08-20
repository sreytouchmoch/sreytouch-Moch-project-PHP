<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
  <Style>
  body {font-family: Arial, Helvetica, sans-serif;}
  input[type=text], input[type=password] {
  width: 75%;
  padding: 10px 20px;
  margin: 10px;
 
}
button {
  background-color: #04AA6D;
  color: white;
  padding: 10px 20px;
  margin: 10px ;
  border: none;
  cursor: pointer;
  width: 75%;
}

button:hover {
  opacity:10px;
}
.container{
    display: right;
    border: 1px solid #ccc;
    box-sizing: border-box;
    width: 100vh;
    height: 50vh;
    padding: 40px;
}
h1{
  color:blue;
}
</style>
<body>
    <h1 class="display-1 text-center"> Welcome Our Food Panda </h1>
    <div class="container">
      <label for="uname"></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
      <label for="psw"></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      <button type="submit">Login</button>
    </div>
</body>
</html>
