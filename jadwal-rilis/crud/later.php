<?php
// Eksport & Import
if (isset($_POST["eksport"])) {
    // Nama file yang akan diunduh
    $filename = "data.json";

    // Mengatur header respons
    header("Content-Type: application/json");
    header("Content-Disposition: attachment; filename=\"$filename\"");

    // Menghasilkan data JSON
    $json = json_encode($table);

    // Menulis data JSON ke output
    echo $json;
    exit;
} elseif ( isset($_POST["import"]) ){
    $name      = $_FILES["json_file"]["name"];
    $type      = $_FILES["json_file"]["type"];
    $location  = $_FILES["json_file"]["temp_name"];


    if (move_uploaded_file($sourcePath, "data/file.json")) {
        $data = json_decode(file_get_contents($targetPath), true);
        echo $data;
    } else {
        // Penanganan kesalahan jika gagal memindahkan file
        // ...
        echo "Failed";
    }

    // $data = json_decode(file_get_contents($location),true);

    // Mendapatkan informasi field dari tabel
    // $result = mysqli_query($conn, "SELECT * FROM $table_dbname");
    // $fields = mysqli_fetch_fields($result);

    // if ( !in_array() ) )

    // var_dump($data);
    // echo "<br><br><br><br>";

}
?>