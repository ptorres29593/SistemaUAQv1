<x-start-layout>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">

                    <div class="w-full relative overflow-x-auto flex flex-col lg:flex-row">
                        <div>
                            <x-application-logo class="block h-9 fill-current text-gray-800" />
                        </div>
                        <div class="lg:text-right flex-1">
                            <div class="text-3xl">
                                {{ __('Sistema de Digitalización de Expedientes') }}
                            </div>
                            <div class="text-2xl mb-4">
                                {{ __('Facultad de Química') }}
                            </div>
                        </div>
                    </div>

                    <div class="flex lg:flex-row flex-col">

                        <div class="lg:w-1/2 mt-20 relative overflow-x-auto flex flex-col border-r">

                            <div class="text-3xl pb-10">
                                C O N V O C A T O R I A
                            </div>
                            <div class="text-blue-800">
                                <h2 class="mb-1">POSGRADOS DE QU&Iacute;MICA</h2>
                                <h2 class="mb-1">PROCESO DE SELECCI&Oacute;N 2024-01</h2>
                            </div>
                            <div>
                                <p class="my-6">
                                    La Facultad de Qu&iacute;mica de la <strong>UAQ</strong>, convoca al proceso de selecci&oacute;n 2024-01.
                                </p>
                                <p class="my-2">
                                    <strong>Convocatoria:</strong>
                                </p>
                                <p class="mb-10">
                                    <strong>https://quimica.uaq.mx/convocatoriaposgrado</strong>
                                </p>
                                <h3 class="mb-1"><strong>MAYOR INFORMACI&Oacute;N</strong></h3>
                                <p class="mb-1">
                                    Jefatura de Investigaci&oacute;n y Posgrado,
                                    <br />
                                    Facultad de Qu&iacute;mica,
                                    <br />
                                    Cerro de las campanas s/n C.P. 76010, Quer&eacute;taro, Qro, M&eacute;xico.
                                    <br />
                                    Tel. 01 (442) 1 92 12 00 ext. 5568, 5555 y 5529.
                                    <br />
                                    Horario de atenci&oacute;n 9:00am a 15:30 hrs
                                </p>
                            </div>

                        </div>
                        <div class="lg:w-1/2 mt-20 mx-5">

                            <div class="text-3xl">
                                {{ __('Aun no estoy registrado') }}
                            </div>
                            <div class="my-4">
                                <x-primary-button>
                                    {{ __('Registrarme en línea') }}
                                </x-primary-button>
                            </div>

                            <div class="mt-10">

                                <div class="text-3xl">
                                    {{ __('Ya estoy registrado') }}
                                </div>
                                <div>
                                    <table class="border-separate border-spacing-2 table-fixed w-full">
                                        <tr>
                                            <td class="w-1/3">
                                                <x-input-label>
                                                    {{ __('Correo electrónico') }}
                                                </x-input-label>
                                            </td>
                                            <td class="w-1/3">
                                                <x-input-label>
                                                    {{ __('Contraseña') }}
                                                </x-input-label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="w-2/3">
                                                <x-text-input id="email" class="block w-full pt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"/>
                                            </td>
                                            <td class="w-2/3">
                                                <x-text-input id="password"  class="block w-full pt-1"
                                                              type="password"
                                                              name="password"
                                                              required autocomplete="current-password"/>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="my-4">
                                    <x-primary-button>
                                        {{ __('Iniciar sesión') }}
                                    </x-primary-button>
                                </div>

                            </div>

                        </div>

                    </div>


                </div>

            </div>

        </div>

    </div>

</x-start-layout>

