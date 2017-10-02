$('#setting-add').click(function(event){
	// alert('setting-add');
	if (!($('#tambah').is(':visible'))) {
		$('#lihat').hide();
		$('#tambah').show();
	}else{
		$('#tambah').hide();
		$('#lihat').show();
	}
	
});

$('#setting-cancel').click(function(event){
	// alert('setting-add');
	if (!($('#tambah').is(':visible'))) {
		$('#lihat').hide();
		$('#tambah').show();
	}else{
		$('#tambah').hide();
		$('#lihat').show();
	}
	
});

function form_serialize($input){

	// var $input = $('#setting-form :input');

	var $value = {};

	$input.each( function(){
		$value[this.name] = $(this).val();
	});

	return $value;
}