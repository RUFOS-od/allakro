<div class="outter-wp">
	<!--sub-heard-part-->
	<div class="sub-heard-part">
		<ol class="breadcrumb m-b-0">
			<li><a href="index.html">Acceuil</a></li>
			<li class="active">
				<?php if (isset($_GET['ravi'])) {
					echo strtoupper($page = $_GET['ravi']);
				} ?>
			</li>
		</ol>


		<div class="cal-main">
			<div class="calender graph-form">
				<h2 class="inner-tittle">Calender</h2>
				<div class="cal1">

				</div>
			</div>
			<!--/Tooltips-->
			<div class="tool-tips">
				<h3 class="inner-tittle two">Simple Tooltips</h3>
				<div class="tool-tips graph-form">
					<div class="bs-example-tooltips">
						<button type="button" class="btn btn-default tip" data-toggle="tooltip" data-placement="left"
							title="" data-original-title="Tooltip on left">Tooltip on
							left</button>
						<button type="button" class="btn btn-default tip" data-toggle="tooltip" data-placement="top"
							title="" data-original-title="Tooltip on top">Tooltip on top</button>
						<button type="button" class="btn btn-default tip" data-toggle="tooltip" data-placement="bottom"
							title="" data-original-title="Tooltip on bottom">Tooltip on
							bottom</button>
						<button type="button" class="btn btn-default tip" data-toggle="tooltip" data-placement="right"
							title="" data-original-title="Tooltip on right">Tooltip on
							right</button>
						<script>$(function () {
								$('[data-toggle="tooltip"]').tooltip()
							})</script>
					</div>
				</div>
			</div>
			<!--/Tooltips-->
			<!--/Accordion-->
			<div class="accordion">
				<h3 class="inner-tittle two">Easy Accordion</h3>
				<div class="panel-group tool-tips graph-form" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
									aria-expanded="false" aria-controls="collapseOne" class="collapsed">
									Product 1
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
							aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
							<div class="panel-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
								richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
								brunch. Food truck quinoa nesciunt laborum eiusmod. apiente ea proident. Ad vegan
								excepteur butcher vice lomo. labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title">
								<a class="" role="button" data-toggle="collapse" data-parent="#accordion"
									href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
									Product 2
								</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel"
							aria-labelledby="headingTwo" aria-expanded="true">
							<div class="panel-body">
								Eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non
								cupidatat skateboard dolor brunch. Anim pariatur cliche reprehenderit, enim Food
								truck quinoa nesciunt laborum eiusmod. apiente ea proident. Ad vegan excepteur
								butcher vice lomo. labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
									href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Product 3
								</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
							aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
							<div class="panel-body">
								3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
								nesciunt laborum eiusmod. Anim pariatur cliche reprehenderit, enim eiusmod high life
								accusamus terry richardson ad squid. apiente ea proident. Ad vegan excepteur butcher
								vice lomo. labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="panel-default">
						<div class="panel-heading" role="tab" id="headingFour">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
									href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									Product 4
								</a>
							</h4>
						</div>
						<div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
							aria-labelledby="headingFour" aria-expanded="false" style="height: 0px;">
							<div class="panel-body">
								Cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
								wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
								nesciunt laborum eiusmod. apiente ea proident. Ad vegan excepteur butcher vice lomo.
								labore sustainable VHS.
							</div>
						</div>
					</div>
					<div class="panel-default">
						<div class="panel-heading" role="tab" id="headingFive">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
									href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									Product 5
								</a>
							</h4>
						</div>
						<div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
							aria-labelledby="headingFive" aria-expanded="false" style="height: 0px;">
							<div class="panel-body">
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
								richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
								brunch. Food truck quinoa nesciunt laborum eiusmod. apiente ea proident. Ad vegan
								excepteur butcher vice lomo. labore sustainable VHS.
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--//Accordion-->
		</div>


	</div>
	<!--//sub-heard-part-->
	<!--/gallery-->

</div>
<!--//graph-visual-->