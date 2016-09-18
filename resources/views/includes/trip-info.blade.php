<div class="trip-item">
  <h2 class="trip-title"><a href="{{url('trip', ['id' => $trip->id])}}">{{$trip->name}}</a></h2>
  @if(isset($trip->group))
     <h4 class="group">Group: <a href="{{url('group', ['id' => $trip->group->id])}}">{{$trip->group->name}}</a></h4>
   @endif
  <div class="row">
    <div class="col-md-4">
      <?php $counter = 0; ?>
      @foreach($trip->users as $user)
        @if($counter > 8 && count($trip->users) > 9)
          <a href="{{url('trip', ['id' => $trip->id])}}">+{{count($trip->users) - 8}}</a>
          <?php break; ?>
        @endif
        <img width="50" height="50" src="{{$user->profile_picture or URL::asset('img/default-user-image.png')}}">
        <?php $counter++; ?>
      @endforeach
    </div>
    <div class="col-md-8">
      <p class="trip-description">{{$trip->description}}</p>
    </div>
  </div>
</div>
