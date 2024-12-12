<aside id="logo-sidebar"
  class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
  aria-label="Sidebar">
  <div class="h-full p-4 overflow-y-auto bg-white dark:bg-gray-800">
    <ul class="font-medium">
      <li>
        <a
          class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
          {{ __('Dashboard') }}
        </a>
      </li>
      <li>
        <button type="button"
          class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
          aria-controls="dropdown-families" data-collapse-toggle="dropdown-families">
          <span class="flex-1 text-left rtl:text-right whitespace-nowrap">{{ __('Families') }}</span>
          <x-icons.arrow-down class="w-3 h-3" />
        </button>
        <ul id="dropdown-families" class="hidden">
          <li>
            <a href="{{ route('families.index') }}"
              class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-6 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
              <x-icons.arrow-right class="w-3 me-2" />
              {{ __('Show Families') }}
            </a>
          </li>
          <li>
            <a href="{{ route('families.create') }}"
              class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-6 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
              <x-icons.arrow-right class="w-3 me-2" />
              {{ __('Add Family') }}
            </a>
          </li>
        </ul>
      </li>
      <li>
        <button type="button"
          class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
          aria-controls="dropdown-family-members" data-collapse-toggle="dropdown-family-members">
          <span class="flex-1 text-left rtl:text-right whitespace-nowrap">{{ __('Family Members') }}</span>
          <x-icons.arrow-down class="w-3 h-3" />
        </button>
        <ul id="dropdown-family-members" class="hidden">
          <li>
            <a href="{{ route('members.index') }}"
              class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-6 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
              <x-icons.arrow-right class="w-3 me-2" />
              {{ __('Show Family Members') }}
            </a>
          </li>
          <li>
            <a href="{{ route('members.create') }}"
              class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-6 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
              <x-icons.arrow-right class="w-3 me-2" />
              {{ __('Add Family Member') }}
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</aside>
