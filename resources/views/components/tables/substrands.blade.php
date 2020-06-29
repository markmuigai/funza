<table class="table p-5 bg-transparent">
    <tr>
        <th>Name</th>
        <th>Actions</th>
    </tr>
    @foreach ($substrands as $substrand)
        <tr>
						<td>{{$substrand->name}}</td>	
            <td>
							<a class="btn btn-primary btn-sm m-2" 
								href="{{ Route('teacher.classroom.subject.topic.outcome-result.create', ['classroom' => $classroom, 'subject'=> $subject, 'substrand' => $substrand, 'assessment_count' => $substrand->assessmentcount($classroom->currentStudents())]) }}">
								Assess Learning outcomes
							</a>
							<button class="btn btn-warning m-2 text-white btn-sm" type="button" data-toggle="collapse" data-target="#collapseOne{{$substrand->id}}" aria-expanded="true" aria-controls="collapseOne{{$substrand->id}}">
								Mark as Complete
							</button>
            </td>
        </tr>
    @endforeach
</table>