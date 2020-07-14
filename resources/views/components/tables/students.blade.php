<table style="table-layout: fixed; width: 100%" class="table p-5 bg-transaparent text-center">
    <tr>
				<th>Name</th>
				<th>Total Score</th>
				@foreach ($subjects as $subject)
					<th style="word-wrap: break-word" class="text-wrap">{{$subject->name}}</th>
				@endforeach
        <th>Actions</th>
    </tr>
    @foreach ($students as $student)
        <tr>
						<td>{{$student->name}}</td>
						<td>
							@if ($student->recentTotalScore()==null)
								Pending
							@else
								{{$student->recentTotalScore()}}%
							@endif
						</td>
						@foreach ($subjects as $subject)
							@if ($student->recentSubjectScore($subject->id)!==null)
								<td>{{$student->recentSubjectScore($subject->id)}}%</td>
							@else
								<td>Pending</td>
							@endif
						@endforeach
						<td><a href="{{ Route('teacher.performance.results.students.show', ['student' => $student])}}" class="btn btn-primary btn-sm">View Student Performance</a></td>
        </tr>
    @endforeach
</table>