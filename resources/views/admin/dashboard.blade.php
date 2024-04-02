@extends('admin.layouts.main')
@section('content')
    <div class="bg-gray-200 h-screen w-full">
        <div class="grid gap-4 lg:gap-8 md:grid-cols-3 p-8 pt-20">
            <div class="relative p-6 rounded-2xl bg-white shadow dark:bg-gray-800">
                <div class="space-y-2">
                    <div
                        class="flex items-center space-x-2 rtl:space-x-reverse text-sm font-medium text-gray-500 dark:text-gray-400">
                        <span>Data Klien</span>
                    </div>
                    <div class="text-3xl dark:text-gray-100">
                        {{$clients}}
                    </div>
                    <a href="{{route('client')}}" class="flex items-center space-x-1 rtl:space-x-reverse text-sm font-medium text-slate-400">
                        <span>Lihat lebih lengkap</span>
                        <svg class="w-6 h-6 text-slate-400 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m9 5 7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="relative p-6 rounded-2xl bg-white shadow dark:bg-gray-800">
                <div class="space-y-2">
                    <div
                        class="flex items-center space-x-2 rtl:space-x-reverse text-sm font-medium text-gray-500 dark:text-gray-400">
                        <span>Data Proyek</span>
                    </div>

                    <div class="text-3xl dark:text-gray-100">
                        {{$projects}}
                    </div>
                    <a href="{{route('project')}}" class="flex items-center space-x-1 rtl:space-x-reverse text-sm font-medium text-slate-400">
                      <span>Lihat lebih lengkap</span>
                      <svg class="w-6 h-6 text-slate-400 dark:text-white" aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                          viewBox="0 0 24 24">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m9 5 7 7-7 7" />
                      </svg>
                  </a>
                </div>
            </div>
            <div class="relative p-6 rounded-2xl bg-white shadow dark:bg-gray-800">
                <div class="space-y-2">
                    <div
                        class="flex items-center space-x-2 rtl:space-x-reverse text-sm font-medium text-gray-500 dark:text-gray-400">

                        <span>Akun Admin</span>
                    </div>

                    <div class="text-3xl dark:text-gray-100">
                        {{$users}}
                    </div>
                    <a href="{{route('users')}}" class="flex items-center space-x-1 rtl:space-x-reverse text-sm font-medium text-slate-400">
                      <span>Lihat lebih lengkap</span>
                      <svg class="w-6 h-6 text-slate-400 dark:text-white" aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                          viewBox="0 0 24 24">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m9 5 7 7-7 7" />
                      </svg>
                  </a>
                </div>
            </div>
        </div>
    </div>
@endsection
