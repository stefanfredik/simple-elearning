<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataJadwal extends Migration
{
    public function up()
    {
        $data = [
            'id'    => [
                'TYPE'  => 'INT',
                'auto_increment'    => TRUE
            ],
            'hari'    => [
                'TYPE'  => 'VARCHAR',
                'constraint'    => 16
            ],
            'jam'    => [
                'TYPE'  => 'VARCHAR',
                'constraint' => 16
            ],
            'kelas'    => [
                'TYPE'  => 'INT'
            ],
            'mapel'    => [
                'TYPE'  => 'INT'
            ],
            'guru'    => [
                'TYPE'  => 'INT'
            ],
        ];
        $this->forge->addField($data);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('datajadwal');
    }

    public function down()
    {
        $this->forge->dropTable('datajadwal');
    }
}
