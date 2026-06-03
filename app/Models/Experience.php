<?php

namespace App\Models;

class Experience
{
    public static function getAll()
    {
        return [
            [
                'id' => 1,
                'title' => 'Pengembangan Sistem Manajemen Lab Virtual Kimia',
                'date' => 'Desember 2025',
                'image' => 'kegiatan-1.png',
                'description' => 'Membangun aplikasi manajemen laboratorium virtual dengan menerapkan arsitektur MVC, sistem CRUD, OOP',
                'kesan' => '....'
            ],
            [
                'id' => 2,
                'title' => 'Pembuatan Proyek Akhir IMK',
                'date' => 'Oktober-Desember 2025',
                'image' => 'kegiatan-2.png',
                'description' => 'Membuat desain UI dari sebuah aplikasi buatan yakni FAKTAIn yang dikembangkan dari low fidelity hingga high fidelity dengan menggunakan Figma',
                'kesan' => '....'
            ],
            [
                'id' => 3,
                'title' => 'WAW',
                'date' => 'Maret - Juni 2026',
                'image' => 'kegiatan-3.png',
                'description' => 'Ini juga berkesan praktikum Web Programming II',
                'kesan' => '....'
            ],
            [
                'id' => 4,
                'title' => 'Mobile Programmiing',
                'date' => '2026',
                'image' => 'kegiatan-4.png',
                'description' => 'Membuat aplikasi android dengan memahami konsep dasar pemrograman mobile, seperti activity, intent, dan layout dan implementasinya di Android menggunakan Kotlin',
                'kesan' => 'Tidak perlu ditanyakan'
            ]
        ];
    }

    public static function find($id)
    {
        $experiences = self::getAll();
        
        foreach ($experiences as $exp) {
            if ($exp['id'] == $id) {
                return $exp;
            }
        }
        
        return null; 
    }
}