<table class="table p-5 bg-transparent">
    <tr>
        <th>Name</th>
        <th>Topics</th>
        <th>Completion Status</th>
        <th>Actions</th>
    </tr>
    @foreach ($subjects as $subject)
        <tr>
            <td>{{$subject->name}}</td>
            <td>{{$subject->topics->count()}}</td>
            <td>
							<div class="progress">
								<div class="progress-bar bg-primary" role="progressbar" style="width: 10%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
            </td>
            <td>
                <a href="{{ Route('teacher.performance.results.subjects.show', ['subject' => $subject]) }}" class="btn btn-success text-white btn-sm">Detailed Performance Data</a>
                <a href="{{ Route('teacher.classroom.subject', ['classroom'=> $classroom, 'subject' => $subject])}}" class="btn btn-info text-white btn-sm">Track Learning outcomes</a>
            </td>
        </tr>
    @endforeach
</table>