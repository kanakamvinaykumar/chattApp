<div class="form-group col-sm-6">
    {!! Form::label('topic', __('messages.meeting.meeting_title').':' )!!}<span class="red">*</span>
    {!! Form::text('topic', isset($meeting) ? $meeting->topic : null, ['class' => 'form-control', 'required']) !!}
</div>

<div class="form-group col-sm-3 col-md-6 col-lg-6 col-xl-3">
    {!! Form::label('start_time', __('messages.meeting.meeting_date').':' )!!}<span class="red">*</span>
    {!! Form::text('start_time', isset($meeting) ? $meeting->start_time : null, ['class' => 'form-control start-time', 'required', 'autocomplete' => 'off']) !!}
</div>

<div class="form-group col-sm-6 col-md-6 col-lg-6 col-xl-3">
    {!! Form::label('time_zone', __('messages.meeting.time_zone').':' )!!}<span class="red">*</span>
    {!! Form::select('time_zone', $timeZones, isset($meetingTimeZone) ? $meetingTimeZone : null, ['class' => 'form-control time-zone', 'placeholder' => 'Select timezone' ]) !!}
</div>

<div class="form-group col-sm-6 col-md-6 col-lg-6 col-xl-3">
    {!! Form::label('duration', __('messages.meeting.meeting_duration').':')!!}<span class="red">*</span>
    {!! Form::number('duration', isset($meeting) ? $meeting->duration : null, ['class' => 'form-control', 'required']) !!}
</div>

<div class="form-group col-sm-6 col-md-6 col-lg-6 col-xl-3">
    {!! Form::label('members',__('messages.meeting.staff_list').':')!!}<span class="red">*</span>
    {!! Form::select('members[]', $users, isset($members) ? $members : null, ['class' => 'form-control members', 'multiple']) !!}
</div>

<div class="form-group col-sm-6 col-md-3 col-lg-6 col-xl-3">
    {!! Form::label('host_video',__('messages.meeting.host_video').':')!!}<span class="red">*</span>
    <div>
    {{ Form::radio('host_video', '1' , true) }}&nbsp{{__('messages.meeting.enabled')}}&nbsp;
    {{ Form::radio('host_video', '0' , false) }}&nbsp{{__('messages.meeting.disabled')}}&nbsp;
    </div>
</div>

<div class="form-group col-sm-6 col-md-3 col-lg-6 col-xl-3">
    {!! Form::label('participant_video',__('messages.meeting.client_video').':')!!}<span class="red">*</span>
    <div>
    {{ Form::radio('participant_video', '1' , true) }}&nbsp{{__('messages.meeting.enabled')}}&nbsp;
    {{ Form::radio('participant_video', '0' , false) }}&nbsp{{__('messages.meeting.disabled')}}&nbsp;
    </div>
</div>

<div class="form-group col-sm-12">
    {!! Form::label('agenda',__('messages.meeting.description').':')!!}<span class="red">*</span>
    {{ Form::textarea('agenda', null, ['class' => 'form-control', 'required']) }}
</div>

<div class="form-group col-sm-12">
    <a href="{{ route('meetings.index') }}"
            class="btn btn-secondary pull-right">{{ __('messages.cancel') }}</a>
    <button type="submit"
            class="btn btn-primary pull-right mr-1">{{ __('messages.save') }}</button>
</div>
