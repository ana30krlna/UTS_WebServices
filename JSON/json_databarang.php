<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Data Barang</title>  
      </head>  
      <body>  
           <?php   
           $connect = mysqli_connect("localhost", "root", "mysql", "databarang");  
           $sql = "SELECT * FROM barang";  
           $result = mysqli_query($connect, $sql);  
           $json_array = array();  
           while($row = mysqli_fetch_assoc($result))  
           {  
                $json_array[] = $row;  
           }  
           echo '<pre>';  
           print_r($json_array);  
           echo '</pre>';
             
           ?>  
      </body>  
 </html>   