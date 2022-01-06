<?php

namespace App\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\Scheduling\Schedule;

class DeleteRecords extends Command
{
    protected $signature = 'delete-records';

    public function handle()
    {
        // DB::table('sej12_logs')->delete();
    }
}
