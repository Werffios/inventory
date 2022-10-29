<div class="bg-gray-50">
    <x-jet-button class="px-6 text-xl py-3 sm:rounded-xl logoUnal shadow-xl flex-2" wire:click="$toggle('open')">
        Crear
    </x-jet-button>



    <x-jet-dialog-modal wire:model="open" maxWidth="5xl">
        <x-slot name="title">
           <h1> Crear Elemento</h1>
        </x-slot>
        <x-slot name="content" >

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-4">
                <div>
                    <x-jet-label for="placa" value="{{__('Placa')}}" />
                    <x-jet-input class="pl-2 py-1 " required wire:model.defer="placa" />
                    <x-jet-input-error for="placa" />
                </div>
                <div>
                    <x-jet-label for="name" value="{{__('Nombre')}}" />
                    <x-jet-input class="pl-2 py-1 " required wire:model.defer="name"/>
                    <x-jet-input-error for="name" />
                </div>
                <div>
                    <x-jet-label for="serial" value="{{__('Serial')}}"/>
                    <x-jet-input class="pl-2 py-1 " required wire:model.defer="serial"/>
                    <x-jet-input-error for="serial" />
                </div>
                <div>
                    <x-jet-label for="modelos" value="{{__('Modelo')}}"/>
                    <x-jet-input class="pl-2 py-1 " required wire:model.defer="model"/>
                    <x-jet-input-error for="model" />
                </div>
            </div>
            <div class="mt-4">
                <x-jet-label value="Movible" />
                <x-jet-input type="checkbox" wire:click="$toggle('movable')"
                             class="appearance-none w-9 focus:outline-none  checked:bg-blue-300 h-5 bg-gray-300 rounded-full before:inline-block before:rounded-full before:bg-blue-500 before:h-4 before:w-4 checked:before:translate-x-full shadow-inner transition-all duration-300 before:ml-0.5"/>
                <x-jet-input-error for="movable"/>
            </div>
            <div class="mt-4">
                <x-jet-label value="Características"/>
                <textarea wire:model.defer="features" class="border-white shadow-sm w-full rounded-lg" rows="3"></textarea>
                <x-jet-input-error for="features"/>
            </div>




            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-2 mt-4">
                <div class=grid-col">
                    <x-jet-label value="Marca" />
                    <select  class="rounded-lg border-white shadow-sm w-full" wire:model.defer="trademark_id">
                        <option value="" selected disabled>Seleccione una marca</option>
                        @foreach ($trademarks as $trademark)
                        <option value="{{$trademark->id}}">{{$trademark->name}}</option>
                        @endforeach
                    </select>
                    <x-jet-input-error for="trademark_id" />
                </div>
                <div class=grid-col">
                    <x-jet-label value="Tipo" />
                    <select  class="rounded-lg border-white shadow-sm w-full" wire:model.defer="type_id">
                        <option value="" selected disabled>Seleccione un tipo</option>
                        @foreach ($types as $type)
                            <option value="{{$type->id}}">{{$type->name}}</option>
                        @endforeach
                    </select>
                    <x-jet-input-error for="type_id" />
                </div>
                <div class=grid-col">
                    <x-jet-label value="Ubicación" />
                    <select  class="rounded-lg border-white shadow-sm w-full" wire:model.defer="ubication_id">
                        <option value="" selected disabled>Seleccione una ubicación</option>
                        @foreach ($ubications as $ubication)
                            <option value="{{$ubication->id}}">{{$ubication->name}}</option>
                        @endforeach
                    </select>
                    <x-jet-input-error for="ubication_id" />
                </div>
                <div class=grid-col">
                    <x-jet-label value="Dependencia" />
                    <select  class="rounded-lg border-white shadow-sm w-full" wire:model.defer="dependency_id">
                        <option value="" selected disabled>Seleccione una dependencia</option>
                        @foreach ($dependencies as $dependency)
                            <option value="{{$dependency->id}}">{{$dependency->name}}</option>
                        @endforeach
                    </select>
                    <x-jet-input-error for="dependency_id" />
                </div>

            </div>
        </x-slot>

    <x-slot name="footer">
        <x-jet-danger-button wire:click="$toggle('open')" wire:loading.attr="disabled">
            Cancelar
        </x-jet-danger-button>
        <x-jet-secondary-button class="ml-2" wire:click="create" wire:loading.attr="disabled">
            Crear Elemento
        </x-jet-secondary-button>
    </x-slot>
    </x-jet-dialog-modal>
</div>
