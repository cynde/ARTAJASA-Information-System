<?php

use Illuminate\Database\Seeder;
use App\Training;

class TrainingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Training::create( [
        'id_training'=>'1',
        'nama_training'=>'Customer Engagement',
        'harga_training'=>'5000000',
        'invoice_training'=>'5000000',
        'id_media'=>'1',
        'id_topik'=>'K',
        'id_penyelenggara'=>'1',
		'id_kompetensi'=>'1',
		] );
    }
}
