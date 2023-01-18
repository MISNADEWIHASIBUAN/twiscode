<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Customer;
use App\Models\Team;
use App\Models\User;
use App\Models\Work;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('pass'),
                'pass' => 'pass',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dewi',
                'email' => 'misnademi@admin.com',
                'password' => bcrypt('pass'),
                'pass' => 'pass',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        User::insert($users);

        $works = [
            [
                'title' => 'Mobile Application',
                'deskripsi' => 'Building mobile applications is never easy. P2P lending app ? Logistic App ? E-Commerce App ? We have done them all. Done them all well. Done them all fast. ',
            ],
            [
                'title' => 'Web Application',
                'deskripsi' => 'We can build any web applications you need. A personal blog ? Company Profile ? E-commerce ? or any specific functionalities ? We got you covered! We have a strong team of web developers that can follow your stack and needs.',
            ],
            [
                'title' => 'UI/UX Design',
                'deskripsi' => 'All things are designed. A few things are designed well. We try to elevate your ideas with great UI/UX design, suited to your taste, addressing the right pain points.',
            ],
        ];

        Work::insert($works);

        $customers = [
            [
                'nama_perusahaan' => 'Mandiri Sekuritas',
                'logo' => 'assets/img/company/mandiri.png',
            ],
            [
                'nama_perusahaan' => 'Amartha',
                'logo' => 'assets/img/company/amartha.png',
            ],
            [
                'nama_perusahaan' => 'Paxel',
                'logo' => 'assets/img/company/paxel.png',
            ],
            [
                'nama_perusahaan' => 'Wahyoo',
                'logo' => 'assets/img/company/wahyoo.png',
            ],
            [
                'nama_perusahaan' => 'Cisco',
                'logo' => 'assets/img/company/cisco.png',
            ],
            [
                'nama_perusahaan' => 'HUBBLE',
                'logo' => 'assets/img/company/hubble.png',
            ],
            [
                'nama_perusahaan' => 'legoas',
                'logo' => 'assets/img/company/legoas.png',
            ],
            [
                'nama_perusahaan' => 'CBN',
                'logo' => 'assets/img/company/cbn.png',
            ],
            [
                'nama_perusahaan' => 'Ciputra',
                'logo' => 'assets/img/company/ciputra.png',
            ],
            [
                'nama_perusahaan' => 'ntuc income',
                'logo' => 'assets/img/company/income.png',
            ],
            [
                'nama_perusahaan' => 'Lazada',
                'logo' => 'assets/img/company/lazada.png',
            ],
            [
                'nama_perusahaan' => 'Universitas AirLangga',
                'logo' => 'assets/img/company/unair.png',
            ],
            [
                'nama_perusahaan' => 'Jawa Pos',
                'logo' => 'assets/img/company/jawa pos.png',
            ],
        ];

        Customer::insert($customers);
    }
}
