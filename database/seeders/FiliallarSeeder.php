<?php

namespace Database\Seeders;

use App\Models\Filial;
use Illuminate\Database\Seeder;

class FiliallarSeeder extends Seeder
{
    /**
     * SifatSavdo — bitta filial, ID 1 bo'lishi MUHIM!
     * Import fayllarida filial_kod=1 bilan beriladi.
     */
    public function run(): void
    {
        Filial::updateOrCreate(['id' => 1], [
            'id'     => 1,
            'nomi'   => 'SifatSavdo',
            'kod'    => 'SS',
            'manzil' => null,
            'holat'  => 'faol',
        ]);

        $this->command->info('Filiallar (1 ta) seed qilindi.');
    }
}
