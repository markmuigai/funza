<table class="table p-5 bg-transaparent">
    <tr>
        <th>Substrand</th>
        <th>Average score</th>
        <th>Actions</th>
    </tr>
    @foreach ($substrands as $substrand)
        <tr>
          <div class="accordion" id="accordionExample1">
            <td>{{$substrand->name}}</td>
            @if (App\Classroom::find(21)->substrandScore($substrand->id)==0)
                <td>Pending</td>
            @else
                <td>{{App\Classroom::find(21)->substrandScore($substrand->id)}}%</td>
            @endif
            <td>
                <a href="{{ Route('teacher.performance.results.subjects.strand.substrands.show', ['subject' => $subject, 'strand' => $substrand->strand, 'substrand' => $substrand ]) }}" class="btn btn-primary btn-sm">Detailed Performance Data</a>
              <!-- Performance Summary Modal -->
              {{-- @component('components.teachermodals.performanceSummary', [
                'student' => $student,
                'subjects' => $subjects
              ]) @endcomponent --}}
            </td>
          </div>
        </tr>
    @endforeach
</table>

