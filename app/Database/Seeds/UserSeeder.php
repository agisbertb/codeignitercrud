<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'Test',
            'surname' => 'Test',
            'age' => 30,
            'email'    => 'test@example.com',
            'phone' => '123456789'
        ];

        $this->db->table('users')->insert($data);
    }
}
