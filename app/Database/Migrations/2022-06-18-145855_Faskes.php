<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Faskes extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nama'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '45',
                'unique' => TRUE
            ],
            'alamat'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '200'
            ],
            'latlong'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '40'
            ],
            'deskripsi'       => [
                'type'           => 'TEXT',
            ],
            'skor_rating'       => [
                'type'           => 'DOUBLE',
                'null' => TRUE
            ],
            'foto1'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '40'
            ],
            'foto2'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '40',
                'null' => TRUE
            ],
            'foto3'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '40',
                'null' => TRUE
            ],
            'website'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '45',
                'null' => TRUE
            ],
            'jumlah_dokter'       => [
                'type'           => 'INT',
                'constraint'     => '255'
            ],
            'jumlah_pegawai'       => [
                'type'           => 'INT',
                'constraint'     => '255'
            ],
            'jenis_faskes_id'       => [
                'type'           => 'INT',
            ],
            'kecamatan_id'       => [
                'type'           => 'INT',
            ],
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->addKey('jenis_faskes_id');
        $this->forge->addKey('kecamatan_id');


        $this->forge->createTable('faskes', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('faskes');
    }
}
