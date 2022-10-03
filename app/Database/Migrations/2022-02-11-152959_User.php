<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $data = [
            'id'    => [
                'type'              => 'INT',
                'auto_increment'    => true
            ],
            'username' => [
                'type'      => 'VARCHAR',
                'constraint' => 30
            ],
            'nama' => [
                'type'      => 'VARCHAR',
                'constraint' => 128
            ],
            'email' => [
                'type'      => 'VARCHAR',
                'constraint' => 64
            ],
            'role' => [
                'type'      => 'VARCHAR',
                'constraint' => 128
            ],
            'password' => [
                'type'      => 'TEXT'
            ]
        ];

        $this->forge->addField($data);
        $this->forge->addKey('id', true);
        $this->forge->createTable("user");
    }

    public function down()
    {
        $this->forge->dropTable("user");
    }
}
