<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About
{
    protected static
        $aboutHero = 'Teras Joglo adalah kafe berkonsep tradisional Jawa yang lahir dari hobi ngopi dan meracik kopi. Terinspirasi dari rumah Joglo, kami menghadirkan suasana teduh, hangat, dan nyaman. Lebih dari sekadar kopi, Teras Joglo adalah ruang untuk berhenti sejenak, berbagi cerita, dan menemukan ketenangan dalam secangkir rasa.',
        $aboutTentang = 'Semua ini berawal dari sebuah ide sederhana, hobi menikmati kopi dan meracik cita rasa khas dari setiap seduhannya. Dari kebiasaan itu lahirlah mimpi untuk menciptakan tempat di mana kopi tidak hanya dinikmati, tetapi juga dirasakan sebagai sebuah pengalaman.',
        $aboutMengapa = 'Kami tumbuh dan besar dengan latar belakang budaya Jawa yang sarat akan makna. Dari budaya itu, kami menemukan inspirasi untuk menghadirkan nuansa tradisional dalam sebuah ruang modern. Joglo dipilih bukan sekadar nama, melainkan simbol: sebuah rumah adat Jawa yang selalu identik dengan kebersamaan, kehangatan, dan keteduhan di setiap terasnya. Teras Joglo adalah cerminan dari nilai-nilai itu.',
        $aboutTujuan = 'Di Teras Joglo, tujuan kami sederhana: menyajikan pengalaman ngopi yang berbeda. Kami ingin setiap pengunjung merasakan harmoni antara rasa kopi yang hangat dengan suasana yang menenangkan. Bagi kami, secangkir kopi adalah teman dalam setiap momen dari obrolan ringan, diskusi mendalam, hingga waktu untuk menyendiri dan menenangkan pikiran.';

    public static function about_hero()
    {
        return self::$aboutHero;
    }

    public static function about_tentang()
    {
        return self::$aboutTentang;
    }

    public static function about_mengapa()
    {
        return self::$aboutMengapa;
    }

    public static function about_tujuan()
    {
        return self::$aboutTujuan;
    }
}
