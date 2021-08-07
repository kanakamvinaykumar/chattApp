<div class="form-group col-sm-12">
    <div class="alert alert-danger form-group col-sm-12" style="display: none" id="editValidationErrorsBox"></div>
</div>
<div class="form-group col-md-6 col-sm-12">
    {{ Form::label('name', __('messages.name')) }}<span class="red">*</span>
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'edit_role_name', 'required']) }}
</div>
<div class="form-group col-md-6 col-sm-12">
{{ Form::label('permissions', __('messages.permissions')) }}<span class="red">*</span>
<br>
<div class="row col-12">
    @foreach($permissions->get() as $permission)
        <div class="custom-control custom-checkbox col-6">
            <input id="{{ $permission->name }}" class="custom-control-input not-checkbox role-permission" type="checkbox" name="permissions[]"
                   value="{{ $permission->name }}" {{ (isset($role) && in_array($permission->name,$role->getAllPermissions()->pluck('name')->toArray())) ? 'checked' : '' }} >
            <label for="{{ $permission->name }}" class="custom-control-label">{{ $permission->display_name }}</label>
        </div>
    @endforeach
</div>
</div>
<div class="text-right form-group col-sm-12">
    {{ Form::button(__('messages.save'), ['type'=>'submit','class' => 'btn btn-primary','id'=>'btnEditSave','data-loading-text'=>"<i class='fa fa-refresh fa-spin'></i> " .__('messages.processing')]) }}
    <a type="button" href="{{ route('roles.index') }}" id="btnCancelEdit" class="btn btn-secondary close_edit_role ml-1">{{ __('messages.cancel') }}
    </a>
</div>
