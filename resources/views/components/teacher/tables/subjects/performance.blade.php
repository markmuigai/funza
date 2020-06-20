<table class="table p-5 bg-transaparent">
    <tr>
        <th>Subject</th>
        <th>Average score</th>
        <th>Actions</th>
    </tr>
    @foreach ($subjects as $subject)
        <tr>
          <div class="accordion" id="accordionExample1">
            <td>{{$subject->name}}</td>
            @if ($classroom->subjectScore($subject->id)!==0)
              <td>{{$classroom->subjectScore($subject->id)}}%</td>
            @else
              <td>Pending</td>
            @endif
            <td>
                <a href="{{ Route('teacher.performance.results.subjects.show', ['subject' => $subject]) }}" class="btn btn-primary btn-sm">Detailed Performance Data</a>
                <button class="btn btn-success btn-sm" type="button" data-toggle="modal" data-target="#performanceSummary-{{$subject->id}}" aria-expanded="true" aria-controls="collapseOne">
                  View Performance Summary
              </button>
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

