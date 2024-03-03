@extends('layouts.app')
 
@section('title', 'Create Product')
 
@section('contents')
<div class="flex justify-center items-center h-full">
    <div class="max-w-md w-full p-6 border border-gray-300 rounded-lg">
        <h1 class="font-bold text-2xl text-center mb-6">Add Product</h1>
        <form action="{{ route('admin/products/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 gap-y-4">
                <div class="border-b border-gray-300">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                    <input type="text" name="title" id="title" class="form-input">
                </div>
                <div class="border-b border-gray-300">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Price</label>
                    <input id="price" name="price" type="text" class="form-input">
                </div>
                <div class="border-b border-gray-300">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Product Code</label>
                    <input id="product_code" name="product_code" type="text" class="form-input">
                </div>
                <div class="border-b border-gray-300">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Upload File/Image</label>
                    <input id="file-upload" name="image" type="file" class="form-input">
                </div>
                <div class="border-b border-gray-300">
                    <label class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                    <textarea name="description" placeholder="Description" rows="3" class="form-textarea"></textarea>
                </div>
                <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-md font-semibold hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-opacity-50">Submit</button>
            </div>
        </form>
        @if (session('status'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">{{ session('status') }}</span>
            </div>
        @endif
    </div>
</div>
@endsection
