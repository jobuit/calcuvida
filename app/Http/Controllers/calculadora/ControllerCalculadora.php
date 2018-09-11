<?php

namespace App\Http\Controllers\calculadora;

use App\Alimento;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ControllerCalculadora extends Controller
{

    public function index()	{
        return view('calculadora/content');
    }

    public function buscarAlimentos(Request $request)	{

        $buscar=$request->input('buscar');

        if($buscar!=''){
            $data = Alimento::where('nombre', 'LIKE', '%'. $buscar .'%')
                ->orWhere('peso_porcion', 'LIKE', '%'. $buscar .'%')
                ->get();
        }else{
            $data = Alimento::all();
        }

        return ($data);
    }

    public function buscarAlimentosByTipo(Request $request)	{

        $buscar=$request->input('buscar');

        if($buscar!=''){
            $data = Alimento::where('categoria_alimentos_id', 'LIKE', '%'. $buscar .'%')->inRandomOrder()->get();
        }

        return ($data);
    }

    public function cogerAlimento(Request $request)	{
        return $data = Alimento::find($request->input('id'),['nombre', 'calorias','gramo_carbohidrato', 'grasas_totales', 'proteinas']);
    }

    /*public function getAlimentoJquery(){
        $post=$this->input->post();
        $id=$post['id'];
        // $this->load->model('Alimentos');
        $fila=$this->Alimentos->getAlimentoJquery($id);

        $return_arr[] = array("id" => $fila->id,
            "nombre" => $fila->nombre,
            "calorias" => $fila->calorias,
            "proteina" => $fila->proteinas,
            "grasas" => $fila->grasas_totales,
            "carbohidratos" => $fila->gramo_carbohidrato);

        echo json_encode($return_arr);
    }

    public function getAlimentoBuscarJquery(){
        $post=$this->input->post();
        $buscar=$post['buscar'];
        // $this->load->model('Alimentos');
        $data=$this->Alimentos->buscar($buscar);

        $return_arr[] = array($data);

        echo json_encode($return_arr);
    }*/
}
