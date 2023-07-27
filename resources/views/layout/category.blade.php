<div class="card mb-4">
  <div class="card-header">Categories</div>
  <ul class="list-group">
    <li class="list-group-item list-group-item-action">
      <a href="{{url('model')}}" class="link-offset-2 link-underline link-underline-opacity-0 view-all"><b>View all</b></a>
    </li>
    <li class="list-group-item list-group-item-action">
      <a href="{{url('model')}}?brand=mg" class="link-offset-2 link-underline link-underline-opacity-0">MG</a>
    </li>
    <li class="list-group-item list-group-item-action">
      <a href="{{url('model')}}?brand=hg" class="link-offset-2 link-underline link-underline-opacity-0">HG</a>
    </li>
    <li class="list-group-item list-group-item-action">
      <a href="{{url('model')}}?brand=rg" class="link-offset-2 link-underline link-underline-opacity-0">RG</a>
    </li>
    <li class="list-group-item list-group-item-action">
      <a href="{{url('model')}}?brand=perfectgrade" class="link-offset-2 link-underline link-underline-opacity-0">Perfect Grade</a>
    </li>
    <li class="list-group-item list-group-item-action">
      <a href="{{url('model')}}?brand=kotobukiya" class="link-offset-2 link-underline link-underline-opacity-0">Kotobukiya</a>
    </li>
  </ul>

</div>
<div class="card mb-4">
  <form>
    <div class="card-header">Filter</div>
    <div class="card-body p-1">
      <div class="card border-0 b-3">
        <div id="slider-range" class="mt-3"></div>
        <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
        <input type="hidden" name="start_price" id="start_price">
        <input type="hidden" name="end_price" id="end_price">
      </div>
    </div>
    <div class="card-footer">
      <input type="submit" name="filter-price" value="Filter" class="btn btn-primary">
    </div>
  </form>
</div>
<div class="card">
  <form>
    <div class="card-header">Sort by</div>
    <div class="card-body p-1">
      <div class="card border-0 b-3">
        <ul class="list-group">
          <li class="list-group-item">
            <input class="form-check-input me-1" type="radio" name="sort_by" value="atoz" id="firstRadio">
            <label class="form-check-label" for="firstRadio">Name (A - Z)</label>
          </li>
          <li class="list-group-item">
            <input class="form-check-input me-1" type="radio" name="sort_by" value="ztoa" id="secondRadio">
            <label class="form-check-label" for="secondRadio">Name (Z - A)</label>
          </li>
          <li class="list-group-item">
            <input class="form-check-input me-1" type="radio" name="sort_by" value="lowtohigh" id="thirdRadio">
            <label class="form-check-label" for="thirdRadio">Price (Low > High)</label>
          </li>
          <li class="list-group-item">
            <input class="form-check-input me-1" type="radio" name="sort_by" value="hightolow" id="fourthRadio">
            <label class="form-check-label" for="thirdRadio">Price (High > Low)</label>
          </li>
        </ul>
      </div>
    </div>
    <div class="card-footer">
      <input type="submit" name="sort-by" value="Sort" class="btn btn-primary">
    </div>
  </form>
</div>