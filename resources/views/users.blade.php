<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                    <div class="relative overflow-x-auto">
                        <div>
                            <x-primary-button class="mb-6 mt-3">
                                <a>
                                    {{ __('Nuevo Usuario') }}
                                </a>
                            </x-primary-button>
                        </div>
                        <div class="flex flex-col">
                            <div class="overflow-x-auto">
                                <div class="shadow-lg rounded-lg overflow-hidden">
                                    <table class="w-full table-fixed">
                                        <thead>
                                        <tr class="bg-gray-100">
                                            <th class="w-1/3 py-4 px-6 text-left text-gray-600 font-bold uppercase">Id</th>
                                            <th class="w-1/3 py-4 px-6 text-left text-gray-600 font-bold uppercase">Nombre</th>
                                            <th class="w-1/3 py-4 px-6 text-left text-gray-600 font-bold uppercase">Email</th>
                                        </tr>
                                        </thead>
                                        <tbody class="bg-white">
                                        @foreach($users as $user)
                                            <tr>
                                                <td class="py-4 px-6 border-b border-gray-200">{{$user->id}}</td>
                                                <td class="py-4 px-6 border-b border-gray-200 truncate">{{$user->name}}</td>
                                                <td class="py-4 px-6 border-b border-gray-200">{{$user->email}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
