<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Quarto extends Migration
{
    public function up()
    {
            $this->forge->addField([
                'id' => [
                    'type' => 'INT',
                    'unsigned' => true,
                    'auto_increment' => true
                ],
                'tipo' => [
                    'type' => 'VARCHAR',
                    'constraint' => '50',
                ],
                'tipo_cama' => [
                    'type' => 'VARCHAR',
                    'constraint' => '50',
                ],
                'tamanho' => [
                    'type' => 'VARCHAR',
                    'constraint' => '50',
                ],
                'descricao' => [
                    'type' => 'TEXT',
                ],
                'preco' => [
                    'type' => 'DECIMAL',
                    'null' =>  false,
                    'constraint' => '8,2',
                ],
                'criado_em' => [
                    'type' => 'TIMESTAMP',
                    'default' => new RawSql('CURRENT_TIMESTAMP')
                ],
                'atualizado_em' => [
                    'type' => 'TIMESTAMP',
                    'default' => new RawSql('CURRENT_TIMESTAMP')
                ],
            ]);

            $this->forge->addPrimaryKey('id');
            $this->forge->createTable('quartos',true);
        
    }

    public function down()
    {
        $this->forge->dropTable('quartos');
    }
}
