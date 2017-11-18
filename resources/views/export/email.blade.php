<html>
<table>
    <tr>
        <th>Number#</th>
        <th width="200">Name</th>
        <th width="300">Email</th>
    </tr>
    @foreach($emails as $email)
    <tr>
        <td>{{ $email->id }}</td>
        <td>{{ $email->name }}</td>
        <td>{{ $email->email }}</td>
    </tr>
    @endforeach
</table>

</html>