<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        for ($i=0; $i < 1500 ; $i++) {
            $data = [
                'nim' => static::faker()->randomNumber(8, true),
                'no_ktp' => static::faker()->randomNumber(9, true),
                'nama_lengkap' => static::faker()->name(),
                'tempat_lahir' => static::faker()->city(),
                'tgl_lahir' => static::faker()->date('Y_m_d'),
                'jenis_kelamin' => static::faker()->numberBetween(4001,4002),
                'prodi' => static::faker()->numberBetween(1,2),
                'provinsi' => static::faker()->numberBetween(1,8),
                'agama' => static::faker()->numberBetween(1,8),
                'alamat_lengkap' => static::faker()->address(),
                'tgl_masuk' => static::faker()->date('Y_m_d'),
            ];
            $this->db->table('tab_mahasiswa')->insert($data);
        }
    }
}
