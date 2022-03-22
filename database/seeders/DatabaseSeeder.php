<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role'=> 'teacher',
            'name'=>'t1',
            'email'=>'teacher1@gmail.com',
            'password'=> Hash::make('t11234'),
        ]);
        DB::table('users')->insert([
            'role'=> 'teacher',
            'name'=>'t2',
            'email'=>'teacher2@gmail.com',
            'password'=> Hash::make('t21234'),
        ]);
        DB::table('users')->insert([
            'role'=> 'student',
            'name'=>'s1',
            'email'=>'student1@gmail.com',
            'password'=> Hash::make('s11234'),
        ]);
        DB::table('users')->insert([
            'role'=> 'student',
            'name'=>'s2',
            'email'=>'student2@gmail.com',
            'password'=> Hash::make('t21234'),
        ]);
        DB::table('teachers')->insert([
            'name'=>'t1',
            'teacher_id'=>'t1id',
            'temail'=>'teacher1@gmail.com',
            
        ]);
        DB::table('teachers')->insert([
            'name'=>'t2',
            'teacher_id'=>'t2id',
            'temail'=>'teacher2@gmail.com',
            
        ]);
        DB::table('students')->insert([
            'name'=>'s1',
            'student_id'=>'s1id',
            'semail'=>'student1@gmail.com',
            
        ]);
        DB::table('students')->insert([
            'name'=>'s2',
            'student_id'=>'s2id',
            'semail'=>'student2@gmail.com',
            
        ]);
    }
}
