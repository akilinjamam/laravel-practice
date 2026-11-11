
<x-layout>
    <div class="max-w-3xl mx-auto px-6 py-10">

        <div class="mb-8">
            <h1 class="text-3xl font-bold">Create New Service</h1>
            <p class="text-gray-500 mt-2">Add a new service to your portfolio.</p>
        </div>

        <div class="bg-white shadow rounded-xl p-6">

            <form 
                  action="/admin/projects"
                  method="POST"
                  enctype="multipart/form-data"
                  class="space-y-5">
                @csrf

                <div>
                    <label class="block font-medium mb-2">Service Title</label>
                    <input type="text" name="title"
                        value="{{ old('title') }}"
                        class="w-full border rounded-lg p-3"
                        placeholder="Enter service title"
                        >

                    @error('title')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block font-medium mb-2">Description</label>
                    <textarea name="description" rows="5"
                        class="w-full border rounded-lg p-3"
                        placeholder="Enter service description"
                        required>{{ old('description') }}</textarea>

                    @error('description')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block font-medium mb-2">Service Image</label>
                    <input type="file" name="image"
                        accept="image/*"
                        class="w-full border rounded-lg p-3">

                    @error('image_path')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block font-medium mb-2">GitHub URL</label>
                    <input type="url" name="github_url"
                        value="{{ old('github_url') }}"
                        class="w-full border rounded-lg p-3"
                        placeholder="https://github.com/...">
                </div>

                <div>
                    <label class="block font-medium mb-2">Live URL</label>
                    <input type="url" name="live_url"
                        value="{{ old('live_url') }}"
                        class="w-full border rounded-lg p-3"
                        placeholder="https://example.com">
                </div>

                <div class="flex gap-3">
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg">
                        Create Service
                    </button>

                    <a 
                        class="bg-gray-200 hover:bg-gray-300 px-6 py-3 rounded-lg">
                        Cancel
                    </a>
                </div>

            </form>
        </div>
    </div>
</x-layout>
