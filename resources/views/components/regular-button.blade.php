@props([
    'color' => 'blue',
    'type' => 'submit',
    'size' => 'base',
])

@php
  $classes = 'focus:ring-4 font-medium rounded-lg focus:outline-none';

  switch ($size) {
      case 'extra-small':
          $classes .= ' px-3 py-2 text-xs';
          break;
      case 'small':
          $classes .= ' px-3 py-2 text-sm';
          break;
      case 'base':
          $classes .= ' px-5 py-2.5 text-sm';
          break;
  }

  switch ($color) {
      case 'blue':
          $classes .=
              ' text-white bg-blue-700 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800';
          break;
      case 'red':
          $classes .=
              ' text-white bg-red-700 hover:bg-red-800 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900';
          break;
      case 'light':
          $classes .=
              ' text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700';
          break;
  }

@endphp

<button {{ $attributes->merge(['type' => $type, 'class' => $classes]) }}>
  {{ $slot }}
</button>
