
@extends('layout')
@section('content')
<div class="album py-5 bg-light">
  <div class="container">
    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 g-1">
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="auto" height="auto" src="{{$postId->image}}" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"/>
            <div class="card-body">
              <p class="card-text">{{$postId->content}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
      