<?php
// require "../koneksi.php";
// require "../func.php";
// verify("../")




?>
<?php

// Ini hanya untuk display, tidak untuk disimpan pada 
$link = [
    [
        "prolog"=>"Prolog :  Mempersiapkan panggung yang sempurna!",
        "chr1"=>"Chapter 1 : Memulai pelatihan Shadowbroker",
        "chr2"=>"Chapter 2 : Mengasumsikan Peran Karakter Sampingan di Sekolah!",
        "chr3"=>"Chapter 3 : Resmi , Aku Memulai sebagai Dalang Yang Beraksi! Bagian 1",
        "chr4"=>"Chapter 4 : Resmi , Aku Memulai sebagai Dalang Yang Beraksi! Bagian 2",
        "chr5"=>"Chapter 5 : Dua Sisi Shadow Garden ?!",
        "chr6"=>"Chapter 6 : Menguasai Kehidupan Damai dari Tak Seorang Pun!",
        "chr7"=>"Chapter 7 : Adegan Di Mana Teroris Mengambil Alih Sekolah",
        "final"=>"Final Chapter : Ideku tentang Komandan Shadow Tertinggi!",
        "extra"=>"Extra Chapter : Catatan Kejadian Master Shadow Lengkap"
    ],

    [
        "prolog"=>"Prolog : Untuk Lindwurm, Tanah Suci!",
        "chr1"=>"Chapter 1 : Saat-saat Menyenangkan di Ujian Dewi!",
        "chr2"=>"Chapter 2 : Menyelidiki Tempat Suci!",
        "chr3"=>"Chapter 3 : Ketika Segala Sesuatu Menjadi Membosankan, Saatnya Meledak!",
        "chr4"=>"Chapter 4 : Situasi Ini Menyebutkan “Siapa Orang Itu ?!”",
        "chr5"=>"Chapter 5 : Pertarungan untuk Menarik MVP Saja!",
        "chr6"=>"Chapter 6 : Mastermind Selalu Memainkan Piano di Bawah Cahaya Bulan!",
        "chr7"=>"Chapter 7 : Memamerkan Sedikit Kekuatanku sendiri!",
        "chr8"=>"Chapter 8 : Arahkan Matamu Pada Kekuatan Sejatiku!",
        "final"=>"Final Chapter : Siapa Orang Keren Misterius Ini ?!",
    ],

    [
        "prolog"=>"Prolog : Dalam perjalanan ke kota tanpa hukum saat liburan musim gugur",
        "chr1"=>"Chapter 1 : Ayo berburu bandit di kota!",
        "chr2"=>"Chapter 2 : Infiltrasi di menara merah!",
        "chr3"=>"Chapter 3 : Pergi untuk Ratu Darah!",
        "chr4"=>"Chapter 4 : Aku akan menghancurkan segalanya dan kemudian memperbaruinya!",
        "chr5"=>"Chapter 5 : Membuat uang palsu diam-diam, sementaraMitsugoshi dan Asosiasi Perdagangan Besar saling bertarung!",
        "chr6"=>"Chapter 6 : Ayo bagikan Uang Palsu itu!",
        "epilog"=>"Epilog : Uang palsu akan menghancurkan segalanya dan mengambilnya kembali.",
    ],

    [
        "prolog"=>"Prolog : Perang di Kerajaan Oriana!",
        "chr1"=>"Chapter 1 : Hindari Pernikahan Rose Oriana!",
        "chr2"=>"Chapter 2 : Menerapkan Rencana untuk Menghentikan Pernikahan!",
        "chr3"=>"Chapter 3 : Terlibat dalam Acara Pernikahan!",
        "interlude"=>"Interlude : Pemburu Bandit, Slayer the Graceful, memasuki tempat kejadian!",
        "chr4"=>"Chapter 4 : Bersembunyi dalam Bayangan Jepang yang misterius!",
        "chr5"=>"Chapter 5 : Dalam bayang-bayang Jepang nostalgia ku!",
        "epilog"=>"Epilog : Lihatlah Shadow Eminence yang Dikembangkan!",

    ],
    [
        "prolog"=>"Prolog : Kegelapan yang mengintai di sekolah, kasus siswa yang hilang! ",
        "chr1"=>"Chapter 1 : Kembalinya kakakku dan perkembangan penyakitnya…! ",
        "chr2"=>"Chapter 2 : Pagi mengejutkan, pembunuhan di sekolah! ",
        "chr3"=>"Chapter 3 : Kasusnya ditutup, ayo kita bicarakan tentang cerita lama! ",
        "chr4"=>"Chapter 4 : Hari ini dunia kembali damai! ",
        "chr5"=>"Chapter 5 : Teroris di akademi lagi!!!",
        "epilog"=>"Epilog : Jika aku bisa mendapatkannya, aku bisa menghancurkan dunia!"
]]?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kage no Jitsuryokusha ni Naritakute</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- <div class="tb"></div> -->

    <div class="header-container">
        <h2>Kage no Jitsuryokusha ni Naritakute</h2>
    </div>

    <div class="content-container">
        <div class="content">
            <div class="c-top">
                <div class="cover-container "><img class="cover" src="aset/cover1.jpg" alt="Image not found"></div>
                <div class="c-sinopsis cf">
                    <p class="sinopsis">
                        <strong>SATU KEBOHONGAN BESAR DAN BEBERAPA KEBENARAN YANG BERPUTAR</strong>
                        Bahkan di masa lalunya, impian Cid bukanlah menjadi <abbr title="Protagonis berarti orang yang memainkan bagian pertama atau sering disebut aktor utama">protagonis</abbr> atau bos terakhir.
                        Dia lebih suka berbohong sebagai karakter kecil sampai waktu utama untuk mengungkapkan bahwa
                        dia adalah <abbr title="Dalang atau mendalangi yaitu mengatur atau memimpin suatu gerakan dengan sembunyi-sembunyi. Source: kbbi.web.id">dalang</abbr> … atau setidaknya, lakukan hal terbaik berikutnya - berpura-pura menjadi
                        salah satunya! Dan sekarang setelah dia terlahir kembali ke dunia lain, dia siap untuk menetapkan
                        kondisi yang sempurna untuk mewujudkan impiannya sepenuhnya. Dipersenjatai dengan imajinasinya yang terlalu
                        aktif, Cid dengan bercanda merekrut anggota ke organisasinya dan membuat seluruh cerita latar tentang
                        sekte jahat yang perlu mereka singkirkan. Yah, semoga beruntung, musuh Imajinasinya ini ternyata
                        benar-benar nyata - dan semua orang tahu yang sebenarnya kecuali dia!
                    </p>
                </div>
            </div>
            <div class="c-body">
                <div class="volume1">
                    <div id="huh" class="vol-1-img"><img src="aset/cover1.jpg" alt="Bruhh"></div>
                    <div class="link ">
                        <ul>
                            <?php foreach ( $link[0] as $l ) : ?>
                                <li><?=$l?></li>
                            <?php endforeach ?>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>
    </div>    
</body>
</html>