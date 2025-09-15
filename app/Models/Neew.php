<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Cviebrock\EloquentSluggable\Sluggable;

class Neew extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'img',
        'body',
        'author_id'
    ];


    use Sluggable;
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    // --> agar mungubah laziloading menjadi eiger loading secara default saat relasi tabel
    protected $with = ['author'];


    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function getRouteKey()
    {
        return 'slug';
    }
}

// App\Models\Neew::create([
//     'title' => 'judul artikel 1',
//     'slug' => Str::slug('judul artikel 1'),
//     'img' => 'outdor.jpg',
//     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit explicabo ratione adipisci magni unde perspiciatis, quia libero aliquid aut enim quidem minima doloribus voluptatibus nihil nisi, odio tempora cupiditate aliquam consequuntur tenetur ab laboriosam, fugit expedita. In praesentium repellat quaerat ipsa at, accusantium qui distinctio facilis ducimus error quisquam reprehenderit excepturi necessitatibus sed vitae amet, dolor eum nemo perspiciatis consectetur provident! Recusandae repudiandae autem tempora.',
//     'author_id' => 1,
// ]);
// App\Models\Neew::create([
//     'title' => 'judul artikel 2',
//     'slug' => Str::slug('judul artikel 2'),
//     'img' => 'indor.jpg',
//     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit explicabo ratione adipisci magni unde perspiciatis, quia libero aliquid aut enim quidem minima doloribus voluptatibus nihil nisi, odio tempora cupiditate aliquam consequuntur tenetur ab laboriosam, fugit expedita. In praesentium repellat quaerat ipsa at, accusantium qui distinctio facilis ducimus error quisquam reprehenderit excepturi necessitatibus sed vitae amet, dolor eum nemo perspiciatis consectetur provident! Recusandae repudiandae autem tempora.',
//     'author_id' => 1,
// ]);
// App\Models\Neew::create([
//     'title' => 'judul artikel 3',
//     'slug' => Str::slug('judul artikel 3'),
//     'img' => 'mushola.jpg',
//     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit explicabo ratione adipisci magni unde perspiciatis, quia libero aliquid aut enim quidem minima doloribus voluptatibus nihil nisi, odio tempora cupiditate aliquam consequuntur tenetur ab laboriosam, fugit expedita. In praesentium repellat quaerat ipsa at, accusantium qui distinctio facilis ducimus error quisquam reprehenderit excepturi necessitatibus sed vitae amet, dolor eum nemo perspiciatis consectetur provident! Recusandae repudiandae autem tempora.',
//     'author_id' => 1,
// ]);
// App\Models\Neew::create([
//     'title' => 'judul artikel 4',
//     'slug' => Str::slug('judul artikel 4'),
//     'img' => 'meetingroom.jpg',
//     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit explicabo ratione adipisci magni unde perspiciatis, quia libero aliquid aut enim quidem minima doloribus voluptatibus nihil nisi, odio tempora cupiditate aliquam consequuntur tenetur ab laboriosam, fugit expedita. In praesentium repellat quaerat ipsa at, accusantium qui distinctio facilis ducimus error quisquam reprehenderit excepturi necessitatibus sed vitae amet, dolor eum nemo perspiciatis consectetur provident! Recusandae repudiandae autem tempora.',
//     'author_id' => 1,
// ]);
// App\Models\Neew::create([
//     'title' => 'judul artikel 5',
//     'slug' => Str::slug('judul artikel 5'),
//     'img' => 'toilet.jpg',
//     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit explicabo ratione adipisci magni unde perspiciatis, quia libero aliquid aut enim quidem minima doloribus voluptatibus nihil nisi, odio tempora cupiditate aliquam consequuntur tenetur ab laboriosam, fugit expedita. In praesentium repellat quaerat ipsa at, accusantium qui distinctio facilis ducimus error quisquam reprehenderit excepturi necessitatibus sed vitae amet, dolor eum nemo perspiciatis consectetur provident! Recusandae repudiandae autem tempora.',
//     'author_id' => 1,
// ]);
// App\Models\Neew::create([
//     'title' => 'judul artikel 6',
//     'slug' => Str::slug('judul artikel 6'),
//     'img' => 'tamancafe.jpg',
//     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit explicabo ratione adipisci magni unde perspiciatis, quia libero aliquid aut enim quidem minima doloribus voluptatibus nihil nisi, odio tempora cupiditate aliquam consequuntur tenetur ab laboriosam, fugit expedita. In praesentium repellat quaerat ipsa at, accusantium qui distinctio facilis ducimus error quisquam reprehenderit excepturi necessitatibus sed vitae amet, dolor eum nemo perspiciatis consectetur provident! Recusandae repudiandae autem tempora.',
//     'author_id' => 1,
// ]);

// App\Models\Neew::create([
//     'title' => 'Literasi, Musik, dan Aroma Green Tea Latte: Cerita dari Hardi Coffee',
//     'slug' => Str::slug('Literasi, Musik, dan Aroma Green Tea Latte: Cerita dari Hardi Coffee'),
//     'img' => 'tamancafe.jpg',
//     'body' => 'Rabu, 13 November. Rinai hujan mendera atap genteng rumah saya, beriringan dengan jerit alarm di gawai menunjuk pukul 17:30 WIB. Saya teringat jadwal kunjungan ke Angkringan Teras Joglo, Sebuah tempat yang berlokasi di Randudongkal Pemalang, Provinsi Jawa Tengah tepatnya dekat Sungai Mejagong Jalan arah Tegal via Guci. Lekas saya merapikan diri, mengenakan sweater merah, sandal Swallow, dan membawa payung. Saya memilih untuk tidak naik kendaraan karena terlalu idealis untuk urusan dekat satu hingga tiga kilometer, saya usahakan berjalan kaki. Sesampainya di sana, situasi sangat mendukung, sepi pengunjung, malam penuh bintang, dan pegawai yang ramah',
//     'author_id' => 1,
// ]);




