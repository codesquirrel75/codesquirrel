<script type="text/javascript">
	
	
	var game_board = [[], [], [], [], [], [], [], [], []];
	var quadrants = [[], [], [], [], [], [], [], [], []];

	

	function isInArray(array, value)
	{
		for(i=0; i<array.length; i++)
		{
			if(array[i] == value)
			{
				return true;
			}
		}
		return false;
	}

	function isInColumn(array, col, num)
	{
		for(i=0; i<array.length; i++)
		{
			if(array[i][col] == num)
			{
				return true;
			}
		}
		return false;
	}

	function isInQuadrant(quad, num)
	{
		for(i=0; i<quadrants[quad].length; i++)
		{
			if(quadrants[quad][i] == num)
			{
				return true;
			}
		}
		return false;
	}

	function set_index()
	{
		while(true)
		{
			var rand_index = Math.floor(Math.random()*9);
			if(game_board[rand_index].length == 0)
			{
				while(true)
				{
					var num = Math.floor(Math.random()*9)+1
					if(!isInArray(game_board[rand_index], num))
					{
						if(!isInColumn(game_board, game_board[rand_index].length, num))
						{
							if(!isInQuadrant(get_quadrant(game_board[rand_index].length, rand_index), num))
							{
								game_board[rand_index].push(num);
							}
						}				
					}
					if(game_board[rand_index].length == 9)
						{
							fill_quadrants(game_board);
							break;
						}
				}
				break;
			}
		}
	}

	function get_quadrant(col, row)
	{
		if(col <= 2)
		{
			if(row <= 2)
			{
				return 0;
			}
			else if(row <= 5)
			{
				return 1;
			}
			else if(row <= 8)
			{
				return 2;
			}
		}
		else if(col <= 5)
		{
			if(row <= 2)
			{
				return 3;
			}
			else if(row <= 5)
			{
				return 4;
			}
			else if(row <= 8)
			{
				return 5;
			}
		}
		else if(col <=8)
		{
			if(row <= 2)
			{
				return 6;
			}
			else if(row <= 5)
			{
				return 7;
			}
			else if(row <= 8)
			{
				return 8 ;
			}
		}
	}

	

	function fill_quadrants(array)
	{
		for(i=0; i<array.length; i++)
		{
			if(array[i] != '')
			{				
				for(j=0; j<array[i].length; j++)
				{
					
					quadrants[get_quadrant(i, j)].push(array[i][j]);
				}
			}
		}
	}

	function fill_board()
	{
		var done = false
		while(!done)
		{
			/*var next_index = Math.floor(Math.random()*9);

			if(game_board[next_index] == '')
			{
				while(game_board[next_index].length != 9)
				{
					var rand_num = Math.floor(Math.random()*9)+1;
					var set_number = true;
					if(isInArray(quadrants[get_quadrant(next_index, game_board[next_index].length)], rand_num))
					{
						set_number = false;
					}	
					if(isInColumn(game_board, next_index, rand_num))
					{
						set_number = false;
					}
						
					if(set_number)
					{							
						game_board[next_index].push(rand_num);
						fill_quadrants(game_board[next_index]);
					}
					
				}
			}*/
			set_index();

			
			for(i=0; i<9; i++)
			{
				if(game_board[i].length < 9)
				{
					done = false;
					break;
				}
				else
				{
					done = true;
				}
			}
			
		}

	}
	
	
	set_index();

	//fill_quadrants();
	//fill_board();
	
	document.write(game_board + "<br>");
	document.write(quadrants);
	

