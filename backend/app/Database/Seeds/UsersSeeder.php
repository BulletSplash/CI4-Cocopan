<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        $password = password_hash('Password123!', PASSWORD_DEFAULT);
        $admin_password = password_hash('admin', PASSWORD_DEFAULT);

        $dataYouWannaInsert = [
                [
                    'full_name' => 'admin',
                    'email' => 'admin@email.boss',
                    'password_hash' => $admin_password,
                    'type' => 'manager',
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'full_name' => 'Juan Dela Cruz',
                    'email' => 'juan@gmail.com',
                    'password_hash' => $password,
                    'type' => 'client',
                    'created_at' => $now,
                    'updated_at' => $now,
                ]
            ];

        $this->db->table('users')->insertBatch($dataYouWannaInsert );
    }
}
