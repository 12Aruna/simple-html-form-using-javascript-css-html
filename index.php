<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <title>Files Upload and Download</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <form action="index.php" method="post" enctype="multipart/form-data" >


  <p>
  <label> Name</label>
  <input class="w3-input" type="text"></p>
  <p>
  <label>Age</label>
  <input class="w3-input" type="number"></p>
  <p>
  <label>weight</label>
  <input class="w3-input" type="number"></p>
  <p>
  <label>Email id</label>
  <input class="w3-input" type="text"></p>
  
  
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save">upload</button>
       <p>
  
 
  <button> submit </buttom></p>
        </form>
      </div>
    </div>
  </body>
</html>