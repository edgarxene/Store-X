<div id="slider" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#slider" data-slide-to="0" class="active"></li>
    <li data-target="#slider" data-slide-to="1"></li>
    <li data-target="#slider" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  
      <div class="item active">
        <img src="{{asset($itemactive->image)}}" alt="...">

        <div class="carousel-caption">
        <h3>{{$itemactive->caption}}</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi magni quaerat, quod harum id tenetur blanditiis beatae. Ipsam iste dignissimos, pariatur recusandae! Vero quia, nobis veniam nulla esse, repellat quaerat.</p>
        </div>
    </div>

    @foreach($items as $key => $item)    
    @if($key > 0)<!--Saltar el primer item que corresponde al Item Principal-->
     <div class="item">
      <img src="{{$item->image}}" alt="...">
      <div class="carousel-caption">
        SLIDE 2
      </div>
    </div>
    @endif
    @endforeach
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#slider" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><hr>

