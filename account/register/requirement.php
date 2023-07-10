<?php
$day   = [];
$month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
$year  = [];

for ( $i = 1; $i <= 31; $i++ ) { $day[] = $i; }
for ( $i = date("Y"); $i >= 1900; $i-- ) { $year[] = $i; }