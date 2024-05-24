<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="container mx-auto mt-10 mb-10 max-w-lg">
    <form action="{{ route('task.store') }}" method="POST">
        @csrf
        @if ($errors->any())
            <div class="mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-red-500">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="mb-4">
            <label for="title" class="block uppercase text-gray-700 mb-2">
                Title
            </label>
            @error('title')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <input type="text" name="title" id="title" class="border border-gray-300 p-2 w-full">
        </div>
        <div class="mb-4">
            <label for="description" class="block uppercase text-gray-700 mb-2">
                Description
            </label>
            @error('description')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <textarea name="description" id="description" cols="30" rows="5" class="border border-gray-300 p-2 w-full"></textarea>
        </div>
        <div class="mb-4">
            <label for="long_description" class="block uppercase text-gray-700 mb-2">
                Long Description
            </label>
            @error('long_description')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <textarea name="long_description" id="long_description" cols="30" rows="5" class="border border-gray-300 p-2 w-full"></textarea>
        </div>
        <div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Thêm sản phẩm
            </button>
        </div>
    </form>
</body>

</html>
