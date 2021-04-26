<?php

Header('Content-type: text/xml');
//koneksi ke database
$connection = mysqli_connect("localhost", "root", "mysql", "data_xml") or die("Error " . mysqli_error($connection));
$xml = new SimpleXMLElement('<xml/>');
//menampilkan data dari database, table tb_anggota
$sql = "select * from tokenlistrik ";
$result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));

//membuat array
while ($row = mysqli_fetch_assoc($result)) {

    $track = $xml->addChild('tokenlistrik');
    $track->addChild('nama', $row['nama']);
    $track->addChild('Alamat', $row['Alamat']);
    $track->addChild('No_token', $row['No_token']);
    $track->addChild('harga', $row['harga']);
}

print($xml->asXML());
//tutup koneksi ke database
mysqli_close($connection);
?>