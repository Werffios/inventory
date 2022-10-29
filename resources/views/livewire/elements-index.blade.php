<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-50 shadow-xl sm:rounded-xl mb-6">
                <div class="flex">
                    <x-jet-input wire:model="search" class="bg-gray-50 px-6 text-xl py-3 flex-1" placeholder="Buscar Elementos..."/>
                    @livewire('create-element')
                </div>
            </div>



            <div class="bg-gray-50 shadow-xl sm:rounded-lg">
                <div class="grid grid-cols-1 sm:grid-cols-2 m-0 ml-0">
                    <div class="grid-col">
                        <button class="py-6 px-6 text-left text-gray-500 leading-4 tracking-wider" wire:click="clear">
                        Todos los elementos
                        </button>
                    </div>

                    <div class="grid-col flex ml-auto pr-5">
                        <div class="group my-auto pr-3">
                            <button class="flex items-center">
                                <span class="text-gray-500">Ubicación</span>
                                <span>
                                      <svg class="fill-gray-500 h-4 w-4 transform group-hover:-rotate-180 transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                          <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                      </svg>
                                </span>
                            </button>
                            <ul class="bg-gray-50 pl-0 rounded shadow border transform scale-0 group-hover:scale-100 absolute transition duration-150 origin-top">
                                @foreach($ubications as $ubication)
                                    <li class="bg-unal"><a class="cursor-pointer px-3 py-1 text-gray-500 text-decoration-none" wire:click="$set('ubication_id', {{$ubication->id}})">{{$ubication->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="group my-auto pr-3">
                            <button class="flex items-center">
                                <span class="text-gray-500">Dependencia</span>
                                <span>
                                      <svg class="fill-gray-500 h-4 w-4 transform group-hover:-rotate-180 transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                          <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                      </svg>
                                </span>
                            </button>
                            <ul class="bg-gray-50 pl-0 rounded shadow border transform scale-0 group-hover:scale-100 absolute transition duration-150 origin-top">
                                @foreach($dependencies as $dependency)
                                    <li class="bg-unal"><a class="cursor-pointer px-3 py-1 text-gray-500 text-decoration-none" wire:click="$set('dependency_id', {{$dependency->id}})">{{$dependency->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="group my-auto pr-3">
                            <button class="flex items-center">
                                <span class="text-gray-500">Marca</span>
                                <span>
                                      <svg class="fill-gray-500 h-4 w-4 transform group-hover:-rotate-180 transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                          <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                      </svg>
                                </span>
                            </button>
                            <ul class="bg-gray-50 pl-0 rounded shadow border transform scale-0 group-hover:scale-100 absolute transition duration-150 origin-top">
                                @foreach($trademarks as $trademark)
                                    <li class="bg-unal"><a class="cursor-pointer px-3 py-1 text-gray-500 text-decoration-none" wire:click="$set('trademark_id', {{$trademark->id}})">{{$trademark->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="group my-auto">
                            <button class="flex items-center">
                                <span class="text-gray-500">Tipo</span>
                                <span>
                                      <svg class="fill-gray-500 h-4 w-4 transform group-hover:-rotate-180 transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                          <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                      </svg>
                                </span>
                            </button>
                            <ul class="bg-gray-50 pl-0 rounded shadow border transform scale-0 group-hover:scale-100 absolute transition duration-150 origin-top">
                                @foreach($types as $type)
                                    <li class="bg-unal"><a class="cursor-pointer px-2 py-1 text-gray-500 text-decoration-none" wire:click="$set('type_id',{{$type->id}})">{{$type->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="table-wrapper">
                    <div class="md-card-content" style="overflow-x: auto;">
                        <table class="mx-auto">
                            <thead class="logoUnal">
                                <tr>
                                    <th class="w-1/12 py-3 text-center text-xs leading-4 text-white uppercase tracking-wider">Placa</th>
                                    <th class="w-1/12 py-3 text-center text-xs leading-4 text-white uppercase tracking-wider">Nombre</th>
                                    <th class="w-1/12 py-3 text-center text-xs leading-4 text-white uppercase tracking-wider">Serial</th>
                                    <th class="w-1/12 py-3 text-center text-xs leading-4 text-white uppercase tracking-wider">Modelo</th>
                                    <th class="w-3/12 py-3 text-center text-xs leading-4 text-white uppercase tracking-wider">Características</th>
                                    <th class="w-1/12 py-3 text-center text-xs leading-4 text-white uppercase tracking-wider">Movible</th>
                                    <th class="w-1/12 py-3 text-center text-xs leading-4 text-white uppercase tracking-wider">Marca</th>
                                    <th class="w-1/12 py-3 text-center text-xs leading-4 text-white uppercase tracking-wider">Tipo</th>
                                    <th class="w-1/12 py-3 text-center text-xs leading-4 text-white uppercase tracking-wider">Dependencia</th>
                                    <th class="w-1/12 py-3 text-center text-xs leading-4 text-white uppercase tracking-wider">Ubicación</th>
                                    <th class="px-4 py-3"></th>
                                </tr>
                            </thead>
                            <tbody wire:loading.class="opacity-50">
                            @forelse($elements as $elemento)
                                <tr>
                                    <td class="pl-5 py-2 text-sm text-center leading-4 text-gray-500">{{ $elemento->placa }}</td>
                                    <td class="py-2 text-sm text-center leading-4 text-gray-500">{{ $elemento->name }}</td>
                                    <td class="py-2 pr-3 text-sm text-center leading-4 text-gray-500">{{ $elemento->serial }}</td>
                                    <td class="py-2 pl-2 text-sm text-center leading-4 text-gray-500">{{ $elemento->model }}</td>
                                    <td class="py-2 text-sm text-center leading-4 text-gray-500">{{ $elemento->features }}</td>
                                    @if($elemento->movable)
                                        <td class="py-2 text-sm text-center leading-4 text-gray-500">{{ 'SI'}}</td>
                                    @else
                                        <td class="py-2 text-sm text-center leading-4 text-gray-500">{{ 'NO'}}</td>
                                    @endif

                                    <td class="py-2 text-sm text-center leading-4 text-gray-500">{{ $elemento->trademark->name }}</td>
                                    <td class="py-2 text-sm text-center leading-4 text-gray-500">{{ $elemento->type->name }}</td>
                                    <td class="py-2 text-sm text-center leading-4 text-gray-500">{{ $elemento->dependency->name }}</td>
                                    <td class="py-2 text-sm text-center leading-4 text-gray-500">{{ $elemento->ubication->name }}</td>
                                    <td class="pr-5 py-2 text-sm text-center leading-4 text-gray-500"><a href="{{route('dashboard.show', $elemento->id)}}" id="search-button"><svg id="search-icon" class="search-icon" viewBox="0 0 24 24">
                                                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                                                <path d="M0 0h24v24H0z" fill="none"/>
                                            </svg></a></td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="11" class="py-2 text-lg text-center leading-4 text-gray-500">No hay elementos para mostrar...</td>
                                </tr>
                            @endforelse
                            </tbody>
                            <tfoot>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div class="px-6 py-8">
                {{ $elements->links() }}
            </div>
        </div>
    </div>
</div>
