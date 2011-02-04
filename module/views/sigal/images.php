<?php $count = 0; ?>
<p class="sigal_title"><?php echo $gallery->name ?></p>
<?php echo HTML::anchor(Route::get('sigal-frontend')->uri(array('controller'=>'gallery')), '&laquo;'.__('Back to the galleries')); ?>
<div class="sigal_pages"><?php echo $pages ?></div>
<div id="sigal_images">
	<ul>
		<?php foreach ($images as $image): ?>
		<li <?php if ($count % Kohana::config('sigal.columns') == 0) echo 'class="newline"'; ?> >
			<div class="sigal_image">
				<?php
				echo html::file_anchor(
						Sigal::image_path($image),
						HTML::image(Sigal::image_path($image, TRUE),	array('alt'=>$image->filename, 'rel'=>'image')),
						array('rel' => $image->gallery->name, 'title' => $image->name)
					 );
				?>
				<div class="sigal_caption">
					<p class="sigal_name"><?php echo $image->name; ?></p>
					<p class="sigal_description"><?php echo $image->description; ?></p>
				</div>
			</div>
		</li>
		<?php
			$count++;
			endforeach;
		?>
	</ul>
	<hr class="sigal_clear" />
</div>
<?php echo HTML::anchor(Route::get('sigal-frontend')->uri(array('controller'=>'gallery')), '&laquo;'.__('Back to the galleries')); ?>