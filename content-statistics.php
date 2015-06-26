<section class="statistics-wrap">
	<div class="statistics">
		<h2>Librivox Statistics</h2>

		<?php
		 $url = LIBRIVOX_STATISTICS;

		 $json = @file_get_contents($url);
		 $items = json_decode($json, TRUE);

		?>	

		<?php if (!empty($items)): ?>	
		
		<ul class="column-third column-one">
			<li>Cataloged works: <?= number_format($items['total_projects'])?></li>
			<li>Works cataloged last month: <?= number_format($items['projects_last_month'])?></li>
		</ul><!-- end .stats-colum-one -->
		
		<ul class="column-third column-two">
			<li>Non-English works: <?= number_format($items['non_english_projects'])?></li>
			<li>Number of languages: <?= number_format($items['number_languages'])?></li>
		</ul><!-- end .stats-colum-one -->
		
		<ul class="column-third column-three">
			<li>Number of readers: <?= number_format($items['number_readers'])?></li>
		</ul><!-- end .stats-colum-one -->

		<?php endif; ?>
		
	</div><!-- end .statistics-inner-wrap -->

</section>