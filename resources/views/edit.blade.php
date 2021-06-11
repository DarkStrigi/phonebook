<x-app-layout>
    <div class="py-12 flex justify-center">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                  <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th colspan="6" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider bg-blue-200">
                                    Edit Contact
                                </th>
                            </tr>
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                  Title
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                  First Name
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                  Last Name
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                  Number
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                  Company
                                </th>
                                <th scope="col" class="relative px-6 py-3">
                                  <span class="sr-only">Edit</span>
                                </th>
                              </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <form action="/contact/{{ $item->id }}" method="POST">
                                    @csrf
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <input type="text" name="title" id="title" value="{{ $item->Title }}" class="rounded-lg border-none placeholder-gray-400">
                                        @error('title')
                                            {{ $message }}
                                        @enderror
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <input type="text" name="firstname" id="firstname" value="{{ $item->First_name }}" class="rounded-lg border-none placeholder-gray-400">
                                        @error('firstname')
                                            {{ $message }}
                                        @enderror
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <input type="text" name="lastname" id="lastname" value="{{ $item->Last_name }}" class="rounded-lg border-none placeholder-gray-400">
                                        @error('lastname')
                                            {{ $message }}
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" name="number" id="number" value="{{ $item->Number }}" class="rounded-lg border-none placeholder-gray-400">
                                        @error('number')
                                            {{ $message }}
                                        @enderror
                                    </td>
                                    <td>
                                        <input type="text" name="company" id="company" value="{{ $item->Company }}" class="rounded-lg border-none placeholder-gray-400">
                                        @error('company')
                                            {{ $message }}
                                        @enderror
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <button type="submit" class="bg-green-200 rounded-lg py-1 px-4">Save</button>
                                    </td>
                                </form>
                            </tr>
                        </tbody>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>