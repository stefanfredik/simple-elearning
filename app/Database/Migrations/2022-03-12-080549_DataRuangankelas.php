<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataRuangankelas extends Migration
{
    public function up()
    {
        $data = [
            'id'    => [
                'TYPE' => 'INT',
                'auto_increment'    => TRUE
            ],
            'kode_ruangan'  => [
                'TYPE'  => 'VARCHAR',
                'constraint'    => 16
            ],
            'nama_ruangan'  => [
                'TYPE'  => 'VARCHAR',
                'constraint'    => 16
            ],
            'kelas' => [
                'TYPE'  => 'VARCHAR',
                'constraint'    => 16
            ],

            'jurusan'   => [
                'TYPE'  => 'VARCHAR',
                'constraint'    => 16
            ]
        ];

        $this->forge->addField($data);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('dataruangankelas');
    }

    public function down()
    {
        $this->forge->dropTable('dataruangankelas');
    }
}
