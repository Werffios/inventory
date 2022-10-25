<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <h1 class="text-6xl font-bold text-center">{{$element->placa}}</h1>
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                            <div class="overflow-hidden">
                                <x-jet-label class="text-2xl uppercase">{{ __('Placa') }} </x-jet-label>
                                <x-jet-label class="ml-4 text-center rounded-5 pl-4 text-xl bg-gray-200">{{$element->placa}}</x-jet-label>
                            </div>
                            <div class="overflow-hidden">
                                <x-jet-label class="text-2xl uppercase">{{ __('Nombre') }} </x-jet-label>
                                <x-jet-label class="ml-4 text-center rounded-5 pl-4 text-xl bg-gray-200">{{$element->name}}</x-jet-label>
                            </div>
                            <div class="overflow-hidden">
                                <x-jet-label class="text-2xl uppercase">{{ __('Serial') }} </x-jet-label>
                                <x-jet-label class="ml-4 text-center rounded-5 pl-4 text-xl bg-gray-200">{{$element->serial}}</x-jet-label>
                            </div>
                            <div class="overflow-hidden">
                                <x-jet-label class="text-2xl uppercase">{{ __('Modelo') }} </x-jet-label>
                                <x-jet-label class="ml-4 text-center rounded-5 pl-4 text-xl bg-gray-200">{{$element->model}}</x-jet-label>
                            </div>
                            <div class="overflow-hidden">
                                <x-jet-label class="text-2xl uppercase">{{ __('Movible') }} </x-jet-label>
                                <x-jet-label class="ml-4 text-center rounded-5 pl-4 text-xl bg-gray-200">{{$element->movable}}</x-jet-label>
                            </div>
                            <div class="overflow-hidden">
                                <x-jet-label class="text-2xl uppercase">{{ __('Marca') }} </x-jet-label>
                                <x-jet-label class="ml-4 text-center rounded-5 pl-4 text-xl bg-gray-200">{{$element->trademark->name}}</x-jet-label>
                            </div>
                            <div class="overflow-hidden">
                                <x-jet-label class="text-2xl uppercase">{{ __('Tipo') }} </x-jet-label>
                                <x-jet-label class="ml-4 text-center rounded-5 pl-4 text-xl bg-gray-200">{{$element->type->name}}</x-jet-label>
                            </div>
                            <div class="overflow-hidden">
                                <x-jet-label class="text-2xl uppercase">{{ __('Dependencia') }} </x-jet-label>
                                <x-jet-label class="ml-4 text-center rounded-5 pl-4 text-xl bg-gray-200">{{$element->dependency->name}}</x-jet-label>
                            </div>
                            <div class="overflow-hidden">
                                <x-jet-label class="text-2xl uppercase">{{ __('Ubicación') }} </x-jet-label>
                                <x-jet-label class="ml-4 text-center rounded-5 pl-4 text-xl bg-gray-200">{{$element->ubication->name}}</x-jet-label>
                            </div>
                            <div class="overflow-hidden">
                                <x-jet-label class="text-2xl uppercase">{{ __('Caracteristicas') }} </x-jet-label>
                                <x-jet-label class="ml-4 text-center rounded-5 pl-4 text-xl bg-gray-200">{{$element->features}}</x-jet-label>
                            </div>

                        </div>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
