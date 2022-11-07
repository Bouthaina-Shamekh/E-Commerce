@extends('site.master')

@section('title', 'Shop | ' . config('app.name'))

@section('styles')

<style>
.custom-nav nav > div:first-child {
    display: none;
}

.custom-nav nav > div:last-child {
    display: flex;
    align-items: center;
    justify-content: space-between;
}
</style>

@stop

@section('content')
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">{{ isset($category) ? $category->trans_name : 'Shop' }}</h1>
					<ol class="breadcrumb">
						<li><a href="{{ route('site.index') }}">Home</a></li>
						<li class="active">{{ isset($category) ? $category->trans_name : 'Shop' }}</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="products section">
	<div class="container">
		<div class="row">
            @foreach ($products as $product)
            <div class="col-md-4">
				@include('site.parts.product_box')
			</div>
            @endforeach
		</div>

        <div class="custom-nav">
            {{ $products->links() }}
        </div>
	</div>
</section>
@stop
