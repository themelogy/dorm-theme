<section class="page-header mb-0">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 text-start">
				<h1 class="font-weight-normal">{{ $slot ?? 'Başlık' }}</h1>
			</div>
			@isset($breadcrumbs)
			<div class="col-md-6">
				{!! Breadcrumbs::renderIfExists($breadcrumbs) !!}
			</div>
			@endisset
		</div>
	</div>
</section>