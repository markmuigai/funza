<table class="table p-5 bg-transaparent">
    <tr>
        <th>Name</th>
        <th>Actions</th>
    </tr>
    @foreach ($outcomes as $outcome)
        <tr>
            <td>The students ability to {{$outcome->name}}</td>
            <td><button class="btn btn-success text-white btn-sm">Update</button></td>
        </tr>
    @endforeach
    <tr>
        <td>
            <button class="btn btn-primary btn-sm">Add New</button>
        </td>
    </tr>
</table>