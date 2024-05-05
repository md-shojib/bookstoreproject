<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class booksseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'isbn'=>'asd',
            'title'=>'bxd',
            'author'=>'sdfad',
            'stock'=>12,
            'price'=>13.4,
        ]);
    }
}
