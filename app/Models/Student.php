<?php

namespace App\Models;

class Student
{
    public static function getProfile()
    {
        return [
            'nama' => 'Helga Lathif Martiza', 
            'nim'  => '2410817210025',          
            'prodi'=> 'Teknologi Informasi',
            'hobi' => 'Sleep',
            'skill'=> 'Skill 1 Skill 2 Ultimate Skill',
        ];
    }
}