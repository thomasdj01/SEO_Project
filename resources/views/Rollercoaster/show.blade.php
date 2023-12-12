@extends('Rollercoaster.layout')
  
@section('content')
        <div>
            <a class="overflow-x-hidden focus:outline-none text-white bg-red-700 hover:bg-red-800 font-medium text-sm px-5 py-2.5 dark:bg-red-600 dark:hover:bg-red-700" href="{{ route('Rollercoaster.index') }}"> Back</a>
        </div>
    

<div class="relative overflow-x-auto shadow-md">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Maker
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Lengte (m)
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Hoogte (m)
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                {{ $Rollercoaster->Maker }}
                </th>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                {{ $Rollercoaster->Lengte }}
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                {{ $Rollercoaster->Hoogte }}
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection