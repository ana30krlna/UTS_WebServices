<!DOCTYPE html>
<html>  
      <head>  
           <title>Data Barang</title> 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     <style>
   
   .box
   {
    width:750px;
    padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:100px;
   }
  </style>
      </head>  
      <body>  
        <div class="container box">
          <h3 align="center">Import File JSON ke Database MySQL</h3><br />
          <?php
          $connect = mysqli_connect("localhost", "root", "mysql", "databarang"); //Connect PHP to MySQL Database
          $query = '';
          $table_data = '';
          $filename = "databarang.json";
          $data = file_get_contents($filename); //Read the JSON file in PHP
          $array = json_decode($data, true); //Convert JSON String into PHP Array
          foreach($array as $row) //Extract the Array Values by using Foreach Loop
          {
           $query .= "INSERT INTO barang(nama_barang, harga, stok) VALUES ('".$row["nama_barang"]."', '".$row["harga"]."', '".$row["stok"]."'); ";  // Make Multiple Insert Query 
           $table_data .= '
            <tr>
       <td>'.$row["nama_barang"].'</td>
       <td>'.$row["harga"].'</td>
       <td>'.$row["stok"].'</td>
      </tr>
           '; //Data for display on Web page
          }
          if(mysqli_multi_query($connect, $query)) //Run Mutliple Insert Query
    {
     echo '<h3>Hasil Import File JSON</h3><br />';
     echo '
      <table class="table table-bordered">
        <tr>
         <th width="45%">Nama Barang</th>
         <th width="45%">Harga</th>
         <th width="45%">Stok</th>
        </tr>
     ';
     echo $table_data;  
     echo '</table>';
          }


          ?>
     <br />
         </div>  
      </body>  
 </html>  