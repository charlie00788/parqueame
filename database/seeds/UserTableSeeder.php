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
            'nickName'  => 'alcaldia',
            'name'      => 'G.A.M.L.P.',
            'role'      => 'admin',
            'email'     => 'alcaldia@hotmail.com',
        ]);
    }

    public function createUser()
    {
        $user_id = 3;
        $owner_id = 1;

        factory(\App\Entities\User::class)->create([
            'nickName'  => 'usuario',
            'name'      => 'usuario',
            'role'      => 'user',
            'email'     => 'user@hotmail.com',
        ]);

        factory(\App\Entities\User::class)->create([
            'nickName'  => 'subalcaldia1',
            'name'      => 'G.A.M.L.P.',
            'role'      => 'owner',
            'email'     => 'subalcaldia1@hotmail.com',
        ]);

        factory(\App\Entities\Owner::class)->create([
            'user_id'   => $user_id,
            'name'      => 'Parqueo público',
        ]);

        for ($i=1; $i<=2; $i++){
            factory(\App\Entities\Parking::class)->create([
                'owner_id'  => $owner_id,
                'type'      => 'public',
            ]);
        }

        //para los parqueos reales
        factory(\App\Entities\Parking::class)->create([
            'owner_id'  => $owner_id,
            'type'      => 'public',
            'latitude'  =>'-16.53697',
            'longitude' => '-68.08717'
        ]);

        factory(\App\Entities\Parking::class)->create([
            'owner_id'  => $owner_id,
            'type'      => 'public',
            'latitude'  => '-16.53613',
            'longitude' => '-68.08687'
        ]);

        factory(\App\Entities\Parking::class)->create([
            'owner_id'  => $owner_id,
            'type'      => 'public',
            'latitude'  => '-16.53127',
            'longitude' => '-68.08676'
        ]);


        //para los privados
        for($i=1; $i<=2; $i++){
            factory(\App\Entities\User::class)->create([
                'role'      => 'owner',
            ]);
            $user_id++;
            factory(\App\Entities\Owner::class)->create([
                'user_id'   => $user_id,
            ]);
            $owner_id++;
            factory(\App\Entities\Parking::class)->create([
                'owner_id'  => $owner_id,
                'type'      => 'private',
            ]);
        }

        factory(\App\Entities\Parking::class)->create([
            'owner_id'  => $owner_id,
            'type'      => 'private',
            'latitude'  => '-16.53265',
            'longitude' => '-68.08679'
        ]);
    }
}
