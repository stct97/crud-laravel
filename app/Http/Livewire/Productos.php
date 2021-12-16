<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;

class Productos extends Component
{
    public $productos, $descripcion, $cantidad, $id_productos;
    public $modal = false;

    public function render()
    {
        $this->productos = Producto::all();
        return view('livewire.productos');
    }

    public function crear(){
        $this-> limpiar();
        $this-> abrirmodal();
    }

    public function abrirmodal(){
        $this->modal = true;
    }

    public function cerrarmodal(){
        $this->modal = false;
    }

    public function limpiar(){
        $this->descripcion = '';
        $this->cantidad = '';
        $this->id_productos = '';

    }

    public function editar ($id){
        $producto = Producto::find($id);
        $this->descripcion = $producto->descripcion;
        $this->cantidad = $producto->cantidad;
        $this->id_productos = $producto->id;
        $this->abrirmodal();
    }

    public function borrar($id){
        $producto = Producto::find($id);
        $producto->delete();
        session()->flash('message', 'Producto eliminado');
        $this->limpiar();
        $this->cerrarmodal();
    }

    public function guardar(){
        Producto::updateOrCreate(['id'=> $this -> id_productos],
        [
            'descripcion' => $this->descripcion,
            'cantidad' => $this->cantidad,
        ]);
        $this->cerrarmodal();
        session()->flash('message', $this->id_productos ? 'Producto actualizado' : 'Producto creado');
        $this->limpiar();
    }
}
