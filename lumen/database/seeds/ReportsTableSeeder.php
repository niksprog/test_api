<?php

use Illuminate\Database\Seeder;


class ReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        // Copied files in project folder
        $file = app()->basePath() . '/../reports.csv';
        if (($handle = fopen($file, "r")) !== FALSE) {
            // Skip first row with Titles
            $row = fgetcsv($handle, 0 , ';');
            while (($row = fgetcsv($handle, 0 , ';')) !== FALSE) {
                // Check if Vessel exists in Database foreign key will fail the process otherwise
                if (DB::table('vessels')->where('imo', '=', $row[0])->exists()) {
                    $vessel = DB::table('vessels')->where('imo', '=', $row[0])->first();
                    DB::table('reports')->insert([
                        'vessel_id' => $vessel->id,
                        'created_on' => $row[1],
                        'conditionType' => $row[2],
                        'meHours' => str_replace(',', '.', $row[3]),
                        'meCons' => str_replace(',', '.', $row[4]),
                        'auxHours' => $row[5],
                        'auxCons' => str_replace(',', '.', $row[6]),
                        'observedDistance' => str_replace(',', '.', $row[7])
                    ]);
                }
            }
            fclose($handle);
        }
    }
}
