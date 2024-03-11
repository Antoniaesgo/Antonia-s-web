<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>

            <th>Created at</th>
           
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
    <tr>
        <td>{{ $user->id}}</td>
        <td>{{ $user->fullname}}</td>
        <td>{{ $user->email}}</td>
        <td>{{\Carbon\Carbon::parse($user->birthdate)->diffForHumans()}}</td>
        
        <td>{{\Carbon\Carbon::parse($user->created_at) ->diffForHumans()}}</td>
        
    
    </tr>
    
    @endforeach
    </tbody>
    </table>
    