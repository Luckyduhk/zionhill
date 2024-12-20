<x-app-layout>
  @php
    $breadcrumbItems = [
        ['text' => __('Dashboard'), 'link' => route('dashboard')],
        ['text' => __('Edit Profile'), 'link' => route('profile.edit')],
    ];
  @endphp

  <x-slot name="breadcrumb">
    <x-breadcrumb :breadcrumbItems="$breadcrumbItems" />
  </x-slot>

  <div class="p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
    @include('profile.partials.edit-profile-form')
  </div>
</x-app-layout>
