holla messi

<form action="{{ route('task.update', ['id' => $task->id]) }}" method="POST">
    {{-- không có csrf thì nó lỗi 419 --}}
    {{-- nếu muốn có thể thêm các url cần loại trừ 
        trong app/middleware  verify csrf token--}}
    @csrf
    @method('PUT')
    {{ $errors }}
    <div class="">
        <label for="title">
            title
        </label>
        @error('title')
            <p style="color:red;">{{ $message }}</p>
        @enderror
        <input type="text" name="title" id="title" value="{{ $task->title }}">
    </div>
    <div class="">
        <label for="description">
            description
        </label>
        @error('description')
            <p style="color:red;">{{ $message }}</p>
        @enderror
        <textarea name="description" id="description" cols="30" rows="5">{{ $task->description }}</textarea>
    </div>
    <div class="">
        <label for="long_description">
            long_description
        </label>
        @error('long_description')
            <p style="color:red;">{{ $message }}</p>
        @enderror
        <textarea name="long_description" id="long_description" cols="30" rows="5">{{ $task->long_description }}</textarea>
    </div>
    <div>
        <button type="submit">Thêm sản phẩm</button>
    </div>
</form>