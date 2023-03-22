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
      <h2>Update Book Details</h2>
    </div>
    <div class="form" style="width: 90%">
      <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
      <?php 
      $id=$_GET['id'];
      $name=$_GET['name'];
      $author=$_GET['author'];
      $price=$_GET['price'];
      $cat=$_GET['cat'];
      $pub=$_GET['pub'];
    
      ?>
       <input type="hidden" name="id" value="<?php echo $id; ?>">
        Book Name : <input type="text" name="name" value="<?php echo $name; ?>">
        <br>
        <br>
        Author Name : <input type="text" name="author" value="<?php echo $author; ?>">
        <br>
        <br>
        Published Date : <input type="date" name="published" value="<?php echo $pub; ?>">
         <br>
        <br>
        Price : <input type="number" name="price" value="<?php echo $price; ?>">
        <br>
        <br>
        Category : <select name="category">
        <option> 
          Choose your book category
          </option>
          <option value="Fantasy" <?php
          if($cat=="Fantasy"){
          echo "selected";
          } ?>
          >
            Fantasy
          </option>
          <option value="Sci-Fi" <?php
          if($cat=="Sci-Fi"){
          echo "selected";
          } ?>>
            Sci-Fi
          </option>
          <option value="Mystery" <?php
          if($cat=="Mystery"){
          echo "selected";
          } ?>
          >
            Mystery
          </option>
          <option value="Thriller" <?php
          if($cat=="Thriller"){
          echo "selected";
          } ?>>
            Thriller
          </option>
          <option value="Romance" <?php
          if($cat=="Romance"){
          echo "selected";
          } ?>>
            Romance
         </option>
          <option value="Westerns" <?php
          if($cat=="Westerns"){
          echo "selected";
          } ?>> 
          Westerns
          </option>
         <option value="Dystopian" <?php
          if($cat=="Dystopian"){
          echo "selected";
          } ?>>
           Dystopian
         </option>
         <option value="Contemporary" <?php
          if($cat=="Contemporary"){
          echo "selected";
          } ?>>
           Contemporary
         </option>
        </select>
         <br>
        <br>
          <?php
       
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "Library Management System";

            $conn = mysqli_connect($servername, $username, $password, $dbname);
            
      if(isset($_POST['submit'])){
        $id1=$_POST['id'];
          $name1=$_POST['name'];
          $author1=$_POST['author'];
          $pub1=$_POST['published'];
          $price1=$_POST['price'];
          $cat1=$_POST['category'];
          
          $q="UPDATE `books` SET `BookName`='$name1',`Author`='$author1',`PublishDate`='$pub1',`Price`='$price1',`Category`='$cat1' WHERE `Id`='$id1'";
          $p=mysqli_query($conn,$q);
         if($p){
         echo "  <script>alert('Record Updated!')</script>";
        ?>
        <meta http-equiv="refresh" content="0; url=http://localhost/librarymanagement/DisplayBook.php">
        <?php
          }
         }
          ?>
           

          
          <br>
          <br>
        <input type="submit" value="Submit" name="submit" class="btn" style="margin:50px">
        <input type="button" value="Back" name="home" class="btn"  style="margin:50px" onclick="window.location.href = 'SearchBook.php';">
          
      </form>
      
    </div>
  
   
     <footer> 
    <div class="foot">
     
      Library Management System
    </div>
    </footer>
     
    </body>
    </html>