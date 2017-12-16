<?php


use Illuminate\Database\Seeder;
use League\Csv\Reader;

class VesselsTableSeeder  extends Seeder
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
        $csv = Reader::createFromPath(base_path('vessels.csv'), 'r');
        $csv->setHeaderOffset(0);
        $csv->setDelimiter(';');

        $now = \Carbon\Carbon::now();


        foreach ($csv as $record)
        {
            \App\Vessel::create([
                'name'=>$record['name'],
                'email'=>$record['email'],
                'imo'=>$record['imo'],
            ]);
        }


    }
}
