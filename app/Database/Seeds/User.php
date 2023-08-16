<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Myth\Auth\Password;

class User extends Seeder
{
    public function run()
    {
        //tambah user -> pass 12345678
        $this->db->query("INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
        (1, 'admin@gmail.com', 'admin', '$2y$10\$aeIWv8rTlb3XyDckxE.12evsOup5HOzrgAvIuoLY8QUOd08iZRA3K', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-09-08 08:26:05', '2021-09-08 08:27:20', NULL),
        (2, 'user@gmail.com', '081222333444', '$2y$10\$aeIWv8rTlb3XyDckxE.12evsOup5HOzrgAvIuoLY8QUOd08iZRA3K', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-09-13 23:09:14', '2021-09-13 23:09:14', NULL),
        (3, 'user2@gmail.com', '082222333444', '$2y$10\$aeIWv8rTlb3XyDckxE.12evsOup5HOzrgAvIuoLY8QUOd08iZRA3K', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-09-14 01:22:24', '2021-09-14 01:22:24', NULL);");

        //tambah role
        $this->db->query("INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES ('1', 'admin', 'administrator'), ('2', 'user', 'user pengguna');");

        //tambah admin
        $this->db->query("INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES ('1', '1');");

        for ($i=1; $i <= 5; $i++) { 
            $datas[] = [
                'email' => 'user-'.$i.'@gmail.com',
                'username' => 'user '.$i,
                'password_hash' => Password::hash('1234'),
                'active' => 1
            ];
        }
        $this->db->table('users')->insertBatch($datas);
    }
}
