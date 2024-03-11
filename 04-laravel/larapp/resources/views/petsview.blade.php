
<table>
<thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Kind</th>
        <th>Breed</th>
        <th>Location</th>
    </tr>
</thead>
<tbody>
@foreach($pets as $pet)
<tr>
    <td>{{ $pet->id}}</td>
    <td>{{ $pet->name}}</td>
    <td>{{ $pet->kind}}</td>
    <td>{{ $pet->breed}}</td>
    <td>{{ $pet->location}}</td>


</tr>

@endforeach
</tbody>
</table>
