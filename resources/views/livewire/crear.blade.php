<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-1 transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="">
                <form>
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="mb-4">
                            <label for="descripcion" class="block text-gray-700 text-sm font-bold mb-2">Descripcion</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-right focus:outline-none focues:shadow-outline" id="descripcion" wire:model="descripcion">
                        </div>
                        <div class="mb-4">
                            <label for="cantidad" class="block text-gray-700 text-sm font-bold mb-2">Cantidad</label>
                            <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-right focus:outline-none focues:shadow-outline" id="cantidad" wire:model="cantidad">
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click.prevent="guardar()" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Guardar</button>
                            </span>
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click="cerrarmodal()" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Cancelar</button>
                            </span>

                        </div>
                    </div>

                </form>
            </div>

        </div>

    </div>

</div>