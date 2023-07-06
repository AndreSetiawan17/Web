<?php
require "../koneksi.php";
require "../func.php";
// verify("../")
?>
<?php
$link = [
    [
        "prolog"=>"Prolog :  Mempersiapkan panggung yang sempurna!",
        "chapter1"=>"Chapter 1 : Memulai pelatihan Shadowbroker",
        "chapter2"=>"Chapter 2 : Mengasumsikan Peran Karakter Sampingan di Sekolah!",
        "chapter3"=>"Chapter 3 : Resmi , Aku Memulai sebagai Dalang Yang Beraksi! Bagian 1",
        "chapter4"=>"Chapter 4 : Resmi , Aku Memulai sebagai Dalang Yang Beraksi! Bagian 2",
        "chapter5"=>"Chapter 5 : Dua Sisi Shadow Garden ?!",
        "chapter6"=>"Chapter 6 : Menguasai Kehidupan Damai dari Tak Seorang Pun!",
        "chapter7"=>"Chapter 7 : Adegan Di Mana Teroris Mengambil Alih Sekolah",
        "final"=>"Final Chapter : Ideku tentang Komandan Shadow Tertinggi!",
        "extra"=>"Extra Chapter : Catatan Kejadian Master Shadow Lengkap",
    ],

    [
        "prolog"=>"Prolog : Untuk Lindwurm, Tanah Suci!",
        "chapter1"=>"Chapter 1 : Saat-saat Menyenangkan di Ujian Dewi!",
        "chapter2"=>"Chapter 2 : Menyelidiki Tempat Suci!",
        "chapter3"=>"Chapter 3 : Ketika Segala Sesuatu Menjadi Membosankan, Saatnya Meledak!",
        "chapter4"=>"Chapter 4 : Situasi Ini Menyebutkan “Siapa Orang Itu ?!”",
        "chapter5"=>"Chapter 5 : Pertarungan untuk Menarik MVP Saja!",
        "chapter6"=>"Chapter 6 : Mastermind Selalu Memainkan Piano di Bawah Cahaya Bulan!",
        "chapter7"=>"Chapter 7 : Memamerkan Sedikit Kekuatanku sendiri!",
        "chapter8"=>"Chapter 8 : Arahkan Matamu Pada Kekuatan Sejatiku!",
        "final"=>"Final Chapter : Siapa Orang Keren Misterius Ini ?!",

    ],

    [
        "prolog"=>"Prolog : Dalam perjalanan ke kota tanpa hukum saat liburan musim gugur",
        "chapter1"=>"Chapter 1 : Ayo berburu bandit di kota!",
        "chapter2"=>"Chapter 2 : Infiltrasi di menara merah!",
        "chapter3"=>"Chapter 3 : Pergi untuk Ratu Darah!",
        "chapter4"=>"Chapter 4 : Aku akan menghancurkan segalanya dan kemudian memperbaruinya!",
        "chapter5"=>"Chapter 5 : Membuat uang palsu diam-diam, sementaraMitsugoshi dan Asosiasi Perdagangan Besar saling bertarung!",
        "chapter6"=>"Chapter 6 : Ayo bagikan Uang Palsu itu!",
        "epilog"=>"Epilog : Uang palsu akan menghancurkan segalanya dan mengambilnya kembali.",

    ],

    [
        "prolog"=>"Prolog : Perang di Kerajaan Oriana!",
        "chapter1"=>"Chapter 1 : Hindari Pernikahan Rose Oriana!",
        "chapter2"=>"Chapter 2 : Menerapkan Rencana untuk Menghentikan Pernikahan!",
        "chapter3"=>"Chapter 3 : Terlibat dalam Acara Pernikahan!",
        "interlude"=>"Interlude : Pemburu Bandit, Slayer the Graceful, memasuki tempat kejadian!",
        "chapter4"=>"Chapter 4 : Bersembunyi dalam Bayangan Jepang yang misterius!",
        "chapter5"=>"Chapter 5 : Dalam bayang-bayang Jepang nostalgia ku!",
        "epilog"=>"Epilog : Lihatlah Shadow Eminence yang Dikembangkan!",

    ],
    [
        "prolog"=>"Prolog : Kegelapan yang mengintai di sekolah, kasus siswa yang hilang! ",
        "chapter1"=>"Chapter 1 : Kembalinya kakakku dan perkembangan penyakitnya…! ",
        "chapter2"=>"Chapter 2 : Pagi mengejutkan, pembunuhan di sekolah! ",
        "chapter3"=>"Chapter 3 : Kasusnya ditutup, ayo kita bicarakan tentang cerita lama! ",
        "chapter4"=>"Chapter 4 : Hari ini dunia kembali damai! ",
        "chapter5"=>"Chapter 5 : Teroris di akademi lagi!!!",
        "epilog"=>"Epilog : Jika aku bisa mendapatkannya, aku bisa menghancurkan dunia!"
    ]
];?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kage no Jitsuryokusha ni Naritakute</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

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
                <?php for ( $i = 0; $i < count($link); $i++ ) : ?>
                    <div class="volume v<?=$i+1?>">
                        <div class="vol-img"><img src="aset/cover<?=$i+1?>.jpg" alt="Image not found" title="Volume <?=$i+1?>"></div>
                        <div class="link lk<?=$i+1?>">
                            <ul>
                                <?php foreach ( $link[$i] as $l ) : ?>
                                    <li><a href="read/?volume=<?=$i+1?>&segment=chapter1"><?=$l?></a></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                <?php endfor ?>
            </div>
        </div>
    </div>    
</body>
</html>