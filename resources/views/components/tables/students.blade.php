<table class="table p-5 bg-transaparent">
    <tr>
        <th>Name</th>
        <th>Actions</th>
    </tr>
    @foreach ($students as $student)
        <tr>
            <td>{{$student->name}}</td>
            <td><a href="" class="btn btn-primary btn-sm">Student Portfolio</a></td>
        </tr>
    @endforeach
</table>