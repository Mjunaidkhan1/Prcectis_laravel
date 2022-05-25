<h1>hello</h1>

<table style="border: 1px solid gray" border="1">
    <tr >
        <td>id</td>
        <td>firstName</td>
        <td>lastName</td>
         <td>email</td>
         <td style="padding: 0 10px">profile</td>


    </tr>

    @foreach ($res as $item)

    <tr>
        <td> {{ $item['id'] }}</td>
        <td>{{ $item['first_name'] }}</td>
        <td>{{ $item['last_name'] }}</td>

        <td>{{ $item['email'] }}</td>
        <td style="padding: 0 10px"><img src={{ $item['avatar'] }} style="height: 40 ;width: 40;border-radius: 100px" alt=""></td>




    </tr>
    @endforeach
</table>

