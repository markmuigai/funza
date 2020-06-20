<table class="table table-hover">
    <tbody>
      <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Actions</th>
      </tr>
      @foreach ($teachers as $teacher)
          <tr>
              <td>{{ $teacher->name }}</td>
              <td>{{ $teacher->email }}</td>
              <td>
                <a href="#" class="btn btn-primary btn-sm">View Performance</a>
                <a href="{{ Route('teacherteachers.class-assignment', ['teacher' => $teacher]) }}" class="btn btn-success btn-sm">Edit classes</a>
              </td>
          </tr>
      @endforeach
  </tbody>
</table>
