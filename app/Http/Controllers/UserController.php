<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function consulta() {
        $users = DB::table('users')
            ->join('user_domicilio', 'users.id', '=', 'user_domicilio.user_id')->get();

        $arregloUsuarios = [];
        foreach($users as $user) {
            $arregloUsuarios[] = $user;
        }

        return json_encode($arregloUsuarios);
    }
}
