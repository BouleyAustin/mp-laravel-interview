<div>
    <div class="bg-white overflow-hidden shadow-xs rounded-xl border border-gray-200 bg-white">
        <div class="p-3">
            <div class="flex flex-row justify-between items-center">
                <div class="flex flex-row items-center gap-3">
                    <a href="{{ route('home') }}">
                        <x-logo class="w-auto h-8 mx-auto text-indigo-600" />
                    </a>
                    <p class="font-bold">Users Table</p>
                </div>
                <div class="mt-1">
                    <input wire:model="search"
                           wire:keydown.enter="search"
                           placeholder="Search for users..."
                           type="text"
                           class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-48 sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 pt-6">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden border-b border-t border-gray-200 rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-bold text-gray-900 uppercase">ID</th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-gray-900 uppercase">Email</th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-gray-900 uppercase">Name</th>
                                <th class="px-6 py-3 text-left text-xs font-bold text-gray-900 uppercase">Created At</th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($users as $user)
                                <tr class="hover:bg-gray-50" wire:click="show('{{ $user->email }}')">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $user->id }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $user->email }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $user->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $user->created_at }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="p-2">
                {{$users->links()}}
            </div>
        </div>
    </div>
</div>
