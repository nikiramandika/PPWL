@extends('layouts.app')

@section('title', 'Products Management')

@section('page-title', 'Products Management')

@section('content')
    <div class="flex justify-between items-center mb-6 bg-gradient-to-r from-blue-500 to-indigo-500 text-white p-4 rounded-lg shadow">
        <h2 class="text-2xl font-bold">Products</h2>
        <div>
            <a href="{{ route('products.create') }}" class="bg-white text-blue-500 hover:bg-gray-200 px-4 py-2 rounded shadow font-semibold">
                <i class="fas fa-plus mr-2"></i> Add Product
            </a>
        </div>
    </div>

    <!-- Products Table -->
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="p-4 bg-gradient-to-r from-gray-100 to-gray-300 border-b border-gray-200">
            <h3 class="text-lg font-semibold text-gray-800">Product List</h3>
        </div>
        <div class="p-4 overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-300">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Category</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Price</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Stock</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr class="hover:bg-gray-100">
                        <td class="px-6 py-4 text-sm font-medium text-gray-900">1</td>
                        <td class="px-6 py-4 text-sm text-gray-700">Laptop Pro</td>
                        <td class="px-6 py-4 text-sm text-gray-700">Electronics</td>
                        <td class="px-6 py-4 text-sm text-gray-700">$1,299.00</td>
                        <td class="px-6 py-4 text-sm text-gray-700">15</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">In Stock</span>
                        </td>
                        <td class="px-6 py-4 text-sm font-medium">
                            <a href="{{ route('products.edit')}}" class="text-blue-600 hover:text-blue-800 mr-3">Edit</a>
                            <a href="#" class="text-red-600 hover:text-red-800">Delete</a>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-100">
                        <td class="px-6 py-4 text-sm font-medium text-gray-900">2</td>
                        <td class="px-6 py-4 text-sm text-gray-700">Wireless Earbuds</td>
                        <td class="px-6 py-4 text-sm text-gray-700">Audio</td>
                        <td class="px-6 py-4 text-sm text-gray-700">$149.99</td>
                        <td class="px-6 py-4 text-sm text-gray-700">42</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">In Stock</span>
                        </td>
                        <td class="px-6 py-4 text-sm font-medium">
                            <a href="{{ route('products.edit')}}" class="text-blue-600 hover:text-blue-800 mr-3">Edit</a>
                            <a href="#" class="text-red-600 hover:text-red-800">Delete</a>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-100">
                        <td class="px-6 py-4 text-sm font-medium text-gray-900">3</td>
                        <td class="px-6 py-4 text-sm text-gray-700">Smart Watch</td>
                        <td class="px-6 py-4 text-sm text-gray-700">Wearables</td>
                        <td class="px-6 py-4 text-sm text-gray-700">$299.00</td>
                        <td class="px-6 py-4 text-sm text-gray-700">0</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">Out of Stock</span>
                        </td>
                        <td class="px-6 py-4 text-sm font-medium">
                            <a href="{{ route('products.edit')}}" class="text-blue-600 hover:text-blue-800 mr-3">Edit</a>
                            <a href="#" class="text-red-600 hover:text-red-800">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection