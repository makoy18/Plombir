@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categories</div>

                <div class="card-body">
                	@foreach($сategories as $category)
                	<ul>
                		<li><h4>{{$category->category_name}}</h4></li>
                		@if(!empty($category->childrens))
                			@foreach($category->childrens as $children)
                			<ul>
                				@include('layouts.child', ['category' => $children])
                			</ul>
                			@endforeach
                		@endif
                	</ul>
                	@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection