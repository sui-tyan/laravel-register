@include('partials.header')



<x-nav sample="Customer List"/>
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Last Name
                </th>
                <th scope="col" class="px-6 py-3">
                    First Name
                </th>
                <th scope="col" class="px-6 py-3">
                    E-MAIL
                </th>
                <th scope="col" class="px-6 py-3">
                    ADDRESS
                </th>
                <th scope="col" class="px-6 py-3">
                    
                </th>
                <th scope="col" class="px-6 py-3">
                    
                </th>
            </tr>
        </thead>
        <tbody>
  @foreach ($customers as $customer)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{$customer->id}}
                </th>
                <td class="px-6 py-4">
                {{$customer->lastName}}
                </td>
                <td class="px-6 py-4">
                {{$customer->firstName}}
                </td>
                <td class="px-6 py-4">
                    ${{$customer->email}}
                </td>
                <td class="px-6 py-4">
                {{$customer->address}}
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="text-blue-600">Edit</a>
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="text-blue-600">Delete</a>
                </td>
            </tr>
  @endforeach
        </tbody>
    </table>
</div>

@include('partials.footer')