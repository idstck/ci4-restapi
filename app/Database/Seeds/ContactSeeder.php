<?php namespace App\Database\Seeds;

class ContactSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
            $data = [
                'name' => 'Luna',
                'number'    => '08999655758'
            ];

            // Simple Queries
            // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)",
            //         $data
            // );

            // Using Query Builder
            $this->db->table('contacts')->insert($data);
        }
}