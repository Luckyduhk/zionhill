<x-app-layout>
  @php
    $breadcrumbItems = [
        ['text' => __('Dashboard'), 'link' => route('dashboard')],
        ['text' => __('Members'), 'link' => route('members.index')],
        ['text' => $member->name, 'link' => route('members.show', $member->id)],
    ];
  @endphp
  <x-slot name="breadcrumb">
    <x-breadcrumb :breadcrumbItems="$breadcrumbItems" />
  </x-slot>

  <div
    class="p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700 mb-6">
    @include('members.partials.show-member-details')
  </div>

</x-app-layout>
