  <?php //echo '<pre>';   print_r($records); exit(); ?>
  <section class="clearfix">
    <section class="video-wrpr">
      <img src="<?php echo base_url(); ?>assets/img/video-bg.png">
      <div class="top-video-info">
        <div>
          <div class="top-play-btn"><img src="<?php echo base_url(); ?>assets/img/video-play-btn.png"></div>
          <h2 class="top-video-title text-upppercase">the unsung heroes</h2>
          <div class="top-video-discrp">
            They practise their sport, day in and day out, without complain, without expectation <br class="hidden-small" />for a country that doesn’t even know they exist. Now, it’s time to show them we <br class="hidden-small"/>care. It’s time to make our voices heard. It’s time to say <span>#Garvhai</span>
          </div>          
        </div>
      </div>      
      <div class="vedio-title-wrpr">
        <div class="vedio-hero-title text-uppercase">Inderjeet Singh</div>
        <div class="vedio-hero-desig">Shot putter</div>
      </div>
      <div class="js--jumper" data-href="#hero-wrpr"><img src="<?php echo base_url(); ?>assets/img/scroll-down.png"></div>
    </section>
    </section>
    <section id="hero-wrpr" class="heros-list">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12">
            <div class="row">
              <div class="know-txt">
                Know more about the men and women striving to make India proud.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12">
            <div class="row">
              <?php 
              $count=1;
              $lr="";
              $tb="";
              if(isset($records)){
                foreach($records as $playerData) { 
                  switch ($count) {
                    case '1':
                      $lr="20%";
                      $tb="tl";                      
                      break;
                       case '2':
                        $lr="40%";
                        $tb="tl";                      
                      break;
                       case '3':
                      $lr="0";
                      $tb="tr";                      
                      break;
                       case '4':
                      $lr="20%";
                      $tb="tr";                      
                      break;
                       case '5':
                      $lr="40%";
                      $tb="tr";                      
                      break;
                       case '6':
                      $lr="20%";
                      $tb="bl";                      
                      break;
                       case '7':
                      $lr="40%";
                      $tb="bl";                      
                      break;
                       case '8':
                      $lr="0";
                      $tb="br";                      
                      break;
                       case '9':
                      $lr="20%";
                      $tb="br";                      
                      break;                    
                    default:
                     $lr="40%";
                      $tb="br"; 
                      break;
                  }
                  ?> 

                  <div class="col-xs-4 col-xs-20 overlay-wrpr">
                    <div class="heros-name text-uppercase"><?php echo $playerData['name']; ?></div>
                    <div class="row">
                      <img src="<?php echo base_url(); ?>uploads/<?php echo $playerData['profile_photo']; ?>" class="full-width-img">
                    </div>
                    <div class="hover-overlays"></div>
                    <div class="user-prof-wrpr text-center">
                    <div class="close-overlay">&times;</div>
                      <div class="text-uppercase prof-name-wrpr"><?php echo $playerData['name']; ?></div>
                      <div class="profile-btn text-uppercase" data-lr="<?php echo $lr?>" data-tb="<?php echo $tb?>" data-playermode="profile" data-playerid="<?php echo $playerData['id']; ?>"><span class="anim-btn-bg"></span><span class="anim-btn-txt">profile</span></div>
                      <div class="profile-btn text-uppercase" data-lr="<?php echo $lr?>" data-tb="<?php echo $tb?>" data-playermode="videos" data-playerid="<?php echo $playerData['id']; ?>">videos & images</div>
                      <div class="profile-btn text-uppercase" data-lr="<?php echo $lr?>" data-tb="<?php echo $tb?>" data-playermode="media" data-playerid="<?php echo $playerData['id']; ?>">Media</div>
                      <div class="text-uppercase supp-ply-txt">support player</div>
                      <div class="heros-social-links">
                        <ul class="list-inline">
                          <li><a href="#" class="social-icon-top"><img src="<?php echo base_url(); ?>assets/img/fb-w.png"></a></li>
                          <li><a href="#" class="social-icon-top"><img src="<?php echo base_url(); ?>assets/img/tw-w.png"></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                <?php 
                  $count++;
                } 
              } ?>
              <div class="col-xs-40 col-xs-4 hero-detail-info hidden">
                <div class="hero-detail-inner hero-detail-inner-profile hidden">
                  <div class="hero-detail-top">
                    <div class="hero-detail-top-in">
                      <div class="hero-achive-wrpr">
                        <div class="hero-achive-con">
                          <div class="hero-achive-name text-uppercase">INDERJEET SINGH</div>
                          <div class="hero-achive-event">(Shot Put)</div>
                        </div>
                        <div class="hero-achive-time">
                          28.5
                        </div>
                        <div class="hero-achive-time">
                          22.5 
                        </div>
                        <div class="hero-achive-time">
                          22.1
                        </div>
                      </div>
                      <div class="hero-detail-social-icon text-center">
                        <div>Support Inderjeet</div>
                        <ul class="list-inline">
                          <li><a href="#" class="social-icon-top"><img src="<?php echo base_url(); ?>assets/img/fb-w.png"></a></li>
                          <li><a href="#" class="social-icon-top"><img src="<?php echo base_url(); ?>assets/img/tw-w.png"></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="hero-detail-middle">
                    <div id="profileReplaceData">
                        
                    </div>
                  </div>
                  <div class="hero-detail-bottom">
                    <div class="share-txt-mob">Support</div>
                    <div class="hero-bottom-btn-wrpr">  
                      <div class="back-btn text-uppercase">
                        &lt;&lt; back
                      </div>
                      <div class="media-btn-mob media-show" data-mode="media" data-profileid="">
                        Media
                      </div>
                      <div class="socil-btn-mob">
                        <a href="#">
                          <img src="<?php echo base_url(); ?>assets/img/fb-w.png">
                        </a>
                      </div>
                      <div class="socil-btn-mob">
                        <a href="#">
                          <img src="<?php echo base_url(); ?>assets/img/tw-w.png">
                        </a>
                      </div>
                    </div>
                  </div>                  
                </div>
                <div class="hero-detail-inner hero-detail-inner-media hidden">
                  <div class="hero-detail-top">
                    <div class="hero-detail-top-in">
                      <div class="media-title">Media</div>                      
                    </div>
                  </div>
                  <div class="hero-detail-middle">
                    <div class="media-list-wrpr">
                      
                    </div>
                  </div>
                  <div class="hero-detail-bottom">
                    <div class="share-txt-mob share-txt-mob-med">Share</div>
                    <div class="hero-bottom-btn-wrpr">  
                      <div class="back-btn text-uppercase">
                        &lt;&lt; back
                      </div>
                      <div class="media-btn-mob profile-show" data-mode="profile" data-profileid="">
                        Profile
                      </div>
                      <div class="socil-btn-mob">
                        <a href="#">
                          <img src="<?php echo base_url(); ?>assets/img/fb-w.png">
                        </a>
                      </div>
                      <div class="socil-btn-mob">
                        <a href="#">
                          <img src="<?php echo base_url(); ?>assets/img/tw-w.png">
                        </a>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>             
            </div>
          </div>
        </div>
      </div>      
    </section>
    <section class="heros-gellary">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 light-box-wrpr-fliter">
            <div class="row">
              <div class="col-xs-12">
                <div class="row">
                  <div class="hero-filter clearfix">
                    <div class="col-xs-12">
                      <div class="filter-title">Catch the athletes in action</div>
                      <div class="custom-label-vid text-uppercase">
                        videos &amp; images
                      </div>
                      <div class="select-style">
                          <select id="mobileFilter">
                           <?php 
                            if(isset($records)){
                              foreach($records as $playerData) { 
                                $optionSelected = '';
                                if($playerData['id'] == '1'){ $optionSelected = 'selected="selected"'; }
                                ?>
                                <option <?php echo $optionSelected; ?> value="<?php echo $playerData['id'];?>"><?php echo $playerData['name'];?></option>
                                <?php }
                            } ?>
                          </select>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12">
            <div class="row">              
              <div class="col-xs-4 col-xs-40 light-box-wrpr-fliter">
                <div>
                  <div class="col-xs-12">
                    <div class="hero-filter hero-filter-desk clearfix">
                      <div class="col-xs-12">
                        <div class="filter-title">Catch the athletes in action</div>                     
                      </div>
                        <?php 
                        if(isset($records)){
                          $count = 0;
                          $loopCount = 1;
                          foreach($records as $playerData) { 
                            if($count == 0){
                              echo '<div class="col-sm-6 col-xs-12 hidden-small">
                                      <ul class="cust-inp-wrpr">';
                            }
                            $radioChecked = '';
                            $count=$count+1;
                            if($playerData['id'] == '1'){ $radioChecked = 'checked="checked"'; }
                            ?>
                                  <li>
                                    <input type="radio" id="players_<?php echo $playerData['id'];?>" name="players" value="<?php echo $playerData['id'];?>" <?php echo $radioChecked;?>>
                                      <label class="custom-radio text-uppercase" for="players_<?php echo $playerData['id'];?>">
                                        <?php echo $playerData['name'];?>
                                      </label>
                                  </li>
                          <?php 
                              if($count == 5){
                                echo '</ul>';
                                  if($loopCount == 1){
                                    echo '<div class="btn filter-btn text-uppercase btn-default">
                                      Videos &amp; IMAGES
                                    </div>';
                                  }
                                  echo '</div>';
                                $count = 0;
                                $loopCount = $loopCount+1;
                              }
                            }
                          } ?>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="row">
                          <img src="<?php echo base_url();?>assets/img/trans-bg.png" class="full-width-img">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="row">
                          <img src="<?php echo base_url();?>assets/img/trans-bg.png" class="full-width-img">
                        </div>
                      </div>
                    </div>
                  </div>                                      
                </div>                
              </div>
              <div class="replace-filter-data">
                <?php 
                if(isset($videoRecords)){
                  foreach($videoRecords as $videoData) { ?> 
                    <div class="col-xs-4 col-xs-20 light-box-wrpr">
                      <div class="row">
                      <?php if($videoData['type'] == 'image') { ?>
                          <a>
                            <img src="<?php echo base_url(); ?>uploads/<?php echo $videoData['media_value']; ?>" class="full-width-img">
                            <div class="light-box-overlay image-overlay" data-id="<?php echo $videoData['id']; ?>"></div>
                          </a>   
                        <?php }else if($videoData['type'] == 'video') { ?>
                            <a href="#">
                              <img src="<?php echo base_url(); ?>uploads/<?php echo $videoData['video_thumbnail']; ?>" class="full-width-img">
                              <div class="light-box-overlay video-overlay" data-id="<?php echo $videoData['id']; ?>"></div>
                            </a>
                        <?php } ?>               
                      </div>                
                    </div>
              <?php }
                } ?>
            </div>
            </div>
          </div>
        </div>
      </div>      
    </section>
    <section class="about-wrpr">
      <div class="about-inner">
        <h2 class="about-title text-uppercase text-center">Our mission</h2>
        <p class="about-discrb text-center">In a country that's brimming with potential, our sporting talent deserves much more support - both moral and financial. We need people cheering from the stands, we need facilities that enable our stars to perform at the top of their game. 
