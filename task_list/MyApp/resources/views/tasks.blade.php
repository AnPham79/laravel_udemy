<h1>All tasks</h1>

@foreach ($tasks as $item)
    <a href="{{ route('show-task', ['id' => $item->id]) }}">{{ $item->title }}</a>
    <br>
@endforeach