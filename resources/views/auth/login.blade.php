<x-guest-layout>
  <x-auth-session-status class="mb-4" :status="session('status')" />

  <form method="POST" action="{{ route('login.store') }}">
    @csrf

    <h5 class="text-xl font-semibold text-gray-900 dark:text-white"> {{ __('Sign in to our platform') }} </h5>

    <!-- Email -->
    <div class="mt-6">
      <x-input-label for="email" :value="__('Email')" />
      <x-text-input id="email" type="text" name="email" :value="old('email')" required autofocus
        autocomplete="email" />
      <x-input-error :messages="$errors->get('email')" />
    </div>

    <!-- Password -->
    <div class="mt-6">
      <x-input-label for="password" :value="__('Password')" />
      <x-text-input id="password" type="password" name="password" required autocomplete="current-password" />
      <x-input-error :messages="$errors->get('password')" />
    </div>

    <!-- Remember Me -->
    <div class="flex items-start mt-6">
      <div class="flex items-center h-5">
        <x-checkbox-input id="remember" name="remember" />
      </div>
      <x-input-label for="remember" :value="__('Remember me')" class="ms-2 mb-0" />
    </div>

    <x-regular-button class="w-full mt-6">
      {{ __('Log in') }}
    </x-regular-button>
  </form>
</x-guest-layout>
