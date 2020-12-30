<div class="form-group col-{{$col ?? '12'}}">
    <label>{{ Str::ucfirst($name)}}@if($required)<span class="text-danger">*</span>@endif</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="far fa-edit"></i></span>
        </div>
        <input type="{{$type ?? 'text'}}" class="form-control" @if($required) required @endif @if($readonly) readonly @endif  @if($disabled) disabled @endif name="{{ Str::lower(str_replace(' ', '_', $fname)) }}" placeholder="{{$placeholder ?? ''}}" value="{{$value ?? ''}}">
    </div>
</div>
