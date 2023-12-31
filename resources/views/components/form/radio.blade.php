
@props([
    'name','options','checked' => false
])

@foreach ($options as $value=>$text )
<div class="form-check">
    <input
    type="radio"
    name="{{ $name }}"
    value="{{ $value }}"
    @checked(old($name,$checked) == $value)
    {{ $attributes->class([
        'form-check-input'
    ]) }}
    >
    <label class="form-check-label" >
        {{ $text }}
    </label>
</div>

@endforeach
@error($name)
<div class="text-danger">
    {{ $message }}
</div>
@enderror
