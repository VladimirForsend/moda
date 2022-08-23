<style>
    <?php include get_template_directory() . '/assets/templates/footers/footer-template.css'; ?>
</style>


<div class="container">

	<div class="row">
		<!--mitad izquierda-->
		<div id="footer-izquierdo" class="col-12 col-md-6">
			<div class="row">
				<!---menu IZQUIERDO 1--->
				<div class="col-12 col-md-4">

				<?php
						if (is_active_sidebar('uno_izquierdo')) :
							dynamic_sidebar('uno_izquierdo');
						endif; ?>
				




				</div>
				<!---menu IZQUIERDO 1--->

				<!---menu IZQUIERDO 2--->
				<div class="col-12 col-md-4">
				<?php
						if (is_active_sidebar('dos_izquierdo')) :
							dynamic_sidebar('dos_izquierdo');
						endif; ?>
				</div>
				<!---menu IZQUIERDO 2--->

				<!---menu IZQUIERDO 3--->
				<div class="col-12 col-md-4">
				<?php
						if (is_active_sidebar('tres_izquierdo')) :
							dynamic_sidebar('tres_izquierdo');
						endif; ?>
				</div>
				<!---menu IZQUIERDO 3--->

			</div>

		</div>
		<!--mitad izquierda-->

		<!--mitad derecha-->
		<div id="footer-derecho" class="col-12 col-md-6">
			<div class="row">
				<!---menu DERECHO 1--->
				<div class="col-12">
				<?php
						if (is_active_sidebar('uno_derecho')) :
							dynamic_sidebar('uno_derecho');
						endif; ?>
				
				</div>
				<!---menu DERECHO 1--->

				<!---menu DERECHO 2
				<div class="col-12 col-md-4">

				</div>
				menu DERECHO 2

				menu DERECHO 3
				<div class="col-12 col-md-4">

				</div>
				menu DERECHO 3--->

			</div>
		</div>
		<!--mitad derecha-->

<!--mitad derecha-->
<div id="footer-inferior" class="col-12">
			<div class="row border-footer">
				<!---menu INFERIOR 1--->
				<div class="col-12 col-md-6">
				
					<a href="https://forsend.cl/">Azahar Clothes © 2022 ¿Te gusta mi tienda? Yo vendo con ForSend.cl</a>	
				
				<?php
						if (is_active_sidebar('uno_izquierdo_inf')) :
							dynamic_sidebar('uno_izquierdo_inf');
						endif; ?>
				

				</div>
				<!---menu INFERIOR 1--->

				<!---menu INFERIOR 2--->
				<div class="col-12 col-md-6 f-end">
				<?php
						if (is_active_sidebar('dos_derecho_inf')) :
							dynamic_sidebar('dos_derecho_inf');
						endif; ?>
				</div>
				<!---menu INFERIOR 2--->

			</div>
		</div>
		<!--mitad derecha-->
	</div>

</div>