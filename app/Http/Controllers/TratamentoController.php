<?php

namespace App\Http\Controllers;
use App\Tratamento;
use App\User;

class TratamentoController extends Controller
{
    public function get_user_list($user_id)
    {
        $user = User::find($user_id);
        $tratamentos = Tratamento::where('paciente_id', $user_id);
        return response()->json([
            'usuario' => $user,
            'tratamentos' => $tratamentos
        ], 200);
    }
}
