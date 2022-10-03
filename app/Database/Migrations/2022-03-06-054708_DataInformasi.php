<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataInformasi extends Migration
{
    public function up()
    {
        $data = [
            'id'    => [
                'type'  => 'INT',
                'auto_increment'    => true
            ],

            'judul' => [
                'type'  => 'varchar',
                'constraint'    => 128
            ],
            'isi' => [
                'type' => 'TEXT'
            ],
            'role' => [
                'type'  => 'INT'
            ],
            'created_at' => [
                'type'  => 'datetime'
            ]
        ];

        $this->forge->addField($data);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('datainformasi');
    }

    public function down()
    {
        $this->forge->dropTable('datainformasi');
    }
}
