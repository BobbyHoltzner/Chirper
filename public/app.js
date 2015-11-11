$(document).ready(function(){
	$.ajax({
		url: '/chirps',
		type: 'GET',
		success: function(data){
			for (i=0; i < data.length; i++){
				var html = '<li><div class="row"><div class="col-md-2">';
			    html += '<i class="fa fa-commenting fa-4x"></i></div><div class="col-md-8">';
				html += '<h4>'+data[i].name+'</h4>';
				html += '<p>'+data[i].chirp+'</p>';
				html += '</div></div></li>';
				$('ul#chirps').append(html);
			}
		},	

	})

	$('button#submitChirp').on('click', function(e){
		e.preventDefault();
		var chirp = $('#chirp').val();
		var _token = $('#token').val();
		var name = $('#name').val();

		$.ajax({
		url: '/chirps',
		type: 'POST',
		data: {
			name: name,
			chirp: chirp,
			_token: _token,
		},
		success: function(data){
			$('#chirp').val('');
			$('#name').val();
			var html = '<li><div class="row"><div class="col-md-2">';
		    html += '<i class="fa fa-commenting fa-4x"></i></div><div class="col-md-8">';
			html += '<h4>'+name+'</h4>';
			html += '<p>'+chirp+'</p>';
			html += '</div></div></li>';
			$('ul#chirps').prepend(html);
		},	

	})
	});
});