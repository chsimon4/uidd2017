$(document).ready(functiom() {
	$('#get').click(totalamount() {
		$.ajax({
			url:'log-in.php',
			method: 'POST',
			data: {
				totalamount: $_SESSION['totalamount'],
			},
			success: funtion(data) {
				$('p').html(data)
			}
		})
	}
}