<?php
require "../koneksi.php";
require "func.php";

$title    = "Kage no Jitsuryokusha ni Naritakute";
$sinopsis = '<strong>SATU KEBOHONGAN BESAR DAN BEBERAPA KEBENARAN YANG BERPUTAR</strong> Bahkan di masa lalunya, impian Cid bukanlah menjadi <abbr title="Protagonis berarti orang yang memainkan bagian pertama atau sering disebut aktor utama">protagonis</abbr> atau bos terakhir. Dia lebih suka berbohong sebagai karakter kecil sampai waktu utama untuk mengungkapkan bahwa dia adalah <abbr title="Dalang atau mendalangi yaitu mengatur atau memimpin suatu gerakan dengan sembunyi-sembunyi. Source: kbbi.web.id">dalang</abbr> … atau setidaknya, lakukan hal terbaik berikutnya - berpura-pura menjadi salah satunya! Dan sekarang setelah dia terlahir kembali ke dunia lain, dia siap untuk menetapkan kondisi yang sempurna untuk mewujudkan impiannya sepenuhnya. Dipersenjatai dengan imajinasinya yang terlalu aktif, Cid dengan bercanda merekrut anggota ke organisasinya dan membuat seluruh cerita latar tentang sekte jahat yang perlu mereka singkirkan. Yah, semoga beruntung, musuh Imajinasinya ini ternyata benar-benar nyata - dan semua orang tahu yang sebenarnya kecuali dia!';

$format_cover = get_ekstensi_file("cover","aset/");
$seti         = get_segment_and_stitle($_ENV["NOVEL"]);