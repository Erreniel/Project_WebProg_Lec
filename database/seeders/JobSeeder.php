<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Job::insert([
            'name' => 'IT Security Supervisor',
            'company_id' => '1',
            'type_id' => '2',
            'location' => 'Jakarta Pusat',
            'salary' => '7000000',
            'description' => 'Provide information security awareness training to organization personnel, Creating and managing security strategies. Oversee information security audits, performed by organization or third-party personnel. Manage security team members and all other information security personnel. Assess current technology architecture for vulnerabilities, weaknesses, and possible upgrades or improvement. Implement and oversee technological upgrades, improvements, and major changes to the information security environment. Communicate information security goals and new programs effectively with other department managers within the organization',
            'requirement' => 'Candidate must possess at least Bachelors Degree in Engineering (Computer/Telecommunication), Computer Science, or Equivalent. At least 4 Year(s) working experience in the related field is required for this position (Cyber Security / Security Engineer / any related field). Preferably having professional security certification (e.g., CEH, CISA, CISSP, CISM, etc). Planning and implementing security measures to protect computer systems, networks, and data. Placement at Maybank Finance Head Office'
        ]);
        Job::insert([
            'name' => 'IT Security',
            'company_id' => '1',
            'type_id' => '3',
            'location' => 'Jakarta Pusat',
            'salary' => '5000000',
            'description' => 'Coordinate and helping on providing information security awareness training to organization personnel. Helping on creating and implementing security technology. Oversee information security audits, performed by organization or third-party personnel. Assess current technology architecture for vulnerabilities, weaknesses, and possible upgrades or improvement. Implement and oversee technological upgrades, improvements, and major changes to the information security environment. Communicate information security goals and new programs effectively with other department managers within the organization',
            'requirement' => 'Candidate must possess at Diploma in Engineering (Computer/Telecommunication), Computer Science, or Equivalent, with minimum IPK of 2.75. At least 1 Year(s) working experience in the related field is required for this position (Cyber Security / Security Engineer / any related field). Preferably having professional security certification (e.g., CEH, CISA, CISSP, CISM, etc). Placement at Maybank Finance Head Office'
        ]);
        Job::insert([
            'name' => 'Sales',
            'company_id' => '2',
            'type_id' => '1',
            'location' => 'Makassar',
            'salary' => '3000000',
            'description' => 'Melakukan promosi pemasaran event dengan cara yang strategis agar dapat meningkatkan penjualan produk dan layanan. Melakukan analisa pelanggan potensial pada setiap event. Melakukan evaluasi sebelum dan sesudah acara dan melaporkan hasil acara. Mengurus berbagai kegiatan administrasi seperti menyusun rincian anggaran, melakukan presentasi, dan pembuatan proposal untuk kepentingan event. Bekerjasama dengan divisi marketing dalam mempersiapkan akomodasi yang dibutuhkan untuk acara. Bertanggung jawab penuh terhadap pelaksanaan event, mulai dari merencanakan, mempersiapkan, dan melaksanakan kegiatan promosi dan pemasaran produk',
            'requirement' => 'Bersedia dilokasikan di area Makassar maupun di luar kota. Bersedia kerja saat weekend. Pekerja keras, rajin, dan memiliki manajemen waktu yang baik. Memiliki pengalaman di bidang Event Marketing menjadi nilai tambah. Memiliki pengetahuan terkait strategi & trend marketing. Memiliki rasa ingin tahu yang tinggi, inisiatif yang tinggi, kreatif, percaya diri, dan senang mempelajari hal-hal baru. Dapat berkomunikasi dengan baik, terutama dalam negosiasi & persuasi. Mudah beradaptasi, senang bergaul, dan dapat bekerjasama dalam tim. Terbiasa dengan target. Bisa mengendarai kendaraan menjadi nilai tambah'
        ]);
        Job::insert([
            'name' => 'Credit & Marketing Officer',
            'company_id' => '2',
            'type_id' => '2',
            'location' => 'Makassar',
            'salary' => '5000000',
            'description' => 'Membina hubungan baik dengan dealer. Melakukan analisa kelayakan kredit. Melakukan survey kelayakan kredit. Mencapai target penjualan',
            'requirement' => 'Pria. Usia maksimal 28 tahun. Pendidikan minimal D3 semua jurusan. IPK minimal 2.75. Terbuka untuk fresh graduate maupun berpengalaman. Memiliki kendaraan bermotor dan SIM C aktif. Mampu berkomunikasi dan membina hubungan baik. Mempunyai kemampuan analisa yang baik, teliti, kritis, tekun, ulet, loyal, dan disiplin. Memiliki integritas yang baik. Dapat bekerja dengan target dan memiliki knowledge market. Bersedia ditempatkan di Cabang Jabodetabek terdekat disesuaikan dengan domisili'
        ]);
    }
}
