<?php

use Illuminate\Database\Seeder;
use League\Csv\Reader;

class ReportsTableSeeder  extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \League\Csv\Exception
     */
    public function run()
    {
        /** @var Reader $csv */
        $csv = Reader::createFromPath(base_path('reports.csv'), 'r');
        $csv->setHeaderOffset(0);
        $csv->setDelimiter(';');

        foreach ($csv as $record)
        {
            \App\Report::create([
                'imo'=>$record['imo'],
                'created_on'=>$record['created_on'],
                'conditionType'=>$record['conditionType'],
                'meHours'=>$record['meHours'],
                'meCons'=>$record['meCons'],
                'auxHours'=>$record['auxHours'],
                'auxCons'=>$record['auxCons'],
                'observedDistance'=>$record['observedDistance'],
            ]);
        }
    }
}