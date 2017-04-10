<?PHP $level = 'Easy'; ?>
<div class="container">
	<h1>Sudoku in JavaScript</h1>
	<div class="row">
		<div class="col-md-9">
			<div class="panel panel-default">
		      <div class="panel-heading"><center>Sudoku <?PHP echo $level;  ?></center></div>
		      <div class="panel-body">
		      	
		      	<table class="table table-bordered">
		      		<tbody>
		      			<tr>
		      				<td style="border-color: steelblue; border-width: 2px; padding: 0;">
				      				<table class="table table-bordered" style="margin: 0;">
				      					<tr>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="" style="margin: 0;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      					</tr>
				      				</table>
		      				</td>
		      				<td style="border-color: steelblue; border-width: 2px; padding: 0;">
		      					<table class="table table-bordered" style="margin: 0;">
				      					<tr>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      					</tr>
				      				</table>
		      				</td>
		      				<td style="border-color: steelblue; border-width: 2px; padding: 0;">
		      					<table class="table table-bordered" style="margin: 0;">
				      					<tr>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      					</tr>
				      				</table>
		      				</td>
		      			</tr>
		      			<tr>
		      				<td style="border-color: steelblue; border-width: 2px; padding: 0;">
		      					<table class="table table-bordered" style="margin: 0;">
				      					<tr>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      					</tr>
				      				</table>
		      				</td>
		      				<td style="border-color: steelblue; border-width: 2px; padding: 0;">
		      					<table class="table table-bordered" style="margin: 0;">
				      					<tr>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      					</tr>
				      				</table>
		      				</td>
		      				<td style="border-color: steelblue; border-width: 2px; padding: 0;">
		      					<table class="table table-bordered" style="margin: 0;">
				      					<tr>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      					</tr>
				      				</table>
		      				</td>
		      			</tr>
		      			<tr>
		      				<td style="border-color: steelblue; border-width: 2px; padding: 0;">
		      					<table class="table table-bordered" style="margin: 0;">
				      					<tr>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      					</tr>
				      				</table>
		      				</td>
		      				<td style="border-color: steelblue; border-width: 2px; padding: 0;">
		      					<table class="table table-bordered" style="margin: 0;">
				      					<tr>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      					</tr>
				      				</table>
		      				</td>
		      				<td style="border-color: steelblue; border-width: 2px; padding: 0;">
		      					<table class="table table-bordered" style="margin: 0;">
				      					<tr>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      						<td style="border-color: lightsteelblue;"></td>
				      					</tr>
				      				</table>
		      				</td>
		      			</tr>
		      		</tbody>
		      	</table>

		      </div>
		    </div>
		</div>
	</div>
</div>