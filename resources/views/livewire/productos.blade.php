<x-slot name="header">
<h1 class="text-gray-900">Lista de productos</h1>
</x-slot>
<div class="py-12">
  <div class="max-w-7x1 mx-auto sm:px6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-x1 sm:rounded-lg px-4 py-4">
      @if(session()->has('message'))
        <div class="bg-teal-100 rounded-b text area-900 px-4 py-4 shadow-md my-3" role="alert">
          <div class="flex">
            <div>
              <h4>{{ session('message') }}</h4>
            </div>
          </div>
        </div>
      @endif
      <button type="button" wire:click="crear()" class="h-10 px-5 m-2 text-green-100 transition-colors duration-150 bg-green-700 rounded-lg focus:shadow-outline hover:bg-green-800">Nuevo</button>
      @if($modal)
        @include('livewire.crear')
      @endif
      <table class="table-fixed w-full">
        <thead>
               <tr class="bg-indigo-600 text-white">
                 <th class="px-4 py-2">ID</th>
                 <th class="px-4 py-2">DESCRIPCION</th>
                 <th class="px-4 py-2">CANTIDAD</th>
                 <th class="px-4 py-2">ACCIONES</th>
               </tr>
          </thead>
          <tbody>
              @foreach($productos as $producto)
                 <tr>
                     <td class="border px-4 py-2">{{$producto->id}}</td>
                     <td class="border px-4 py-2">{{$producto->descripcion}}</td>
                     <td class="border px-4 py-2">{{$producto->cantidad}}</td>
                    <td class="border px-4 py-2 text-center">
                      <button wire:click="editar({{ $producto->id }})" class="h-10 px-5 m-2 text-blue-100 transition-colors duration-150 bg-blue-600 rounded-lg focus:shadow-outline hover:bg-blue-700">Editar</button>
                      <button wire:click="borrar({{ $producto->id }})" class="h-10 px-5 m-2 text-red-100 transition-colors duration-150 bg-red-700 rounded-lg focus:shadow-outline hover:bg-red-800">Borrar</button>
                    </td>
                 </tr>
                 @endforeach
          </tbody>
    </table>
    </div>
  </div>
</div>