At Adani, we have always believed in the power of sport in building the character of a nation and bringing it together. Which is why we felt it was our responsibility to do our bit for India on the biggest sporting stage of all - The Olympics. By supporting extremely talented sportspersons, we are working towards creating a sporting revolution in India. A revolution where each and every Indian stands up and proclaims - <span>#GarvHai</span></p>
      </div>
    </section>
    <section class="contact-wrpr">
      <h2 class="contact-title text-uppercase text-center">Share your experience</h2>
      <form class="contact-form clearfix">
        <div class="col-xs-12">
          <div class="row">
            <div class="col-sm-4 col-xs-12">
              <div class="form-group">         
                <div class="input-group">
                  <label for="name-inp" class="input-group-addon"><i class="glyphicon glyphicon-user"></i></label>
                  <input id="name-inp" type="text" class="form-control" placeholder="Name">
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-xs-12">
              <div class="form-group">         
                <div class="input-group">
                  <label for="email-inp" class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></label>
                  <input id="email-inp" type="mail" class="form-control" placeholder="Mail">
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-xs-12">
              <div class="form-group">         
                <div class="input-group">
                  <label for="tel-inp" class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></label>
                  <input id="tel-inp" type="tel" class="form-control" placeholder="Mobile">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <div class="form-group">         
                <div class="input-group input-group-text-area">
                  <label for="comment-inp" class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></label>
                  <textarea id="comment-inp" class="form-control" placeholder="Comment"></textarea>
                </div>
              </div>
              <div class="form-group terms-check-wrpr text-center">
                <h3 class="text-uppercase"><a href="<?php echo base_url(); ?>index.php/home/terms_condition">Terms & Conditions</a></h3>
                <div class="custom-check-wrpr">
                  <input id="tnc-inp" type="checkbox">
                  <label for="tnc-inp" class="text-uppercase">I hereby confirm that the details furnished above are mine and are true and correct to the best of my knowledge and belief. I have read the Privacy Policy & I authorize Garv Hai Website and its partners to call / email / SMS me for any further communication.</label>                  
                </div>
              </div>
              <div class="form-group">    
                <!-- <button id="share-exp" class="btn btn-submit center-block text-uppercase">submit</button> -->
                <span style="width:80px;" id="share-exp" class="btn btn-submit center-block text-uppercase">submit</span>
              </div>
              <p class="email-txt text-center">
                write us at <a href="mailto:adani@adani.com">adani@adani.com</a>
              </p>  
              <p class="abt-social-txt text-uppercase text-center">follow us on</p>
               <div class="heros-social-links text-center">
                  <ul class="list-inline">
                    <li><a href="#" class="social-icon-top"><img src="<?php echo base_url(); ?>assets/img/fb-o.png"></a></li>
                    <li><a href="#" class="social-icon-top"><img src="<?php echo base_url(); ?>assets/img/tw-o.png"></a></li>
                  </ul>
                </div>           
            </div>
          </div>
        </div>        
      </form>        
    </section>
    <section class="players-schedule-wrpr">
      <div class="ply-schd-inner clearfix">
        <div class="row">
          <div class="col-sm-5 col-xs-12">
            <h2 class="athletes-act">Catch the athletes in action</h2>
            <ul class="cust-inp-wrpr">
              <li>
                <input type="radio" id="schedule_1" name="players" value="<?php echo $playerData['id'];?>" <?php echo $radioChecked;?>>
                <label class="custom-radio text-uppercase" for="schedule_1">INDERJEET SINGH</label>                                        
              </li>
              <li>
                <input type="radio" id="schedule_2" name="players" value="<?php echo $playerData['id'];?>" <?php echo $radioChecked;?>>
                <label class="custom-radio text-uppercase" for="schedule_2">INDERJEET SINGH</label>                                        
              </li>
              <li>
                <input type="radio" id="schedule_3" name="players" value="<?php echo $playerData['id'];?>" <?php echo $radioChecked;?>>
                <label class="custom-radio text-uppercase" for="schedule_3">INDERJEET SINGH</label>                                        
              </li>
              <li>
                <input type="radio" id="schedule_4" name="players" value="<?php echo $playerData['id'];?>" <?php echo $radioChecked;?>>
                <label class="custom-radio text-uppercase" for="schedule_4">INDERJEET SINGH</label>                                        
              </li>
              <li>
                <input type="radio" id="schedule_5" name="players" value="<?php echo $playerData['id'];?>" <?php echo $radioChecked;?>>
                <label class="custom-radio text-uppercase" for="schedule_5">INDERJEET SINGH</label>                                        
              </li>
              <li>
                <input type="radio" id="schedule_6" name="players" value="<?php echo $playerData['id'];?>" <?php echo $radioChecked;?>>
                <label class="custom-radio text-uppercase" for="schedule_6">INDERJEET SINGH</label>                                        
              </li>
              <li>
                <input type="radio" id="schedule_7" name="players" value="<?php echo $playerData['id'];?>" <?php echo $radioChecked;?>>
                <label class="custom-radio text-uppercase" for="schedule_7">INDERJEET SINGH</label>                                        
              </li>
              <li>
                <input type="radio" id="schedule_8" name="players" value="<?php echo $playerData['id'];?>" <?php echo $radioChecked;?>>
                <label class="custom-radio text-uppercase" for="schedule_8">INDERJEET SINGH</label>                                        
              </li>
              <li>
                <input type="radio" id="schedule_9" name="players" value="<?php echo $playerData['id'];?>" <?php echo $radioChecked;?>>
                <label class="custom-radio text-uppercase" for="schedule_9">INDERJEET SINGH</label>                                        
              </li>
              <li>
                <input type="radio" id="schedule_10" name="players" value="<?php echo $playerData['id'];?>" <?php echo $radioChecked;?>>
                <label class="custom-radio text-uppercase" for="schedule_10">INDERJEET SINGH</label>                                        
              </li>
            </ul>
            <div class="select-style">
              <select id="mobileFilter">
                <option selected="selected" value="1">Pinki Rani</option>
                <option value="2">Sanjivani Jadhav</option>
                <option value="3">Shiv Thapa</option>
                <option value="4">Ankita Raina</option>
                <option value="5">Mandeep Jangra</option>
                <option value="6">Sanjivani Jadhav</option>
                <option value="7">Khushbir Kaur</option>
                <option value="8">Inderjeet Singh</option>
                <option value="9">Pinki Rani</option>
                <option value="10">Malaika Goel</option>
              </select>
            </div>
          </div>
          <div class="col-sm-7 col-xs-12">
            <div class="media-list-wrpr media-list-wrpr-btm">
              <div class="media-item">
                <div class="media-discrp">
                  <div class="media-discrp-txt">
                    <p>The trailer of Madaari, starring Irrfan Khan, has been released and the actor once again leaves an indelible impact on his viewers, with his sheer acting prowess.</p>
                  </div>
                  <div class="media-discrp-date">May 13, 2016</div>
                </div>
                <div class="media-social-icon">
                  <ul class="list-inline">
                    <li><a href="#" class="social-icon-top"><img src="<?php echo base_url(); ?>assets/img/fb-w.png"></a></li>
                    <li><a href="#" class="social-icon-top"><img src="<?php echo base_url(); ?>assets/img/tw-w.png"></a></li>
                  </ul>
                </div>
              </div>
              <div class="media-item">
                <div class="media-discrp">
                  <div class="media-discrp-txt">
                    <p>The trailer of Madaari, starring Irrfan Khan, has been released and the actor once again leaves an indelible impact on his viewers, with his sheer acting prowess.</p>
                  </div>
                  <div class="media-discrp-date">May 13, 2016</div>
                </div>
                <div class="media-social-icon">
                  <ul class="list-inline">
                    <li><a href="#" class="social-icon-top"><img src="<?php echo base_url(); ?>assets/img/fb-w.png"></a></li>
                    <li><a href="#" class="social-icon-top"><img src="<?php echo base_url(); ?>assets/img/tw-w.png"></a></li>
                  </ul>
                </div>
              </div>
              <div class="media-item">
                <div class="media-discrp">
                  <div class="media-discrp-txt">
                    <p>The trailer of Madaari, starring Irrfan Khan, has been released and the actor once again leaves an indelible impact on his viewers, with his sheer acting prowess.</p>
                  </div>
                  <div class="media-discrp-date">May 13, 2016</div>
                </div>
                <div class="media-social-icon">
                  <ul class="list-inline">
                    <li><a href="#" class="social-icon-top"><img src="<?php echo base_url(); ?>assets/img/fb-w.png"></a></li>
                    <li><a href="#" class="social-icon-top"><img src="<?php echo base_url(); ?>assets/img/tw-w.png"></a></li>
                  </ul>
                </div>
              </div>
              <div class="media-item">
                <div class="media-discrp">
                  <div class="media-discrp-txt">
                    <p>The trailer of Madaari, starring Irrfan Khan, has been released and the actor once again leaves an indelible impact on his viewers, with his sheer acting prowess.</p>
                  </div>
                  <div class="media-discrp-date">May 13, 2016</div>
                </div>
                <div class="media-social-icon">
                  <ul class="list-inline">
                    <li><a href="#" class="social-icon-top"><img src="<?php echo base_url(); ?>assets/img/fb-w.png"></a></li>
                    <li><a href="#" class="social-icon-top"><img src="<?php echo base_url(); ?>assets/img/tw-w.png"></a></li>
                  </ul>
                </div>
              </div>
              <div class="media-item">
                <div class="media-discrp">
                  <div class="media-discrp-txt">
                    <p>The trailer of Madaari, starring Irrfan Khan, has been released and the actor once again leaves an indelible impact on his viewers, with his sheer acting prowess.</p>
                  </div>
                  <div class="media-discrp-date">May 13, 2016</div>
                </div>
                <div class="media-social-icon">
                  <ul class="list-inline">
                    <li><a href="#" class="social-icon-top"><img src="<?php echo base_url(); ?>assets/img/fb-w.png"></a></li>
                    <li><a href="#" class="social-icon-top"><img src="<?php echo base_url(); ?>assets/img/tw-w.png"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<!-- Modal -->
