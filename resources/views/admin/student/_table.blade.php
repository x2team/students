<table id="student" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th width="80">Action</th>
            <th>Student Name</th>
            <th>Gender</th>
            <th>Image</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
            <tr>
                <td>
                    <form action="{{ route('admin.student.destroy', $student->id) }}" method="POST" accept-charset="UTF-8">
                        @csrf
                        @method("DELETE")
                        <a title="Edit Student" href="{{ route('admin.student.edit', $student->id) }}" class="btn btn-default">
                            <i class="fa fa-edit"></i>
                        </a>
                        <button title="Delete student" onclick="return confirm('Chắc chắn chưa?');" type="submit" class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </form>
                </td>
                <td>{{ Str::limit($student->name, 60) }}</td>
                <td>{{ $student->gender }}</td>
                <td>
                    <img src="#" alt="">
                </td>
                <td>{{ $student->birthday }}</td>
            </tr>
        @endforeach
    </tbody>
   
</table>