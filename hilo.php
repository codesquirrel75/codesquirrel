<script type="text/javascript">
	var dealer_card = ["Empty"];
	var player_card = ["Empty"];
	var dealer_score = 0;
	var player_score = 0;
	var player_pile;
	var dealer_pile;


	function deal()
	{
		var deck = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13];
		dealer_score = 0;
		player_score = 0;


		
		while(deck.length > 0)
		{
			var card1 = Math.floor(Math.random()*deck.length);
			
			player_card.push(deck[card1]);
			deck.splice(card1, 1);

			var card2 = Math.floor(Math.random()*deck.length);

			dealer_card.push(deck[card2]);
			deck.splice(card2, 1);
		}
		dealer_pile = dealer_card.pop();
		player_pile = player_card.pop();

		dealer.innerHTML = dealer_pile;
		plyrScore.innerHTML = player_score;
		dlrScor.innerHTML = dealer_score;
		player.innerHTML = "Empty"
	}

	function hi()
	{
		player.innerHTML = player_pile;
		if(player_pile > dealer_pile)
		{
			player_score = player_score + player_pile;
			plyrScore.innerHTML = player_score;
		}
		else if(player_pile == dealer_pile)
		{
			dealer_score = dealer_score + 1;
			dlrScor.innerHTML = dealer_score;
		}
		else
		{
			dealer_score = dealer_score + dealer_pile;
			dlrScor.innerHTML = dealer_score
		}

	}

	function lo()
	{
		player.innerHTML = player_pile;
		if(player_pile < dealer_pile)
		{
			player_score = player_score + dealer_pile;
			plyrScore.innerHTML = player_score;
		}
		else if(player_pile == dealer_pile)
		{
			dealer_score = dealer_score + 1;
			dlrScor.innerHTML = dealer_score;
		}
		else
		{
			dealer_score = dealer_score + player_pile;
			dlrScor.innerHTML = dealer_score
		}
	}

	function draw()
	{
		dealer_pile = dealer_card.pop();
		player_pile = player_card.pop();
		
		dealer.innerHTML = dealer_pile;
	}

</script>
<div class="container">
	<h1>Hi - LO in JavaScript</h1>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
		      <div class="panel-heading">
		      		<div class="container">
		      			<div class="col-md-3">
		      				Player: <h4 id="playerScore"></h4>
		      			</div>
		      			<div class="col-md-6">
		      					
		      			</div>
		      			<div class="col-md-3">
		      				Dealer: <h4 id="dealerScore"></h4>
		      			</div>
		      		</div>
		      </div>
		      
		      <div class="panel-body">
		      	<div class="container">
		      		<div class="row">
		      		<div class="col-md-1"></div>
			      	<div class="col-md-3">
				      	<div class="panel panel-default">
				      		<div class="panel-heading"><center><h2>Dealer</h2></center></div>
				      		<div class="panel-body"><center><h1 id="dealerCard">Empty</h1></center></div>
				      	</div>
			      	</div>
			      	
				      	<div class="col-md-3">
				      		<center>
					      		<button class="btn btn-lg btn-warning" style="margin: 10px;" onclick="hi();">Hi</button>
					      		<button class="btn btn-lg btn-info" style="margin: 10px;" onclick="lo();">Lo</button><br>
					      		<button class="btn btn-lg btn-success" style="margin: 10px;" onclick="draw();">Dealer</button>
				      		</center>
				      	</div>

			      	<div class="col-md-3">
				      	<div class="panel panel-default">
				      		<div class="panel-heading"><center><h2>Player</h2></center></div>
				      		<div class="panel-body"><center><h1 id="playerCard">Empty</h1></center></div>
				      	</div>
			      	</div>
			      	</div>
			      	<div class="row"> <button class="btn btn-md btn-info" onclick="deal();">Deal</button> </div>
				</div>
		      </div>
		    </div>
		</div>
	</div>
</div>

<script type="text/javascript">
	var dealer = document.getElementById("dealerCard");
	var player = document.getElementById("playerCard");
	var plyrScore = document.getElementById("playerScore");
	var dlrScor = document.getElementById("dealerScore");

	plyrScore.innerHTML = player_score;
	dlrScor.innerHTML = dealer_score;
	
	
	
</script>