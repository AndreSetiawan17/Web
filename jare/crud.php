<?php
require __DIR__ . "/../koneksi.php";
require __DIR__ . "/conf.php";

function crud($data) {
    global $table_dbname, $conn;
    // Mengatasi input misal title jika lebih dari 255 ....| dan source jika lebih 20 ...
    // Terlalu banyak perulanan, gunakan fungsi dan for loop(Later)

    // Add
    if ( isset($data["add"]) ) {
        $title  = htmlspecialchars($data["title" ]);
        $day    = htmlspecialchars($data["day"   ]);
        $time   = htmlspecialchars($data["time"  ]);
        $source = htmlspecialchars($data["source"]);
        
        
        $query  = "INSERT INTO $table_dbname (title";
        $queryv = "VALUES ('$title'";
        if ($day == "None"     ) { $day    = ""; } //Jika nilai yang dimasukkan pengguna None maka nilai day akan dibuat null/tidak ada
        if (strlen($day   ) > 0) { $query .= ",day "  ; $queryv .= ",'$day'"   ; }
        if (strlen($time  ) > 0) { $query .= ",time"  ; $queryv .= ",'$time'"  ; }
        if (strlen($source) > 0) { $query .= ",source"; $queryv .= ",'$source'"; }
        $query .= ")"; $queryv .= ")";
        $query .= $queryv;

        mysqli_query($conn,$query);
    }

    // Update
    elseif ( isset($data["change"]) ) {
        $id = $data["id"];

        $title  = htmlspecialchars($data["title" ]);
        $day    = htmlspecialchars($data["day"   ]);
        $time   = htmlspecialchars($data["time"  ]);
        $source = htmlspecialchars($data["source"]);

        $query = "UPDATE $table_dbname SET";
        if ($day == "None"     ) { $day    = "";}
        if (strlen($title ) > 0) { $query .= " title  = '$title' ,"; }
        if (strlen($day   ) > 0) { $query .= " day    = '$day'   ,"; }
        if (strlen($time  ) > 0) { $query .= " time   = '$time'  ,"; }
        if (strlen($source) > 0) { $query .= " source = '$source',"; }
            
        $query = rtrim($query,",") . " WHERE id = $id";
        mysqli_query($conn,$query);
    }

    elseif ( isset($data["action"]) && $data["action"] == "delete" ) {
        $id = $data["id"];
        mysqli_query($conn,"DELETE FROM $table_dbname WHERE id = $id");
    }
}
?>