<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Users;
use Illuminate\Database\Console\DbCommand;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index() {
        return view('Principal');
    }

    #función para realizar la descarga de la base de datos
    public function descarga()
    {
        #$servicios = Usuario::all();
        #return view("vista", compact("servicios")).

        $ubicacionDescarga = getcwd() . DIRECTORY_SEPARATOR . "RespaldoBD_" . date("Y-m-d") . "_Encuentratucuarto.sql";
        $salida = "";
        $codigoSalida = 0;
        $comando = sprintf("%s --user=\"%s\" --password=\"%s\" %s > %s", env("UBICACION_MYSQLDUMP"), env("DB_USERNAME"), env("DB_PASSWORD"), env("DB_DATABASE"), $ubicacionDescarga);
        exec($comando, $salida, $codigoSalida);
        if ($codigoSalida !== 0) {
            return "Código de salida distinto de 0, se obtuvo código (" . $codigoSalida . "). Revise los ajustes e intente de nuevo";
        }
        return response()->download($ubicacionDescarga)->deleteFileAfterSend(true);
    }

    #función para mostrar la base de datos
    public function verbd() {
        return view("basededatos");
    }



    #views de la base de datos
    #se crearon como migraciones, en caso de consultar los comandos de MySQL 
    #entrar a "migrations", dentro de la carpeta "database"

    #para que funcionen, se hace un llamado a la base de datos especificando la view y la mandamos a nuestra vista
    public function vista1() {
        $apartments = DB::table('apartments_view')->select('rooms', 'bathrooms')->get();
        return view("vistas/v1", compact("apartments"));
    }
    public function vista2() {
        $usersinfo = DB::table('information_user_view')->select('*')->get();
        return view("vistas/v2", compact("usersinfo"));
    }
    public function vista3() {
        $infoapartments = DB::table('apartments_info_view')->select('*')->get();
        return view("vistas/v3", compact("infoapartments"));
    }



    #vistas demostrando lo que realizarán las transacciones a la base de datos.
    public function vtran1() {
    $usuarios = Users::all();
    return view("transacciones/t1", compact("usuarios"));
    }
    public function vtran2() {
        
    }
    public function vtran3() {
        
    }


    #transacciones a la base de datos
    public function transaccion1() {
        DB::transaction(function () {
            DB::update('UPDATE Users SET password = "DesdeLaravel" WHERE username = "MariaGomez23"');
        });
        $usuarios = Users::all();
        return view("transacciones/t1", compact("usuarios"));
    }
    public function transaccion2() {
        DB::transaction(function () {
            DB::update('UPDATE extraservices SET owner = "María Guadalupe" WHERE id = 2');
        });
    }
    public function transaccion3() {
        DB::transaction(function () {
            DB::update('INSERT INTO extraservices (name, typese, owner, phone, street, neighborhood, hours, price, created_at)
            VALUES (Nuevo Servicio, 2, Propietario Nuevo, 123456789, Nueva Calle, Nuevo Vecindario, 8 AM - 5 PM, $50, NOW());
            SET @last_extra_service_id = LAST_INSERT_ID();
            UPDATE units SET extra_services = @last_extra_service_id WHERE id = 1');
        });
    }
}
