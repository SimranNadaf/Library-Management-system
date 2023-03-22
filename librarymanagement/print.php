<?php
 $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "Library Management System";

            $conn = mysqli_connect($servername, $username, $password, $dbname);
            
   if(isset($_GET['print'])) {
     
     require('fpdf1/fpdf.php');

     $pdf = new FPDF();
     $pdf->AddPage();
     $pdf->SetFont('Arial','B',15);
$pdf->Cell(100,15,'Library Books List',0,1);
$pdf->Cell(100,10,'',0,1,'C');
$result2 = mysqli_query($conn,"SELECT * FROM books");

if(mysqli_num_rows($result2)>0)

   {
   $pdf->SetFont('Arial','B',10);
   $pdf->SetFillColor(64,255,0);
   $pdf->SetDrawColor(50,50,100);
   
    $pdf->Cell(10, 10,"Id", 1,0,'C',true) ;
   $pdf->Cell(60, 10,"BookName", 1,0,'C',true) ;
   $pdf->Cell(40, 10,"Author", 1,0,'C',true) ;
   $pdf->Cell(30, 10,"PublishDate", 1,0,'C', true) ;
   $pdf->Cell(20, 10,"Price", 1,0,'C',true) ;
   $pdf->Cell(30, 10,"Category", 1,1,'C',true) ;
   $pdf->SetFont('Arial','',10);
     
   while($row = mysqli_fetch_assoc($result2))
             {
   $pdf->Cell(10, 10,$row['Id'],1,0,'L') ;
   $pdf->Cell(60, 10,$row['BookName'],1,0,'L');
   $pdf->Cell(40, 10,$row['Author'], 1,0,'L') ;
   $pdf->Cell(30, 10,$row['PublishDate'], 1,0,'L') ;
   $pdf->Cell(20, 10,$row['Price'], 1,0,'L') ;
   $pdf->Cell(30, 10,$row['Category'], 1,1,'L') ;

        
       }
     }
    
     $pdf->Output();
     ?>
     <meta http-equiv="refresh" content="0; url=http://localhost/librarymanagement/DisplayBook.php">
    <?php
    }
    ?>