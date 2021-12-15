<?php

namespace Database\Seeders;

use App\Models\Contacto;
use App\Models\Nosotro;
use App\Models\User;
use Illuminate\Database\Seeder;

class PortadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $user =new User();
            $user->name = 'admin';
            $user->email = 'lrmaldo@gmail.com';
            $user->password = bcrypt('admin');
            $user->save();
            $nosotros = new Nosotro();
            $nosotros->titulo = 'La red social';
            $nosotros->descripcion = 'La red social';
            $nosotros->imagen_logo = 'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png';
            $nosotros->save();
            $contacto = new Contacto();
            
            $contacto->telefono = '+56987654321';
            $contacto->facebook = 'https://www.facebook.com/';
            $contacto->whatsapp = '+56987654321';
            $contacto->email = '';
            $contacto->horario = 'Lunes a Viernes de 9:00 a 18:00';
            $contacto->direccion = 'Av. La Paz';
            $contacto->save();

    }
}
