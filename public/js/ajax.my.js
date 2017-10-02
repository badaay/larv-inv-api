$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});

function setting_data_view($data){
	console.log($data);
}
$('#import-save').click(function(event){
	// event.preventDefault();
	// alert('submit');
	// console.log({{ route('/add-apps')}});
    var TableData = new Array(); 
	$('#preview-table tr').each(function(row, tr){  
        // console.log($(this).find('input').is(':checked'));
       	if($(this).find('input').is(':checked')) {  // I have added the if condition here 

       		console.log($(this).find('input').is(':checked'));
	     
	        TableData[row] = {      
	                  
	                   
	                  // "userid" : $('#userid').text(),  
	                  // "user_name" : $('#user').text(),   
	                  "sku" : $(tr).find('td:eq(0)').text(),    
	                  "name" : $(tr).find('td:eq(1)').text(),    
	                  "description" : $(tr).find('td:eq(2)').text(),
	                  "weight" : $(tr).find('td:eq(3)').text(),
	                  "buy_price" : $(tr).find('td:eq(4)').text(),
	                  "sell_price" : $(tr).find('td:eq(5)').text(),
	                  "stock" : $(tr).find('td:eq(6)').text(), 
	                  // "amount" : $(tr).find('td:eq(8)').text(), 
	                  // //"orders_completion" : $(tr).find('.chk')[0].checked     
	                  // "orders_completion" : $('#checked').val()    

	              }

	          // TableData = JSON.stringify(TableData);               
	          // console.log(TableData);
	          
	          //alert(TableData);           


        } // Here for the checkbox if condition 

    });


  	$.ajax({  
        
       type : "POST",    
       url : "/products/importExcelSave",                   
       // cache : "false",
       data :  JSON.stringify(TableData),
       contentType	: 'application/json',
       processData	: false,
       success : function(result){  

         console.log(result);                                

       } 

      
      });
    console.log(TableData);

});
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