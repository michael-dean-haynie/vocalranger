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

        /*
        |--------------------------------------------------
        | systems
        |--------------------------------------------------
        */
        App\System::create(['id' => 1, 'name' => '1 Register System']);
        App\System::create(['id' => 2, 'name' => '3 Register System']);
        App\System::create(['id' => 3, 'name' => '4 Register System']);

        /*
        |--------------------------------------------------
        | registers
        |--------------------------------------------------
        */
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

        /*
        |--------------------------------------------------
        | programs
        |--------------------------------------------------
        */
        App\Program::create(['id' => 1, 'default_system_id' => 1, 'active' => true, 'name' => 'A Cappella Groups']);
        App\Program::create(['id' => 2, 'default_system_id' => 2, 'active' => true, 'name' => 'Reach High']);
        App\Program::create(['id' => 3, 'default_system_id' => 3, 'active' => true, 'name' => 'Reach University']);

        /*
        |--------------------------------------------------
        | users
        |--------------------------------------------------
        */
        App\User::create(['id' => 1, 'super_admin' => 1, 'given_name' => 'Michael', 'family_name' => 'Haynie',     'email' => 'michael.dean.haynie@gmail.com', 'password' => Hash::make('michaelhaynie')]);
        App\User::create(['id' => 2, 'super_admin' => 1, 'given_name' => 'Hello',   'family_name' => 'World',      'email' => 'hello@world.com',               'password' => Hash::make('helloworld')]);
        App\User::create(['id' => 3, 'super_admin' => 0, 'given_name' => 'Bruce',   'family_name' => 'Morganti',   'email' => 'bruce@morganti.com',            'password' => Hash::make('brucemorganti')]);
        App\User::create(['id' => 4, 'super_admin' => 0, 'given_name' => 'Jeremy',  'family_name' => 'Vega',       'email' => 'jeremy@vega.com',               'password' => Hash::make('jeremyvega')]);
        App\User::create(['id' => 5, 'super_admin' => 0, 'given_name' => 'James',   'family_name' => 'Matsushino', 'email' => 'james@matsushino.com',          'password' => Hash::make('jamesmatsushino')]);
        App\User::create(['id' => 6, 'super_admin' => 0, 'given_name' => 'Sabrina', 'family_name' => 'Petty',      'email' => 'sabrina@petty.com',             'password' => Hash::make('sabrinapetty')]);

        /*
        |--------------------------------------------------
        | program_user
        |--------------------------------------------------
        */
        $now = \Carbon\Carbon::now();

        DB::table('program_user')->insert(['user_id' => 3, 'program_id' => 1, 'created_at' => $now, 'updated_at' => $now]);
        DB::table('program_user')->insert(['user_id' => 3, 'program_id' => 2, 'created_at' => $now, 'updated_at' => $now]);
        DB::table('program_user')->insert(['user_id' => 3, 'program_id' => 3, 'created_at' => $now, 'updated_at' => $now]);
        DB::table('program_user')->insert(['user_id' => 4, 'program_id' => 1, 'created_at' => $now, 'updated_at' => $now]);
        DB::table('program_user')->insert(['user_id' => 5, 'program_id' => 2, 'created_at' => $now, 'updated_at' => $now]);
        DB::table('program_user')->insert(['user_id' => 6, 'program_id' => 3, 'created_at' => $now, 'updated_at' => $now]);
        
        /*
        |--------------------------------------------------
        | ensembles
        |--------------------------------------------------
        */
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

        /*
        |--------------------------------------------------
        | vocalists
        |--------------------------------------------------
        */
        $ensm1 = [];
        $ensm1[] = App\Vocalist::create(['id' => 1,  'program_id' => 1, 'sex' => 'Male',   'given_name' => 'Scott',   'family_name' => 'Hoying']); // PTX
        $ensm1[] = App\Vocalist::create(['id' => 2,  'program_id' => 1, 'sex' => 'Male',   'given_name' => 'Mitch',   'family_name' => 'Grassi']);
        $ensm1[] = App\Vocalist::create(['id' => 3,  'program_id' => 1, 'sex' => 'Female', 'given_name' => 'Kirstie', 'family_name' => 'Maldonado']);
        $ensm1[] = App\Vocalist::create(['id' => 4,  'program_id' => 1, 'sex' => 'Male',   'given_name' => 'Avi',     'family_name' => 'Kaplan']);
        $ensm1[] = App\Vocalist::create(['id' => 5,  'program_id' => 1, 'sex' => 'Male',   'given_name' => 'Kevin',   'family_name' => 'Olusola']);

        $ensm2 = [];
        $ensm2[] = App\Vocalist::create(['id' => 6,  'program_id' => 1, 'sex' => 'Male',   'given_name' => 'Layne',   'family_name' => 'Stein']); // VoicePlay
        $ensm2[] = App\Vocalist::create(['id' => 7,  'program_id' => 1, 'sex' => 'Male',   'given_name' => 'Geoff',   'family_name' => 'Castellucci']);
        $ensm2[] = App\Vocalist::create(['id' => 8,  'program_id' => 1, 'sex' => 'Male',   'given_name' => 'Earl',    'family_name' => 'Ewlkins']);
        $ensm2[] = App\Vocalist::create(['id' => 9,  'program_id' => 1, 'sex' => 'Male',   'given_name' => 'Eli',     'family_name' => 'Jacobson']);
        $ensm2[] = App\Vocalist::create(['id' => 10, 'program_id' => 1, 'sex' => 'Male',   'given_name' => 'Tony',    'family_name' => 'Wakim']);

        $ensm3 = [];
        $ensm3[] = App\Vocalist::create(['id' => 11, 'program_id' => 1, 'sex' => 'Male',   'given_name' => 'Austin',  'family_name' => 'Brown']); // Home Free
        $ensm3[] = App\Vocalist::create(['id' => 12, 'program_id' => 1, 'sex' => 'Male',   'given_name' => 'Rob',     'family_name' => 'Lundquist']);
        $ensm3[] = App\Vocalist::create(['id' => 13, 'program_id' => 1, 'sex' => 'Male',   'given_name' => 'Chris',   'family_name' => 'Rupp']);
        $ensm3[] = App\Vocalist::create(['id' => 14, 'program_id' => 1, 'sex' => 'Male',   'given_name' => 'Tim',     'family_name' => 'Foust']);
        $ensm3[] = App\Vocalist::create(['id' => 15, 'program_id' => 1, 'sex' => 'Male',   'given_name' => 'Adam',    'family_name' => 'Rupp']);

        $prog1 = [$ensm1, $ensm2, $ensm3];

        $prog2Count = 200;
        $prog3Count = 500;
        $prog2 = factory(App\Vocalist::class, $prog2Count)->create(['program_id' => 2]);
        $prog3 = factory(App\Vocalist::class, $prog3Count)->create(['program_id' => 3]);

        /*
        |--------------------------------------------------
        | ensemble_vocalist
        |--------------------------------------------------
        */
        $now = \Carbon\Carbon::now();

        // program 1
        for ($e = 0; $e < count($prog1); $e++){
            $ensembleId = $e+1;
            $ensemble = $prog1[$e];
            foreach($ensemble as $v){
                DB::table('ensemble_vocalist')->insert(['ensemble_id' => $ensembleId, 'vocalist_id' => $v->id, 'created_at' => $now, 'updated_at' => $now]);
            }
        }

        // program 2
        $ensembleCount = intval($prog2Count/3);

        $beginning = $prog2->sortBy('id')->forPage(1, $ensembleCount);
        $beginning->map(function($v){ DB::table('ensemble_vocalist')->insert(['ensemble_id' => 4, 'vocalist_id' => $v->id, 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()]); });

        $advanced = $prog2->sortBy('id')->forPage(2, $ensembleCount);
        $advanced->map(function($v){ DB::table('ensemble_vocalist')->insert(['ensemble_id' => 5, 'vocalist_id' => $v->id, 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()]); });

        $show = $prog2->sortBy('id')->forPage(3, $ensembleCount);
        $show->map(function($v){ DB::table('ensemble_vocalist')->insert(['ensemble_id' => 6, 'vocalist_id' => $v->id, 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()]); });

        $blu = $prog2->where('sex', 'Male')->random($ensembleCount);
        $blu->map(function($v){ DB::table('ensemble_vocalist')->insert(['ensemble_id' => 7, 'vocalist_id' => $v->id, 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()]); });

        // program 3
        $ensembleCount = intval($prog3Count/4);

        $gospel = $prog3->sortBy('id')->forPage(1, $ensembleCount);
        $gospel->map(function($v){ DB::table('ensemble_vocalist')->insert(['ensemble_id' => 8, 'vocalist_id' => $v->id, 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()]); });

        $jazz = $prog3->sortBy('id')->forPage(2, $ensembleCount);
        $jazz->map(function($v){ DB::table('ensemble_vocalist')->insert(['ensemble_id' => 9, 'vocalist_id' => $v->id, 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()]); });

        $barbershop = $prog3->sortBy('id')->forPage(3, $ensembleCount);
        $barbershop->map(function($v){ DB::table('ensemble_vocalist')->insert(['ensemble_id' => 10, 'vocalist_id' => $v->id, 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()]); });

        $community = $prog3->sortBy('id')->forPage(4, $ensembleCount);
        $community->map(function($v){ DB::table('ensemble_vocalist')->insert(['ensemble_id' => 11, 'vocalist_id' => $v->id, 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()]); });
        
        /*
        |--------------------------------------------------
        | recordings
        |--------------------------------------------------
        */
        $now = \Carbon\Carbon::now();
        $nowMin1Y = \Carbon\Carbon::now()->subYears(1);
        $nowMin2Y = \Carbon\Carbon::now()->subYears(2);

        // program 1
        for ($e = 0; $e < count($prog1); $e++){
            $ensemble = $prog1[$e];
            foreach($ensemble as $v){
                App\Recording::create(['id' => $v->id, 'vocalist_id' => $v->id]);
            }
        }

        // program 2
        $prog2Recs = [];
        foreach($prog2 as $v){
            $prog2Recs[] = [ 'recording' => App\Recording::create(['vocalist_id' => $v->id, 'created_at' => $now,      'updated_at' => $now]), 'vocalist' => $v];
            $prog2Recs[] = [ 'recording' => App\Recording::create(['vocalist_id' => $v->id, 'created_at' => $nowMin1Y, 'updated_at' => $nowMin1Y]), 'vocalist' => $v];
            $prog2Recs[] = [ 'recording' => App\Recording::create(['vocalist_id' => $v->id, 'created_at' => $nowMin2Y, 'updated_at' => $nowMin2Y]), 'vocalist' => $v];
        }

        // program 3
        $prog3Recs = [];
        foreach($prog3 as $v){
            $prog3Recs[] = [ 'recording' => App\Recording::create(['vocalist_id' => $v->id, 'created_at' => $now     , 'updated_at' => $now]), 'vocalist' => $v];
            $prog3Recs[] = [ 'recording' => App\Recording::create(['vocalist_id' => $v->id, 'created_at' => $nowMin1Y, 'updated_at' => $nowMin1Y]), 'vocalist' => $v];
            $prog3Recs[] = [ 'recording' => App\Recording::create(['vocalist_id' => $v->id, 'created_at' => $nowMin2Y, 'updated_at' => $nowMin2Y]), 'vocalist' => $v];
        }

        /*
        |--------------------------------------------------
        | ranges
        |--------------------------------------------------
        */
        // program 1
        App\Range::create(['id' => 1,  'recording_id' => 1,  'register_id' => 1, 'low_key_no' => 32, 'high_key_no' => 80]); // PTX
        App\Range::create(['id' => 2,  'recording_id' => 2,  'register_id' => 1, 'low_key_no' => 45, 'high_key_no' => 107]);
        App\Range::create(['id' => 3,  'recording_id' => 3,  'register_id' => 1, 'low_key_no' => 52, 'high_key_no' => 106]);
        App\Range::create(['id' => 4,  'recording_id' => 4,  'register_id' => 1, 'low_key_no' => 27, 'high_key_no' => 73]);
        App\Range::create(['id' => 5,  'recording_id' => 5,  'register_id' => 1, 'low_key_no' => 43, 'high_key_no' => 85]);

        App\Range::create(['id' => 6,  'recording_id' => 6,  'register_id' => 1, 'low_key_no' => 33, 'high_key_no' => 82]); // VoicePlay
        App\Range::create(['id' => 7,  'recording_id' => 7,  'register_id' => 1, 'low_key_no' => 29, 'high_key_no' => 79]);
        App\Range::create(['id' => 8,  'recording_id' => 8,  'register_id' => 1, 'low_key_no' => 44, 'high_key_no' => 80]);
        App\Range::create(['id' => 9,  'recording_id' => 9,  'register_id' => 1, 'low_key_no' => 46, 'high_key_no' => 79]);
        // Could not find a range for Tony Wakim :/

        App\Range::create(['id' => 11, 'recording_id' => 11, 'register_id' => 1, 'low_key_no' => 27, 'high_key_no' => 81]); // Home Free
        App\Range::create(['id' => 12, 'recording_id' => 12, 'register_id' => 1, 'low_key_no' => 36, 'high_key_no' => 80]);
        App\Range::create(['id' => 13, 'recording_id' => 13, 'register_id' => 1, 'low_key_no' => 32, 'high_key_no' => 80]);
        App\Range::create(['id' => 14, 'recording_id' => 14, 'register_id' => 1, 'low_key_no' => 21, 'high_key_no' => 81]);
        App\Range::create(['id' => 15, 'recording_id' => 15, 'register_id' => 1, 'low_key_no' => 31, 'high_key_no' => 96]);

        // program 2
        foreach($prog2Recs as $rec){
            $this->createRange($rec['recording'], 2, $rec['vocalist']);
        }

        // program 3
        foreach($prog2Recs as $rec){
            $this->createRange($rec['recording'], 3, $rec['vocalist']);
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
        DB::statement('DELETE FROM ranges');
        DB::statement('DELETE FROM recordings');
        DB::statement('DELETE FROM ensemble_vocalist');
        DB::statement('DELETE FROM vocalists');
        DB::statement('DELETE FROM ensembles');
        DB::statement('DELETE FROM program_user');
        DB::statement('DELETE FROM users');
        DB::statement('DELETE FROM programs');
        DB::statement('DELETE FROM registers');
        DB::statement('DELETE FROM systems');
    }

    public function createRange($recording, $system_id, $vocalist){
        $isMale = ($vocalist->sex == 'Male');

        // total range centers
        $trc_m = 54;
        $trc_f = 69;

        // total range bases
        $trb_m = 22;
        $trb_f = 24;

        // total range center fluctuations
        $trcf_min = -4;
        $trcf_max = 4;

        // total range base fluctuations
        $trbf_min = -2;
        $trbf_max = 2;

        // register percentages (all the same for now)
        $reg_perc = 1/3;

        // register overlap base
        $rob = 1;

        // register overlap base fluctuations
        $robf_min = -1;
        $robf_max = 2;

        // begin calculations
        $totalRangeCenter = $isMale ? $trc_m : $trc_f;
        $totalRangeCenter = $totalRangeCenter + rand($trcf_min, $trcf_max);

        $totalRange = $isMale ? $trb_m : $trb_f;
        $totalRange = $totalRange + rand($trbf_min, $trbf_max);

        // nail out registers
        $rangeLow = $totalRangeCenter - intval($totalRange/2);
        $rangeHigh = $totalRangeCenter + intval($totalRange/2);

        $bottomLow = $rangeLow;
        $bottomHigh = $rangeLow + intval($totalRange*$reg_perc);

        $middleLow = $bottomHigh + 1;
        $middleHigh = $middleLow + intval($totalRange*$reg_perc);

        $topLow = $middleHigh + 1;
        $topHigh = $rangeHigh;

        // overlap
        $bottomMiddleOL = $rob + rand($robf_min, $robf_max);
        $middleTopOL = $rob + rand($robf_min, $robf_max);

        $bottomHigh = $bottomHigh + $bottomMiddleOL;
        $middleLow = $middleLow - $bottomMiddleOL;

        $middleHigh = $middleHigh + $middleTopOL;
        $topLow = $topLow - $middleTopOL;
        
        // vocal fry
        $vfHigh = $bottomLow -1;
        $vfLow = $vfHigh - intval($reg_perc);

        $vfOL = $rob + rand($robf_min, $robf_max);
        $vfHigh = $vfHigh + $vfOL;
        $bottomLow = $bottomLow - $vfOL;


        // save stuffs
        if ($system_id == 2){
            App\Range::create(['recording_id' => $recording->id, 'register_id' => ($isMale ? 3  : 6),  'low_key_no' => $bottomLow, 'high_key_no' => $bottomHigh]);
            App\Range::create(['recording_id' => $recording->id, 'register_id' => ($isMale ? 4  : 7),  'low_key_no' => $middleLow, 'high_key_no' => $middleHigh]);
            App\Range::create(['recording_id' => $recording->id, 'register_id' => ($isMale ? 5  : 8),  'low_key_no' => $topLow, 'high_key_no' => $topHigh]);
        }
        if ($system_id == 3){
            App\Range::create(['recording_id' => $recording->id, 'register_id' => ($isMale ? 9  : 13), 'low_key_no' => $vfLow, 'high_key_no' => $vfHigh]);
            App\Range::create(['recording_id' => $recording->id, 'register_id' => ($isMale ? 10 : 14), 'low_key_no' => $bottomLow, 'high_key_no' => $bottomHigh]);
            App\Range::create(['recording_id' => $recording->id, 'register_id' => ($isMale ? 11 : 15), 'low_key_no' => $middleLow, 'high_key_no' => $middleHigh]);
            App\Range::create(['recording_id' => $recording->id, 'register_id' => ($isMale ? 12 : 16), 'low_key_no' => $topLow, 'high_key_no' => $topHigh]);
        }
    }
}
