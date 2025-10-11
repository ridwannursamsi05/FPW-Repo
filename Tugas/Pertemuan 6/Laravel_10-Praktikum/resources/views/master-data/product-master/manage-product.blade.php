<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Manage Master') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container mx-auto mt-5">

                        {{-- Display success message --}}
                        <x-auth-session-status class="mb-4 bg-gray-50 border border-gray-200 rounded-lg shadow-sm px-4 py-3" :status="session('success')" />

                        <div class="flex items-center justify-between mb-5 bg-gray-50 border border-gray-200 rounded-lg shadow-sm px-4 py-3">
                            <h2 class="text-2xl font-bold">Table Product</h2>

                            <a href="{{ route('product-create') }}"
                                class="px-4 py-2 text-sm font-semibold text-white bg-green-600 rounded-md hover:bg-green-700">
                                + Add Product
                            </a>
                        </div>

                        {{-- Table to display products --}}
                        <div class="overflow-x-auto border border-gray-200 rounded-lg shadow-sm">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-600 uppercase">
                                            id</th>
                                        <th
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-600 uppercase">
                                            Product Name</th>
                                        <th
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-600 uppercase">
                                            Unit</th>
                                        <th
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-600 uppercase">
                                            Type</th>
                                        <th
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-600 uppercase">
                                            Qty</th>
                                        <th
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-600 uppercase">
                                            Producer</th>
                                        <th
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-center text-gray-600 uppercase">
                                            Actions</th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-gray-200">
                                    @forelse ($products as $index => $product)
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 text-sm text-gray-700">{{ $index + 1 }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-700">{{ $product->product_name }}
                                            </td>
                                            <td class="px-6 py-4 text-sm text-gray-700">{{ $product->unit }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-700">{{ $product->type }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-700">{{ $product->qty }}</td>
                                            <td class="px-6 py-4 text-sm text-gray-700">{{ $product->producer }}
                                            </td>
                                            <td class="px-6 py-4 text-sm text-center">
                                                <div class="flex items-center justify-center space-x-2">
                                                    <!-- Tombol Edit -->
                                                    <a href="{{ route('product-edit', $product->id) }}"
                                                        class="px-3 py-1 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                                        Edit
                                                    </a>

                                                    <!-- Tombol Delete -->
                                                    <form action="{{ route('product-destroy', $product->id) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('Are you sure want to delete this product?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="px-3 py-1 text-sm font-medium text-white bg-red-600 rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="px-6 py-4 text-sm text-center text-gray-500">
                                                No product data available.
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    @vite('resources/js/app.js')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
