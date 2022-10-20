<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-50 shadow-xl sm:rounded-lg">
                <div class="flex m-0 ml-0">
                    <button class="py-6 px-6 text-left text-gray-500 leading-4 tracking-wider">
                        Todos los elementos
                    </button>
                    <!------------------------------------>
                    <div class="group mt-3">
                        <button class="flex items-center">
                            <span class="text-gray-500">Ubicación</span>
                            <span>
                                  <svg class="fill-gray-500 h-4 w-4 transform group-hover:-rotate-180 transition duration-150 ease-in-out" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                      <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                  </svg>
                            </span>
                        </button>
                        <ul class="bg-gray-50 rounded shadow border transform scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out origin-top">
                            <li class="px-3 py-1 "><a href="youtube.com" class="text-gray-500 text-decoration-none">Programming</a></li>
                            <li class="px-3 py-1 "><a href="google.com" class="text-gray-500 text-decoration-none">Programming</a></li>
                            <li class="px-3 py-1 "><a href="facebook.com" class="text-gray-500 text-decoration-none">Programming</a></li>
                            <li class="px-3 py-1 "><a href=".com" class="text-gray-500 text-decoration-none">Programming</a></li>
                            <li class="px-3 py-1 "><a href=".com" class="text-gray-500 text-decoration-none">Programming</a></li>
                        </ul>
                    </div>


                    <!------------------------------------>
                </div>
                <table class="border-separate md:table-fixed mx-auto">
                    <thead>
                    <tr class="w-full">
                        <th class="max-w-0 text-transparent">id</th>
                        <th class="py-3 text-center text-xs leading-4 text-gray-500 uppercase tracking-wider">Placa</th>
                        <th class="py-3 text-center text-xs leading-4 text-gray-500 uppercase tracking-wider">Nombre</th>
                        <th class="py-3 text-center text-xs leading-4 text-gray-500 uppercase tracking-wider">Serial</th>
                        <th class="py-3 text-center text-xs leading-4 text-gray-500 uppercase tracking-wider">Modelo</th>
                        <th class="py-3 text-center text-xs leading-4 text-gray-500 uppercase tracking-wider">Características</th>
                        <th class="py-3 text-center text-xs leading-4 text-gray-500 uppercase tracking-wider">Movible</th>
                        <th class="py-3 text-center text-xs leading-4 text-gray-500 uppercase tracking-wider">Marca</th>
                        <th class="py-3 text-center text-xs leading-4 text-gray-500 uppercase tracking-wider">Tipo</th>
                        <th class="py-3 text-center text-xs leading-4 text-gray-500 uppercase tracking-wider">Dependencia</th>
                        <th class="py-3 text-center text-xs leading-4 text-gray-500 uppercase tracking-wider">Ubicación</th>
                    </tr>
                    </thead>
                    <tbody class="bg-gray-50 rounded overflow-hidden ">
                    @foreach($elements as $elemento)
                        <tr>
                            <th>
                                <td class="px-6 py-4 text-sm leading-4 text-gray-500">{{ $elemento->placa }}</td>
                                <td class="px-6 py-4 text-sm leading-4 text-gray-500">{{ $elemento->name }}</td>
                                <td class="px-6 py-4 text-sm leading-4 text-gray-500">{{ $elemento->serial }}</td>
                                <td class="px-6 py-4 text-sm leading-4 text-gray-500">{{ $elemento->model }}</td>
                                <td class="px-6 py-4 text-sm leading-4 text-gray-500">{{ $elemento->features }}</td>
                                <td class="px-6 py-4 text-sm leading-4 text-gray-500">{{ $elemento->movable }}</td>
                                <td class="px-6 py-4 text-sm leading-4 text-gray-500">{{ $elemento->trademark->name }}</td>
                                <td class="px-6 py-4 text-sm leading-4 text-gray-500">{{ $elemento->type->name }}</td>
                                <td class="px-6 py-4 text-sm leading-4 text-gray-500">{{ $elemento->dependencie }}</td>
                                <td class="px-6 py-4 text-sm leading-4 text-gray-500">{{ $elemento->ubication->name }}</td>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
