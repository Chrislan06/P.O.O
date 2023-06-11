<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Foto extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'id_quarto' => [
                'type' => 'int',
                'unsigned' => true,
                'null' =>  false,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('id_quarto', 'quartos', 'id', 'RESTRICT', 'CASCADE', 'fk_id_quarto_fotos');
        $this->forge->createTable('fotos',true);
    }

    public function down()
    {
        $this->forge->dropTable('fotos',true);
    }
}
