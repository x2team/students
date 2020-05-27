
@csrf
<div class="col-8">
    <div class="card card-default">
        <div class="card-header">
           
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
        </div>

        <div class="card-body">
            <div class="form-group">
                <label for="name">Tên Sinh vien</label>
                <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name', $student->name) }}" placeholder="Nhập...">
                @error('name')
                    <span class="invalid-feedback">{!! $errors->first('name') !!}</span>
                @enderror
            </div>

            <div class="form-group">
                <select name="gender" class="form-control select2bs4 @error('gender') is-invalid @enderror" data-placeholder="Select a State">
                    <option value="nam" {{ old('gender', $student->gender) == 'nam' ? "selected":""}}>Nam</option>
                    <option value="nu" {{ old('gender', $student->gender) == 'nu' ? "selected":""}}>Nữ</option>
                    <option value="khac" {{ old('gender', $student->gender) == 'khac' ? "selected":""}}>Giới tính thứ 3</option>
                </select>
                @error('gender')
                    <span class="invalid-feedback">{{ $errors->first('gender') }}</span>
                @enderror
            </div>

            <div class="form-group @error('image') has-error @enderror">
                <label for="image" class="control-label">Pick Image Here</label>
                <br>
                @error('image')
                    <span class="help-block">{{ $errors->first('image') }}</span>
                @enderror
                
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
                        <img class="lazyload"
                            src="{{ ($student->image_url) ?: 'https://place-hold.it/200x150?text=246x384 or 450x600&italic&bold' }}">
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
                    <input id="datemask" name="birthday" type="text" class="form-control" data-inputmask-alias="datetime"
                        data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                </div>
              </div>

        </div>
    </div>
</div>

<div class="col-4">
    <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Published</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
        </div>
       
        <div class="card-footer">
            <div class="float-left">
                <button type="submit" class="btn btn-primary">{{ $btnText }}</button>
            </div>
            <div class="float-right">
                <a href="{{ route('admin.student.index') }}" class="btn btn-default">Cancel</a>
            </div>
        </div>
    </div>

    
</div>