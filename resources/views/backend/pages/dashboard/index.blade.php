@extends('layouts.admin')
@section('content')

<div class="m-10 grid gap-5 sm:grid-cols-3 mx-auto max-w-screen-lg">
    <div class="px-4 py-6 shadow-lg shadow-blue-100">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 rounded-xl bg-blue-50 p-4 text-blue-300" viewBox="0 0 20 20" fill="currentColor">
        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
      </svg>
      <p class="mt-4 font-medium">{{__('Companies')}}</p>
      <p class="mt-2 text-xl font-medium">
         @php
use App\Models\Company;

             echo Company::count()  ;
         @endphp
        <svg xmlns="http://www.w3.org/2000/svg" class="inline h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
      </p>
      <span class="text-xs text-gray-400">+4.9%</span>
    </div>
    <div class="px-4 py-6 shadow-lg shadow-blue-100">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 rounded-xl bg-rose-50 p-4 text-rose-300" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
      </svg>
      <p class="mt-4 font-medium">{{__('Employees')}}</p>
      <p class="mt-2 text-xl font-medium">
        @php
use App\Models\Dashboard\Employer;

            echo Employer::count() ;
        @endphp
        <svg xmlns="http://www.w3.org/2000/svg" class="inline h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
      </p>
      <span class="text-xs text-gray-400">+4.9%</span>
    </div>
    <div class="px-4 py-6 shadow-lg shadow-blue-100">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 rounded-xl bg-green-50 p-4 text-green-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
      <p class="mt-4 font-medium">{{__('Sponsored')}}</p>
      <p class="mt-2 text-xl font-medium">
        @php
        use App\Models\Dashboard\Sponsore;

                    echo Sponsore::count() ;
                @endphp
        <svg xmlns="http://www.w3.org/2000/svg" class="inline h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
      </p>
      <span class="text-xs text-gray-400">+4.9%</span>
    </div>
  </div>
  <div class="m-10 grid gap-5 sm:grid-cols-3  mx-auto max-w-screen-lg">
    <div class="px-4 py-6 shadow-lg shadow-blue-100">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 rounded-xl bg-blue-400 p-4 text-white" viewBox="0 0 20 20" fill="currentColor">
        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
      </svg>
      <p class="mt-4 font-medium">{{__('Action Requests')}}</p>
      <p class="mt-2 text-xl font-medium">
        23.4k
        <svg xmlns="http://www.w3.org/2000/svg" class="inline h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
      </p>
      <span class="text-xs text-gray-400">+4.9%</span>
    </div>
    <div class="px-4 py-6 shadow-lg shadow-blue-100">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 rounded-xl bg-rose-400 p-4 text-white" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
      </svg>
      <p class="mt-4 font-medium">{{__('admins')}}</p>
      <p class="mt-2 text-xl font-medium">
        @php
         use App\Models\User;

            echo User::where('role','admin')->count();
        @endphp
        <svg xmlns="http://www.w3.org/2000/svg" class="inline h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
      </p>
      <span class="text-xs text-gray-400">+4.9%</span>
    </div>
    <div class="px-4 py-6 shadow-lg shadow-blue-100">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 rounded-xl bg-green-400 p-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
      <p class="mt-4 font-medium">{{__('Users')}}</p>
      <p class="mt-2 text-xl font-medium">
        @php

             echo User::count();
         @endphp
        <svg xmlns="http://www.w3.org/2000/svg" class="inline h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
      </p>
      <span class="text-xs text-gray-400">+4.9%</span>
    </div>
  </div>

<div class="text-slate-600 mx-auto grid max-w-2xl grid-cols-2 gap-y-4 px-4 py-1 sm:my-10 sm:rounded-md sm:border sm:shadow">
    <div class="col-span-2 col-start-1 flex flex-col justify-between border-b py-3 sm:flex-row">
      <p class="font-medium">Overview</p>

    </div>
    <div class="col-span-2 -mx-4 bg-gradient-to-t from-indigo-500 to-blue-500 px-4 py-8 sm:col-span-1 sm:mx-0 sm:rounded-xl sm:py-4">
      <p class="mb-4 font-medium text-indigo-100">Cases in pipeline</p>
      <div class="mb-6 flex max-w-xs">
        <div class="mb-3 flex h-12 w-12 items-center justify-center rounded-2xl bg-indigo-100 text-indigo-400 sm:mr-3 sm:mb-0">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
          </svg>
        </div>
        <div class="px-4">
          <p class="mb-1 text-2xl font-black text-white">1844</p>
          <p class="font-medium text-indigo-100">$192,234.00</p>
        </div>
      </div>
      <div class="flex flex-wrap justify-between">
        <div class="flex flex-col items-center px-4 py-1">
          <p class="text-lg font-medium text-white">232</p>
          <p class="text-xs font-medium text-indigo-100">Quote</p>
        </div>
        <div class="mb-1 flex flex-col items-center px-4 py-1 sm:mr-1 sm:mb-0">
          <p class="text-lg font-medium text-white">$140</p>
          <p class="text-xs font-medium text-indigo-100">CAC</p>
        </div>
        <div class="mb-1 flex flex-col items-center rounded-2xl bg-white px-4 py-1 sm:mr-1 sm:mb-0">
          <p class="text-lg font-medium text-indigo-500">21</p>
          <p class="text-xs font-medium text-indigo-500">Refunds</p>
        </div>
        <div class="flex flex-col items-center px-4 py-1">
          <p class="text-lg font-medium text-white">$44</p>
          <p class="text-xs font-medium text-indigo-100">PPC</p>
        </div>
      </div>
    </div>
    <div class="col-span-2 grid grid-cols-2 gap-4 py-4 sm:col-span-1 sm:gap-8 sm:px-4">
      <div class="">
        <p class="text-lg font-bold">32</p>
        <p class="text-slate-400 mb-2 font-medium">$230,000</p>
        <span class="bg-slate-200 text-slate-600 rounded-full px-2 py-0.5 text-xs font-medium">Drafts</span>
      </div>
      <div class="">
        <p class="text-lg font-bold">621</p>
        <p class="text-slate-400 mb-2 font-medium">$230,000</p>
        <span class="rounded-full bg-indigo-200 px-2 py-0.5 text-xs font-medium text-indigo-600">Prending Approval</span>
      </div>
      <div class="">
        <p class="text-lg font-bold">68</p>
        <p class="text-slate-400 mb-2 font-medium">$230,000</p>
        <span class="rounded-full bg-yellow-200 px-2 py-0.5 text-xs font-medium text-yellow-700">Sent to Clients</span>
      </div>
      <div class="">
        <p class="text-lg font-bold">970</p>
        <p class="text-slate-400 mb-2 font-medium">$230,000</p>
        <span class="rounded-full bg-green-200 px-2 py-0.5 text-xs font-medium text-green-600">Signing</span>
      </div>
    </div>
    <div class="col-span-2 col-start-1 grid grid-cols-2 gap-6 border-t py-4 sm:grid-cols-4 sm:px-4 sm:py-8">
      <div class="">
        <p class="text-slate-500 text-sm">Revenue</p>
        <p class="text-xl font-medium">$924,883</p>
      </div>
      <div class="">
        <p class="text-slate-500 text-sm">Liabilities</p>
        <p class="text-xl font-medium">$924,883</p>
      </div>
      <div class="">
        <p class="text-slate-500 text-sm">Profit</p>
        <p class="text-xl font-medium">$213,002</p>
      </div>
      <div class="">
        <p class="text-slate-500 text-sm">Target</p>
        <p class="text-xl font-medium">$150,000</p>
      </div>
    </div>
  </div>


<!-- component -->


@endsection
