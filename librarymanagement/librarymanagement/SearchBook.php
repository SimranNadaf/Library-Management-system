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
      <h2>Search Book</h2>
    </div>
    <form class="form" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
      <label style="margin-left:50px">Search Book : </label>
      <input type="search" name="book" placeholder="Search by book name" > 
      <input type="submit" name="find" value="Search" class="btn" style="margin-left:50px">
     <input type="button" value="Back" name="home" class="btn"  style="margin:50px" onclick="window.location.href = 'Home.php';">
     </form>
        <?php
          
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "Library Management System";

            $conn = mysqli_connect($servername, $username, $password, $dbname);
       
    
            if(isset($_POST['find'])){
               $book=$_POST['book'];
               
            $query="SELECT * FROM books where BookName='$book'";
            $query_run=mysqli_query($conn, $query);
            if(mysqli_num_rows($query_run)>0)
          {
            while($row=mysqli_fetch_array($query_run)) 
            {
             
           ?>
           
           <table border="1" cellspacing=0 style="margin:auto;"> 
            <tr>
            <th>Id</th>
            <th>Name of Book</th>
            <th>Author Name</th>
            <th>Published Date</th>
            <th>Price</th>
            <th>Catagory</th> 
           
           </tr>
           <tr><td><?php echo $row["Id"] ; ?></td>
           <td><?php echo $row["BookName"] ; ?></td>
           <td><?php echo $row["Author"] ; ?></td>
           <td><?php echo $row["PublishDate"] ; ?></td>
           <td><?php echo $row["Price"] ; ?></td>
           <td><?php echo $row["Category"] ; ?></td>
        
           </tr>
           </table>
            
            <?php
          }
            
            }
            else{
           echo " <h4><center>Not Found! </center></h4>";}
       }
       
     
    ?>
    
       
        
          <footer> 
        <div class="foot">
     
         Library Management System
       </div>
      
       </footer>
       </body>
      </html>