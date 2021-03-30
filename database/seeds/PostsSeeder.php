<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['link'=>'/img/image1.jpg', 'description'=>'O futuro está a ganhar forma através do novo BMW i8. Inspirador, fascinante e pronto para redefinir a mobilidade. Para um prazer de conduzir incondicional, até onde a estrada o levar. Basta um olhar para o design icónico para elevar os níveis de adrenalina. O conta-rotações dispara com a mesma rapidez: o inovador motor híbrido plug-in debita uma potência de 374 cv e um binário de 570 Nm, com uma aceleração dos 0 aos 100 km/h em apenas 4,4 segundos. Este é o caminho mais rápido para uma nova era. ','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['link'=>'/img/image2.jpg', 'description'=>'O primeiro Gran Coupé totalmente elétrico garante todo o prazer de conduzir de que precisa com uma autonomia de até 590 quilómetros*. O veículo de quatro portas promete uma performance extraordinária com valores até 390 kW/530 cv, enquanto a sua grande autonomia faz dele o companheiro ideal para viagens longas. ','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['link'=>'/img/image3.jpg', 'description'=>'Nesta nova geração da versão híbrida plug-in a BMW decidiu associar um motor de quatro cilindros e 2.0 l a gasolina de 184 cv a um motor elétrico de 68 cv (50 kW) alimentado por uma bateria de iões de lítio de 12 kWh de capacidade. Em conjunto os dois motores debitam 252 cv e 420 Nm de binário. ','created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];

        \DB::table('posts')->insert($data);
    }
}
