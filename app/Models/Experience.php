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
                'image' => 'kegiatan-1.jpg',
                'description' => 'Membangun aplikasi manajemen laboratorium virtual dengan menerapkan arsitektur MVC, sistem CRUD, OOP',
                'kesan' => '....'
            ],
            [
                'id' => 2,
                'title' => '???',
                'date' => 'Kuartal 1 2026',
                'image' => 'kegiatan-2.jpg',
                'description' => '???',
                'kesan' => '....'
            ],
            [
                'id' => 3,
                'title' => '???',
                'date' => 'Maret 2026',
                'image' => 'kegiatan-3.jpg',
                'description' => '???',
                'kesan' => '....'
            ],
            [
                'id' => 4,
                'title' => '???',
                'date' => 'Februari - Maret 2026',
                'image' => 'kegiatan-4.jpg',
                'description' => '???',
                'kesan' => '....'
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