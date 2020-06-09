

<table id="student" class="table table-bordered table-striped display">
    <thead>
        <tr>
            <th>
                <input name="checkedAll" type="checkbox" id="checkedAll">
                <label for="checkedAll">STT</label>
            </th>
            <th width="80"> Action</th>
            <th>Student Name</th>
            <th>Gender</th>
            <th>Image</th>
            <th>Point</th>
            <th>Birthday</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $key => $student)           
            <tr>
                <td>
                    <label>{{ $key+1 }}</label>
                    <input class="checkbox" type="checkbox" value="{{ $student->id }}" name="options[]">
                    
                </td>
                <td>
                    <form action="{{ route('admin.student.destroy', $student->id) }}" method="POST" accept-charset="UTF-8">
                        @csrf
                        @method("DELETE")
                        {{-- <a disabled title="Edit Student" href="{{ route('admin.student.edit', $student->id) }}" class="btn btn-sm btn-default">
                            <i class="fa fa-edit"></i>
                        </a> --}}
                        <button title="Delete student" onclick="return confirm('Chắc chắn chưa?');" type="submit" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </form>

                    
                    <!-- Button trigger modal -->
                    <a type="button" class="btn btn-sm btn-primary edit" data-toggle="modal" data-target="#edit-student"
                        data-name="{{ $student->name }}"
                        data-gender="{{ $student->gender }}"
                        data-image_student="{{ $student->image_url }}"
                        data-birthday="{{ $student->birthday }}"
                        data-point="{{ $student->point }}"
                        data-id="{{ $student->id }}">
                        <i class="fa fa-edit"></i>
                    </a>

                </td>
                <td>{{ Str::limit($student->name, 60) }}</td>
                <td>{{ $student->gender }}</td>
                <td>
                    <img src="{{ $student->image_url }}" alt="" width="30px" height="40px">
                </td>
                <td>{{ number_format($student->point,0,',', '.') }}</td>
                <td>{{ $student->birthday }}</td>
                <td><abbr title="{{ $student->dateUpdated(true) }}">{{ $student->dateUpdated() }}<abbr></td>
            </tr>
        @endforeach
    </tbody>   
</table>

@include('admin.student._form-modal')
