<html>
  <head>
    <title>
      Library Management System
    </title>
    <link rel="stylesheet" href="Project.css">
  </head>
  <body>
    <div class="title">
      <h1>Library Management System</h1>
    </div>
    <div class="subtitle">
      <h2>Add Book</h2>
    </div>
    <div class="form" style="width: 90%">
      <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        Book Name : <input type="text" name="name">
        <br>
        <br>
        Author Name : <input type="text" name="author">
        <br>
        <br>
        Published Date : <input type="date" name="published">
         <br>
        <br>
        Price : <input type="number" name="price">
        <br>
        <br>
        Category : <select name="category">
          <option> 
          Choose your book category
          </option>
          <option value="Fantasy">
            Fantasy
          </option>
          <option value="Sci-Fi">
            Sci-Fi
          </option>
          <option value="Mystery">
            Mystery
          </option>
          <option value="Thriller">
            Thriller
          </option>
          <option value="Romance">
            Romance
         </option>
          <option value="Westerns"> 
          Westerns
          </option>
         <option value="Dystopian">
           Dystopian
         </option>
         <option value="Contemporary">
           Contemporary
         </option>
        </select>
         <br>
        <br>
          <?php
          if(isset($_POST['add'])){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "Library Management System";

            $conn = mysqli_connect($servername, $username, $password, $dbname);
            
          
          $name=$_POST['name'];
          $author=$_POST['author'];
          $pub=$_POST['published'];
          $price=$_POST['price'];
          $cat=$_POST['category'];
          $q="INSERT INTO `books`(`BookName`, `Author`, `PublishDate`, `Price`, `Category`) VALUES ('$name','$author','$pub','$price','$cat')";
          $p=mysqli_query($conn,$q);
         if($p){
         echo " Book is added successfully.<br>";
          
          }
         }
          ?>
           

          
        
        <input type="button" value="Back" name="home" class="btn"  style="margin:50px" onclick="window.location.href = 'Home.php';">
        <input type="submit" value="Add" name="add" class="btn" style="margin:50px">
          
      </form>
      
    </div>
     <footer> 
    <div class="foot">
     
      Library Management System
    </div>
    </footer>
     
    </body>
    </html>
