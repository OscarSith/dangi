$(document).ready(function(){
	$(".userMessage").hide('fade');
	$(".ajaxLoadImg").hide('fade');
	
    $('form#notify').bind('submit', function(e){
		$(".userMessage").hide('fade');
		$(".ajaxLoadImg").show('fade');
		var email  = $('input#email').val();
		var name  = $('input#name').val();
		var $this = $(this),
			$btn = $this.find(':submit:last');
        e.preventDefault();
		$btn.prop('disabled', true).text('Enviando...')
		$.ajax({
			type: 'POST',
			url:"subscribe.php",
			data: $this.serialize(),
			dataType: 'json',
			success: function(rec){
				if (rec.type == 1) {
					$('#notify').trigger("reset");
					alert(rec.message);
				} else {
					alert(rec.message);
				}
				$btn.prop('disabled', false).text('Enviar')
			},
			error: function(){
				$(".userMessage").html("<p class='error'>" + serverError + "</p>");
				$(".ajaxLoadImg").hide('fade');
			}		
		});
	});
			
});