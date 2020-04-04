<table class="table p-5 bg-transaparent">
    <tr>
        <th>Name</th>
        <th>Actions</th>
    </tr>
    @foreach ($teachers as $teacher)
        <tr>
            <td>{{$teacher->name}}</td>
            <td><a href="#" class="btn btn-primary btn-sm">Teacher Portfolio</a></td>
        </tr>
    @endforeach
</table>