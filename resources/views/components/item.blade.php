<tr>
    <td class="px-6 py-4 whitespace-nowrap">
      <div class="flex items-center">
        <div class="ml-4">
          <div class="text-sm font-medium text-gray-900">
             {{ $item->Title }}
          </div>
        </div>
      </div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap">
      <div class="text-sm text-gray-900">{{ $item->First_name }}</div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap">
        <div class="text-sm text-gray-900">{{ $item->Last_name }}</div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
      {{ $item->Number }}
    </td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
        {{ $item->Company }}
      </td>
    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
      <a href="/contact/{{ $item->id }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
      <span class="mx-1">|</span>
      <form action="/contact/{{ $item->id }}" method="POST">
        @csrf
        @method("DELETE")
        <button class="text-red-600 hover:text-indigo-900">Delete</button>
      </form>
    </td>
  </tr>