// -------------------------------- 
// Teras Joglo spesial 17 Agustus, Tempat Ngopi yang Bikin Suasana Semakin Seru dan Roman
// Agustus menjadi bulan kemerdekaan bagi rakyat Indonesia dan di tanggal 17-nya banyak yang merayakannya dengan mengadakan lomba 17-an. Tidak hanya itu, setiap tahunnya selalu ada lomba-lomba seru yang tidak boleh dilewatkan.
// Kalau hanya ikut lomba saja, tentunya akan menguras energi dong dan Energi jadi Habis. Kalau sudah seperti itu, jadi bingung harus ikut lomba atau istirahat dulu. Teras Joglo bisa memberikan solusinya.


// Inovasi Menu Tanpa Henti ala Teras Joglo: Selalu Ada yang Baru untuk Sobat Joglo
// Sebagai angkringan Cafe, Teras Joglo berkomitmen terus berprogres dan berinovasi. Dalam proses berinovasi, kami selalu berusaha menyajikan menu berkualitas sekaligus memastikan pelayanan dipersiapkan dengan baik.
// Sejak berdiri, Teras Joglo dikenal bukan hanya sebagai salah satu pelopor dalam sajian ngopi. Namun, juga sebagai Angkringan yang aktif menciptakan gebrakan lewat berbagai inovasi.
// Salah satunya dengan mengadakan kampanye kreatif yang menyentuh berbagai aspek kehidupan masyarakat Indonesia. Hal ini bertujuan untuk meningkatkan angkringan awareness serta mengajak Sobat Joglo merasakan experience yang berbeda bersama Teras Joglo.


// Logika di Balik Kopi: Kisah Inspiratif Farhan Munif Bersama Resta
// Di tengah pesatnya perkembangan industri kopi di Indonesia, hadir sebuah brand yang menawarkan sesuatu yang berbeda: Resta. Brand ini tidak sekadar menjual kopi sebagai minuman, tetapi juga menghadirkan sebuah pengalaman yang unik dan sarat makna.

// Di balik Kopi Resta, berdiri sosok pengusaha muda bernama Farhan Munif yang berhasil mengubah kecintaannya pada kopi menjadi sebuah bisnis yang menjanjikan. Perjalanannya bukan hanya tentang meracik rasa, melainkan juga tentang bagaimana ia membangun filosofi, kreativitas, dan visi besar untuk mengangkat budaya ngopi ke level yang lebih dalam. 

// Seperti banyak pengusaha sukses lainnya, Farhan Munif memulai langkahnya dari sesuatu yang sederhana. Kecintaannya terhadap kopi bermula dari kebiasaan nongkrong di kedai-kedai kopi dan rasa penasaran terhadap beragam cita rasa yang dihasilkan dari setiap biji kopi. Dari situ lahirlah ide untuk membangun sebuah brand yang bukan hanya menjual kopi, tetapi juga menyajikan pengalaman ngopi yang lebih logis dan bermakna

// Nama "Resta" dipilih bukan tanpa alasan. Menurut Farhan, kopi adalah minuman yang bisa membuka pikiran, memberi inspirasi, dan membantu orang berpikir lebih jernih. "Ngopi itu bukan sekadar gaya hidup, tapi juga momen refleksi dan logika," ujarnya dalam sebuah wawancara.


// Angkringan Pendopo: Tempat Nongkrong Keren dan Nyaman di Randudongkal Pemalang Selatan
// Pada saat ini, nongkrong sudah menjadi gaya hidup bagi kawula muda, bahkan yang sudah tidak muda lagi masih banyak yang suka nongkrong atau sekedar datang ke kopi shop, cafe ataupun warkop (warung kopi) untuk merefreskan pikiran ataupun untuk sekedar bercengkrama.

// Tahukah teman-teman tempat nongkrong yang asik dan juga nyaman? Ini mungkin bisa jadi rekomendasi atau sekedar alternatif bagi kalian yang bingung mencari tempat untuk nongkrong bersama teman, pasangan, ataupun keluarga yang tinggal di sekitar Tangerang Selatan, tepatnya di Buaran Serpong.

// Dari sekian tempat nongkrong yang pernah saya kunjungi, warkop 2 lantai cukup nyaman dan unik untuk menjadi destinasi, dengan konsep out door terdiri dari dua lantai yang masing-masing menghadap langsung ke jalan raya memberikan kesan eksklusif dan unik.

// Dengan pencahayaan yang epik menambah tempat ini unik dan nyaman, selain itu didukung juga fasilitas lainnya, seperti tempat parkir yg cukup luas (tapi tidak rekomen untuk membawa mobil), toilet yang bersih, ada juga mushola .

// Setidaknya desain cafe ini terbagi menjadi beberapa bagian yang bisa sahabat pilih, yakni lantai 2 bagian kanan, lantai 2 bagian kiri, lantai 2 bagian tengah, kemudian dilantai bawa ada satu tribun disebelah kanan, tribun sebelah depan atau tengah, dan pelataran depan pangggung. Bagi kalian yang tidak mau ada asap rokok, terdapat juga ruangan yang terletak di bagian tengah untuk ruang tanpa rokok. Untuk toilet dan musholat berada di lantai bawah pojok kiri. 