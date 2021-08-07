<div class="form-group col-sm-12">
    <div class="alert alert-danger" style="display: none" id="validationErrorsBox"></div>
</div>
<div class="form-group col-md-6 col-sm-12">
    {{ Form::label('name', __('messages.name')) }}<span class="red">*</span>
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'role_name', 'required']) }}
</div>
<div class="form-group col-md-6 col-sm-12">
    {{ Form::label('permissions', __('messages.permissions')) }}<span class="red">*</span>
    <br>
    <div class="row col-12">
        @foreach($permissions->get() as $permission)
            <div class="custom-control custom-checkbox col-6">
                <input id="{{ $permission->name }}" class="custom-control-input not-checkbox role-permission" type="checkbox" name="permissions[]"
                       value="{{ $permission->name }}">
                <label for="{{ $permission->name }}" class="custom-control-label">{{ $permission->display_name }}</label>
            </div>
        @endforeach
    </div>
</div>
<div class="text-right form-group col-sm-12">
    {{ Form::button(__('messages.save'), ['type'=>'submit','class' => 'btn btn-primary','id'=>'btnCreateRole','data-loading-text'=>"<i class='fa fa-refresh fa-spin'></i> " .__('messages.processing')]) }}
    <a type="button" href="{{ route('roles.index') }}" id="btnRoleCancel" class="btn btn-secondary close_create_role ml-1">{{ __('messages.cancel') }}
    </a>
</div>
