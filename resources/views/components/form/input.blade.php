@props(['name','placeHolder','label','type','icon'])

<div class="form-outline form-white mb-4">
    <label class="form-label" for="typeName">{{$label}}</label>
    <div class="input-container">
        <i class="{{$icon}}"></i>
        <input type="{{$type}}"
              name="{{$name}}"
               class="form-control input-field form-control-lg"
               placeholder="{{$placeHolder}}"
               value="{{old($name)}}"
        />
    </div>
    <x-form.error name='{{$name}}'/>
</div>
