<?php

namespace Database\Seeders;

use App\Models\Code;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $codes = ["C#", "PHP", "Javascript", "Java", "Python"];

        foreach($codes as $code){
            $newCode = new Code();
            $newCode->code_name = $code;
            $newCode->save();
        }
    }
}
