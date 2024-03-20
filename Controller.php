<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($nome, $sobrenome)
    {
        return view('user', ['nome' => $nome, 'sobrenome' => $sobrenome]);
    }
}

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['descricao' => 'Produto 1', 'categoria' => 'Categoria A', 'preco' => 10.00],
            ['descricao' => 'Produto 2', 'categoria' => 'Categoria B', 'preco' => 20.00],
            ['descricao' => 'Produto 3', 'categoria' => 'Categoria C', 'preco' => 30.00],
        ];

        return view('products', ['products' => $products]);
    }
}