<div class="modal fade modal-light-box" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="modal-body">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
        <?php if(isset($videoRecords)){
                  foreach($videoRecords as $videoData) { 
                      if($videoData['type'] == 'image') { ?>
                        <div class="item" id="modalImg_<?php echo $videoData['id']; ?>">
                          <img src="<?php echo base_url(); ?>uploads/<?php echo $videoData['media_value']; ?>">
                        </div>
                       <?php }else if($videoData['type'] == 'video') { ?>
                          <div class="item" id="modalImg_<?php echo $videoData['id']; ?>" >
                            <div class="embed-responsive embed-responsive-16by9">
                               <iframe class="embed-responsive-item" src="<?php echo $videoData['media_value']; ?>" frameborder="0" allowfullscreen></iframe>
                            </div>
                          </div>
                       <?php } 
                  }
                } ?>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <img src="<?php echo base_url(); ?>assets/img/previous.png">              
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <img src="<?php echo base_url(); ?>assets/img/next.png">
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      <div class="modal-footer">
        <div class="heros-social-links">
        <ul class="list-inline">
          <li><a href="#" class="social-icon-top"><img src="<?php echo base_url(); ?>assets/img/fb-w.png"></a></li>
          <li><a href="#" class="social-icon-top"><img src="<?php echo base_url(); ?>assets/img/tw-w.png"></a></li>
        </ul>
      </div>
      </div>
    </div>
  </div>
</div>
   