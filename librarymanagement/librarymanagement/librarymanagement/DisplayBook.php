<html>
  <head>
    <title>
      Library Management System
    </title>
    <link rel="stylesheet" href="Project.css">
    <style>
  #update{
 background-color:green; /* Green */
  border: none;
  color: white;
  padding: 10px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 8px;
  margin-left: 25%;

 }
 #delete{
 background-color:red; /* red */
  border: none;
  color: white;
  padding: 10px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 8px;
  margin-left: 25%;
 }

 td, th{
   padding:10px;
   font-size:20px; 
 }
    </style>
  </head>
  <body>
    <div class="title">
      <h1>Library Management System</h1>
    </div>
    <div class="subtitle">
      <h2>View Books</h2>
     </div>
    <div>
   <table border="1" Cellspacing="0" style="width:90%; 
    margin-left:5%; 
    margin-right:5%;">
     <tr><th>Id</th><th>Name of Book</th><th>Author Name</th><th>Published Date</th><th>Price</th>
     <th>Catagory</th>  <th colspan="2">Action</th>
    </tr> 
  
    <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "Library Management System";

            $conn = mysqli_connect($servername, $username, $password, $dbname);
            
            $result2 = mysqli_query($conn,"SELECT * FROM books");

if(mysqli_num_rows($result2)>0)

   {
     
   while($row = mysqli_fetch_assoc($result2))
             {
         echo "<tr><td>".$row["Id"]."</td><td>".$row["BookName"]."</td><td>".$row["Author"]."</td><td>".$row["PublishDate"]."</td><td>".$row["Price"]."</td><td>".$row["Category"]."</td>
         <td><a href='update.php?id=$row[Id]&name=$row[BookName]&author=$row[Author]&pub=$row[PublishDate]&price=$row[Price]&cat=$row[Category]'>
         <input type='submit' value='Update' id='update'></a></td>
          <td><a href='delete.php?id=$row[Id]' onclick='return checkdelete()'>
         <input type='submit' value='Delete' id='delete'></a></td>
         </tr>";
       }
     }
    
    
    ?>
    <script>
      function checkdelete(){
        return confirm("Are you sure. you want to detele this book");
      }
    </script>
    </table>
    </div>
    <form class="form" method="get" action="print.php" style="width:50%; margin:auto;">
      <input type="submit" value="Print" name="print" class="btn"  style="margin:50px; padding:10px; font-size:30px;">
    <input type="button" value="Back" name="home" class="btn"  style="margin:50px; padding:10px; font-size:30px;" onclick="window.location.href = 'Home.php';">
  </form>
    <footer> 
    <div class="foot">
     
      Library Management System
    </div>
    </footer>
  </body>
  </html>