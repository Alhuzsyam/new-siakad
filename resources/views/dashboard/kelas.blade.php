@extends('layouts.main')

@section('container')
<div class="text-2xl font-semibold text-black-600 py-2 ml-0">Ruang Kelas</div>
@if(session()->has('sucess'))
<div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
    <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
    <span class="sr-only">Info</span>
    <div>
      <span class="font-medium">Conratulation!</span> C  {{ session('sucess') }}
    </div>
  </div>
@endif

<form action="/addkelas" method="post">
    @csrf
    <input type="text" name="nama" class="shadow appearance-none bg-gray-10 border border-gray-100 rounded-full w-100 py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" value=""placeholder="tambah kelas">
    <button type="submit" style="margin-left: -44px;" class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-2.5 py-2  mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" ><i class="fa fa-plus font-bold" aria-hidden="true"></i></button>
    @error('nama')
    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oh, snapp!</span> {{ $message }}</p>
    @enderror
</form>
 {{-- tabel --}}
 <div class="overflow-x-auto mt-5  shadow-md sm:rounded-sm w-100">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    No
                </th>
                <th scope="col" class="py-3 px-6">
                    Kelas
                </th>
                <th scope="col" class="py-3 px-6">
                    Murid
                </th>
                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <?php $No = 1?>
            @foreach ($kelas as $k)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="py-4 px-6">
                    <a href="#" class="font-bold text-gray-6000"><?= $No++?></a>
                </td>
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  {{ $k['nama'] }}
                </th>
                <td class="py-4 px-6">
                    <a href="#" class="font-bold text-red-600 dark:text-blue-500 hover:underline">10</a>
                </td>
                <td class="py-4 px-6">
                    <a href="#" class="font-bold text-red-600 dark:text-blue-500 hover:underline">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    <div class="flex justify-between paginate">
        <div class="order-last">  {{ $kelas->links('vendor.pagination.default') }}</div>
        <div class="mt-4"> <span class="italic">Total list data kelas</span> <span class="font-bold italic">{{ $kelas->total()}}</span> </div>
      </div> 
    <style>
        .paginate a{
            margin-left: 10px;
        }
        .paginate p{
            display: none;
        }
    </style>
{{-- end tabel --}}
@endsection
