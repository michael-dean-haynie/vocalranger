<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedSchemas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // factory example
        // factory(App\System::class, 5)->create();

        // systems
        App\System::create(['id' => 1, 'name' => '1 Register System']);
        App\System::create(['id' => 2, 'name' => '3 Register System']);
        App\System::create(['id' => 3, 'name' => '4 Register System']);

        // registers
        App\Register::create(['id' => 1,  'system_id' => 1, 'sex' => 'Male',   'name' => 'Simple',    'color' => 'red']);
        App\Register::create(['id' => 2,  'system_id' => 1, 'sex' => 'Female', 'name' => 'Simple',    'color' => 'red']);
        App\Register::create(['id' => 3,  'system_id' => 2, 'sex' => 'Male',   'name' => 'Chest',     'color' => 'red']);
        App\Register::create(['id' => 4,  'system_id' => 2, 'sex' => 'Male',   'name' => 'Head',      'color' => 'red']);
        App\Register::create(['id' => 5,  'system_id' => 2, 'sex' => 'Male',   'name' => 'Falsetto',  'color' => 'red']);
        App\Register::create(['id' => 6,  'system_id' => 2, 'sex' => 'Female', 'name' => 'Chest',     'color' => 'red']);
        App\Register::create(['id' => 7,  'system_id' => 2, 'sex' => 'Female', 'name' => 'Mid',       'color' => 'red']);
        App\Register::create(['id' => 8,  'system_id' => 2, 'sex' => 'Female', 'name' => 'Head',      'color' => 'red']);
        App\Register::create(['id' => 9,  'system_id' => 3, 'sex' => 'Male',   'name' => 'Vocal Fry', 'color' => 'red']);
        App\Register::create(['id' => 10, 'system_id' => 3, 'sex' => 'Male',   'name' => 'Modal',     'color' => 'red']);
        App\Register::create(['id' => 11, 'system_id' => 3, 'sex' => 'Male',   'name' => 'Falsetto',  'color' => 'red']);
        App\Register::create(['id' => 12, 'system_id' => 3, 'sex' => 'Male',   'name' => 'Whistle',   'color' => 'red']);
        App\Register::create(['id' => 13, 'system_id' => 3, 'sex' => 'Female', 'name' => 'Vocal Fry', 'color' => 'red']);
        App\Register::create(['id' => 14, 'system_id' => 3, 'sex' => 'Female', 'name' => 'Modal',     'color' => 'red']);
        App\Register::create(['id' => 15, 'system_id' => 3, 'sex' => 'Female', 'name' => 'Falsetto',  'color' => 'red']);
        App\Register::create(['id' => 16, 'system_id' => 3, 'sex' => 'Female', 'name' => 'Whistle',   'color' => 'red']);

        // programs
        App\Program::create(['id' => 1, 'default_system_id' => 1, 'name' => 'A Cappella Groups']);
        App\Program::create(['id' => 2, 'default_system_id' => 2, 'name' => 'Reach High']);
        App\Program::create(['id' => 3, 'default_system_id' => 3, 'name' => 'Reach University']);

        // users
        App\User::create(['id' => 1, 'super_admin' => 1, 'program_id' => null, 'given_name' => 'Michael', 'family_name' => 'Haynie',     'email' => 'michael.dean.haynie@gmail.com', 'password' => Hash::make('michaelhaynie')]);
        App\User::create(['id' => 2, 'super_admin' => 1, 'program_id' => null, 'given_name' => 'Hello',   'family_name' => 'World',      'email' => 'hello@world.com',               'password' => Hash::make('helloworld')]);
        App\User::create(['id' => 3, 'super_admin' => 0, 'program_id' => 1,    'given_name' => 'Bruce',   'family_name' => 'Morganti',   'email' => 'bruce@morganti.com',            'password' => Hash::make('brucemorganti')]);
        App\User::create(['id' => 4, 'super_admin' => 0, 'program_id' => 1,    'given_name' => 'Jeremy',  'family_name' => 'Vega',       'email' => 'jeremy@vega.com',               'password' => Hash::make('jeremyvega')]);
        App\User::create(['id' => 5, 'super_admin' => 0, 'program_id' => 2,    'given_name' => 'James',   'family_name' => 'Matsushino', 'email' => 'james@matsushino.com',          'password' => Hash::make('jamesmatsushino')]);
        App\User::create(['id' => 6, 'super_admin' => 0, 'program_id' => 3,    'given_name' => 'Sabrina', 'family_name' => 'Petty',      'email' => 'sabrina@petty.com',             'password' => Hash::make('sabrinapetty')]);

        // ensembles
        App\Ensemble::create(['id' => 1,  'active' => TRUE,  'program_id' => 1, 'name' => 'Pentatonix']);
        App\Ensemble::create(['id' => 2,  'active' => TRUE,  'program_id' => 1, 'name' => 'VoicePlay']);
        App\Ensemble::create(['id' => 3,  'active' => TRUE,  'program_id' => 1, 'name' => 'Home Free']);
        App\Ensemble::create(['id' => 4,  'active' => TRUE,  'program_id' => 2, 'name' => 'Begining Choir']);
        App\Ensemble::create(['id' => 5,  'active' => TRUE,  'program_id' => 2, 'name' => 'Advanced Choir']);
        App\Ensemble::create(['id' => 6,  'active' => TRUE,  'program_id' => 2, 'name' => 'Show Choir']);
        App\Ensemble::create(['id' => 7,  'active' => TRUE,  'program_id' => 2, 'name' => 'BLU']);
        App\Ensemble::create(['id' => 8,  'active' => TRUE,  'program_id' => 3, 'name' => 'Gospel Choir']);
        App\Ensemble::create(['id' => 9,  'active' => TRUE,  'program_id' => 3, 'name' => 'Jazz Choir']);
        App\Ensemble::create(['id' => 10, 'active' => TRUE,  'program_id' => 3, 'name' => 'Barbershop Choir']);
        App\Ensemble::create(['id' => 11, 'active' => FALSE, 'program_id' => 3, 'name' => 'Community Choir']);

        // vocalists
        $ensm1 = [];
        $ensm1[] = App\Vocalist::create(['id' => 1,  'program_id' => 1, 'sex' => 'Male',   'given_name' => 'Scott',   'family_name' => 'Hoying']);
        $ensm1[] = App\Vocalist::create(['id' => 2,  'program_id' => 1, 'sex' => 'Male',   'given_name' => 'Mitch',   'family_name' => 'Grassi']);
        $ensm1[] = App\Vocalist::create(['id' => 3,  'program_id' => 1, 'sex' => 'Female', 'given_name' => 'Kirstie', 'family_name' => 'Maldonado']);
        $ensm1[] = App\Vocalist::create(['id' => 4,  'program_id' => 1, 'sex' => 'Male',   'given_name' => 'Avi',     'family_name' => 'Kaplan']);
        $ensm1[] = App\Vocalist::create(['id' => 5,  'program_id' => 1, 'sex' => 'Male',   'given_name' => 'Kevin',   'family_name' => 'Olusola']);

        $ensm2 = [];
        $ensm2[] = App\Vocalist::create(['id' => 6,  'program_id' => 1, 'sex' => 'Male',   'given_name' => 'Layne',   'family_name' => 'Stein']);
        $ensm2[] = App\Vocalist::create(['id' => 7,  'program_id' => 1, 'sex' => 'Male',   'given_name' => 'Geoff',   'family_name' => 'Castellucci']);
        $ensm2[] = App\Vocalist::create(['id' => 8,  'program_id' => 1, 'sex' => 'Male',   'given_name' => 'Earl',    'family_name' => 'Ewlkins']);
        $ensm2[] = App\Vocalist::create(['id' => 9,  'program_id' => 1, 'sex' => 'Male',   'given_name' => 'Eli',     'family_name' => 'Jacobson']);
        $ensm2[] = App\Vocalist::create(['id' => 10, 'program_id' => 1, 'sex' => 'Male',   'given_name' => 'Tony',    'family_name' => 'Wakim']);

        $ensm3 = [];
        $ensm3[] = App\Vocalist::create(['id' => 11, 'program_id' => 1, 'sex' => 'Male',   'given_name' => 'Austin',  'family_name' => 'Brown']);
        $ensm3[] = App\Vocalist::create(['id' => 12, 'program_id' => 1, 'sex' => 'Male',   'given_name' => 'Rob',     'family_name' => 'Lundquist']);
        $ensm3[] = App\Vocalist::create(['id' => 13, 'program_id' => 1, 'sex' => 'Male',   'given_name' => 'Chris',   'family_name' => 'Rupp']);
        $ensm3[] = App\Vocalist::create(['id' => 14, 'program_id' => 1, 'sex' => 'Male',   'given_name' => 'Tim',     'family_name' => 'Foust']);
        $ensm3[] = App\Vocalist::create(['id' => 15, 'program_id' => 1, 'sex' => 'Male',   'given_name' => 'Adam',    'family_name' => 'Rupp']);

        $prog1 = [$ensm1, $ensm2, $ensm3];

        // ensemble_vocalist
        for ($e = 0; $e < count($prog1); $e++){
            $ensembleId = $e+1;
            $ensemble = $prog1[$e];
            $now = \Carbon\Carbon::now();
            foreach($ensemble as $v){
                DB::table('ensemble_vocalist')->insert(['ensemble_id' => $ensembleId, 'vocalist_id' => $v->id, 'created_at' => $now, 'updated_at' => $now]);
            }
        }








    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Should be in reverse order of the up() method
        DB::statement('DELETE FROM ensemble_vocalist');
        DB::statement('DELETE FROM vocalists');
        DB::statement('DELETE FROM users');
        DB::statement('DELETE FROM programs');
        DB::statement('DELETE FROM registers');
        DB::statement('DELETE FROM systems');
    }
}
