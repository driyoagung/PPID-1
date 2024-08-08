<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::insert([
            [
                'name' => 'Daftar Informasi Publik',
                'description' => 'List of public information available.',
                'icon_url' => 'icons/daftar_informasi_publik.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Informasi Berkala',
                'description' => 'Regularly updated information.',
                'icon_url' => 'icons/informasi_berkala.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Informasi Serta Merta',
                'description' => 'Immediate information that must be provided quickly.',
                'icon_url' => 'icons/informasi_serta_merta.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Informasi Setiap Saat',
                'description' => 'Information available at all times.',
                'icon_url' => 'icons/informasi_setiap_saat.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pengajuan Keberatan Informasi',
                'description' => 'Submitting objections to information.',
                'icon_url' => 'icons/pengajuan_keberatan_informasi.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

