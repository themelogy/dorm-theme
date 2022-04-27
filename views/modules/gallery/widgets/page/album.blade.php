<div class="row mt-5">
	<div class="col">
		<div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
			<div class="row">
				@foreach($album->files as $file)
				<div class="col-md-3 mb-5 mb-md-0">
					<a href="{{ \Imagy::getImage($file->filename, "albumImage", ['width' => null, 'height' => 800, 'mode' => 'resize', 'quality' => 80]) }}">
						<span class="image-frame image-frame-style-1 image-frame-effect-1">
							<span class="image-frame-wrapper">
								<img src="{{ \Imagy::getImage($file->filename, 'albumImage', ['width' => 600, 'height' => 400, 'mode' => 'fit', 'quality' => 80]) }}" class="img-fluid" alt="">
								<span class="image-frame-inner-border"></span>
								<span class="image-frame-action">
									<span class="image-frame-action-icon">
										<i class="lnr lnr-magnifier text-color-light"></i>
									</span>
								</span>
							</span>
						</span>
					</a>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>