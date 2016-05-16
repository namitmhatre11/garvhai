$(document).ready(function(){
	$('.filter-btn').click(function(e){
		e.preventDefault();
		e.stopPropagation();
		var playerId = $("input[name='players']:checked").val();
		if(playerId){
			playerFilterData(playerId);
		}else{
			alert("Please checked atleast one value!");
			return false;
		}
		
	});	

	$('#mobileFilter').change(function(e){
		e.preventDefault();
		e.stopPropagation();
		var playerId = $(this).val();
		if(playerId){
			playerFilterData(playerId);
		}else{
			alert("Please checked atleast one value!");
			return false;
		}
		
	});	

	$('body').on('click','.light-box-overlay', function(e){
		e.preventDefault();
		var imageId = $(this).attr('data-id');
		$('.item').removeClass('active');
		$('#modalImg_'+imageId).addClass('active');
		$('#myModal').modal('show');
	});
});

function playerFilterData(playerID){
	if(playerID){
		//$('.replace-filter-data').html('<img class="center-block" style="margin-top:50px;" src="'+baseUrl+'assets/img/loader.gif"/>');
		$.ajax({
	  		  url: baseUrl+"index.php/home/player_filter_data",
	          type: 'POST',            
	          data: { 'playerId': playerID },
	          dataType: "json",
	          success: function(data) {
	          	var filterHtml = '';
	          	var modalInnerHtml = '';
	          	if($.trim(data) != "") { 
	          		if(data.filter_data.length != 0) {
		          		$.each( data, function( index, filterValue ) { 
		          			for(var i=0; i<filterValue.length; i++){
		          				filterHtml += '<div class="col-xs-4 col-xs-20 light-box-wrpr"><div class="row">';
		          				if(filterValue[i].type == 'image'){
		          					filterHtml += '<a><img src="'+baseUrl+'uploads/'+filterValue[i].media_value+'" class="full-width-img"><div class="light-box-overlay image-overlay" data-id="'+filterValue[i].id+'"></div></a>';
		          					modalInnerHtml += '<div class="item" id="modalImg_'+filterValue[i].id+'"><img src="'+baseUrl+'uploads/'+filterValue[i].media_value+'"></div>';
		          				}else if(filterValue[i].type == 'video'){
		          					filterHtml += '<a href="#"><img src="'+baseUrl+'uploads/'+filterValue[i].video_thumbnail+'" class="full-width-img"><div class="light-box-overlay video-overlay" data-id="'+filterValue[i].id+'"></div></a>';
		          					modalInnerHtml += '<div class="item" id="modalImg_'+filterValue[i].id+'"><div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="'+filterValue[i].media_value+'" frameborder="0" allowfullscreen></iframe></div></div>';
		          				}
                 				filterHtml += '</div></div>';
		          			}
		          		}); 
					}else{
						filterHtml += '<h3 style="text-align:center">No videos/images found for this athlete!!!</h3>';
					}
					$('.replace-filter-data').html(filterHtml);
					$('.carousel-inner').html(modalInnerHtml);
				}
	          }
	        });
	}
}