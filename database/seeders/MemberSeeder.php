<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            [
                'first_name' => 'Ինեսսա',
                'last_name' => 'Բոյաջյան',
                'image_url' => 'http://localhost:8080/images/cameron.jpg ',
                'grade' => 'Մագիստրատուրա',
                'faculty' => 'դիզայնի',
                'dob' => '2005-11-26',
                'email' => 'inessaboyajyan@gmail.com',
                'phone_number' => '098 24 25 85',
                'address' => 'Dro St, Yerevan',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'first_name' => 'Հարություն',
                'last_name' => 'Հակոբյան',
                'image_url' => 'http://localhost:8080/images/bob.jpg',
                'grade' => 'Բակալավրիատ',
                'faculty' => 'դիզայնի',
                'dob' => '2005-12-05',
                'email' => 'haruthakobyan@gmail.com',
                'phone_number' => '077 74 20 24',
                'address' => 'Tigran Mets 56',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'first_name' => 'Աբրահամ',
                'last_name' => 'Գալստյան',
                'image_url' => 'http://localhost:8080/images/harut.jpg',
                'grade' => 'Բակալավրիատ',
                'faculty' => 'դիզայնի',
                'dob' => '2005-01-05',
                'email' => 'abrahamgalstyan@gmail.com',
                'phone_number' => '098 23 56 89',
                'address' => 'Komitas 5',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
        [
                'first_name' => 'Համեստ',
                'last_name' => 'Մարգարյան',
                'image_url' => 'http://localhost:8080/images/jenny.jpg',
                'grade' => 'Բակալավրիատ',
                'faculty' => 'ծրագրավորման',
                'dob' => '2005-04-06',
                'email' => 'haminmargaryan@gmail.com',
                'phone_number' => '077 89 56 25',
                'address' => 'Mamikonyats 52',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'first_name' => 'Գոռ',
                'last_name' => 'Միքայելյան',
                'image_url' => 'http://localhost:8080/images/jerome.jpg',
                'grade' => 'Մագիստրատուրա',
                'faculty' => 'դիզայնի',
                'dob' => '2005-08-01',
                'email' => 'gormiqayelyan@gmail.com',
                'phone_number' => '098 25 88 95',
                'address' => 'Martirosyan 5',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'first_name' => 'Մանե',
                'last_name' => 'Պետրոսյան',
                'image_url' => 'http://localhost:8080/images/ginni.jpg',
                'grade' => 'Մագիստրատուրա',
                'faculty' => 'ծրագրավորման',
                'dob' => '2005-01-02',
                'email' => 'manepetrosyan@gmail.com',
                'phone_number' => '077 89 56 12',
                'address' => 'Zavaryan 1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'first_name' => 'Արթուր',
                'last_name' => 'Մարկոսյան',
                'image_url' => 'http://localhost:8080/images/jon.jpg',
                'grade' => 'Բակալավրիատ',
                'faculty' => 'ծրագրավորման',
                'dob' => '2005-12-15',
                'email' => 'arturmarkosyan@gmail.com',
                'phone_number' => '098 52 31 20',
                'address' => 'Baghramyan 52',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
                [
                'first_name' => 'Լիլիթ',
                'last_name' => 'Դավթյան',
                'image_url' => 'http://localhost:8080/images/elena.jpg',
                'grade' => 'Բակալավրիատ',
                'faculty' => 'դիզայնի',
                'dob' => '2005-09-09',
                'email' => 'lilitdavtyan@gmail.com',
                'phone_number' => '098 98 32 08',
                'address' => 'Avanesov 4',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],

        ]);
    }
}
