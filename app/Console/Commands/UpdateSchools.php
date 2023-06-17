<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Services\Schools\School;


class UpdateSchools extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:UpdateSchools';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run this command to update the schools table with the latest data from the CMS API';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $data = app(School::class)->getSchools();

        $this->info('Schools streaming in...');

        foreach ($data as $school) {
            $this->info($school['field_name'][0]['value']);
        }

        foreach ($data as $school) {
            $relations_base_key = config('trebleclef.cms_base_url') . '/rest/relation/node/schools/';

            $schoolModel = \App\Models\School::updateOrCreate(
                ['drupal_uuid' => $school['uuid'][0]['value']],
                 [
                    'name' => $school['field_name'][0]['value'],
                    'banner' => $school['_links'] [$relations_base_key . 'field_banner'][0]['href'],
                ]
            );
            $schoolModel->save();
            $this->info('-------------------------------Y--A--Y-------------------------------------------');
            $this->info($school['field_name'][0]['value'] . ' saved');
        }

        $this->info('Schools updated!');
    }
}
