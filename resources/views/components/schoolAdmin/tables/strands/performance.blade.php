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
            <td>{{App\Classroom::find(21)->substrandScore($substrand->id)}}</td>
            <td>
                <a href="{{ Route('schoolAdmin.performance.results.subjects.strand.substrands.show', ['subject' => $subject, 'strand' => $substrand->strand, 'substrand' => $substrand ]) }}" class="btn btn-primary btn-sm">Detailed Performance Data</a>
                <button class="btn btn-success btn-sm" type="button" data-toggle="modal" data-target="#performanceSummary-{{$substrand->id}}" aria-expanded="true" aria-controls="collapseOne">
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

