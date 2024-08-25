@props(['type' => 'dark']) 
{{-- La variable type se le asiga en valor "dark" por defecto --}}

{{-- Switch case para especificar el tipo de alerta a mostrar--}}
@php
  switch ($type) {
    case 'info':
      $class = 'text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800';
      break;

    case 'danger':
      $class = 'text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800';
      break;

    case 'success':
      $class = 'text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800';
      break;
    
    case 'warning':
      $class = 'text-yellow-800 border border-yellow-300 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300 dark:border-yellow-800';
      break;

    case 'dark':
      $class = 'text-gray-800 border border-gray-300 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600';
      break;
    
    default:
      $class = 'text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800';
      break;
  }
@endphp

<div {{$attributes->merge(['class' => 'flex items-center p-4 text-sm' . $class])}} role="alert">
    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
    </svg>
    <span class="sr-only">Info</span>
    <div>
      <span class="font-medium">{{$title ?? 'Info de la alerta'}}</span> {{$slot}} 
      <!--$slot es una variable que representa contenido dinámico que se 
        pasa a un componente desde la vista que lo llama. 
        La variable "title" es para colocar el titulo que queramos en
        la llamada del componente -->

        <!-- Los "??" indican que si la variable tiene valro, muestre ese valor
             si no es null, motrará el valor a la derecha entre comillas simples -->

    </div>


    <!--Agregando cambios en la rama "Develop-1" -->


    {{--CAMBIOS DE PRUEBA GIT REMOTO DEVELOP-2--}}