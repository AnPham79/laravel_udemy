<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<style type="text/tailwindcss">

</style>

<body class="container mx-auto mt-10 mb-10 max-w-lg">
    <h1>Task Detail</h1>
    <p class="py-3">
        <a class="underline decoration-1" href="{{ route('all-tasks') }}">
            Trở về danh sách task
        </a>
    </p>
    @if ($task->completed)
        <p class="font-medium text-green-500">Completed</p>
    @else
        <p class="font-medium text-red-600">Not completed</p>
    @endif


    <form action="{{ route('toggle-complete', ['task' => $task->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <button class="border-solid border-2 border-sky-500 p-1 px-2 my-3 font-medium rounded-lg" type="submit">Mark as {{ $task->completed ? 'not completed' : 'completed' }}</button>
    </form>
    <p class="font-bold">
        <a href="{{ route('task.edit', ['id' => $task->id]) }}" class="text-blue-500 hover:text-blue-700 ml-2">
            Sửa
        </a>
    </p>

    <p class="font-bold py-2">{{ $task->title }}</p>
    <p>{{ $task->description }}</p>
    <p class="py-2">{{ $task->long_description }}</p>

    <p>
        {{ $task->created_at->diffForHumans() }} - {{ $task->updated_at->diffForHumans() }}</p>
    </p>
</body>

</html>
