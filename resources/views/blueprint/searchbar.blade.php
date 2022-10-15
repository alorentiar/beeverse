<nav class="navbar navbar-light" >
    <div class="container-fluid d-flex justify-content-center align-items-center ">
      <form class="d-flex" method="GET" action="/search">
        @csrf
        <input style="width: 50vw; padding: 0 1rem;" class="border" name="search" type="search" placeholder="{{ __('dashboard.search')}}" aria-label="Search">
        <button class="btn btn-primary" type="submit" style="margin-left: 1rem;">@lang('dashboard.searchbtn')</button>
      </form>
    </div>
</nav> 