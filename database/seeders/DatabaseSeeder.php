<?php

namespace Database\Seeders;

use App\models\Buku;
use App\models\User;
use App\Models\Profile;
use App\models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the Application's database.
     *
     * @return void
     */
    public function run()
    {
     //App\models\User::factory(10)->create();

     User::create([
        'name'=> 'Admin',
        'email'=>'admin@admin.com',
        'password' => Hash::make('admin123'),
        'isAdmin' => '1',
     ]);

     User::create([
        'name'=> 'Bagus',
        'email'=>'bagus@gmail.com',
        'password' => Hash::make('123456789'),
        'isAdmin' => '0',
     ]);

    Profile::create([
    'npm'=>'admin',
    'prodi'=>'Informatika',
    'alamat'=>'Jl. Bandung',
    'noTelp'=>'089128313',
    'users_id'=>'1',
    ]);

    Profile::create([
     'npm'=>'2113201044',
     'prodi'=>'Sistem Informasi',
     'alamat'=>'Jl. Jakarta',
     'noTelp'=>'089609760132',
     'users_id'=>'2',
    ]);

    Kategori::create([
        'nama'=>'Novel',
        'deskripsi' => 'Kumpulan Novel'
    ]);

    Buku::create([
        'kode_buku'=>'NRN-11',
        'Judul'=>'The Chronicles of Narnia: Kuda dan Anak Manusia (The Horse and His Boy)',
        'Pengarang' => 'C.S. Lewis',
        'Penerbit' => 'Gramedia',
        'tahun_terbit'=> '2022',
        'deskripsi'=>'Narnia... tanah tempat para kuda bisa bicara... pengkhianatan mengintai... dan takdir menanti. Dalam perjalanan penuh tantangan, empat pelarian bertemu dan bergabung. Meski awalnya hanya berusaha membebaskan diri dari kehidupan yang kejam dan menekan, tak lama kemudian mereka mendapati diri mereka berada di tengahtengah pertempuran dahsyat. Pertempuran yang akan memutuskan bukan hanya nasib mereka, tetapi juga nasib Narnia.'
    ]);
    }
}
