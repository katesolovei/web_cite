$(document).ready(function(){
	$('#regForm').submit(function(event){
		event.preventDefault();
		$.ajax({
			type: $(this).attr('method'),
			url: 'validation.php',
			data: $("#regForm").serialize(),
			success: function(data){
				if (data.match(/Invalid value/)){
					alert(data);
				} else{
					alert(data);
					jQuery('#regForm')[0].reset();
				}
			}
		})
	})
});