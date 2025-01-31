<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'Keluh Kesah Belajar Networking',
            'author_id' => '1',
            'category_id' => '1',
            'slug' => 'keluh-kesah-belajar-networking',
            'body' => 'Belajar jaringan (networking) itu bisa jadi perjalanan yang penuh tantangan, tapi juga seru kalau udah mulai paham konsep dasarnya. Berikut beberapa keluh kesah yang sering dirasakan saat belajar network:

1. Teori yang Ribet, Praktek yang Bikin Pusing
Di awal belajar, banyak yang bingung dengan konsep dasar seperti OSI Layer, TCP/IP, subnetting, dan lain-lain. Semua terasa abstrak sampai benar-benar nyoba di dunia nyata.

2. Subnetting Itu Mimpi Buruk
Perhitungan subnet mask, CIDR, binary conversion, dan lainnya sering bikin kepala ngebul. Apalagi kalau harus ngitung cepat tanpa kalkulator di ujian atau interview kerja.

3. Settingan Salah, Jaringan Mati
Salah satu momen horor dalam belajar network adalah salah konfigurasi di router atau switch, yang bisa bikin jaringan mati total. Kadang satu typo aja udah bikin sistem down.

4. Perbedaan Vendor Bikin Bingung
Setiap vendor punya perintah sendiri. Cisco pakai IOS CLI, Mikrotik pakai Winbox & terminal, Juniper pakai Junos, dll. Harus belajar banyak command berbeda untuk perangkat yang beda.

5. Troubleshooting yang Bikin Frustrasi
Kadang jaringan error tanpa alasan yang jelas. Ping jalan, tapi nggak bisa akses internet. DNS kadang hidup, kadang mati. Firewall, NAT, VLAN, semuanya bisa jadi penyebab masalah.

6. Peralatan Mahal, Lab Virtual Kadang Ribet
Buat yang belajar sendiri, beli perangkat router, switch, dan access point itu mahal. Alternatifnya pakai lab virtual kayak GNS3, EVE-NG, atau Packet Tracer, tapi kadang setup-nya ribet dan berat di komputer.

7. Serangan dan Keamanan Jaringan
Setelah paham dasar network, baru sadar bahwa jaringan bisa gampang diserang. DDoS, Man-in-the-Middle, ARP Spoofing, Port Scanning, dll. Jadi harus belajar keamanan jaringan juga.

8. Butuh Praktik Terus-Menerus
Jaringan itu ilmu yang harus sering dipraktikkan. Kalau nggak sering setting, cepat lupa. Banyak yang akhirnya nggak lanjut karena jarang praktek dan akhirnya ketinggalan.

Tapi kalau udah mulai ngerti, networking itu bisa jadi skill yang sangat berharga dan dicari di dunia kerja. Jadi, meskipun sulit di awal, tetap semangat ya! 💪🔥

Kamu lagi belajar bagian apa dari networking? 🚀'
        ]);
    }
}
