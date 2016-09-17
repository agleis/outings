<div class="sidebar-item">
  <h3 class="sidebar-title">
    <span class="glyphicon glyphicon-chevron-right"></span>{{$title}}
  </h3>
  <ul class="sidebar-list" style="display:none;">
    @foreach($items as $name => $label)
      <div>
        <input type="checkbox" name="{{$name}}" id="{{$name}}" @if(old('name')) checked @endif>
        <label class="label-right" for="{{$name}}">{{$label}}</label>
      </div>
    @endforeach
  </ul>
</div>
