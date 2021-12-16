<x-slot name="header">
<h1 class="text-gray-900">CRUD con Laravel 8 y Livewire</h1>
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
      <button type="button" wire:click="crear()" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Nuevo</button>
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
                      <button wire:click="editar({{ $producto->id }})" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Editar</button>
                      <button wire:click="borrar({{ $producto->id }})" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Borrar</button>
                    </td>
                 </tr>
                 @endforeach
          </tbody>
    </table>
    </div>
  </div>
</div>
