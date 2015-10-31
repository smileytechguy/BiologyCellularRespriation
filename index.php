<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8" />
		<title>Cole Lewis | Noah Overcash | Cellular Respiration Project</title>
		<link rel="stylesheet" type="text/css" href="css.css">
		<script src="js.js"></script>
	</head>
	<body>
		<ul id="menu">
			<li data-menuanchor="Glycolysis" class="active"><a href="#Glycolysis">Glycolysis</a></li>
			<li data-menuanchor="IntermediateStep"><a href="#IntermediateStep">Intermediate Step</a></li>
			<li data-menuanchor="KrebsCycle"><a href="#KrebsCycle">Kreb's Cycle</a></li>
			<li data-menuanchor="ETC"><a href="#ETC">Electron Transport Chain</a></li>
		</ul>
		<div id="project-main">
			<div class="section glycolysis" id="section0">
				<h1>Glycolysis</h1>
				<table>
					<thead>
						<tr>
							<th>
								Inputs
							</th>
							<th>
								Outputs
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="hidden GlucoseIn">
								Glucose (C<sub>6</sub>H<sub>12</sub>O<sub>6</sub>)
							</td>
							<td class="hidden PyruvateOut">
								2 Pyruvate (C<sub>3</sub>H<sub>3</sub>O<sub>3</sub>)
							</td>
						</tr>
						<tr>
							<td class="hidden ATPIn">
								2 ATP
							</td>
							<td class="hidden ATPOut">
								4 ATP (Net Gain: 2)
							</td>
						</tr>
						<tr>
							<td class="hidden NADPlusIn">
								2 NAD<sup>+</sup>
							</td>
							<td class="hidden NADHOut">
								2 NADH
							</td>
						</tr>
					</tbody>
				</table>
				<div class="animation">
					<div class="ATP1-placeholder hidden"></div>
					<div class="ATP1 hidden">
						<div class="circle ATP"></div>
					</div>
					<div class="ATP2-placeholder hidden"></div>
					<div class="ATP2 hidden">
						<div class="circle ATP"></div>
					</div>
					<div class="glucose hidden">
						<div class="pyruvate">
							<div class="circle carbon"></div>
							<div class="circle carbon"></div>
							<div class="circle carbon"></div>
						</div>
						<div class="pyruvate">
							<div class="circle carbon"></div>
							<div class="circle carbon"></div>
							<div class="circle carbon"></div>
						</div>
					</div>
					<div class="phosphate P1 circle floating hidden"></div>
					<div class="phosphate P2 circle floating hidden"></div>
					<div class="NADPlus NAD1 circle floating hidden"></div>
					<div class="NADPlus NAD2 circle floating hidden"></div>
					<div class="ADP ADP1 circle floating" style="left: -100px; top: -60px;"></div>
					<div class="ADP ADP2 circle floating" style="left: -100px; top: -60px;"></div>
					<div class="ADP ADP3 circle floating" style="left: -100px; top: -60px;"></div>
					<div class="ADP ADP4 circle floating" style="left: -100px; top: -60px;"></div>
				</div>
			</div>
			<div class="section" id="section1">
				<h1>Intermediate Step</h1>
			</div>
			<div class="section" id="section2">
				<h1>Krebs Cycle</h1>
			</div>
			<div class="section" id="section3">
				<h1>Electron Transport Chain</h1>
			</div>
		</div>
	</body>
</html>