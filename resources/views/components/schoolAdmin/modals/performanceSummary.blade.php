<div class="modal fade" id="performanceSummary-{{$student->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="performanceSummaryLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
					<h5 class="modal-title" id="performanceSummaryLabel">{{$student->name}} Performance</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
			</div>
			<div class="modal-body">
					<table class="table">
						<tr>
								<th>Subject</th>
								<th>Term 1 score</th>
								<th>Term 2 score</th>
								<th>Term 3 score</th>
						</tr>
						@foreach($subjects as $subject)
							<tr>
									<td>{{$subject->name}}</td>
									<td>30%</td>
									<td>30%</td>
									<td>30%</td>
							</tr>
						@endforeach
					</table>
			</div>
			<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
			</div>
	</div>
</div>