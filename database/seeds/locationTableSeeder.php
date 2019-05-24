<?php

use Illuminate\Database\Seeder;


class locationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('location')->delete();
        DB::table('patient_informations')->delete();
        DB::table('admin_informations')->delete();
        DB::table('doctor_informations')->delete();

      $states = [
      [
   			'name'=> 'Abia'
   		],
   		[
   			'name'=> 'Adamawa'
   		],
   		[
   			'name'=> 'Akwa Ibom'
   		],
   		[
   			'name'=> 'Anambra'
   		],
   		[
   			'name'=> 'Bauchi'
   		],
   		[
   			'name'=> 'Bayelsa'
   		],
   		[
   			'name'=> 'Benua'
   		],
   		[
   			'name'=> 'Borno'
   		],
   		[
   			'name'=> 'Cross River'
   		],
   		[
   			'name'=> 'Delta'
   		],
   		[
   			'name'=> 'Ebonyi'
   		],
   		[
   			'name'=> 'Edo'
   		],
   		[
   			'name'=> 'Ekiti'
   		],
   		[
   			'name'=> 'Enugu'
   		],
   		[
   			'name'=> 'Gombe'
   		],
   		[
   			'name'=> 'Imo'
   		],
   		[
   			'name'=> 'Jigawa'
   		],
   		[
   			'name'=> 'Kaduna'
   		],
   		[
   			'name'=> 'Kano'
   		],
   		[
   			'name'=> 'Katsina'
   		],
   		[
   			'name'=> 'Kebbi'
   		],
   		[
   			'name'=> 'Kogi'
   		],
   		[
   			'name'=> 'Kwara'
   		],
   		[
   			'name'=> 'Lagos'
   		],
   		[
   			'name'=> 'Nasarawa'
   		],
   		[
   			'name'=> 'Niger'
   		],
   		[
   			'name'=> 'Ogun'
   		],
   		[
   			'name'=> 'Ondo'
   		],
   		[
   			'name'=> 'Osun'
   		],
   		[
   			'name'=> 'Oyo'
   		],
   		[
   			'name'=> 'Plateau'
   		],
   		[
   			'name'=> 'Rivers'
   		],
   		[
   			'name'=> 'Sokoto'
   		],
   		[
   			'name'=> 'Taraba'
   		],
   		[
   			'name'=> 'Yobe'
   		],
   		[
   			'name'=> 'Zamfara'
   		],
   		[
   			'name'=> 'FCT'
        ],
    ];
        $patient = [
          [
            'username' => 'dunes',
            'firstname' => 'mbah',
            'lastname' => 'will',
            'password' => 'abc',
            'email' => 'mbahderek@gmail.com',
            'contact_number' => '08184921792',
            'address' => 'No 12 E33 illorin Street federal housing Trans-Ekulu Enugu'
          ],
          [
            'username' => 'derek',
            'firstname' => 'mbah',
            'lastname' => 'will',
            'password' => 'abc',
            'email' => 'mbahderek@gmail.com',
            'contact_number' => '08184921792',
            'address' => 'No 12 E33 illorin Street federal housing Trans-Ekulu Enugu'
          ]
        ];

        $doctor = [
          [
            'username' => 'dunes',
            'firstname' => 'mbah',
            'lastname' => 'ifunanya',
            'password' => 'abc',
            'email' => 'mbahderek@gmail.com',
            'contact_number' => '08184921792',
            'address' => 'No 12 E33 illorin Street federal housing Trans-Ekulu Enugu',
            'qualification' => 'BSC/MSC',
            'bio' => 'Specialist/consultant at Niger Foundation and UNTH Enugu. Worked as Medical Doctor in the Army for 10 years before Retiring.',
            'speciality' => 'UROLOGY',
            'location' => 'Enugu',
            'Fees' => '10000'
          ],
          [
            'username' => 'derek',
            'firstname' => 'mbah',
            'lastname' => 'will',
            'password' => 'abc',
            'email' => 'mbahderek@gmail.com',
            'contact_number' => '08184921792',
            'address' => 'No 12 E33 illorin Street federal housing Trans-Ekulu Enugu',
            'qualification' => 'MSC/PHD',
            'bio' => 'Specialist/consultant at Niger Foundation and UNTH Enugu. Worked as Medical Doctor in the Army for 10 years before Retiring.',
            'speciality' => 'UROLOGY',
            'location' => 'Enugu',
            'Fees' => '10000'
          ],
          [
            'username' => 'dun',
            'firstname' => 'mbah',
            'lastname' => 'will',
            'password' => 'abc',
            'email' => 'mbahderek@gmail.com',
            'contact_number' => '08184921792',
            'address' => 'No 12 E33 illorin Street federal housing Trans-Ekulu Enugu',
            'qualification' => 'BSC/MBA',
            'bio' => 'Specialist/consultant at Niger Foundation and UNTH Enugu. Worked as Medical Doctor in the Army for 10 years before Retiring.',
            'speciality' => 'SURGEON',
            'location' => 'Enugu',
            'Fees' => '10000'
          ],
          [
            'username' => 'der',
            'firstname' => 'mbah',
            'lastname' => 'will',
            'password' => 'abc',
            'email' => 'mbahderek@gmail.com',
            'contact_number' => '08184921792',
            'address' => 'No 12 E33 illorin Street federal housing Trans-Ekulu Enugu',
            'qualification' => 'MBA/MED',
            'bio' => 'Specialist/consultant at Niger Foundation and UNTH Enugu. Worked as Medical Doctor in the Army for 10 years before Retiring.',
            'speciality' => 'SURGEON',
            'location' => 'Enugu',
            'Fees' => '10000'
          ],
          [
            'username' => 'nes',
            'firstname' => 'mbah',
            'lastname' => 'junior',
            'password' => 'abc',
            'email' => 'mbahderek@gmail.com',
            'contact_number' => '08184921792',
            'address' => 'No 12 E33 illorin Street federal housing Trans-Ekulu Enugu',
            'qualification' => 'BSC/MBA',
            'bio' => 'Specialist/consultant at Niger Foundation and UNTH Enugu. Worked as Medical Doctor in the Army for 10 years before Retiring.',
            'speciality' => 'PSYCHIATRY',
            'location' => 'Enugu',
            'Fees' => '10000'
          ],
          [
            'username' => 'drake',
            'firstname' => 'mbah',
            'lastname' => 'white',
            'password' => 'abc',
            'email' => 'mbahderek@gmail.com',
            'contact_number' => '08184921792',
            'address' => 'No 12 E33 illorin Street federal housing Trans-Ekulu Enugu',
            'qualification' => 'BSC/MBA',
            'bio' => 'Specialist/consultant at Niger Foundation and UNTH Enugu. Worked as Medical Doctor in the Army for 10 years before Retiring.',
            'speciality' => 'PSYCHIATRY',
            'location' => 'Enugu',
            'Fees' => '10000'
          ],
        ];

        $admins = [
          [
            'username' => 'derek',
            'password' => 'abc'
          ],
          [
            'username' => 'dunes',
            'password' => 'abc'
          ]
        ];

    DB::table('doctor_informations')->insert($doctor);
    DB::table('admin_informations')->insert($admins);
    DB::table('patient_informations')->insert($patient);
    DB::table('location')->insert($states);

    }
}
