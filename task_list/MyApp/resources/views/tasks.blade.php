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
    <h1 class="text-2xl font-bold mb-4">All tasks</h1>
    <nav class="my-2 text-gray-700 underline decoration-1">
        <a href="{{ route('task.create') }}" class="hover:text-gray-500">
            Thêm task tại đây.
        </a>
    </nav>
    <br>
    @if (session()->has('message'))
        <p class="text-green-600">{{ session()->get('message') }}</p>
    @endif
    <ul>
        @foreach ($tasks as $item)
            <li class="mb-2">
                <a href="{{ route('show-task', ['id' => $item->id]) }}" 
                   class="{{ $item->completed ? 'line-through font-bold' : '' }} hover:text-gray-500">
                    {{ $item->title }}
                </a>
            </li>
        @endforeach
    </ul>
    <div class="mt-4">
        {{ $tasks->links() }}
    </div>
</body>

</html>
