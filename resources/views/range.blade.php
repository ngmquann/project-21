@if($filter->count() >= 1)
<div class="card-body">
  <div class="row">
    @foreach ($filter as $item)
    <div class="item col-xs-12 col-md-6 col-lg-4 mt-3">
      <div class="card">
        <img class="card-img-top" src="{{ asset("/img-product/$item->image") }}" alt="" />
        <div class="card-body">
          <p class="h6"><small class="text-muted filter-brand">{{$item->brand}}</small></br>{{$item->name}}</p>
          <p class="m-0">
            <i class="fa-xs far fa-star"></i>
            <i class="fa-xs far fa-star"></i>
            <i class="fa-xs far fa-star"></i>
            <i class="fa-xs far fa-star"></i>
            <i class="fa-xs far fa-star"></i>
          </p>
          <p class="h5 m-0">${{$item->price}}
            @if ($item->sale == null)
            <s class="lead text-muted" hidden>${{$item->sale}}</s>
            @else
            <s class="lead text-muted">${{$item->sale}}</s>
            @endif
          </p>
        </div>
        <div class="card-footer p-0 icon-buy">
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-light">
              <i class="fas fa-cart-plus"></i>
              <span>Add Cart</span>
            </button>
            <button type="button" class="btn btn-light">
              <i class="fas fa-shopping-cart"></i>
            </button>
            <button type="button" class="btn btn-light">
              <i class="fas fa-heart"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@else
<div class="item col-md-6 col-lg-4 mt-3">
  <h2>Nothing Found</h2>
</div>
@endif