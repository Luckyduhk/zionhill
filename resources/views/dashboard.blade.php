<x-app-layout>
  <div class="p-6 bg-gray-50 dark:bg-gray-900 min-h-screen">
    <!-- Dashboard Header -->
    <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-6">Family Member Dashboard</h1>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
      <!-- Visits in 30, 60, 90 Days -->
      <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4">
        <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Visits Overview</h2>
        <div class="grid grid-cols-3 gap-4 mt-4">
          <div class="text-center">
            <span class="block text-2xl font-bold text-gray-800 dark:text-gray-200">30</span>
            <span class="text-sm text-gray-600 dark:text-gray-400">Last 30 Days</span>
          </div>
          <div class="text-center">
            <span class="block text-2xl font-bold text-gray-800 dark:text-gray-200">60</span>
            <span class="text-sm text-gray-600 dark:text-gray-400">Last 60 Days</span>
          </div>
          <div class="text-center">
            <span class="block text-2xl font-bold text-gray-800 dark:text-gray-200">90</span>
            <span class="text-sm text-gray-600 dark:text-gray-400">Last 90 Days</span>
          </div>
        </div>
      </div>

      <!-- Total Family Members -->
      <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4">
        <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Total Family Members</h2>
        <div class="flex items-center justify-center h-32">
          <span class="text-4xl font-bold text-gray-800 dark:text-gray-200">125</span>
        </div>
      </div>

      <!-- Last 10 Family Members -->
      <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-4">
        <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Last 10 Visits</h2>
        <ul class="mt-4 space-y-2">
          <li class="flex items-center justify-between py-2 px-4 bg-gray-100 dark:bg-gray-700 rounded">
            <span class="text-gray-800 dark:text-gray-200">John Doe</span>
            <span class="text-sm text-gray-600 dark:text-gray-400">2 days ago</span>
          </li>
          <!-- Repeat similar list items for other members -->
        </ul>
      </div>
    </div>
  </div>

</x-app-layout>
