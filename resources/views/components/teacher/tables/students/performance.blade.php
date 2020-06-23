<table class="table p-5 bg-transaparent">
    <tr>
        <th>Name</th>
        <th>Current Class</th>
        <th>Total score</th>
        <th>Actions</th>
    </tr>
    @foreach ($students as $student)
        <tr>
          <div class="accordion" id="accordionExample1">
            <td>{{$student->name}}</td>
            <td>{{$student->currentClass()->name}}</td>
            @if ($student->recentTotalScore()!==null)
              <td>{{$student->recentTotalScore()}}%</td>
            @else
            <td>Pending</td>
            @endif
            <td>
                <a href="{{ Route('teacher.performance.results.students.show', ['student' => $student]) }}" class="btn btn-primary btn-sm">Detailed Performance Data</a>
                <button class="btn btn-success btn-sm" type="button" data-toggle="modal" data-target="#performanceSummary-{{$student->id}}" aria-expanded="true" aria-controls="collapseOne">
                  View Performance Summary
              </button>
              <!-- Performance Summary Modal -->
              @component('components.teachermodals.performanceSummary', [
                'student' => $student,
                'subjects' => $subjects
              ]) @endcomponent
            </td>
          </div>
        </tr>
    @endforeach
</table>

