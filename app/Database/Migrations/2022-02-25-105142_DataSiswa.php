<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataSiswa extends Migration
{
    public function up()
    {
        $data = [
            'id'    => [
                'type'  => 'INT',
                'auto_increment' => true
            ],
            'nama' => [
                'type'          => 'VARCHAR',
                'constraint'    => 64
            ],
            'email' => [
                'type'  => 'VARCHAR',
                'constraint' => 128
            ],
            'jenis_kelamin' => [
                'type'  => 'varchar',
                'constraint' => 16
            ],
            'password' => [
                'type'  => 'varchar',
                'constraint' => 128
            ]
        ];

        $this->forge->addField($data);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('datasiswa');
    }

    public function down()
    {
        $this->forge->dropTable('datasiswa');
    }
}
