<table class="table p-5 bg-transaparent">
  <tr>
      <th>Subject</th>
      <th>Student Average score</th>
      <th>Class {{$classroom->name}} average score</th>
      <th>Actions</th>
  </tr>
  @foreach ($subjects as $subject)
      <tr>
        <div class="accordion" id="accordionExample1">
          <td>{{$subject->name}}</td>
          @if ($student->recentSubjectScore($subject->id)!==null)
            <td>{{$student->recentSubjectScore($subject->id)}}%</td>
            <td>{{$classroom->recentSubjectScore($subject->id)}}%</td>
          @else
            <td>Pending</td>
            <td>Pending</td>
          @endif
          <td>
              <a href="{{ Route('schoolAdmin.performance.results.students.subjects.show', ['student' => $student, 'subject' => $subject]) }}" class="btn btn-primary btn-sm">Detailed Performance Data</a>
              <button class="btn btn-success btn-sm" type="button" data-toggle="modal" data-target="#performanceSummary-{{$subject->id}}" aria-expanded="true" aria-controls="collapseOne">
                View Performance Summary
            </button>
            <!-- Performance Summary Modal -->
            {{-- @component('components.schoolAdmin.modals.performanceSummary', [
              'student' => $student,
              'subjects' => $subjects
            ]) @endcomponent --}}
          </td>
        </div>
      </tr>
  @endforeach
</table>

