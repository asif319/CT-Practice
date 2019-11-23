
@include('error.error')
<form action="{{ route('data.edit.update', [$data->id]) }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}



    Name: <br>
    <input type="text" name="name" value="{{ $data->name }}">

    <br>

    Task: <br>
    <input type="text" name="task" value="{{ $data->task }}">
    <br>

    Image: <br>
    <input type="file" name="image">
    <br>
    <br>
    <input type="submit">


</form>
