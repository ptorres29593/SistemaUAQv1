<div class="w-full overflow-x-auto flex flex-row invisible absolute lg:visible lg:relative lg:flex-row">
    <div>
        <a href="{{ route('welcome') }}">
            <x-application-logo class="block h-9 fill-current text-gray-800" />
        </a>
    </div>
    <div class="lg:text-right flex-1">
        <div class="text-3xl">
            {{ __('Sistema de Digitalización de Expedientes') }}
        </div>
        <div class="text-xl mb-4">
            {{ __('Facultad de Química') }}
        </div>
    </div>
</div>

<div class="w-full relative overflow-x-auto flex flex-col lg:invisible lg:absolute">
    <div class="lg:text-right flex-1">
        <div class="text-3xl">
            {{ __('Sistema de Digitalización de Expedientes') }}
        </div>
        <div class="text-xl mb-4">
            {{ __('Facultad de Química') }}
        </div>
    </div>
    <div>
        <a href="{{ route('welcome') }}">
            <x-application-logo class="block h-9 fill-current text-gray-800" />
        </a>
    </div>
</div>
