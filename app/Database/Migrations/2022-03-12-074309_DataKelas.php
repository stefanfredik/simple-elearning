<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataKelas extends Migration
{
    public function up()
    {
        $data = [
            'id'    => [
                'type'  => 'INT',
                'auto_increment'    => TRUE
            ],
            'kode_kelas'    => [
                'type'  => 'VARCHAR',
                'constraint'    => 16
            ],
            'nama_kelas'    => [
                'type'  => 'VARCHAR',
                'constraint'    => 16
            ]
        ];

        $this->forge->addField($data);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('datakelas');
    }

    public function down()
    {
        $this->forge->dropTable('data_kelas');
    }
}
