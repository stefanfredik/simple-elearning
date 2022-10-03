<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataMapel extends Migration
{
    public function up()
    {
        $data = [
            'id'    => [
                'TYPE'  => 'INT',
                'auto_increment'    => TRUE
            ],
            'kode_mapel'    => [
                'TYPE'  => 'VARCHAR',
                'constraint'    => 16
            ],
            'nama_mapel'    => [
                'TYPE'  => 'VARCHAR',
                'constraint'    => 64
            ]
        ];
        $this->forge->addField($data);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('datamapel');
    }

    public function down()
    {
        $this->forge->dropTable('datamapel');
    }
}
