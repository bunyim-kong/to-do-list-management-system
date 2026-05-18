<form action="/tests" method="POST">
    <input type="text" name="name" placeholder="Name"> <br> <br>
    <input type="text" name="phone_number" placeholder="Phone-Number"> <br> <br>
    <button type="submit">Send</button> 

</form>

<table>
  <tr>
    <th>Name</th>
    <th>Phone-Number</th>
  </tr>

  @foreach($tests as $test)

  <tr>
    <td>{{ $test->name}}</td>
    <td>{{ $test->number}}</td>
  </tr>
  @endforeach
</table>
    