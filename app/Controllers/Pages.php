<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SuperheroModel;

class Pages extends BaseController
{
    protected $superheroModel;
    public function __construct()
    {
        $this->superheroModel = new SuperheroModel();
    }

    public function index()
    {
        $superhero = $this->superheroModel->findAll();
       
        return view('pages/home', ['superhero' => $superhero
    ]);
    }

    public function detail($id)
    {
        $superhero = $this->superheroModel->where(['id' => $id]) ->first();
        // echo $id;
        return view('pages/detail', $superhero);
    }
}
