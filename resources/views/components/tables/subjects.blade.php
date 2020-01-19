<table class="table p-5 bg-transparent">
    <tr>
        <th>Name</th>
        <th>Topics</th>
        <th>Actions</th>
    </tr>
    @foreach ($subjects as $subject)
        <tr>
            <td>{{$subject->name}}</td>
            <td>{{$subject->topics->count()}}</td>
            <td>
                <a href="" class="btn btn-primary btn-sm">Track Learning outcomes</a>
            </td>
        </tr>
    @endforeach
</table>