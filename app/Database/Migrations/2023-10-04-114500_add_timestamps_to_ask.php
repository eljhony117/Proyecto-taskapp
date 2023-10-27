<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration; 

class AddTimestampsToAsk extends Migration
{
    public function up()
    {
        $this->forge->addColumn('task', [
            'created_at' =>[
                'type'      => 'DATETIME',
                'null'      => true,
                'deafult'   => null
            ],
            'updated_at' =>[
                'type'      => 'DATETIME',
                'null'      => true,
                'deafult'   => null
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColum('task', 'updated_at');
        $this->forge->dropColum('task', 'created_at');
            
    }
}