</script>
<?PHP $level = 'Easy'; ?>
<div class="container">
	<h1>Sudoku in JavaScript</h1>
	<div class="row">
		<div class="col-md-9">
			<div class="panel panel-default">
		      <div class="panel-heading"><center>Sudoku <div id="level"></div></center></div>
		      <form><input type="radio" name="level" value="Easy" id="level_easy" checked onclick="set_level();">Easy <input type="radio" name="level" value="Medium" id="level_medium" onclick="set_level();">Medium <input type="radio" name="level" value="Hard" id="level_hard" onclick="set_level();">Hard </form>
		      <div class="panel-body">
		      	
		      	<table class="table table-bordered">
		      		<tbody>
		      			<tr>
		      				<td style="border-color: steelblue; border-width: 2px; padding: 0;">
				      				<table class="table table-bordered" style="margin: 0;">
				      					<tr>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="0-0" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="0-1" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="0-2" style="margin: 0;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="1-0" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="1-1" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="1-2" style="margin: 0;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="2-0" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="2-1" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="2-2" style="margin: 0;"></td>
				      					</tr>
				      				</table>
		      				</td>
		      				<td style="border-color: steelblue; border-width: 2px; padding: 0;">
		      					<table class="table table-bordered" style="margin: 0;">
				      					<tr>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="0-3" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="0-4" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="0-5" style="margin: 0;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="1-3" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="1-4" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="1-5" style="margin: 0;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="2-3" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="2-4" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="2-5" style="margin: 0;"></td>
				      					</tr>
				      				</table>
		      				</td>
		      				<td style="border-color: steelblue; border-width: 2px; padding: 0;">
		      					<table class="table table-bordered" style="margin: 0;">
				      					<tr>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="0-6" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="0-7" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="0-8" style="margin: 0;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="1-6" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="1-7" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="1-8" style="margin: 0;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="2-6" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="2-7" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="2-8" style="margin: 0;"></td>
				      					</tr>
				      				</table>
		      				</td>
		      			</tr>
		      			<tr>
		      				<td style="border-color: steelblue; border-width: 2px; padding: 0;">
		      					<table class="table table-bordered" style="margin: 0;">
				      					<tr>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="3-0" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="3-1" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="3-2" style="margin: 0;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="4-0" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="4-1" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="4-2" style="margin: 0;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="5-0" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="5-1" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="5-2" style="margin: 0;"></td>
				      					</tr>
				      				</table>
		      				</td>
		      				<td style="border-color: steelblue; border-width: 2px; padding: 0;">
		      					<table class="table table-bordered" style="margin: 0;">
				      					<tr>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="3-3" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="3-4" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="3-5" style="margin: 0;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="4-3" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="4-4" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="4-5" style="margin: 0;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="5-3" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="5-4" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="5-5" style="margin: 0;"></td>
				      					</tr>
				      				</table>
		      				</td>
		      				<td style="border-color: steelblue; border-width: 2px; padding: 0;">
		      					<table class="table table-bordered" style="margin: 0;">
				      					<tr>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="3-6" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="3-7" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="3-8" style="margin: 0;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="4-6" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="4-7" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="4-8" style="margin: 0;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="5-6" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="5-7" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="5-8" style="margin: 0;"></td>
				      					</tr>
				      				</table>
		      				</td>
		      			</tr>
		      			<tr>
		      				<td style="border-color: steelblue; border-width: 2px; padding: 0;">
		      					<table class="table table-bordered" style="margin: 0;">
				      					<tr>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="6-0" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="6-1" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="6-2" style="margin: 0;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="7-0" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="7-1" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="7-2" style="margin: 0;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="8-0" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="8-1" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="8-2" style="margin: 0;"></td>				      					</tr>
				      				</table>
		      				</td>
		      				<td style="border-color: steelblue; border-width: 2px; padding: 0;">
		      					<table class="table table-bordered" style="margin: 0;">
				      					<tr>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="6-3" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="6-4" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="6-5" style="margin: 0;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="7-3" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="7-4" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="7-5" style="margin: 0;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="8-3" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="8-4" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="8-5" style="margin: 0;"></td>
				      					</tr>
				      				</table>
		      				</td>
		      				<td style="border-color: steelblue; border-width: 2px; padding: 0;">
		      					<table class="table table-bordered" style="margin: 0;">
				      					<tr>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="6-6" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="6-7" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="6-8" style="margin: 0;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="7-6" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="7-7" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="7-8" style="margin: 0;"></td>
				      					</tr>
				      					<tr>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="8-6" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="8-7" style="margin: 0;"></td>
				      						<td style="border-color: lightsteelblue;" align="center"><input type="text" size="1" maxlength="1" name="8-8" style="margin: 0;"></td>
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



<script type="text/javascript">

function set_level()
{
var levelEasy = document.getElementById('level_easy').checked;
var levelMedium = document.getElementById('level_medium').checked;
var levelHard = document.getElementById('level_hard').checked;

if(levelEasy){level_lbl = "Easy";}
else if(levelMedium){level_lbl = "Medium";}
else if (levelHard){level_lbl = "Hard";}


document.getElementById("level").innerHTML = level_lbl;
}
set_level();
</script>