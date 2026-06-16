<?php

namespace Database\Seeders;

use App\Models\Foydalanuvchi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FoydalanuvchilarSeeder extends Seeder
{
    /**
     * Boshlang'ich foydalanuvchilar.
     * MUHIM: Admin parolini birinchi kirishdan keyin o'zgartiring!
     */
    public function run(): void
    {
        $foydalanuvchilar = [
            [
                'filial_id'    => null,
                'ism_familiya' => 'Tizim Admin',
                'email'        => 'admin@sifatsavdo.uz',
                'password'     => Hash::make('GQxZc9hl6a3td8DI'),
                'rol'          => 'admin',
                'holat'        => 'faol',
            ],
            // Import uchun maxsus foydalanuvchi
            [
                'filial_id'    => null,
                'ism_familiya' => 'Import Xodimi',
                'email'        => 'import@sifatsavdo.uz',
                'password'     => Hash::make('Import@2024!'),
                'rol'          => 'admin',
                'holat'        => 'faol', // Import tugagach nofaol qilinadi
            ],
        ];

        foreach ($foydalanuvchilar as $f) {
            Foydalanuvchi::updateOrCreate(
                ['email' => $f['email']],
                $f
            );
        }

        $this->command->info('Foydalanuvchilar (' . count($foydalanuvchilar) . ' ta) seed qilindi.');
        $this->command->warn('MUHIM: Admin parolini darhol o\'zgartiring!');
    }
}
