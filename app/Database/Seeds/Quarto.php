<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Quarto extends Seeder
{
    public function run()
    {

        $db = db_connect();
        $qTable = $db->table('quartos');
        $quartos = [
            [
                'tipo' => 'SUÍTE LONDON CLINGON',
                'tipo_cama' => 'Cama king-size',
                'descricao' => 'Quarto espaçoso e luxuoso, projetado para proporcionar conforto e relaxamento.

                Cama king-size com lençóis macios e travesseiros de alta qualidade para garantir uma ótima noite de sono.
                
                Área de estar separada com sofás confortáveis e uma mesa de centro elegante.
                
                Banheiro privativo com banheira de hidromassagem ou chuveiro de alta pressão, fornecendo opções para relaxamento e revitalização.',
                'tamanho' => '120 m²',
                'preco' => null,
            ],

            [
                'tipo' => 'SUÍTE HEAVEN\'S DOOR',
                'tipo_cama' => 'Cama king-size',
                'descricao' => 'Suíte espaçosa e moderna, projetada com um estilo contemporâneo e elegante.

                Quarto com uma cama king-size com lençóis de algodão egípcio e travesseiros de plumas, oferecendo conforto supremo.
                
                Área de estar luxuosa com sofás de couro macios e uma mesa de centro moderna, perfeita para relaxar ou receber convidados.
                
                Banheiro privativo revestido de mármore, com uma espaçosa banheira de imersão e um chuveiro de efeito chuva, proporcionando uma experiência de spa.',
                'tamanho' => '160 m²',
                'preco' => null,
            ],

            [
                'tipo' => 'CASAL FRANCH ROOM',
                'tipo_cama' => 'Cama queen-size',
                'descricao' => 'Quarto de casal acolhedor e charmoso, projetado para criar uma atmosfera romântica e relaxante.

                Cama queen-size com colchão macio e lençóis de alta qualidade, garantindo uma noite de sono tranquila e confortável.
                
                Iluminação suave e ambiente aconchegante, proporcionando um ambiente íntimo e relaxante para casais.
                
                Área de estar com poltronas confortáveis ou um pequeno sofá, oferecendo um espaço adicional para relaxar e desfrutar de momentos a dois.',
                'tamanho' => '200 m²',
                'preco' => null,
            ],

            [
                'tipo' => 'CASAL LOVE DELUXE',
                'tipo_cama' => 'Cama king-size',
                'descricao' => 'Quarto de casal elegante e contemporâneo, projetado com um estilo moderno e sofisticado.

                Cama king-size com um colchão luxuoso e lençóis de alta qualidade, proporcionando conforto máximo e uma experiência de sono rejuvenescedora.
                
                Decoração minimalista com cores neutras e detalhes cuidadosamente selecionados, criando uma atmosfera serena e tranquila.
                
                Área de estar confortável com uma poltrona ou um pequeno sofá, perfeito para relaxar e desfrutar de conversas íntimas.
                ',
                'tamanho' => '240 m²',
                'preco' => null,
            ],

            [
                'tipo' => 'SOLTEIRO LONELINESS HEART',
                'tipo_cama' => 'Cama de solteiro',
                'descricao' => 'Quarto de solteiro aconchegante e funcional, projetado para atender às necessidades de conforto e praticidade de um único hóspede.

                Cama de solteiro com colchão confortável e lençóis macios, proporcionando um espaço acolhedor para descanso e relaxamento.
                
                Área de trabalho funcional, equipada com uma escrivaninha espaçosa, uma cadeira confortável e uma luminária adequada para facilitar tarefas e estudos.
                
                Armário ou guarda-roupa com espaço suficiente para armazenar roupas, malas e pertences pessoais de forma organizada.',
                'tamanho' => '120 m²',
                'preco' => null,
            ],

            [
                'tipo' => 'SOLTEIRO BAD COMPANY',
                'tipo_cama' => 'Cama de solteiro',
                'descricao' => 'Quarto de solteiro moderno e compacto, projetado para oferecer conforto e funcionalidade em um espaço otimizado.

                Área de trabalho prática, com uma mesa compacta, uma cadeira ergonômica e iluminação adequada para facilitar tarefas e estudos.
                
                Cama de solteiro com um colchão confortável e lençóis de qualidade, proporcionando um local agradável para descanso e relaxamento.
                
                Espaço funcionalmente projetado com mobiliário compacto, como uma cadeira confortável, uma mesa de cabeceira com gavetas e prateleiras para armazenamento.',
                'tamanho' => '140 m²',
                'preco' => null,
            ],

            [
                'tipo' => 'FAMÍLIA UNITED LOVE',
                'tipo_cama' => 'Camas confortáveis e versáteis',
                'descricao' => 'Quarto familiar espaçoso e acolhedor, projetado para acomodar confortavelmente famílias ou grupos.

                Camas confortáveis e versáteis, com opções de camas de casal e camas de solteiro, proporcionando flexibilidade na acomodação para diferentes membros da família.
                
                Decoração convidativa e alegre, com cores vibrantes e detalhes lúdicos, criando um ambiente descontraído e adequado para todas as idades.
                
                Área de estar separada com sofá, poltronas ou espaço para relaxamento em família, perfeito para momentos de convivência e entretenimento.',
                'tamanho' => '240 m²',
                'preco' => null,
            ],

            [
                'tipo' => 'FAMÍLIA GRASS OF HOME',
                'tipo_cama' => 'Camas king-size e camas de solteiro',
                'descricao' => 'Quarto familiar espaçoso e luxuoso, projetado para acomodar confortavelmente famílias maiores ou grupos de amigos.

                Camas king-size e camas de solteiro, com colchões de alta qualidade e lençóis macios, garantindo uma experiência de sono tranquila e rejuvenescedora para todos os membros da família
                
                Sala de estar separada com sofás confortáveis, poltronas aconchegantes e uma área de entretenimento com TV de tela plana, perfeita para momentos de convivência e relaxamento em família.
                
                Espaço amplo de armazenamento, como armários espaçosos e cômodas, para que a família possa organizar suas roupas e pertences pessoais de maneira conveniente.',
                'tamanho' => '280 m²',
                'preco' => null,
            ],
        ];


        $qTable->insertBatch($quartos);
    }
}
