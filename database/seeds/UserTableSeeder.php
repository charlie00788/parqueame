<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createAdmin();
        $this->createUser();
    }

    public function createAdmin()
    {
        factory(\App\Entities\User::class)->create([
            'nickname'  => 'alcaldia',
            'name'      => 'G.A.M.L.P.',
            'role'      => 'admin',
            'email'     => 'alcaldia@hotmail.com',
        ]);
    }

    public function createUser()
    {
        factory(\App\Entities\User::class)->create([
            'nickname'  => 'subalcaldia1',
            'name'      => 'G.A.M.L.P.',
            'role'      => 'owner',
            'email'     => 'subalcaldia1@hotmail.com',
        ]);

        factory(\App\Entities\User::class)->create([
            'nickname'  => 'megacenter',
            'name'      => 'Megacenter La Paz',
            'role'      => 'owner',
            'email'     => 'mega@hotmail.com',
        ]);



        factory(\App\Entities\Owner::class)->create([
            'user_id'   => 2,
            'name'      => 'Parqueo público',
            'type'      => 'public',
        ]);

        factory(\App\Entities\Owner::class)->create([
            'user_id'   => 3,
            'name'      => 'Megacenter La Paz',
            'type'      => 'private',
        ]);




        factory(\App\Entities\Parking::class)->create([
            'owner_id'  => 1,
            'location'  => 'Av. Rafael Pabon #100 espacio #1',
            'latitude'  => '-16.53697',
            'longitude' => '-68.08717'
        ]);

        factory(\App\Entities\Parking::class)->create([
            'owner_id'  => 1,
            'location'  => 'Av. Rafael Pabon #100 espacio #2',
            'latitude'  => '-16.53613',
            'longitude' => '-68.08687'
        ]);

        factory(\App\Entities\Parking::class)->create([
            'owner_id'  => 1,
            'location'  => 'Av. Rafael Pabon #100 espacio #3',
            'latitude'  => '-16.53127',
            'longitude' => '-68.08676'
        ]);

        factory(\App\Entities\Parking::class)->create([
            'owner_id'  => 2,
            'location'  => 'Av. Rafael Pabon #400',
            'latitude'  => '-16.53265',
            'longitude' => '-68.08679',
        ]);
    }
}
