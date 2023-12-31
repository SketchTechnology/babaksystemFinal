






@extends('layouts.admin')
@section('content')
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">{{__('Edit Role')}}</h2>
        <form action={{ route('dashboard.roles.update', $role->id) }} method="post" >
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="Role_Name" class="block text-sm font-medium text-gray-700">{{__('Role Name')}}</label>
                <input
                    id="Role_Name"
                    name="name"
                    placeholder="Enter The Role Name"
                    type="text"
                    value="{{ $role->name }}"
                    class="mt-1 p-2 border rounded-md w-full focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out"
                />
            </div>


              <fieldset>
            <legend>{{ _('Abilities') }}</legend>
             @foreach (app('abilities') as $ability_code=>$ability_name )
             <div class="flex mb-2">
                <div class="w-1/2">
                    {{ $ability_name }}
                </div>

                <div class="w-1/6">
                    <input type="radio" name="abilities[{{ $ability_code }}]" value="allow" {{ ($role_abilities[$ability_code] ?? '') == 'allow' ? 'checked' : '' }} class="form-radio" >
                    <label class="ml-2">{{__('Allow')}}</label>
                </div>

                <div class="w-1/6">
                    <input type="radio" name="abilities[{{ $ability_code }}]" value="deny" {{ ($role_abilities[$ability_code] ?? '') == 'deny' ? 'checked' : '' }} class="form-radio">
                    <label class="ml-2">{{__('Deny')}}</label>
                </div>
            </div>
            @endforeach
              </fieldset>
              <div class="mt-4">
                <button type="submit" class="text-white bg-blue-700 hover:bg-yellow-500 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                    {{ $button_name ?? __('Save') }}
                </button>
            </div>




        </form>
    </div>
  </section>
@endsection
