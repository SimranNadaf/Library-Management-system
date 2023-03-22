<?php
            $id=$_GET['id'];
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "Library Management System";

            $conn = mysqli_connect($servername,$username, $password, $dbname);
            
            $q="DELETE FROM `books` WHERE `Id`='$id'";
          $p=mysqli_query($conn,$q);
         if($p){
               echo "  <script>alert('Record Deleted!')</script>";
               ?>
        <meta http-equiv="refresh" content="0; url=http://localhost/librarymanagement/DisplayBook.php">
       <?php
         }
?>