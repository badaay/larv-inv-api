$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});

function setting_data_view($data){
	console.log($data);
}
$('#setting-form').submit(function(event){
	event.preventDefault();
	// alert('submit');
	// console.log({{ route('/add-apps')}});
	$('#help-actions').show();
	var $value = form_serialize($('#setting-form :input'));
	// console.log($value);
	$.post('application', $value, function(data, textStatus, xhr){
		console.log(data);
		console.log(textStatus);
		console.log(xhr);
		if (xhr.status==200) {
			location.reload();
		}
	});
	// $.ajax({
	// 	type: 'POST',
	// 	url	: "application",
	// 	data: $value,
	// 	error:function() { alert("Error Submitting Information") }
		
	// }).done(function(msg){
	// 			alert(msg);
	// 		});

	// console.log($value);
});