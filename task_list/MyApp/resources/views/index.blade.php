<h1>The list of tasks</h1>

{{-- @if(count($tasks))
    <div>There are tasks !</div>
    <ul>
        @foreach ($tasks as $item)
            <li>{{ $item->title }}</li>
        @endforeach
    </ul>
@else
    <div class="">There are no tasks !</div>
@endif --}}

<ul>
    @forelse ($tasks as $item)
        <li>{{ $item->title }}</li>
    @empty
        <div class="">There are no tasks !</div>
    @endforelse
</ul>