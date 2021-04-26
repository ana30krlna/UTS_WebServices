<?php
//import.php
sleep(3);
$output = '';

if(isset($_FILES['file']['name']) &&  $_FILES['file']['name'] != '')
{
 $valid_extension = array('xml');
 $file_data = explode('.', $_FILES['file']['name']);
 $file_extension = end($file_data);
 if(in_array($file_extension, $valid_extension))
 {
  $data = simplexml_load_file("datatoken.xml");
  $connect = new PDO('mysql:host=localhost;dbname=data_xml','root', 'mysql');
  $query = "
  INSERT INTO tokenlistrik
   (nama, Alamat, No_token, harga) 
   VALUES(:nama, :Alamat, :No_token, :harga);
  ";
  $statement = $connect->prepare($query);
  for($i = 0; $i < count($data); $i++)
  {
   $statement->execute(
    array(
     ':nama'   => $data->tokenlistrik[$i]->nama,
     ':Alamat'  => $data->tokenlistrik[$i]->Alamat,
     ':No_token'  => $data->tokenlistrik[$i]->No_token,
     ':harga' => $data->tokenlistrik[$i]->harga
    )
   );
  }
  $result = $statement->fetchAll();
  if(isset($result))
  {
   $output = '<div class="alert alert-success">Import Data Done</div>';
  }
 }
 else
 {
  $output = '<div class="alert alert-warning">Invalid File</div>';
 }
}
else
{
 $output = '<div class="alert alert-warning">Please Select XML File</div>';
}

echo $output;

?>