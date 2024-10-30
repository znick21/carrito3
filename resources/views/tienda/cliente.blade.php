@extends('base')
@section('content')
<section class="pb-20 bg-gray-300">
    <div class="container mx-auto px-4 pt-6">
        <form action="/grabar_cliente" method="POST" class="w-full max-w-lg">
            @csrf
            <input type="hidden" name="total" value="{{ $total }}">
            <div class="flex flex-wrap -mx-3 mt-6">
                <div class="w-full md:w-6/12 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Correo Electrónico
                    </label>
                    <input name="email" required class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="email">
                </div>
                <div class="w-full md:w-6/12 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Teléfono / Móvil
                    </label>
                    <input name="celular" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3">
                <div class="w-full md:w-6/12 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Nombre
                    </label>
                    <input name="nombre" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text">
                </div>
                <div class="w-full md:w-6/12 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Apellidos
                    </label>
                    <input name="apellido" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3">
                <div class="w-full md:w-6/12 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Tipo de Documento
                    </label>
                    <select name="tdocumento" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                        <option value="DNI">DNI</option>
                        <option value="CARNÉ DE EXTRANJERÍA">CARNÉ DE EXTRANJERÍA</option>
                        <option value="PASAPORTE">PASAPORTE</option>
                    </select>
                </div>
                <div class="w-full md:w-6/12 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Documento
                    </label>
                    <input name="documento" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3">
                <div class="w-full md:w-1/1 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Dirección
                    </label>
                    <input name="direccion" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="md:w-1/3"></div>
                <label class="md:w-2/3 block text-gray-500 font-bold">
                    <input name="tdatos" class="mr-2" type="checkbox">
                    <span class="text-sm">
                        Acepto el tratamiento de datos personales
                    </span>
                </label>
            </div>
            <div class="flex items-center py-2">
                <button type="submit" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                    Proforma
                </button>
                <a href="/" class="flex-shrink-0 border-transparent border-4 text-teal-500 hover:text-teal-800 text-sm font-bold py-2 px-4 rounded ml-4">
                    Regresar
                </a>
            </div>
        </form>
    </div>
</section>
@endsection
