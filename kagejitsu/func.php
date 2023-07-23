<?php

function get_ekstensi_file($file_name,$path) {
    $ff = [];
    foreach ( scandir($path) as $f) {
        $f_ = explode(".",$f)[0];
        if ( substr( $f_, 0, strlen($f_) - 1) === $file_name ) {
            $explode = explode(".",$f);
            $ff[] = end($explode);
        }
    } return $ff;
}

function get_segment_and_stitle($table_name) {
    $segment_title = extrax("SELECT segment,title FROM $table_name");
    $seti          = [];
    $j             = 0;
    for ( $i = 0; $i < count($segment_title); $i++ ) {
        if ( $i !== 0 && $segment_title[$i]["segment"] === "prolog" ) { $j += 1; }
        $seti[$j][$segment_title[$i]["segment"]] = $segment_title[$i]["title"];
    } return $seti;
}