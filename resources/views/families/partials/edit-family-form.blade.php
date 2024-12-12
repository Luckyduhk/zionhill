<section class="w-full max-w-3xl">
  <form method="post" action="{{ route('families.update', $family->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <h5 class="text-xl font-semibold text-gray-900 dark:text-white"> {{ __('Edit Family') }} </h5>

    {{-- Name --}}
    <div class="mt-6">
      <x-input-label for="name" :value="__('Name')" required="true" />
      <x-text-input id="name" name="name" type="text" maxlnegth="255" :value="old('name', $family->name)" required autofocus
        autocomplete="name" />
      <x-input-error :messages="$errors->get('name')" />
    </div>

    <x-regular-button class="mt-6">{{ __('Save') }}</x-regular-button>
  </form>
</section>
