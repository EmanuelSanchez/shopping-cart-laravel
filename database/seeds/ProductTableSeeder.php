<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath'     => 'images/ecg.png',
            'title'         => 'Electrocardiografo',
            'description'   => 'Electrocardiografo portable de 12 leads, 100G. Pantalla LCD con datos en tiempo real. Impresión de alta resolución.',
            'price'         => 200
        ]);
        $product-> save();
        $product = new \App\Product([
            'imagePath'     => 'images/pulsioximeter.jpg',
            'title'         => 'Pulxiosímetro',
            'description'   => 'Pulsioximetro de dedo, portable, medidor de saturación de oxígeno y ritmo cardiaco.',
            'price'         => 80
        ]);
        $product-> save();
        $product = new \App\Product([
            'imagePath'     => 'images/tensiometro.jpg',
            'title'         => 'Tensiómetro',
            'description'   => 'Tensiómetro oscilométrico digital para brazo, ideal para uso doméstico. Incluye baterías de alta duración.',
            'price'         => 50
        ]);
        $product-> save();
        $product = new \App\Product([
            'imagePath'     => 'images/gsr.jpg',
            'title'         => 'Medidor de Grasa Corporal',
            'description'   => 'Medidor de grsas corporal, agua corporal y masa muscular. Precisión de 0.1%',
            'price'         => 100
        ]);
        $product-> save();
        $product = new \App\Product([
            'imagePath'     => 'images/glucometro.jpg',
            'title'         => 'Glucómetro',
            'description'   => 'Medidor de azúcar en la sangre, tarda sólo 5 segundos. Pantalla LCD. Compatiblidad con aplicación Android y iOS.',
            'price'         => 60
        ]);
        $product-> save();
        $product = new \App\Product([
            'imagePath'     => 'images/vital_signs_monitor.jpg',
            'title'         => 'Monitor de Signos Vitales',
            'description'   => 'Liviano y portatil, baterías recargables de larga duración. Pantalla LCD de alta resolución.',
            'price'         => 150
        ]);
        $product-> save();
    }
}
