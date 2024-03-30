@extends('admin.layouts.main')
@section('content')
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 antialiased mt-14">
        <div class="mx-auto max-w-screen-xl py-4 ">
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="w-full md:w-1/2">
                        <form class="flex items-center" method="GET">
                            @csrf
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" id="simple-search"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Cari data..." name="filter">
                            </div>
                        </form>
                    </div>
                    <div
                        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                        <button type="button" id="createProductModalButton" data-modal-target="createProductModal"
                            data-modal-toggle="createProductModal"
                            class="flex items-center justify-center text-white bg-sky-600 hover:bg-sky-800 focus:ring-4 focus:ring-sky-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-sky-600 dark:hover:bg-sky-700 focus:outline-none dark:focus:ring-sky-800">
                            <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                            </svg>
                            Tambah Projek
                        </button>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table id="mytable" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr class="">
                                <th class="w-6 px-4 py-4">No</th>
                                <th scope="col" class="ps-4">
                                    @sortablelink('task', 'Jenis Pekerjaan')
                                </th>
                                <th scope="col" class="ps-4">@sortablelink('company', 'Nama Perusahaan')</th>
                                <th scope="col" class="ps-4">@sortablelink('location', 'Daerah')</th>
                                <th scope="col" class="ps-4">@sortablelink('comodity', 'Komoditas')</th>
                                <th scope="col" class="text-center">@sortablelink('month', 'Bulan')</th>
                                <th scope="col" class="text-center">@sortablelink('years', 'Tahun')</th>
                                <th scope="col" class="px-4 py-4">
                                    <span class="sr-only">Actions</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($projects->count() == 0)
                                <tr>
                                    <td colspan="4">Data project belum ada, silahkan tambahkan klien.</td>
                                </tr>
                            @endif
                            @php
                                $no = 0;
                            @endphp
                            @foreach ($projects as $key => $item)
                                <tr class="border-b dark:border-gray-700">
                                    <td scope="row" class="px-4 py-4 text-center">
                                        {{ $projects->firstItem() + $key }}
                                    </td>
                                    <td class="px-4 py-3">{{ $item->task }}</td>
                                    <td class="px-4 py-3">{{ $item->company }}</td>
                                    <td class="px-4 py-3">{{ $item->location }}</td>
                                    <td class="ps-4 pe-4 lg:pe-12 py-3">{{ $item->comodity }}</td>
                                    <td class="px-4 py-3">{{ $item->month }}</td>
                                    <td class="px-4 py-3">{{ $item->years }}</td>
                                    <td class="px-6 py-3 h-full flex items-center justify-center">
                                        <button id="dropdown-button{{ $item->id }}"
                                            data-dropdown-toggle="dropdown{{ $item->id }}"
                                            class="inline-flex items-center text-sm font-medium hover:bg-gray-100 dark:hover:bg-gray-700 p-1.5 dark:hover-bg-gray-800 text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                                            type="button">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                            </svg>
                                        </button>
                                        <div id="dropdown{{ $item->id }}"
                                            class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                            <ul class="py-1 text-sm" aria-labelledby="{{ $item->id }}">
                                                <li>
                                                    <button type="button"
                                                        data-modal-target="updateProductModal{{ $item->id }}"
                                                        data-modal-toggle="updateProductModal{{ $item->id }}"
                                                        class="flex w-full items-center py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white text-gray-700 dark:text-gray-200">
                                                        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg"
                                                            viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                            <path
                                                                d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" />
                                                        </svg>
                                                        Edit
                                                    </button>
                                                </li>
                                                <li>
                                                    <a href="{{ route('project.delete', $item->id) }}"
                                                        data-confirm-delete="true"
                                                        class="flex w-full items-center py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 text-red-500 dark:hover:text-red-400">
                                                        <svg class="w-4 h-4 mr-2" viewbox="0 0 14 15" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                fill="currentColor"
                                                                d="M6.09922 0.300781C5.93212 0.30087 5.76835 0.347476 5.62625 0.435378C5.48414 0.523281 5.36931 0.649009 5.29462 0.798481L4.64302 2.10078H1.59922C1.36052 2.10078 1.13161 2.1956 0.962823 2.36439C0.79404 2.53317 0.699219 2.76209 0.699219 3.00078C0.699219 3.23948 0.79404 3.46839 0.962823 3.63718C1.13161 3.80596 1.36052 3.90078 1.59922 3.90078V12.9008C1.59922 13.3782 1.78886 13.836 2.12643 14.1736C2.46399 14.5111 2.92183 14.7008 3.39922 14.7008H10.5992C11.0766 14.7008 11.5344 14.5111 11.872 14.1736C12.2096 13.836 12.3992 13.3782 12.3992 12.9008V3.90078C12.6379 3.90078 12.8668 3.80596 13.0356 3.63718C13.2044 3.46839 13.2992 3.23948 13.2992 3.00078C13.2992 2.76209 13.2044 2.53317 13.0356 2.36439C12.8668 2.1956 12.6379 2.10078 12.3992 2.10078H9.35542L8.70382 0.798481C8.62913 0.649009 8.5143 0.523281 8.37219 0.435378C8.23009 0.347476 8.06631 0.30087 7.89922 0.300781H6.09922ZM4.29922 5.70078C4.29922 5.46209 4.39404 5.23317 4.56282 5.06439C4.73161 4.8956 4.96052 4.80078 5.19922 4.80078C5.43791 4.80078 5.66683 4.8956 5.83561 5.06439C6.0044 5.23317 6.09922 5.46209 6.09922 5.70078V11.1008C6.09922 11.3395 6.0044 11.5684 5.83561 11.7372C5.66683 11.906 5.43791 12.0008 5.19922 12.0008C4.96052 12.0008 4.73161 11.906 4.56282 11.7372C4.39404 11.5684 4.29922 11.3395 4.29922 11.1008V5.70078ZM8.79922 4.80078C8.56052 4.80078 8.33161 4.8956 8.16282 5.06439C7.99404 5.23317 7.89922 5.46209 7.89922 5.70078V11.1008C7.89922 11.3395 7.99404 11.5684 8.16282 11.7372C8.33161 11.906 8.56052 12.0008 8.79922 12.0008C9.03791 12.0008 9.26683 11.906 9.43561 11.7372C9.6044 11.5684 9.69922 11.3395 9.69922 11.1008V5.70078C9.69922 5.46209 9.6044 5.23317 9.43561 5.06439C9.26683 4.8956 9.03791 4.80078 8.79922 4.80078Z" />
                                                        </svg>
                                                        Hapus
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="p-4">{!! $projects->appends(Request::except('page'))->render() !!} </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End block -->
    <!-- Create modal -->
    <div id="createProductModal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                <!-- Modal header -->
                <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Tambah Data</h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-target="createProductModal" data-modal-toggle="createProductModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid gap-4 mb-4 sm:grid-cols-1">
                        <div class="w-full">
                            <label for="task"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                                Pekerjaan</label>
                            <input type="text" name="task" id="task" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-600 focus:border-sky-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                                placeholder="Cth: Dokumen RAB">
                        </div>
                        <div class="w-full">
                            <label for="company"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                Perusahaan</label>
                            <input type="text" name="company" id="company" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-600 focus:border-sky-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                                placeholder="Cth: PT. Suka Maju">
                        </div>
                        <div>
                            <label for="location"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi</label>
                            <input type="text" name="location" id="location" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-600 focus:border-sky-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                                placeholder="Cth: Kalimantan Timur">
                        </div>
                        <div class="flex gap-4">
                            <div class="flex flex-col">
                                <label for="comodity"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Komoditas</label>
                                <input type="text" name="comodity" id="comodity" required
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-600 focus:border-sky-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                                    placeholder="Cth: Batubara">
                            </div>
                            <div class="flex flex-col">
                                <label for="month"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bulan</label>
                                <input type="text" name="month" id="month" required
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-600 focus:border-sky-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                                    placeholder="Cth: Januari">
                            </div>
                            <div class="flex flex-col">
                                <label for="years"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun</label>
                                <input type="text" name="years" id="years" required
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-600 focus:border-sky-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                                    placeholder="Cth: 2024">
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button type="submit"
                            class="text-white bg-sky-600 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Update modal -->
    @foreach ($projects as $item)
        <div id="updateProductModal{{ $item->id }}" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                    <div
                        class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Ubah Data</h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="updateProductModal{{ $item->id }}">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form action="{{ route('project.edit', $item->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-4 mb-4 sm:grid-cols-1">
                            <div class="w-full">
                                <label for="task"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                                    Pekerjaan</label>
                                <input type="text" name="task" id="task" required
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-600 focus:border-sky-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                                    placeholder="Masukan jenis pekerjaan" value="{{ $item->task }}">
                            </div>
                            <div class="w-full">
                                <label for="company"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                    Perusahaan</label>
                                <input type="text" name="company" id="company" required
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-600 focus:border-sky-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                                    placeholder="Masukan nama perusahaan" value="{{ $item->company }}">
                            </div>
                            <div>
                                <label for="location"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lokasi</label>
                                <input type="text" name="location" id="location" required
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-600 focus:border-sky-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                                    placeholder="Masukan lokasi" value="{{ $item->location }}">
                            </div>
                            <div class="flex gap-4">
                                <div class="flex flex-col">
                                    <label for="comodity"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Komoditas</label>
                                    <input type="text" name="comodity" id="comodity" required
                                        value="{{ $item->comodity }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-600 focus:border-sky-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                                        placeholder="Masukan komoditas">
                                </div>
                                <div class="flex flex-col">
                                    <label for="month"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bulan</label>
                                    <input type="text" name="month" id="month" required
                                        value="{{ $item->month }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-600 focus:border-sky-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                                        placeholder="Masukan bulan">

                                </div>
                                <div class="flex flex-col">
                                    <label for="years"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun</label>
                                    <input type="text" name="years" id="years" required
                                        value="{{ $item->years }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-sky-600 focus:border-sky-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-sky-500 dark:focus:border-sky-500"
                                        placeholder="Masukan tahun">
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <button type="submit"
                                    class="text-white bg-sky-600 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-sky-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-sky-600 dark:hover:bg-sky-700 dark:focus:ring-sky-800">
                                    Simpan
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
