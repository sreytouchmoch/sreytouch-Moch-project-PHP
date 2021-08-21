<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
  <Style>
  body {font-family: Arial, Helvetica, sans-serif;
    background:url('https://www.khaosodenglish.com/wp-content/uploads/2020/03/23130549_1321775624618044_2938956607216468458_n-copy-696x417.jpg');
  }
  input[type=text], input[type=password] {
  width: 70%;
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
  width: 70%;
  margin-left:50px;
}

button:hover {
  opacity:10px;
}
.container{
    display: right;
    border: 1px solid #ccc;
    box-sizing: border-box;
    width: 75vh;
    height: 50vh;
    padding: 40px;
    
}
h3{
  color:cyan;
  font-family:serif;
}
input[type=text] {
  margin-left:47px;
}
input[type=password]{
  margin-left:50px;
}
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 15vh;
  background-color: LightGray;
  color: white;
  text-align: center;
}
p{
  padding:32px;
}
</style>
<body>
    <h3 class="display-1 text-center"> Welcome Our Food Panda </h3>
    <div class="container">
      <label for="uname"></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
      <label for="psw"></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      <button type="submit">Login</button>
    </div>
    <div class="footer">
      <p>@2021</p>
    </div>
</body>
</html>
