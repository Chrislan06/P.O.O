<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class Reserva extends Migration
{
    public function up()
    {
            $this->forge->addField([
                'id' => [
                    'type' => 'INT',
                    'unsigned' => true,
                    'auto_increment' => true
                ],
                'data_check_in' => [
                    'type' => 'TIMESTAMP',
                    'null' =>  true,
                ],
                'data_check_out' => [
                    'type' => 'TIMESTAMP',
                    'null' =>  true,
                ],
                'data_inicio' => [
                    'type' => 'TIMESTAMP',
                    'null' =>  false,
                ],
                'data_fim' => [
                    'type' => 'TIMESTAMP',
                    'null' =>  false,
                ],
                'id_cliente' => [
                    'type' => 'int',
                    'unsigned' => true,
                    'null' =>  true,
                ],
                'id_quarto' => [
                    'type' => 'int',
                    'unsigned' => true,
                    'null' =>  false,
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
            $this->forge->addForeignKey('id_cliente', 'clientes', 'id', 'RESTRICT', 'SET NULL', 'fk_reservas_clientes');
            $this->forge->addForeignKey('id_quarto', 'quartos', 'id', 'RESTRICT', 'CASCADE', 'fk_reservas_quartos');
            $this->forge->createTable('reservas',true);
    }

    public function down()
    {
        $this->forge->dropTable('reservas');
    }
}
