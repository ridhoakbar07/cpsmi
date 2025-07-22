<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getWebProfiles()
    {
        // Default values
        $defaults = [
            'favicon' => 'assets/favicon/default.png',
            'logo' => 'assets/favicon/default.png',
            'struktur_organisasi' => 'assets/struktur_organisasi/default.jpg',
            'nama_perusahaan' => 'PT. Inayah Bintang Borneo',
            'visi' => 'Ekspedisi & Logistik Terkemuka, Cepat & Aman',
            'misi' => '-',
            'alamat' => 'Jl. Cempaka V No. 29 RT.01, Kel. Mawar Kec. Banjarmasin Tengah, Kota Banjarmasin, Kalimantan Selatan, Indonesia 70115',
            'telp' => '+628125004692',
            'sejarah' => 'PT. Inayah Bintang Borneo didirikan pada tahun 2023 dengan visi untuk menjadi perusahaan ekspedisi dan logistik terkemuka di Indonesia. Kami berkomitmen untuk memberikan layanan yang cepat, aman, dan terpercaya kepada pelanggan kami.',
            'kontak_mail' => [
                ['posisi' => 'support', 'alamat_email' => 'info@inayahbintangborneo.com']
            ]
        ];

        $webProfiles = \App\Models\WebProfile::first();

        if (is_null($webProfiles)) {
            return (object) $defaults;
        }

        foreach ($defaults as $key => $value) {
            if (!isset($webProfiles->$key) || empty($webProfiles->$key)) {
                $webProfiles->$key = $value;
            }
        }

        if (!empty($webProfiles->kontak_mail) && is_array($webProfiles->kontak_mail)) {
            $kontakMail = [];
            foreach ($webProfiles->kontak_mail as $item) {
                if (is_array($item) && isset($item['posisi'], $item['alamat_email'])) {
                    $kontakMail[] = $item;
                } elseif (is_string($item)) {
                    $kontakMail[] = ['posisi' => 'Umum', 'alamat_email' => $item];
                }
            }
            if (empty($kontakMail)) {
                $kontakMail = $defaults['kontak_mail'];
            }
            $webProfiles->kontak_mail = $kontakMail;
        } else {
            $webProfiles->kontak_mail = $defaults['kontak_mail'];
        }

        return $webProfiles;
    }

    public function index()
    {
        $posts = \App\Models\Post::all();
        $webProfiles = $this->getWebProfiles();
        return view('home', ['posts' => $posts, 'webProfiles' => $webProfiles]);
    }

    public function blogs()
    {
        $posts = \App\Models\Post::all();
        $webProfiles = $this->getWebProfiles();
        return view('components.landing-page.pages.blogs', ['posts' => $posts, 'webProfiles' => $webProfiles]);
    }

    public function aboutUs()
    {
        $webProfiles = $this->getWebProfiles();
        return view('components.landing-page.pages.about-us', ['webProfiles' => $webProfiles]);
    }

    public function contactUs()
    {
        $webProfiles = $this->getWebProfiles();
        return view('components.landing-page.pages.contact-us', ['webProfiles' => $webProfiles]);
    }

    public function services()
    {
        $webProfiles = $this->getWebProfiles();
        return view('components.landing-page.pages.services', ['webProfiles' => $webProfiles]);
    }
}
