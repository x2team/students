

<form id="student-form" action="{{ route('admin.student.update', $student->id)}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
    @method("PUT")
    @csrf
    
<!-- Modal Edit-->
<div class="modal fade" id="edit-student" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="edit-studentLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit-studentLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <input type="hidden" id="studentid" value="" name="id">  
                <div class="form-group">
                    <label for="name">Tên Sinh vien</label>
                    <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $student->name) }}" placeholder="Nhập...">
                    @error('name')
                        <span class="invalid-feedback">{!! $errors->first('name') !!}</span>
                    @enderror
                </div>
    
                <div class="form-group">
                    <select id="gender" name="gender" class="form-control select2bs4 @error('gender') is-invalid @enderror" data-placeholder="Select a gender">
                        <option value="nam" {{ old('gender', $student->gender) == 'nam' ? "selected":""}}>Nam</option>
                        <option value="nu" {{ old('gender', $student->gender) == 'nu' ? "selected":""}}>Nữ</option>
                        <option value="khac" {{ old('gender', $student->gender) == 'khac' ? "selected":""}}>Giới tính thứ 3</option>
                    </select>
                    @error('gender')
                        <span class="invalid-feedback">{{ $errors->first('gender') }}</span>
                    @enderror
                </div>
    
                {{-- <div class="form-group @error('image') has-error @enderror">
                    <label for="image" class="control-label">Pick Image Here</label>
                    <br>
                    @error('image')
                        <span class="help-block">{{ $errors->first('image') }}</span>
                    @enderror
                    
                    <img id="image" width="40px" height="40px" src="#">
                    <br><br>
                    <input type="file" name="image">
                </div> --}}
                <div class="form-group @error('image') has-error @enderror">
                    <label for="image" class="control-label">Pick Image Here</label>
                    <br>
                    @error('image')
                        <span class="help-block">{{ $errors->first('image') }}</span>
                    @enderror
                    
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
                            <img id=image class="lazyload" 
                                src="#">
                        </div>
                        <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;">
                        </div>
                        <div>
                            <span class="btn btn-success btn-file">
                                <span class="fileinput-new">Select image</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="image">
                            </span>
                            <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                    </div>
                </div>
    
                <!-- Date dd/mm/yyyy -->
                <div class="form-group">
                    <label>Birthday:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                        </div>
                        <input id="birthday" name="birthday" type="text" class="form-control @error('birthday') is-invalid @enderror" data-inputmask-alias="datetime"
                            data-inputmask-inputformat="dd/mm/yyyy" data-mask
                            value="{{ old('birthday', $student->birthday) }}">
                        
                        @error('birthday')
                            <span class="invalid-feedback">{{ $errors->first('birthday') }}</span>
                        @enderror
                    </div>
                  </div>
    
                  <div class="form-group">
                    <label for="point">Điểm</label>
                    <input name="point" type="number" class="form-control @error('point') is-invalid @enderror" id="point"
                        value="{{ old('point', $student->point) }}" placeholder="Nhập...">
                    @error('point')
                        <span class="invalid-feedback">{!! $errors->first('point') !!}</span>
                    @enderror
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>
</form>


{{-- <script src="http://students.test/admin/plugins/jquery/jquery-3.5.1.js"></script>
<script>    


        //Datemask dd/mm/yyyy
        $('#birthday').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' });

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        });

    
</script> --}}