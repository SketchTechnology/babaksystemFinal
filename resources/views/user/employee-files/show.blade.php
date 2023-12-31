@extends('layouts.app')
@section('content')
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 max-w-screen-xl sm:py-16 lg:px-6">
        <div class="max-w-screen-md mb-8 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">File Info</h2>
        </div>
        <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">

            <div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">File Name</h3>
                <p class="text-gray-500 dark:text-gray-400">ilaw</p>
                <hr>
                <br>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Start Date</h3>
                <p class="text-gray-500 dark:text-gray-400">United States Minor Outlying Islands</p>
                <hr>
                <br>
                <h3 class="mb-2 text-xl font-bold dark:text-white">End Date</h3>
                <p class="text-gray-500 dark:text-gray-400">55555$</p>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png" alt="mockup">
            </div>
        </div>
    </div>
  </section>

@endsection
