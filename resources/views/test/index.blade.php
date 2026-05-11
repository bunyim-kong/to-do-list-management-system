<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form{
            display: flex;
            justify-content: center;
        }

        .table {
            width: 30%;
        }

        .show-data{
            display: flex;
            justify-content: center;
        }

        .child-row{
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <section>
        <div class="form">
            <form action="{{ route('test.store') }}" method="POST">
                @csrf
                <input class="" type="text" name="name" placeholder="Name">

                <BR></BR>

                <input class="form-control" type="text" name="phone_number" placeholder="Phone Number">

                <BR></BR>

                <button type="submit">Submit</button>
            </form>
        </div>

        <BR></BR>

        <div class="show-data">
            <table class="table" border="1">
                <tr class="child-row">
                    <th>Name</th>
                    <th>Phone Number</th>
                </tr>
                
                @foreach ($testsData as $test)
                <tr class="child-row">
                    <td><a href="{{ route('test.edit', $test->id) }}">Edit</a></td>
                    <td>{{ $test->name }}</td>
                    <td>{{ $test->phone_number }}</td>
                </tr>
                
                @endforeach
            </table>
        </div>
    </section>
</body>
</html>