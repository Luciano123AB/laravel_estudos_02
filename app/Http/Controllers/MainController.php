<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showView(): View {
        // Método 01.
        /*
        $data = [
            "name" => "Luciano Eduardo",
            "phone" => "123456789"
        ];

        return view("admin.newPage03", $data);
        */

        // Método 02.
        /*
        return view("admin.newPage03", [
            "name" => "Luciano Eduardo",
            "phone" => "123456789"
        ]);
        */

        // Método 03.
        /*
        return view("admin.newPage03")
            ->with("name", "Luciano Eduardo")
            ->with("phone", "123456789");
        */

        // Método 04.
        $name = "Luciano Eduardo";
        $phone = "123456789";

        return view("admin.newPage03", compact("name", "phone"));
    }
}
