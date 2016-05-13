$(document).ready(function(){
	$('.filter-btn').click(function(e){
		e.preventDefault();
		e.stopPropagation();
		var playerId = $("input[name='players']:checked").val();
		if(playerId){
			$.ajax({
	  		  url: baseUrl+"index.php/home/player_filter_data",
	          type: 'POST',            
	          data: { 'playerId': playerId },
	          dataType: "json",
	          success: function(data) {
	          	var filterHtml = '';
	          	if($.trim(data) != "") { 
	          		if(data.filter_data.length != 0) {
		          		$.each( data, function( index, filterValue ) { 
		          			for(var i=0; i<filterValue.length; i++){
		          				filterHtml += '<div class="col-xs-4 col-xs-20 light-box-wrpr"><div class="row"><a href="'+filterValue[i].link+'" data-toggle="modal" data-target="#myModal" rel="prettyPhoto[gallery1]"><img src="'+baseUrl+'uploads/player.jpg" class="full-width-img"><div class="light-box-overlay video-overlay"></div></a></div></div>';
		          			}
		          		}); 
					}else{
						filterHtml += '<h3 style="text-align:center">No videos/images found for this athlete!!!</h3>'
					}
					$('.replace-filter-data').html(filterHtml);
				}
	          }
	        });
		}else{
			alert("Please checked atleast one value!");
			return false;
		}
		
	});	
});