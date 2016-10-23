$(document).ready(function(){
	$.ajax({
		url: "http://localhost/POLL/test.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var party = [];
			var votes = [];

			for(var i in data) {
				party.push(data[i].cparty);
				votes.push(data[i].num_of_votes);
			}

			var chartdata = {
				labels: party,
				datasets : [
					{
						label: 'party votes',
						backgroundColor: 'rgba(200, 200, 200, 0.75)',
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: votes
					}
				]
			};

			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});

