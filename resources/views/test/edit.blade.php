<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('test.edit', $test->id) }} method="POST">
        @csrf
        @method('PUT')

        <input class="" type="text" name="name" placeholder="Name" value="{{ $test->name }}">
        <BR></BR>

        <input class="form-control" type="text" name="phone_number" value="{{ $test->phone_number }}">

        <BR></BR>

        <button type="submit">Update</button>
    </form>
</body>
</html>