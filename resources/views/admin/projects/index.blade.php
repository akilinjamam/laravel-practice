
<x-layout>
    <div class="max-w-7xl mx-auto px-6 py-10">

        {{-- Page Header --}}
        <div class="mb-8 flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold">Manage Services</h1>
                <p class="text-gray-500 mt-2">Add and manage your services.</p>
            </div>

            <a href="/admin/projects/create"
                class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg">
                + Add Service
            </a>
        </div>

        {{-- Services Table --}}
        <div class="bg-white shadow rounded-xl p-6">

            <h2 class="text-xl font-semibold mb-6">
                All Services
            </h2>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">

                    <thead>
                        <tr class="bg-gray-100 border-b">
                            <th class="p-4">#</th>
                            <th class="p-4">Title</th>
                            <th class="p-4">Description</th>
                            <th class="p-4">Created At</th>
                            <th class="p-4 text-center">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($projects as $project)
                            <tr class="border-b hover:bg-gray-50">

                                <td class="p-4">
                                    {{ $loop->iteration }}
                                </td>

                                <td class="p-4 font-medium">
                                    {{ $project->title }}
                                </td>

                                <td class="p-4 max-w-xs">
                                    {{ $project->description }}
                                </td>

                                <td class="p-4 whitespace-nowrap">
                                    {{ $project->created_at?->format('d M Y') }}
                                </td>

                                <td class="p-4">
                                    <div class="flex items-center justify-center gap-3">

                                        {{-- Edit Button --}}
                                        <a  href="/admin/projects/{{ $project->id }}/edit"
                                            class="text-blue-600 hover:text-blue-800"
                                            title="Edit Service">
                                            Edit
                                        </a>

                                        {{-- Delete Button --}}
                                        <form action="/admin/projects/{{ $project->id }}"
                                            method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this service?')">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                class="text-red-600 hover:text-red-800"
                                                title="Delete Service">
                                                Delete
                                            </button>
                                        </form>

                                    </div>
                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="p-6 text-center text-gray-500">
                                    No services found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>
        </div>

    </div>
</x-layout>
