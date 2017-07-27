<?php

use Illuminate\Database\Seeder;

class siswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $post=[
          ['nama'=>'melda sofiana','kelas'=>'12rpl3','jk'=>'perempuan'],
          ['nama'=>'nadiyah n','kelas'=>'12rpl2','jk'=>'perempuan']
        ];
                 DB::table('siswa')->insert($post);

    }
}
