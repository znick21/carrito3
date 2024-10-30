<?php
namespace App;

class Carro {
    public $carro;

    public function __construct() {
        // Inicializa el carrito desde la sesión o como array vacío
        $this->carro = session()->get('cart', []);
    }

    public function agregar($producto) {
        // Si el producto ya está en el carrito, incrementa la cantidad
        if(isset($this->carro[$producto->id])) {
            $this->carro[$producto->id]['cantidad']++;
        } else {
            // Agrega un nuevo producto al carrito
            $this->carro[$producto->id] = [
                "nombre" => $producto->nombre,
                "cantidad" => 1,
                "precio" => $producto->precio,
                "imagen" => $producto->imagen
            ];
        }
        // Actualiza el carrito en la sesión
        session()->put('cart', $this->carro);
    }

    public function sumar($id) {
        // Incrementa la cantidad de un producto específico si está en el carrito
        if(isset($this->carro[$id])) {
            $this->carro[$id]['cantidad']++;
            session()->put('cart', $this->carro);
        }
    }

    public function restar($id) {
        // Disminuye la cantidad de un producto específico si está en el carrito
        if(isset($this->carro[$id])) {
            $this->carro[$id]['cantidad']--;
            // Si la cantidad es menor que 1, elimina el producto del carrito
            if ($this->carro[$id]['cantidad'] < 1) {
                unset($this->carro[$id]);
            }
            session()->put('cart', $this->carro);
        }
    }

    public function obtenerTotal() {
        $total = 0;
        foreach($this->carro as $item) {
            $total += $item['precio'] * $item['cantidad'];
        }
        return $total;
    }
}
