<x-start-layout>
    <div class="p-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @include('layouts.start-banner')

                    <div class="text-center text-4xl mt-10">
                        {{ __('Solicitud de admisión en línea') }}
                    </div>

                    <div class="mt-10 flex justify-center space-x-5 border-b pb-5">



                        <div class="flex flex-col space-y-2">
                            <div class="text-left">
                                <x-input-label>
                                    {{ __('Posgrado') }}
                                </x-input-label>
                            </div>
                            <div>
                                <x-text-input/>
                            </div>
                        </div>

                        <div class="flex flex-col space-y-2">
                            <div class="text-left">
                                <x-input-label>
                                    {{ __('LGAC') }}
                                </x-input-label>
                            </div>
                            <div>
                                <x-text-input/>
                            </div>

                        </div>

                    </div>

                    <div class="mt-5 flex justify-center space-x-5 border-b pb-5">

                        <div class="flex flex-col space-y-2">
                            <div class="text-left">
                                <x-input-label>
                                    {{ __('Correo electrónico') }}
                                </x-input-label>
                            </div>
                            <div>
                                <x-text-input/>
                            </div>
                            <div class="text-left">
                                <x-input-label>
                                    {{ __('Apellido materno') }}
                                </x-input-label>
                            </div>
                            <div>
                                <x-text-input/>
                            </div>
                            <div class="text-left">
                                <x-input-label>
                                    {{ __('Fecha de nacimiento') }}
                                </x-input-label>
                            </div>
                            <div>
                                <x-text-input/>
                            </div>
                            <div class="text-left">
                                <x-input-label>
                                    {{ __('Estado civil') }}
                                </x-input-label>
                            </div>
                            <div>
                                <x-text-input/>
                            </div>
                            <div class="text-left">
                                <x-input-label>
                                    {{ __('Teléfono fijo') }}
                                </x-input-label>
                            </div>
                            <div>
                                <x-text-input/>
                            </div>

                        </div>

                        <div class="flex flex-col space-y-2">
                            <div class="text-left">
                                <x-input-label>
                                    {{ __('Apellido paterno') }}
                                </x-input-label>
                            </div>
                            <div>
                                <x-text-input/>
                            </div>
                            <div class="text-left">
                                <x-input-label>
                                    {{ __('Nombre(s)') }}
                                </x-input-label>
                            </div>
                            <div>
                                <x-text-input/>
                            </div>
                            <div class="text-left">
                                <x-input-label>
                                    {{ __('Lugar de nacimiento') }}
                                </x-input-label>
                            </div>
                            <div>
                                <x-text-input/>
                            </div>
                            <div class="text-left">
                                <x-input-label>
                                    {{ __('Nacionalidad') }}
                                </x-input-label>
                            </div>
                            <div>
                                <x-text-input/>
                            </div>
                            <div class="text-left">
                                <x-input-label>
                                    {{ __('Teléfono Celular') }}
                                </x-input-label>
                            </div>
                            <div>
                                <x-text-input/>
                            </div>

                        </div>

                    </div>

                    <div class="text-center text-xl mt-5">
                        {{ __('Dirección:') }}
                    </div>


                    <div class="mt-5 flex justify-center space-x-5 border-b pb-5">

                        <div class="flex flex-col space-y-2">
                            <div class="text-left">
                                <x-input-label>
                                    {{ __('Calle') }}
                                </x-input-label>
                            </div>
                            <div>
                                <x-text-input/>
                            </div>
                            <div class="text-left">
                                <x-input-label>
                                    {{ __('Colonia') }}
                                </x-input-label>
                            </div>
                            <div>
                                <x-text-input/>
                            </div>
                            <div class="text-left">
                                <x-input-label>
                                    {{ __('Municipio') }}
                                </x-input-label>
                            </div>
                            <div>
                                <x-text-input/>
                            </div>
                        </div>

                        <div class="flex flex-col space-y-2">
                            <div class="text-left">
                                <x-input-label>
                                    {{ __('Numero') }}
                                </x-input-label>
                            </div>
                            <div>
                                <x-text-input/>
                            </div>
                            <div class="text-left">
                                <x-input-label>
                                    {{ __('Estado') }}
                                </x-input-label>
                            </div>
                            <div>
                                <x-text-input/>
                            </div>
                            <div class="text-left">
                                <x-input-label>
                                    {{ __('Código postal') }}
                                </x-input-label>
                            </div>
                            <div>
                                <x-text-input/>
                            </div>

                        </div>

                    </div>

                    <div class="text-center text-xl mt-5">
                        {{ __('Antecedentes académicos:') }}
                    </div>


                    <div class="mt-5 flex justify-center space-x-5 border-b pb-5">

                        <div class="flex flex-col space-y-2 items-center">
                            <div class="text-left">
                                <x-input-label>
                                    {{ __('Universidad donde se cursó la licenciatura:') }}
                                </x-input-label>
                            </div>
                            <div>
                                <x-text-input/>
                            </div>
                            <div class="text-left">
                                <x-input-label>
                                    {{ __('Dirección de la universidad:') }}
                                </x-input-label>
                            </div>
                            <div>
                                <x-text-input/>
                            </div>
                            <div class="text-left">
                                <x-input-label>
                                    {{ __('Estudios realizados (especificar nombre del programa):') }}
                                </x-input-label>
                            </div>
                            <div>
                                <x-text-input/>
                            </div>
                            <div class="text-left">
                                <x-input-label>
                                    {{ __('Fecha de ingreso') }}
                                </x-input-label>
                            </div>
                            <div>
                                <x-text-input/>
                            </div>
                            <div class="text-left">
                                <x-input-label>
                                    {{ __('Fecha de egreso') }}
                                </x-input-label>
                            </div>
                            <div>
                                <x-text-input/>
                            </div>
                            <div class="text-left">
                                <x-input-label>
                                    {{ __('Promedio general') }}
                                </x-input-label>
                            </div>
                            <div>
                                <x-text-input/>
                            </div>
                            <div class="text-left">
                                <x-input-label>
                                    {{ __('¿Cuenta actualmente con su título profesional?') }}
                                </x-input-label>
                            </div>
                            <div>
                                <x-text-input/>
                            </div>
                        </div>

                    </div>

                    <div class="text-center text-xl mt-5">
                        {{ __('En caso de haber realizado otros estudios de posgrado [Especialidad, Maestría]:') }}
                    </div>

                    <div class="mt-5 flex justify-center space-x-5 pb-5">

                        <div class="flex flex-col space-y-2 items-center">

                            <div class="text-left">
                                <x-input-label>
                                    {{ __('Estudios realizados') }}
                                </x-input-label>
                            </div>
                            <div>
                                <x-text-input/>
                            </div>
                            <div class="text-left">
                                <x-input-label>
                                    {{ __('Nombre de la institución') }}
                                </x-input-label>
                            </div>
                            <div>
                                <x-text-input/>
                            </div>
                            <div class="text-left">
                                <x-input-label>
                                    {{ __('Fecha de ingreso') }}
                                </x-input-label>
                            </div>
                            <div>
                                <x-text-input/>
                            </div>
                            <div class="text-left">
                                <x-input-label>
                                    {{ __('Fecha de egreso') }}
                                </x-input-label>
                            </div>
                            <div>
                                <x-text-input/>
                            </div>
                            <div>
                                <x-primary-button>
                                    {{ __('Agregar otro posgrado') }}
                                </x-primary-button>
                            </div>
                        </div>

                    </div>

                    <div class="text-right mt-10">
                        <x-primary-button>
                            {{ __('Enviar solicitud') }}
                        </x-primary-button>
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-start-layout>
