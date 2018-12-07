<?php

use App\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run()
    {
        factory(Task::class, 10)->create();
    }
}
