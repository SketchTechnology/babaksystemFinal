@extends('layouts.admin')
@section('content')
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">  {{__('Create Admin')}}</h2>
        <form action="{{ route('admins.store')}}" method="POST">
            @csrf

            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="w-full">
                    <label for="brand"  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">  {{__('Name')}}</label>
                    <input type="text" name="name" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="English Name" required="">
                    @error('name')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
                </div>

                <div class="w-full">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> {{__('Email')}}</label>
                    <input type="email" name="email" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Email" required="">
                    @error('email')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
                </div>

                <div class="w-full">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> {{__('Password')}}</label>
                    <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Password" required="">
                    @error('password')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
                </div>
                <div class="w-full">
                    <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> {{__('Confirm Password')}}</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="password_confirmation" required="">
                    @error('password_confirmation')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror

                </div>

                <div class="w-full">
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('Address')}}</label>
                    <input type="text" name="address" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="address" required="">
                    @error('address')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
                </div>

                <div class="w-full">
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> {{__('Phone Number')}}</label>
                    <input type="number" name="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Phone" required="">
                    @error('phone')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
                </div>
            </div>

            <div class="w-full mt-4">
                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> {{__('Role')}}</label>
                <select id="category" name="roles[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                    @foreach ($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach

                </select>
            </div>

            <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                 {{__('Add Admin')}}
            </button>
        </form>
    </div>
  </section>
@endsection
