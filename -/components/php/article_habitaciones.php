<article class="matrimonial">
	<legend>
		<h1 id="tiposh">Tipos de Habitacion</h1>
	</legend>
	<div class="tabbable tabs">
		<ul class="nav nav-tabs nav-justified">
			<li  class="active"><a  class="nav-hab-item" id="mat" data-toggle="tab" href="#matrimonial">Matrimonial</a></li>
			<li><a class="nav-hab-item" href="#matindi" id="matind" data-toggle="tab">Matrimonial + Individual</a></li>
			<li><a class="nav-hab-item" href="#doblemat" id="dobmat" data-toggle="tab">Doble Matrimonial</a></li>
			<li><a class="nav-hab-item" href="#suitju" id="suitj" data-toggle="tab">Suite Junior</a></li>
			<li><a class="nav-hab-item" href="#suitpfa" id="suitp" data-toggle="tab">Suite Palace Familiar</a></li>
		</ul> <!-- nav nav-tabs -->
	</div> <!-- Tabbable tabs -->

	<div class="row rowsel">
		<div class="col-xs-12"><?php include "../-/components/php/snippet_multi_carousel.php"; ?></div>
	</div> <!-- Multi_carousel -->

	<div class="tab-content">
		<?php include "../-/components/php/snippet_hab_matrimonial.php" ?>
		<?php include "../-/components/php/snippet_hab_matind.php" ?>
		<?php include "../-/components/php/snippet_hab_dobmat.php" ?>
		<?php include "../-/components/php/snippet_hab_suitju.php" ?>
		<?php include "../-/components/php/snippet_hab_suitpfa.php" ?>
	</div> <!-- Habs tab-content -->
</article>