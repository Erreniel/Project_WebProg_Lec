<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::insert([
            'name' => 'Mybank',
            'description' =>'PT Maybank Indonesia Finance adalah perusahaan pembiayaan kendaraan bermotor roda empat, mesin industri dan alat berat yang sedang berkembang pesat dan telah memiliki banyak cabang di berbagai kota besar di Indonesia',
            'logo'=>'asset/MB.png',
            'location' => 'Jakarta Pusat',
            'email' => 'myBank@email.com',
            'website' => 'karir.maybankfinance.co.id',
            'employee' => '1300',
            'slogan' => 'Humanising Financial Services Across Asia.'
        ]);
        Company::insert([
            'name' => 'FotoYu',
            'description' =>'Perusahaan Fotoyu bergerak di bidang IT, yg memiliki visi & misi untuk mengembangkan aplikasi social commerce/marketplace untuk menghubungan fotografer & user.',
            'logo'=>'asset/fotoyu.png',
            'location' => 'Makassar',
            'email' => 'fotoYu@email.com',
            'website' => 'fotoYu.com',
            'employee' => '60',
            'slogan' => 'Mengembangkan aplikasi social commerce/marketplace untuk menghubungan fotografer & user.'
        ]);
    }
}
