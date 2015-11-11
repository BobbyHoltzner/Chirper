$(document).ready(function(){
	$.ajax({
		url: '/chirps',
		type: 'GET',
		success: function(data){
			for (i=0; i < data.length; i++){
				var hash = md5(data[i].user.email);
				var gravatar = 'http://www.gravatar.com/avatar/'+hash;
				var html = '<li><div class="row"><div class="col-md-4">';
			    html += '<img src="'+gravatar+'"/></div><div class="col-md-8">';
				html += '<h4>'+data[i].user.name+'</h4>';
				html += '<p>'+data[i].chirp+'</p>';
				html += '</div></div></li>';
				$('ul#chirps').append(html);
			}
		},	

	})

	$('button#submitChirp').on('click', function(e){
		e.preventDefault();
		var user_id = $('#user_id').val();
		var chirp = $('#chirp').val();
		var _token = $('#token').val();
		var email = $('#user_email').val();
		var name = $('#user_name').val();

		$.ajax({
		url: '/chirps',
		type: 'POST',
		data: {
			user_id: user_id,
			chirp: chirp,
			_token: _token,
		},
		success: function(data){
			$('#chirp').val('');
			var hash = md5(email);
			var gravatar = 'http://www.gravatar.com/avatar/'+hash;
			var html = '<li><div class="row"><div class="col-md-4">';
		    html += '<img src="'+gravatar+'"/></div><div class="col-md-8">';
			html += '<h4>'+name+'</h4>';
			html += '<p>'+chirp+'</p>';
			html += '</div></div></li>';
			$('ul#chirps').prepend(html);
		},	

	})
	});
});