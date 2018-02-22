$('.sendMail').on('click', function(){
	var nome = $('.nome').val()
	var email = $('.email').val()
	var assunto = $('.assunto').val()
	var mensagem = $('.mensagem').val()

	$.ajax({
		url: '../php/contact-form.php',
		type:'POST',
		dataType:'JSON',
		data: {
			'name':nome,
			'email':email,
			'subject':assunto,
			'message':mensagem
		},
		success: function(data){
			alert(JSON.stringify(data))
		},
		error: function(error){
			alert(JSON.stringify(error))
		}
	})
})