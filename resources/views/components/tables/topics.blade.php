<table class="table p-5 bg-transparent">
    <tr>
        <th>Name</th>
        <th>Actions</th>
    </tr>
    @foreach ($topics as $topic)
        <tr>
            <td>{{$topic->name}}</td>
            <td>
                <a href="" class="btn btn-primary btn-sm">Track Learning outcomes</a>
            </td>
        </tr>
    @endforeach
</table>