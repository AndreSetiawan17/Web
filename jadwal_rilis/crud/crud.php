<?php
function crud($data) {
    global $table_dbname, $conn;
    // Mengatasi input misal title jika lebih dari 255 ....| dan source jika lebih 20 ...
    // Terlalu banyak perulangan, gunakan fungsi dan for loop -> (Later)


    $id     = htmlspecialchars($data["id"    ]);
    $title  = htmlspecialchars($data["title" ]);
    $day    = htmlspecialchars($data["day"   ]);
    $time   = htmlspecialchars($data["time"  ]);
    $source = htmlspecialchars($data["source"]);
    $month  = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

    if ( strlen($time) > 0 ) {
        if ( strlen($time) >= 7 && strlen($time) <= 9 ) {
            
            $time = explode(":", $time); // $time = "tgl:20/12";
            $time[1] = explode("/", $time[1]); //  ->  ['tgl', ['20', '12']]            
        
            if ( $time[0] == "tgl" ) { $time = $time[1][0] . "-" . $month[$time[1][1]-1]; } 
            // 20-December

        } else { $time = date('h:i', strtotime($time)); }
    }

    // Add
    if ( isset($data["add"]) ) {   

        if (mysqli_num_rows(mysqli_query($conn, "SELECT title FROM `$table_dbname` WHERE title = '$title'")) > 0) {
            echo "<script>alert('Judul sudah ada');</script>";
        } else {
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
    }

    // Update
    elseif ( isset($data["change"]) ) {
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

    if ( isset($data["search"]) && strlen($data["search-bar"] > 0) ) {
        $keyword = $data["search-bar"];
        $query = "SELECT * FROM $table_dbname WHERE
            id LIKE '%$keyword%' OR
            title LIKE '%$keyword%' OR
            day LIKE '%$keyword%' OR
            time LIKE '%$keyword%' OR
            source LIKE '%$keyword%'
    ";      return extrax("$query");
    } else{ return extrax("SELECT * FROM $table_dbname"); }
}
