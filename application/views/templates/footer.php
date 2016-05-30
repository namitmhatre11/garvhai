<div class="loader">
  
</div>
<footer class="btm-footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 col-xs-12">
        <p class="copy-txt">&copy; 2016 Adani Group</p>
      </div>
      <div class="col-sm-6 col-xs-12">
        <nav class="footer-nav clearfix">
          <ul class="nav navbar-nav navbar-right">           
            <li><a href="#">Privacy policy</a></li>
            <li><a href="#">Legal disclaimer</a></li>                       
            <li><a href="#">Terms of use</a></li>
          </ul>
        </nav>
      </div>        
    </div>
  </div>      
</footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.easing.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/custom.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
     
      var baseUrl = '<?php echo base_url() ?>';

      $(document).ready(function(){
        $('.close-overlay').click(function(){
          $(this).parents('.overlay-wrpr').removeClass('active-mob-overlay');
          
        });
        $('.overlay-wrpr>.row>img,.heros-name').click(function(){
          $(this).parents('.overlay-wrpr').addClass('active-mob-overlay');
        })
        $('.carousel').carousel({interval: false});
          $(window).on("scroll", function(e) {  
            if($(window).width()>1006){
              if ($(this).scrollTop() > 50) {
                $('body').addClass("fix-header");
              } else {
                $('body').removeClass("fix-header");
              }
          }             
        });
        $(window).resize(function(){
          if($(window).width()>=1007){
            $('.video-wrpr,.video-wrpr>img,.top-video-info').height($(window).height());
          }
          else{
            $('.video-wrpr,.video-wrpr>img,.top-video-info').css('height','auto');
          }
          
      });
         if($(window).width()>=1007){
            $('.video-wrpr,.video-wrpr>img,.top-video-info').height($(window).height());
         }
        $('.hero-detail-middle,.media-list-wrpr-btm').mCustomScrollbar({
          theme:"dark"
        });

        $('.profile-btn').click(function(e){
          var lr= $(this).data('lr');
          var lb= $(this).data('tb');
          var playerId = $(this).data('playerid');
          var playerMode = $(this).data('playermode');
          $('.media-btn-mob').data('profileid',playerId);
  	      if(playerId && playerMode){
	          $('.hero-detail-info').removeClass('hidden').css({'left':lr})
	          if($(window).width()>1006){
    				    switch(lb){
    				      case "tr" :    
    				      reomoveItem();        
    				      $('.hero-detail-info').addClass('right').addClass('top');
    				      break;
    				      case "tl" :   
    				      reomoveItem();         
    				      $('.hero-detail-info').addClass('left').addClass('top');
    				      break;
    				      case 'br':    
    				      reomoveItem();        
    				      $('.hero-detail-info').addClass('right').addClass('bottom');
    				      break;
    				      default :
    				      reomoveItem();
    				      $('.hero-detail-info').addClass('left').addClass('bottom');
    				    }  
            }else{
		          $("body, html").animate({
		                scrollTop: $("#hero-wrpr").offset().top
		            }, 600);
		        }

            if(playerMode != 'videos'){
              $(this).parents('.overlay-wrpr').removeClass('active-mob-overlay');
              $(this).parents('.heros-list').find('.hover-overlays').show();
              $(this).parents('.overlay-wrpr').addClass('active-img').find('.hover-overlays').hide();
              showModalContent(playerId,playerMode,'media-list-wrpr');
            }else{
              $('.hero-detail-info').addClass('hidden');
              $(this).parents('.heros-list').find('.hover-overlays').hide();
              $('.col-sm-6 .cust-inp-wrpr').find('input').prop('checked',false);
              $('.cust-inp-wrpr').find('input[id="players_'+playerId+'"]').prop('checked',true);
              $('body').addClass('loading');
              playerFilterData(playerId);
              $("body, html").animate({
                    scrollTop: $("#heros-gellary").offset().top-40
                }, 600);
            }

          }
          function reomoveItem(){
            return $('.hero-detail-info').removeClass('right').removeClass('top').removeClass('bottom').removeClass('left');
          }           
        });

        $('.hover-overlays').hover(function(e){
          e.stopPropagation();
          e.preventDefault();
          $('.user-prof-wrpr').addClass('hidden');          
        });
        $('.back-btn').click(function(){
          $(this).parents('.hero-detail-info').addClass('hidden');
          $('.user-prof-wrpr').removeClass('hidden');  
          $('.hover-overlays').hide();
          $('.overlay-wrpr').removeClass('active-img');
        });

        $('.media-show').click(function(){
          showModalContent($(this).data('profileid'),$(this).data('mode'));
        });

        $('.profile-show').click(function(){
          showModalContent($(this).data('profileid'),$(this).data('mode'));
        });
        $('.menu-btn').click(function(){
          $('.main-nav').toggleClass('active');
          $(this).find('.menu-btn-img').toggleClass('hidden');
          $(this).find('.menu-close').toggleClass('hidden');

        });
        $('#share-exp').click(function(e){
          /*e.stopPropagation();*/
          e.preventDefault();
          var alertModal = $('#alertModal');
          if($('input[id="tnc-inp"]').is(':checked')){
            var name = $('#name-inp').val();
            var email = validateEmail($('#email-inp').val());
            var mobile = $('#tel-inp').val();
            var cmnt = $('#comment-inp').val();
            if(name == "" && $('#email-inp').val() == "" && mobile == "" && cmnt == ""){
              alertModal.find('.replace-content').text('All fields are required.');
              alertModal.modal('show');
            }else if(name != "" && email != "" && mobile != "" && cmnt != ""){
              addShareExperience(name, email, mobile, cmnt);
            }else if(name == "" && email == false && mobile == "" && cmnt == ""){
              alertModal.find('.replace-content').text('Please enter valid email-id.');
              alertModal.modal('show');
            }else{
              alertModal.find('.replace-content').text('Please fill other fields also.');
              alertModal.modal('show');
            }
          }else{
            alertModal.find('.replace-content').text('You must agree to our Terms & Conditions.');
            alertModal.modal('show');
          }
        });

        $('input[name="adaniplayers"]').change(function(){
          var playerId = $(this).val();
          showModalContent(playerId,'media', 'media-list-wrpr-dwn');
        });
      });

      function validateEmail(email) {
          var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          return re.test(email);
      }

      function addShareExperience(name, email, mobile, cmnt){
        $.ajax({
            url: baseUrl+"index.php/home/share_experience_data",
            type: 'POST',            
            data: { 'name': name, 'email': email, 'mobile': mobile, 'cmnt': cmnt },
            dataType: "json",
            success: function(data){
              $('#alertModal').find('.replace-content').text(JSON.stringify(data));
              $('#alertModal').modal('show');
            }
        });
      }

      function showModalContent(playerId, playerMode, divToReplace){
        if(playerId && playerMode){
          $.ajax({
            url: baseUrl+"index.php/home/player_model_data",
            type: 'POST',            
            data: { 'mode': playerMode, 'playerId': playerId },
            dataType: "json",
            success: function(data) {
              if($.trim(data) != "") {
                var mediaHtml = '';
                if(playerMode == 'profile'){
                    $('.hero-detail-inner-media').addClass('hidden');
                    $('.hero-detail-inner-profile').removeClass('hidden');
                    $('.hero-achive-name').text(data.modal_data[0].name);
                    $('#hero-support-name').text('Support '+data.modal_data[0].name);
                    mediaHtml += '<div class="hero-detail-middle-name text-uppercase">'+data.modal_data[0].name+'</div>'+data.modal_data[0].contest+'<br />'+data.modal_data[0].championship;
                    $('#profileReplaceData').html(mediaHtml);
                }else if(playerMode == 'videos'){
                    $('.hero-detail-inner-media').addClass('hidden');
                    $('.hero-detail-inner-profile').removeClass('hidden');
                }else if(playerMode == 'media'){
                    $('.hero-detail-inner-profile').addClass('hidden');
                    $('.hero-detail-inner-media').removeClass('hidden');
                    $.each( data, function( index, mediaValue ) { 
                      for(var i=0; i<mediaValue.length; i++){
                        var published_date = converter(mediaValue[i].published_date);
                        mediaHtml += '<div class="media-item"><div class="media-discrp"><div class="media-discrp-txt"><a href="'+mediaValue[i].link+'" target="blank">'+mediaValue[i].description+'</a></div><div class="media-discrp-date">'+published_date+'</div></div><div class="media-social-icon"><ul class="list-inline"><li><a href="#" class="social-icon-top"><img src="<?php echo base_url(); ?>assets/img/fb-w.png"></a></li><li><a href="#" class="social-icon-top"><img src="<?php echo base_url(); ?>assets/img/tw-w.png"></a></li></ul></div></div>';
                      }
                    }); 
                    $('.'+divToReplace).html(mediaHtml);
                }
              }
            }
          });
        }

      }
      function converter(s) {
              var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
              s =  s.replace(/-/g, '/');
              var d = new Date(s);
              return months[d.getMonth()] + ' ' + d.getDate() + ', ' + d.getFullYear();
          }
    </script>
  </body>
</html>