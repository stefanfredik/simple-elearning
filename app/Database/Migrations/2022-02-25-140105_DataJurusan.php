<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataJurusan extends Migration
{
    public function up()
    {
        $data = [
            'id_jurusan'    => [
                'type'  => 'INT',
                'auto_increment' => true
            ],
            'kode_jurusan' => [
                'type'          => 'VARCHAR',
                'constraint'    => 64
            ],

            'nama_jurusan' => [
                'type'          => 'VARCHAR',
                'constraint'    => 64
            ]
        ];

        $this->forge->addField($data);
        $this->forge->addPrimaryKey('id_jurusan');
        $this->forge->createTable('datajurusan');
    }

    public function down()
    {
        $this->forge->dropTable('datajurusan');
    }
}
