<html>
<table>
    <tr>
        <th>Number#</th>
        <th>Nick Name</th>
        <th>Fullname</th>
        <th>Mobile</th>
    </tr>
    @foreach($sms as $sm)
        <tr>
            <td>{{ $sm->id }}</td>
            <td>{{ $sm->nick_name }}</td>
            <td>{{ $sm->full_name }}</td>
            <td>{{ $sm->mobile }}</td>
        </tr>
    @endforeach
</table>

</html>