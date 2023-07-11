<?php
require "../koneksi.php";
require "../func.php";


$title = "Kage no Jitsuryokusha ni Naritakute";
$sinopsis = '<strong>SATU KEBOHONGAN BESAR DAN BEBERAPA KEBENARAN YANG BERPUTAR</strong> Bahkan di masa lalunya, impian Cid bukanlah menjadi <abbr title="Protagonis berarti orang yang memainkan bagian pertama atau sering disebut aktor utama">protagonis</abbr> atau bos terakhir. Dia lebih suka berbohong sebagai karakter kecil sampai waktu utama untuk mengungkapkan bahwa dia adalah <abbr title="Dalang atau mendalangi yaitu mengatur atau memimpin suatu gerakan dengan sembunyi-sembunyi. Source: kbbi.web.id">dalang</abbr> … atau setidaknya, lakukan hal terbaik berikutnya - berpura-pura menjadi salah satunya! Dan sekarang setelah dia terlahir kembali ke dunia lain, dia siap untuk menetapkan kondisi yang sempurna untuk mewujudkan impiannya sepenuhnya. Dipersenjatai dengan imajinasinya yang terlalu aktif, Cid dengan bercanda merekrut anggota ke organisasinya dan membuat seluruh cerita latar tentang sekte jahat yang perlu mereka singkirkan. Yah, semoga beruntung, musuh Imajinasinya ini ternyata benar-benar nyata - dan semua orang tahu yang sebenarnya kecuali dia!';
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
];