-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2021 at 11:11 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uprak`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `stok` int(100) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `kategori`, `harga`, `stok`, `gambar`, `detail`) VALUES
(1, '2 in 1 Kacamata Dua Lensa Photocromic', 'accesories', 9700, 25, 'https://cf.shopee.co.id/file/aced14817c15b536550442b078463c64', ''),
(2, 'Baju Stelan Wanita Korea Baju', 'clothes', 74000, 10, 'https://cf.shopee.co.id/file/9de66593fc022e90813f06022d162701', ''),
(3, 'SEPATU NIKE ZOOM PEGASUS', 'shoes', 89900, 20, 'https://cf.shopee.co.id/file/5e5ac2ae6c1a69e4f8ab4a3d3681cf59', ''),
(5, 'HANABI LILAC tas selempang VHINA', 'bag', 32500, 53, 'https://cf.shopee.co.id/file/f75fd2aee438fcef7aafcb80d0c7288d', 'Produk Asli Hanya ada disini, jangan bosan untuk belanja di toko kami ^-^'),
(8, 'Nacara Outer Kardigan Wanita 7 GAUGE', 'clothes', 399000, 15, 'https://cf.shopee.co.id/file/75b5565f5db9ef0b235fcea6d5f4d256', ''),
(9, 'Stelan Wanita Kekinian|Crop Tee', 'clothes', 349000, 13, 'https://cf.shopee.co.id/file/c62c518d17ef13c52a72cdcb9414f6f8', ''),
(10, 'BAJU WANITA MODEL KOREA BAJU CHELSEA', 'clothes', 64990, 20, 'https://cf.shopee.co.id/file/914eb1f15930a1c2dd06e015ed6f215a', ''),
(12, 'OUTFIT JAKET WANITA SELLY JACKET', 'clothes', 44900, 20, 'https://cf.shopee.co.id/file/2e7977b2f8979d36ab1bf9c1307ac3dd', 'بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيمِ   \r\n\r\n\r\n\r\n\r\nFUN SHOP FACT Berbelanja bisa meningkatkan hormon endorfin, yaitu hormon hormon bahagia yang efeknya sama dengan ketika kamu tertawa.  Rincian Produk: Bahan kanvas Ukuran all size fit to L  Ld  100 - 102 cm  *PENTING :  -Pastikan alamat yang di tulis ketika checkout diisi dengan sangan LENGKAP guna menghindari kendala pengiriman oleh kurir (Sertakan patokan bila perlu) -Pastikan nomor HP yang diisi dalam alamat ketika checkout mudah dihubungi (Tlp. & Sms) / (Sertakan 2 Nomor Hp bila perlu).'),
(14, 'Kurma SUKARI Ember Al-Qossim 850 GR', 'food', 45000, 54, 'https://cf.shopee.co.id/file/a9411ff8f99dfbaf4dec598bafd3cd89', 'SUKARI VIP EMBER KUALITAS VIP 100% SUPER PREMIUM EXP 06 2022 free bubble untuk diluar kemasan packing  NOTE PENTING!! : penyimpanan kurma sukari wajib dalam suhu dingin (masuk penyimpanan kulkas) lebih baik freezer tahan lebih lama  DIWAJIBKAN UNTUK MEMBELI BUBBLE WRAP (minimal 1pcs bubble untuk 1box) AGAR MENCEGAH TERJADI NYA KERUSAKAN SAAT PENGIRIMAN. APABILA PEMBELI TIDAK MEMBELI BUBBLE DAN TERJADI KERUSAKAN PADA BARANG, MAKA HAL TERSEBUT BUKAN MERUPAKAN TANGGUNG JAWAB KAMI. MEMBELI = SETUJU *PERLU DIKETAHUI: apabila ada catatan tambahan mohon untuk tidak request via chat, REQUEST VIA CHAT = KAMI ABAIKAN  SUKARI SEKARANG ADA KEMASAN EMBER FOTO PRODUK DAN BARANG YANG ANDA TERIMA SAMA PERSIS 99 PERSEN ULASAN PEMBELI KALI MEMBERIKAN BINTANG 5 TERBUKTI KARENA KUALITAS INSYAALLAH AMANAH DAN SEMOGA MENJADI LANGGANAN SETIA DUNIA HAJI'),
(15, 'LAMPU LED STRIP 5050 SMD AC 220V', 'elektronik', 7000, 20, 'https://cf.shopee.co.id/file/a016f53b794dd8d2f6f39bde0c69d932', '‼️SEBELUM BERTANYA HARAP MEMBACA DESKRIPSI PRODUK DIBAWAH INI‼️  ❗️HARGA YANG DI CANTUMKAN UNTUK HARGA PER 1 METER, DAN BELUM TERMASUK SOKET/ADAPTOR NYA ❗️PEMBELIAN PER20METER PERWARNA DAPET FREE 1 SOKET  Lampu LED Selang SMD 5050 High Quality Warna yang tersedia :PUTIH, BIRU, MERAH, HIJAU, WARM WHITE, PINK. LED Selang ini cocok diaplikasikan pada penggunaan dengan instalasi diatas puluhan meter tanpa pake ribet :) Aplikasi : Untuk menghias pepohonan, platform rumah, gapura, aquarium, kolam renang dsb SPESIFIKASI -Jenis : Indoor dan Outdoor -Jenis LED Mata Besar : SMD 5050 -Panjang : 1METER-100 METER -AC 220 VOLT - Beli panjang 20 meter perwarna lampu selang free 1 Soket/Colokan LED selang SMD 5050 -Panjang aslinya 1 roll adalah 100 meter, jika melakukan pembelian sebanyak 1 ROLL perwarna (100 meter), free 5 PCS SOKET/COLOKAN LED SELANG SMD 5050.'),
(16, 'Oli Motor Yamalube Matic Oil 800ml', 'otomotif', 26500, 20, 'https://cf.shopee.co.id/file/70a9d6ee396e844c385471335e9c97a6', 'YAMALUBE MATIC 800ml SJ 20W-40 JASO MB   Diformulasikan khusus untuk mesin motor matik 4-Tak Yamaha yang mana membutuhkan gesekan yang sangat rendah dan perlindungan maksimal.  Menjaga mesin matic tahan lama dengan aditif anti-karat dan korosi Mengandung Molybdenum yang memberikan gesekan yang sangat rendah. Memberikan performa dan proteksi terbaik untuk mesin motor matic.  Direkomendasikan untuk motor matik 4-Tak - Mio - Fino - X Ride - Mio GT - Mio Soul'),
(17, 'Essential Oil - 15ML by Tree House', 'healthy', 22500, 50, 'https://cf.shopee.co.id/file/0482b0f80b493f6699b40c15af5afc89', 'Catatan Penting! • @treehouse.aromatherapy, follow kami untuk informasi seputar produk, promo-promo dan giveaway yang menarik. • Asuransi produk hanya Rp.350: https://shopee.co.id/product/163057679/5939549404?smtt=0.0.9 • Harga tercantum adalah harga 1 Botol, sudah berikut bubble wrap tebal. • Link botol ukuran 100 ML : https://shopee.co.id/product/163057679/7544739420/   -	Ingin menikmati berbagai manfaat dari pengunaan essential oil tanpa harus mengkhawatirkan aroma bau/nyengat essential oil yang kurang nyaman dan harga nya yang sangat mahal? Berhenti mencari lagi, karena Tree House Aromatherapy adalah yang paling tepat bagi anda.  -	Minyak Atsiri Tree House merupakan campuran antara Essential dan Fragrance Oil untuk memberikan aroma kuat yang nyaman serta memberikan khasiat-khasiat yang dapat meningkatkan kualitas kehidupan anda sehari-hari.  -	Aromaterapi Tree House adalah “Everyday Essential Oil for Everyone”, yang dimana kami percaya bahwa essential oil yang terbaik adalah essential oil yang dapat dimanfaatkan setiap hari oleh semua orang dengan aman dan nyaman tanpa harus membebani pikiran seseorang dari segi kualitas maupun finansial.'),
(18, '2PCS/Pair (1 Sepasang）Gelang Tali', 'accesories', 13000, 25, 'https://cf.shopee.co.id/file/9335b0a7155bbf45b769546d53a8d92f', 'Dear, selamat datang di HelloCat !! Toko kami selalu mematuhi tujuan berikut - Produk di toko 100% baru dan kualitasnya sangat bagus. - Toko kami ada di China, tetapi menjanjikan pengiriman cepat, tiba di Indonesia 5-12 hari - Toko kami akan memberikan layanan pelanggan yang berkualitas untuk membuat belanja Anda menyenangkan! ! - Jika Anda memiliki saran bagus untuk kami, kami akan meningkatkan! Kepuasan Anda adalah pengejaran seumur hidup kami! ! !  product description: Material: Alloy Style: fashion'),
(19, 'Ma Ling Luncheon Pork 397 gr', 'food', 50000, 56, 'https://cf.shopee.co.id/file/d3ec96d5ec3a00e0c88db01c0019fef9', 'Merk TTS ( non halal ) Stock ready selalu ya 😊 EXP 2023  Berat bersih 397gram  Jika di perjalanan ada yang pecah atau rusak, kami tidak bertanggung jawab di karenakan packing sudah seaman mungkin  Tambah bubble: https://shopee.co.id/product/104640957/2205018543?smtt=0.0.9  Menerima reseller & droshipper Grosiran chat us untuk lebih detail'),
(20, 'Kipas Angin Mini Portable Rechargeable', 'elektronik', 55000, 20, 'https://cf.shopee.co.id/file/1bcb3203fac0f5de363806c2ecbd87de_tn', 'Deskripsi： Grotic Kipas Angin Portabel Rechargeable USB Kipas Genggam 3-Speed Adjustment adalah kipas mini yang bisa diisi ulang dengan 3 kecepatan angin yang berbeda dan dapat digunakan selama 3-7 jam. Kipas ini bisa digunakan sebagai kipas mini genggam portabel atau kipas mini desktop. Design  uniknya membuatnya begitu sempurna untuk penggunaan outdoor.  Fitur: * Bentuknya kecil,mudah dibawa. * Dirancang dengan gagang Tanpa-Lipat untuk mencegah agar pegangan tidak rusak yang merupakan kelemahan dari produk lain jika dapat dilipat akan mudah rusak * Plastik dan kabel berbahan ABS sangat ramah lingkungan, aman dan awet. * 4 sayap kipas kecil, namun dapat menghasilkan angin super kencang, menghilangkan hawa panas dalam sekejap. * 3 kecepatan angin yang dapat disesuaikan dengan kebutuhan (pelan, sedang, cepat) . * Dikonsep secara praktis dengan model pengoperasian satu tombol untuk on/off dan perpindahan kecepatan kipas. * Desain USB rechargeable, baterai isi ulang 1200mAh built-in,ia memiliki waktu siaga 3-7 jam. * Dapatkan catu daya dari perangkat USB seperti powerbank, komputer, laptop, pengisi daya USB.  * Selain buat pakai sendiri, kipas ini juga cocok untuk dijadikan hadiah spesial atau souvenir buat kerabat.'),
(21, 'STIKER HARTA TAHTA , 1 HARI JADI !!', 'otomotif', 3500, 100, 'https://cf.shopee.co.id/file/21ff810eeb8affae13d7e61c3c0a46cb_tn', 'SELALU READY BOSKU, LANGSUNG ORDER SAJA . SUKA SUKA REKUES KAMU KETIK DICATETAN,  kl byak ketik di chat aj :   HARTA TAHTA MILEA (CONTOH)  BAHAN HOLOGRAM YA BOSKU UKURAN 8 CM X 9 CM. BISA GANTI NAMA KAMU (PILIH CUSTOM)'),
(22, 'Kacamata Wanita Pria Wanita Korea', 'accesories', 5250, 20, 'https://cf.shopee.co.id/file/cfd12296b60f52164a112b0eb077cc22_tn', 'Rowling menjual Kacamata Import Fashion, Murah, dan Kualitas Terjamin. Produk IMPORT bukan LOKAL Terima DROPSIHP  Untuk pemesanan JANGAN LUPA DIVIDEOKAN SAAT PEMBUKAAN PESANANANYA! Karena jika ada keluhan untuk kurang barang atau apapun akan segera direspon oleh admin ya kak.  Toko kami menjamin barang datang sesuai pesanan ,Bahan yang bagus & Sesuai foto 99%.Tidak sesuai silahkan return !!!  KODE VARIASI SESUAI NOMOR!! Model Number:Rowling-ka-7 100% Brand new and high quality ! Type:Glasses Material:PC Eyewear Accessories:Frames Quantity:1Pc Berat : 25gr'),
(23, 'Masker KN95 HITAM EARLOOP 5ply', 'healthy', 1600, 50, 'https://cf.shopee.co.id/file/5369dd144730254c3c8055aca1cc8b10', 'Masker Hitam HIJAB KN95 Masker KN 95/N95 Masker N 95 5ply HITAM POLOS Pesen kelipatan 10 ya, contoh 10,20,30 dst Karena : 1. Maskernya terdiri dari 5 lapisan ( jamin puas, tebal tapi enak sekali bernapas ) 2. Ada kawat penyangga di hitung ( besi yg dijahit ke dalam ) sehingga lebih kuat dari pada besi di luar. 3. Embos asli KN95 4. Dikirim dgn stock yg ada, kadang kawat di dalam kadang kawat di luar  Harga sangat sangat ekonomis, super super murah.... Dapat paking setiap pembelian kelipatan 10 Contoh beli 10-20-30-40-50-60 dst'),
(24, 'Sambal Bawang Bu Rudy Pedas', 'food', 25000, 100, 'https://cf.shopee.co.id/file/d534cb26b4abaf5f7566dd485ceeb0ef', 'Ini account asli DEPOT BU RUDY !!!!  Dijamin bakal ketagihan!! Sambal Bawang khas Bu Rudy sudah terkenal pedasnya. Sambal Bawang khas Bu Rudy dikirim langsung dari depot Bu Rudy Dharmahusada Surabaya, dijamin fresh 100%. Info 1 Kg = 8 Botol dan Tanggal yg ada di botol adalah tanggal pembuatan (PRODUKSI) bukan tanggal EXPIRED.  HARAP MEMBACA DAHULU SEBELUM MEMBELI ****PRODUK TIDAK BISA DIRETUR**** ****Proses Packing : 1 - 2 hari**** ****Segala kerusakan dan keterlambatan pada saat pengiriman bukan tanggung jawab kami**** ****Harap disimpan didalam kulkas agar lebih tahan lama**** **** Produk kami selalu Ready ****** ****Membeli berarti Setuju dengan ketentuan kami*****'),
(25, 'Xiaomi Mi TV Stick Android TV Full HD ', 'elektronik', 400000, 30, 'https://cf.shopee.co.id/file/cd7a11514ff7f622b0294c3fa86dec29', 'Xiaomi Mi TV Stick Quad Core 1GB RAM 8GB ROM Bluetooth 4.2 Mi Stick TV Stick Android  NOTE PENTING PERBEDAAN GARANSI : - GARANSI RESMI = GARANSI RESMI XIAOMI 1 TAHUN (BISA DI KLAIM DI XIAOMI SERVICE CENTER MANAPUN DI INDONESIA), DAN TIDAK ADA GARANSI TOKO KAMI.  - GARANSI TOKO : GARANSI TOKO KAMI 1 BULAN (KETENTUAN SYARAT ADA DIPALING BAWAH), DAN TIDAK ADA GARANSI RESMI XIAOMI APAPUN   Spec : Ubah TV mu menjadi Smart TV dengan menggunakan Xiaomi MI TV Stick ini. Dilengkapi fitur Google Assistant dan Chromecast, perangkat ini juga bermanfaat untuk aktifitas kerjamu karena dapat menstreaming media dari iPhone, iPad, Android Smartphone, ataupun Laptop.'),
(26, 'Helm Bogo Retro Dewasa Wanita', 'otomotif', 85200, 20, 'https://cf.shopee.co.id/file/dddb49fa6ce2bde358b8a4b25a3ee7c9', 'HELM BOGO WANITA REMAJA & DEWASA PASTEL    - Kaca datar anti gores / anti silau - UV protection painting system - Busa lembut nyaman dipakai - Quick Release Buckle memudahkan untuk memasang dan melepas tali dagu. - Kaca bisa request - ANTI MAHAL - Standar packing menggunakan BOX & BUBBLE ((( GRATIS )))  TOKO BUKA 24JAM / HARI'),
(27, 'Masker KF94 Model korea 4ply  ', 'healthy', 20000, 10, 'https://cf.shopee.co.id/file/ef1330ee9d791a0cb6bbfbe99d457000', 'Masker KF94 4ply 4 lapis model 3D / 4D / Evo  harga tertera untuk 10pcs dapat BOX / sachet 10 sesuai gambar  ada izin BNPB  standard medis DI KEMASAN TERTULIS NON MEDICAL UNTUK MEMPERMUDAH IMPORNYA  pemakaian bisa 3-7 kali tergantung pemakaian setiap individu'),
(28, 'TOPI BUCKET KOREA SABLON BADAS', 'accesories', 10000, 34, 'https://cf.shopee.co.id/file/2137cdacd2ff83faf78f726a105b7217', 'Topi Bucket Bolak Balik Motif Sablon BADAS cocok buat kamu yang ingin tampil Trendy  material : * Bahan Drill Premium Grade A (luar dalam ) * Ukuran dewasa ALL SIZE dengan Ukuran Lingkar kepala 58cm  Ada berbagai macam pilihan warna dan motif 1 kg isi 30 pcs  catatan : SEBELUM MEMBUKA PAKET DIHARAPKAN AGAR DI VIDEO KAN TERLEBIH DAHULU AGAR ADA BUKTI KALAU ADA BARANG YANG KURANG ATAU CACAD , BILA KOMPLAIN TANPA ADA VIDEO KITA TIDAK AKAN RESPON :)   BISA COD PAKAI JNT DAN SHOPEE EXPRESS YA GUYS ;)'),
(29, 'sepatu gunung hiking w/p', 'shoes', 78000, 20, 'https://cf.shopee.co.id/file/a616fbf0609867dba8d2e71c7b2fd104', ''),
(30, 'MINISO Tas Selempang Wanita Sling Bag', 'bag', 80000, 30, 'https://cf.shopee.co.id/file/c2bcb0c1a830904165e2adaeecc097d4', 'Ukuran:20x7x13m Tas selempang yang fashion, bikin look kamu simple tapi tetep kece Bahan yang premium, kualitas yang terbaik, cukup tahan lama. Struktur wajar dan Kapasitas besar Cocok untuk pesta,perjalanan, berbelanja.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'Syaifudin Ilham', 'faturapik67@gmail.com', '$2y$10$IfE9ftNjRAv7xQDCgVhcte57GZ14wDyIBMFC3hAC31nVPEAnZloVW'),
(2, 'admin', 'syigufin485@gmail.com', '$2y$10$fOQigtV6rlzMhzaI3Q0a6uyIqEc9q5rb6bgzJZJOqX6kpzG5On6CC'),
(3, 'adil', 'adil@gmail.com', '$2y$10$RMTVTfJBkpPLb5SpPnvgNuylysHeF5UgWDn21TUHW65h29BIpBF5C'),
(4, 'Aulia Putri', 'auliaputririvai@gmail.com', '$2y$10$fz3rkd1SFJdwQoLA6WyEPOhWSLzSRfCJ.bSSXhJOq/aidgyCwCloq'),
(5, 'bariq', 'kad@gmail.com', '$2y$10$FdM4RRWPPFcTeHV/DZT8YO1WEi3UUKGp6v2KIaHyeReZeuOCl3.Ci');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
