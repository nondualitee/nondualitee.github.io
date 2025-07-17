<!DOCTYPE html>
<html>
    <head>
    
	<!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JFTS2E399T"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-JFTS2E399T');
    </script>   
	    
    
    	<meta content="width=device-width, initial-scale=1" name="viewport" />
    	<meta name=”description” content="Nondualitee is a collection of advaita quotes and images for your tee featuring Advaita auotes from advaita masters Ramana Maharshi, Nisargadatta Maharaj, Atamananda Krishna Menon and others">
        <title>Nondualitee - A collection of advaita quotes and images for your tee</title>
		<link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Poppins:300" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body style="padding-bottom:140px">
	
	<!-- Google Tag Manager (noscript) -->
	<!--
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N5S4TX5"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	-->
	<!-- End Google Tag Manager (noscript) -->
	    	
	<div class="container-full">


    		<!-- sidebar -->
    		<!--
    		<div class="sidebar">
    			<img class="sidebar-logo" src="images/logo.png">
    			<h1 class="brand-title"> Nondualitee </h1>
    			<p class="tag-line"> A collection of advaita quotes and images for your tee </p>
    			<div class="space"></div>
    			<div class="links">
    				<a href="https://nondualitee.threadless.com" target="_blank"> <img class="link-img" src="images/shop-icon-1.svg"> &nbsp;&nbsp;&nbsp; <span class="link-text"> SHOP (US) </span> </a> <br class="link-text"><br class="link-text">
    				<a href="https://nondualitee.blinkstore.in" target="_blank"> <img class="link-img" src="images/shop-icon-2.svg"> &nbsp;&nbsp;&nbsp; <span class="link-text"> SHOP (INDIA) </span> </a> <br class="link-text"><br class="link-text">
    				<a href="https://www.instagram.com/advaita_tees/" target="_blank"> <img class="link-img" src="images/insta-icon.svg"> &nbsp;&nbsp; <span class="link-text"> FOLLOW ON INSTAGRAM </span> </a> <br class="link-text"><br class="link-text">
    				<a href="https://facebook.com/nondualitee" target="_blank"> <img class="link-img" src="images/fb-icon.svg"> &nbsp;&nbsp; <span class="link-text"> FOLLOW ON FACEBOOK </span> </a> <br class="link-text"><br class="link-text"> 
    				<a href="https://twitter.com/nondualitee" target="_blank"> <img class="link-img" src="images/twitter-icon.svg"> &nbsp;&nbsp; <span class="link-text">FOLLOW ON TWITTER </span></a> <br class="link-text"><br class="link-text">
    				<a href="https://www.quora.com/profile/Advaita-Tees" target="_blank"> <img class="" src="images/quora-icon.svg"> &nbsp;&nbsp; <span class="link-text">FOLLOW ON QUORA </span></a>    			
    			</div>
    		</div> -->
			<div class="" style = "background:#000;width:100%; height:80px; display: flex; justify-content: center; align-items: center;" class="">
			    <div style="">
    				<div style="display:inline-block;height:40px;width:50px;" ><div style="display:flex;height:100%;width:100%;justify-content: center; align-items: center;"> <a href="https://www.instagram.com/advaita_tees/" target="_blank"> <img class="" src="images/insta-icon.svg"></a></div> </div>
    				<div style="display:inline-block;height:40px;width:50px;"><div style="display:flex;height:100%;width:100%;justify-content: center; align-items: center;"> <a href="https://facebook.com/nondualitee" target="_blank"> <img class="" src="images/fb-icon.svg"></a> </div></div>
    				<div style="display:inline-block;height:40px;width:50px;"><div style="display:flex;height:100%;width:100%;justify-content: center; align-items: center;"> <a href="https://twitter.com/nondualitee" target="_blank"> <img class="" src="images/twitter-icon.svg"></a> </div></div>
    				<div style="display:inline-block;height:40px;width:50px;"><div style="display:flex;height:100%;width:100%;justify-content: center; align-items: center;"> <a href="https://www.quora.com/profile/Advaita-Tees" target="_blank"> <img class="" src="images/quora-icon.svg"></a> </div></div>  			
    				<div style="display:inline-block;height:40px;width:50px;"><div style="display:flex;height:100%;width:100%;justify-content: center; align-items: center;"> <a href="https://nondualitee.threadless.com" target="_blank"> <img class="" src="images/shop-icon-1.svg"></a> </div> </div>
    				<div style="display:inline-block;height:40px;width:50px;"><div style="display:flex;height:100%;width:100%;justify-content: center; align-items: center;"> <a href="https://nondualitee.blinkstore.in" target="_blank"> <img class="" src="images/shop-icon-2.svg"></a>  </div></div>
				</div>
			</div> <br>
            
            <div class="container" style="display:flex;flex-direction:column">
			  	<img class="center" style="max-height:120px;margin-top:10px;margin-bottom:5px" src="images/nd-logo-black.svg">
    			<h1 style=" font-size: 24px;color: #000;text-align: center; font-family: 'Berkshire Swash', cursive;" class=""> Nondualitee </h1>
    			<p style="color:000;text-align:center" class=""> A collection of advaita quotes and images for your tee </p>
    			<div class=""></div>
    			
			</div>
		
    		<div class="tees-grid">
        		<?php 
					$folder = './images/';
					$filetype = '*.[jJ][pP][gG]';    
					$files = glob($folder.$filetype);    
					$total = count($files);    
					$per_page = 12;    
					$last_page = ceil($total / $per_page);    
					if(isset($_GET["page"])  && ($_GET["page"] <=$last_page) && ($_GET["page"] > 0) ){
					    $page = $_GET["page"];
					    $offset = ($per_page)*($page - 1);      
					}else{
					    $page=1;
					    $offset=0;      
					}    
					$max = $offset + $per_page;    
					if($max>$total){
					    $max = $total;
					}



					echo '<div class="tees">';	
					for($i = $offset; $i< $max; $i++){
					    for ($k=0;$k<12;$k++) {
					        if ($i < $max) {
                            echo '
					        <div class="card-width">
		                          <div class="tee-card">
		                              <img class="tee-img" src="'.$files[$i].'">
		                          </div>
		                    </div>  ';
		                    $i++;
					        }
					        else {
					            break;
					        }
					    }
					}
					
					
					
					/*
					for($i = $offset; $i< $max; $i++){    			
        				for ($k=0;$k<3;$k++) {
		                    	    echo '<div class="row"> ';
		                            for ($j=0; $j<4; $j++) {
		                                if ($i < $max) {

		                                        echo '
		                                            <div class="card-width">
		                                            	   <div class="tee-card">
		                                            	        <img class="tee-img" src="'.$files[$i].'">
		                                                        <!-- <a href="'.$files[$i].'" target="_blank"> <img class="tee-img" src="'.$files[$i].'"></a> -->
		                                               		</div>
		                                            </div>  
		                                        ';
		                                        $i++;
		                                } 
		                                else {
		                                    break;
		                                }
		                            }   
		                            echo '</div>';
		        		}        
		    		} */
					echo '</div>';             

					show_pagination($page,$last_page);


	       			function show_pagination($current_page, $last_page){				    

					    $modvalue = $current_page%5;

					    echo '<div class="page-bar sticky-top">'; 

						echo '<p class="pg-details"> PAGE &nbsp;'.$current_page.'&nbsp; OF '.$last_page.'</p>'; 

					    /*** navigation **/
					    if( $current_page > 5 ){ 
							if ($modvalue != 0) {
		    					echo '<a class="nav-arrow" href="?page='.($current_page-$modvalue).'"> <img src="images/p5.svg"> </a>&nbsp;&nbsp;&nbsp;';
		    				}
		    				else {
		    					echo '<a class="nav-arrow" href="?page='.($current_page-5).'"> <img src="images/p5.svg"> </a>&nbsp;&nbsp;&nbsp;';		    					
		    				} 
							echo ' <a class="nav-arrow" href="?page='.($current_page-1).'"> <img src="images/prev.svg"> </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' ;
		    			} else {
			    			echo '<a class="nav-arrow" > <img src="images/p5.svg"> </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
						    if( $current_page > 1 ){ 
								echo ' <a class="nav-arrow" href="?page='.($current_page-1).'"> <img src="images/prev.svg"> </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' ;
							} else {
								echo ' <a class="nav-arrow" > <img src="images/prev.svg"> </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' ;
			    			}
					    }
					    
					    /*** pg - boxes **/
					    echo '<div class="pg-boxes">';
	    		
				    		if ($modvalue == 1 )  {
				    			echo '<a class="pg-box-curr">'.($current_page).'</a>';
				    			if (($last_page - $current_page) >= 1 ) {
				    				echo '<a class="pg-box" href="?page='.($current_page+1).'">'.($current_page - $modvalue + 2).'</a>'; 
				    				/*echo '<div class="pg-box">'.'<a href="?page='.($current_page+1).'">'.($current_page - $modvalue + 2).'</a>'.'</div>'; */
				    			}	
				    			if (($last_page - $current_page) >=2 ) {
					    			echo '<a class="pg-box" href="?page='.($current_page+2).'">'.($current_page - $modvalue + 3).'</a>';	
					    		}
					    		if (($last_page - $current_page) >=3 ) {
				    				echo '<a class="pg-box" href="?page='.($current_page+3).'">'.($current_page - $modvalue + 4).'</a>';	
				    			}	
					    		if (($last_page - $current_page) >=4 ) {
				    				echo '<a class="pg-box" href="?page='.($current_page+4).'">'.($current_page - $modvalue + 5).'</a>';		
				    			} 
							}
				    		else if ($modvalue == 2  ) {
				    			echo '<a class="pg-box" href="?page='.($current_page-1).'">'.($current_page - $modvalue + 1).'</a>';		
				    			echo '<a class="pg-box-curr">'.($current_page).'</a>';
				    			if (($last_page - $current_page) >=1 ) {
					    			echo '<a class="pg-box" href="?page='.($current_page+1).'">'.($current_page - $modvalue + 3).'</a>';		
					    		}	
				    			if (($last_page - $current_page) >=2 ) {
				    				echo '<a class="pg-box" href="?page='.($current_page+2).'">'.($current_page - $modvalue + 4).'</a>';		
				    			}
				    			if (($last_page - $current_page) >=3 ) {
					    			echo '<a class="pg-box" href="?page='.($current_page+3).'">'.($current_page - $modvalue + 5).'</a>';	
				    			}	
							}
				    		else if ($modvalue == 3  ) {
				    			echo '<a class="pg-box" href="?page='.($current_page-2).'">'.($current_page - $modvalue + 1).'</a>';		
				    			echo '<a class="pg-box" href="?page='.($current_page-1).'">'.($current_page - $modvalue + 2).'</a>';		
				    			echo '<a class="pg-box-curr">'.($current_page).'</a>';
				    			if (($last_page - $current_page) >= 1 ) {
					    			echo '<a class="pg-box" href="?page='.($current_page+1).'">'.($current_page - $modvalue + 4).'</a>';
					    		}		
				    			if (($last_page - $current_page) >= 2 ) {
				    				echo '<a class="pg-box" href="?page='.($current_page+2).'">'.($current_page - $modvalue + 5).'</a>';	
				    			}	
							}
				    		else if ($modvalue == 4) {
				    			echo '<a class="pg-box" href="?page='.($current_page-3).'">'.($current_page - $modvalue + 1).'</a>';		
				    			echo '<a class="pg-box" href="?page='.($current_page-2).'">'.($current_page - $modvalue + 2).'</a>';		
				    			echo '<a class="pg-box" href="?page='.($current_page-1).'">'.($current_page - $modvalue + 3).'</a>';		
				    			echo '<a class="pg-box-curr">'.($current_page).'</a>';
				    			if (($last_page - $current_page) >=1) {
				    			echo '<a class="pg-box" href="?page='.($current_page+1).'">'.($current_page - $modvalue + 5).'</a>';	
				    			}	
							}
				    		else if ($modvalue == 0) {
				    			echo '<a class="pg-box" href="?page='.($current_page-4).'">'.($current_page - 4).'</a>';		
				    			echo '<a class="pg-box" href="?page='.($current_page-3).'">'.($current_page - 3).'</a>';		
				    			echo '<a class="pg-box" href="?page='.($current_page-2).'">'.($current_page - 2).'</a>';		
				    			echo '<a class="pg-box" href="?page='.($current_page-1).'">'.($current_page - 1).'</a>';		
				    			echo '<a class="pg-box-curr">'.($current_page).'</a>';
							}
							
						echo '&nbsp;&nbsp;&nbsp;';	
					    echo '</div>';
					    

					    /*** navigation **/
					    if( (ceil($current_page/5)) < (ceil($last_page/5))  ){
							echo '<a class="nav-arrow" href="?page='.($current_page+1).'"> <img src="images/next.svg"> </a>&nbsp;&nbsp;&nbsp;';
							if ($modvalue != 0) {
		    					echo '<a class="nav-arrow" href="?page='.($current_page+5-$modvalue+1).'"> <img src="images/n5.svg"></a> &nbsp;&nbsp;&nbsp;';
		    				}
		    				else {
		    					echo '<a class="nav-arrow" href="?page='.($current_page+1).'"> <img src="images/n5.svg"></a> &nbsp;&nbsp;&nbsp;';		    					
		    				}
					    } else {
						    if( $current_page < $last_page ){ 
								echo '<a class="nav-arrow" href="?page='.($current_page+1).'"> <img src="images/next.svg"> </a>&nbsp;&nbsp;&nbsp;';
			    			} else {
								echo '<a class="nav-arrow"> <img src="images/next.svg"> </a>&nbsp;&nbsp;&nbsp;';	
			    			}
							echo ' <a class="nav-arrow" > <img src="images/n5.svg"> </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' ;
					    }




					    /*
					    if( $current_page > 1 ){
						echo ' <a class="nav-arrow" href="?page=1"> <img src="images/first.svg"> </a> &nbsp;&nbsp;&nbsp;' ;
		    				echo '<a class="nav-arrow" href="?page='.($current_page-1).'"> <img src="images/prev.svg"> </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		    			} else {
						echo ' <a class="nav-arrow" > <img src="images/first.svg"> </a>&nbsp;&nbsp;&nbsp;' ;
		    				echo '<a class="nav-arrow" > <img src="images/prev.svg"> </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
					    }
					    echo 'PAGE &nbsp;'.$current_page.'&nbsp; OF '.$last_page.' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
					    if( $current_page < $last_page ){
		    				echo '<a class="nav-arrow" href="?page='.($current_page+1).'"> <img src="images/next.svg"></a> &nbsp;&nbsp;&nbsp;';
							echo '<a class="nav-arrow" href="?page='.($last_page).'"> <img src="images/last.svg"> </a>&nbsp;&nbsp;&nbsp;';
					    } else {
						echo ' <a class="nav-arrow" > <img src="images/next.svg"> </a>&nbsp;&nbsp;&nbsp;' ;
		    				echo '<a class="nav-arrow" > <img src="images/last.svg"> </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
					    }
					    */

					    echo '</div>'; 
					} 
    			?>
  
    		</div>

    	</div>	



        <!-- scripts -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		<!-- Default Statcounter code for Nondualitee.org
		http://nondualitee.org -->
		<script type="text/javascript">
		var sc_project=10038590; 
		var sc_invisible=1; 
		var sc_security="9eb96d69"; 
		</script>
		<script type="text/javascript" src="https://www.statcounter.com/counter/counter.js" async></script>
		<noscript><div class="statcounter"><a title="Web Analytics"
		href="https://statcounter.com/" target="_blank"><img
		class="statcounter"
		src="https://c.statcounter.com/10038590/0/9eb96d69/1/"
		alt="Web Analytics"></a></div></noscript>
		<!-- End of Statcounter Code -->

    </body>
</html>

