<table class="table p-5 bg-transaparent">
    <tr>
				<th>Name</th>
				<th colspan="2">
					<div class="row">
						<div class="col-md-2 d-flex justify-content-center">
							Total score
						</div>
						<div class="col-md-5 d-flex justify-content-center">
							Mathematics Activities score
						</div>
					</div>
				</th>
        <th>Actions</th>
    </tr>
    @foreach ($students as $student)
        <tr>
						<td>{{$student->name}}</td>
						<td colspan="2">
							<div class="row">
								<div class="col-md-2 d-flex justify-content-center">
									{{$student->totalScore()}}
								</div>
								<div class="col-md-5 d-flex justify-content-center">
									{{$student->subjectScore($subject_id = 1 )}}
								</div>
							</div>
						</td>
						<td><a href="{{ Route('teacher.performance.results.students.show', ['student' => $student])}}" class="btn btn-primary btn-sm">View Student Performance</a></td>
        </tr>
    @endforeach
</table>