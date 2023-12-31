@extends('layouts.admin')
@section('content')
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">  {{__('Add New Company')}}</h2>
            <form action="{{ route('all_companies.store') }}" method="POST">
                @csrf
                {{ $errors }}

                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="w-full">
                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('Company Name')}}</label>
                        <input type="text" name="name" id="brand"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="English Name" required="">
                        @error('name')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="w-full">
                        <label for="user_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('User Id')}}</label>
                        <input type="number" name="user_id" id="user_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Enter the User ID" required="">
                        @error('user_id')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="w-full">
                        <label for="country_id"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('Company Country')}}</label>
                        <select id="country_id" name="country_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach

                        </select>
                        @error('country_id')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="mobile"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('Phone Number')}}</label>
                        <input type="text" name="mobile" id="mobile"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Mobile Number" required="">
                        @error('mobile')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror

                    </div>

                    <div class="w-full">
                        <label for="capital" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('Company Capital')}}</label>
                        <input type="text" name="capital" id="capital"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="capital" required="">
                        @error('capital')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>



                    <div class="w-full">
                        <label for="activity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('Company Activity')}}
                        </label>
                        <input type="text" name="activity" id="activity"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="activity" required="">
                        @error('activity')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="regesterd" class="block text-sm font-medium text-gray-900 dark:text-white mb-1">{{__('Is The Company Regesterd in other country?')}}</label>

                        <div class="flex items-center space-x-4">
                            <div class="flex items-center">
                                <input type="radio" id="registered_yes" name="regesterd" value="yes" class="mr-2 focus:ring-primary-600 dark:focus:ring-primary-500" required>
                                <label for="registered_yes" class="text-sm text-gray-900 dark:text-white">Yes</label>
                            </div>

                            <div class="flex items-center">
                                <input type="radio" id="registered_no" name="regesterd" value="no" class="mr-2 focus:ring-primary-600 dark:focus:ring-primary-500" required>
                                <label for="registered_no" class="text-sm text-gray-900 dark:text-white">No</label>
                            </div>
                        </div>

                        @error('regesterd')
                            <small class="text-red-500 text-sm">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="w-full">
                        <label for="activity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{__('Notes')}}</label>
                        <textarea   id="activity"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="activity" name="note" required=""></textarea>
                        @error('activity')
                            <small class="text-red-500">{{ $message }}</small>
                        @enderror
                    </div>


                </div>
                <button type="submit"
                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    {{__('Add New Company')}}
                </button>
            </form>
        </div>
    </section>
@endsection
