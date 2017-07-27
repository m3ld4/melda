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
           ['nama'=>'tika','kelas'=>'12rpl1','jk'=>'perempuan'],
          ['nama'=>'farel','kelas'=>'12tkr2','jk'=>'laki laki']
           ['nama'=>'dani','kelas'=>'12rpl2','jk'=>'laki laki'],
        ];
                 DB::table('siswa')->insert($post);

    }
}
