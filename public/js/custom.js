$(document).ready(function(){
    $(".search_text").keyup(function(){

    	var txt = $('.search_text').val();
        
    	axios.get('/medicine/search/'+txt)
    	.then(function (response) {

    		var dt = response.data;

    		// console.log(dt[0].name);

    		$('.medicines_row').hide();

	    	var header = $('tbody').html();

	    	// alert(response.data);


	    	var result = '';

	    	for (var i = 0; i < dt.length; i++) {

	    		result += '<tr class="medicines_row"><td>'+(i+1)+'</td><td>'+dt[i].name +' </td><td>'+dt[i].type+'</td><td>'+dt[i].expire_date+'</td><td>'+dt[i].quantity+'</td><td>Tsh. '+dt[i].price+'/=</td><td><a class="btn btn-primary"href=/medicine/receipt/add/'+dt[i].id +'>Add</a> </td></tr>'; 
	    	}

	    	$('tbody').html(header+result);	

	    	// $('tbody').html() = header+'<tr class="medicines_row"><td>i</td><td>'+dt[i].name +' </td><td>'+dt[i].type+'</td><td>'+dt[i].expire_date+'</td><td>'+dt[i].quantity+'</td><td>Tsh. '+dt[i].price+'/=</td></tr>'; 

    	})
    	.catch(function (error) {
    		console.log(error);
    	});



    });
});