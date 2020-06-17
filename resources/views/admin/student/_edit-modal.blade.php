




    
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
            
            
        <form id="edit-modal" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                
                <div class="form-group">
                    <div class="alert alert-danger" style="display:none">
                        <ul></ul>
                    </div>
                </div>

                <input type="hidden" id="id" value="" name="id">

                <div class="form-group">
                    <label for="name">Tên Sinh vien</label>
                    <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="">
                    <span class="invalid-feedback"></span>
                </div>
    
                <div class="form-group">
                    <select id="gender" name="gender" class="form-control select2bs4" data-placeholder="Select a gender">
                        <option value="nam">Nam</option>
                        <option value="nu">Nữ</option>
                        <option value="khac">Giới tính thứ 3</option>
                    </select>
                    <span class="invalid-feedback"></span>
                </div>
    
                <div class="form-group">
                    <label for="image" class="control-label">Pick Image Here</label>
                    <br>
                    
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
                            <img id="student_image" class="lazyload" src="#">
                        </div>
                        <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;">
                        </div>
                        <div>
                            <span class="btn btn-success btn-file">
                                <span class="fileinput-new">Select image</span>
                                <span class="fileinput-exists">Change</span>
                                <input name="image" id="image" type="file">
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
                        <input id="birthday" name="birthday" type="text" class="form-control" data-inputmask-alias="datetime"
                            data-inputmask-inputformat="dd/mm/yyyy" data-mask value="">
                        <span class="invalid-feedback"></span>
                    </div>
                  </div>
    
                  <div class="form-group">
                    <label for="point">Điểm</label>
                    <input name="point" type="number" class="form-control" id="point"
                        value="" placeholder="Nhập...">
                    <span class="invalid-feedback"></span>
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
        </div>
    </div>
</div>

