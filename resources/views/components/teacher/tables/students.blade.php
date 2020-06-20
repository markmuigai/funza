<table class="table p-5 bg-transaparent">
    <tr>
        <th>Name</th>
        <th>Current Class</th>
        <th>Actions</th>
    </tr>
    @foreach ($students as $student)
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->currentClass()->name}}</td>
            <td>
                <a href="#" class="btn btn-primary btn-sm">Student Performance</a>
                <a href="#" class="btn btn-success btn-sm">Student Details</a>
                <a href="#" class="btn btn-danger btn-sm">Deactivate</a>
            </td>
        </tr>
    @endforeach
</table>