<?php
	$schemaDescription = stripcslashes(strip_tags($contentDetails['summary_html']));
	$schemaDescription = str_replace(['"' , "'"] ,['\u0022' ,'\u0027'],$schemaDescription);
	$published_date = date_format(date_create($contentDetails['publish_start_date']),"Y-m-d\TH:i:s\+05:30");
	$Updated_date =date_format(date_create($contentDetails['last_updated_on']),"Y-m-d\TH:i:s\+05:30");

	if ($contentDetails['article_page_image_path'] != '' && getimagesize(image_url_no . imagelibrary_image_path . $contentDetails['article_page_image_path'])){
		$Image 	= str_replace("original","w600X390", $contentDetails['article_page_image_path']);
		$image_path = '';
		$image_path = image_url. imagelibrary_image_path . $Image;
	}else{
		$image_path	   = image_url. imagelibrary_image_path.'logo/din_logo_600X390.jpg';
	}

	$tags	=	$contentDetails['tags'];

	$name_au		=	 ($contentDetails['author_name']!='') ? $contentDetails['author_name'] : $contentDetails['agency_name']
	?>
<!doctype html>
<html amp>
	<head>
		<meta charset="utf-8">
		<title><?php echo strip_tags($contentDetails['title']); ?> | Dinamani</title>
		<meta name="title" content="<?php echo htmlentities(strip_tags($contentDetails['meta_Title'])); ?>">
		<meta name="description" content="<?php echo htmlentities(strip_tags($contentDetails['summary_html'])); ?>">
		<meta name="keywords" content="<?php echo $tags; ?>">
		<meta name="news_keywords" content="<?php echo $tags; ?>">
		<meta name="robots" content="INDEX, FOLLOW">
		<meta property="fb:pages" content="144731995537638" >
		<meta property="og:url" content="<?php echo $image_path;?>" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="<?php echo htmlentities(strip_tags($contentDetails['meta_Title'])); ?>"/>
		<meta property="og:image" content="<?php echo $image_path; ?>"/>
		<meta property="og:image:width" content="450"/>
		<meta property="og:image:height" content="298"/>
		<meta property="og:site_name" content="Dinamani"/>
		<meta property="og:description" content="<?php echo htmlentities(strip_tags($contentDetails['summary_html'])); ?>"/>
		<meta name="twitter:card" content="summary_large_image" /> 
		<meta name="twitter:creator" content="DINAMANI" />
		<meta name="twitter:site" content="@dinamani.com" />
		<meta name="twitter:title" content="<?php echo htmlentities(strip_tags($contentDetails['meta_Title'])); ?>" />
		<meta name="twitter:description" content="<?php echo htmlentities(strip_tags($contentDetails['summary_html'])); ?>" />
		<meta name="twitter:image" content="<?php echo $image_path; ?>" />
		<link rel="shortcut icon" href="<?php echo image_url ?>images/FrontEnd/images/favicon.ico" type="image/x-icon" />
		<link rel="canonical" href="<?php echo BASEURL.$contentDetails['url'] ?>"/>
		<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
		<meta name="google-site-verification" content="9zlBviLYY6ErgrLT4Wk3_5hiL2iLTYO0U5llyxkS5Fo" />
		<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap">
		<link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Baloo+Thambi&display=swap">
		<script async src="https://cdn.ampproject.org/v0.js"></script>
		<script async custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js"></script>
		<script async custom-element="amp-list" src="https://cdn.ampproject.org/v0/amp-list-0.1.js"></script>
		<script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
		<script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
		<script async custom-element="amp-lightbox" src="https://cdn.ampproject.org/v0/amp-lightbox-0.1.js"></script>
		<script async custom-element="amp-image-lightbox" src="https://cdn.ampproject.org/v0/amp-image-lightbox-0.1.js"></script>
		<script async custom-element="amp-youtube" src="https://cdn.ampproject.org/v0/amp-youtube-0.1.js"></script>
		<script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
		<script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
		<script async custom-element="amp-selector" src="https://cdn.ampproject.org/v0/amp-selector-0.1.js"></script>
		<script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
		<script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
		<script async custom-element="amp-video" src="https://cdn.ampproject.org/v0/amp-video-0.1.js"></script>
		<script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
		<script async custom-element="amp-sticky-ad" src="https://cdn.ampproject.org/v0/amp-sticky-ad-1.0.js"></script>
		<script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
		<script async custom-element="amp-twitter" src="https://cdn.ampproject.org/v0/amp-twitter-0.1.js"></script>
		<script async custom-element="amp-facebook" src="https://cdn.ampproject.org/v0/amp-facebook-0.1.js"></script>
		<script async custom-element="amp-instagram" src="https://cdn.ampproject.org/v0/amp-instagram-0.1.js"></script>
		<script async custom-element="amp-dailymotion" src="https://cdn.ampproject.org/v0/amp-dailymotion-0.1.js"></script>
		<script async custom-element="amp-soundcloud" src="https://cdn.ampproject.org/v0/amp-soundcloud-0.1.js"></script>
		<script async custom-element="amp-audio" src="https://cdn.ampproject.org/v0/amp-audio-0.1.js"></script>
		<script async custom-element="amp-web-push" src="https://cdn.ampproject.org/v0/amp-web-push-0.1.js"></script>
		<?php if($contentDetails['section_id']==731):	?>
		<script async custom-element="amp-live-list" src="https://cdn.ampproject.org/v0/amp-live-list-0.1.js"></script> 
		<?php endif; ?>
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
		<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style>
		<noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
		<script type="application/ld+json">
				{
					"@context": "http:\/\/schema.org",
					"@type": "NewsArticle",
					"mainEntityOfPage": {
						"@type": "WebPage",
							"@id": "<?php echo BASEURL.$contentDetails['url']; ?>"
					},
					"headline": "<?php print htmlentities(strip_tags($contentDetails['title'])); ?>",
					"description": "<?php print $schemaDescription; ?>",
					"datePublished": "<?php echo $published_date; ?>",
					"dateModified": "<?php  echo $Updated_date; ?>",
					"publisher": {
						"@type": "Organization",
						"name": "Dinamani",
						"logo": {
							"@type": "ImageObject",
							"url": "<?php echo image_url; ?>images/FrontEnd/images/dinamani-mob-logo.png",
							"width": "450",
							"height": "130"
						}
					},
					"inLanguage": "ta",
					"keywords": "<?php echo strip_tags($contentDetails['tags']); ?>",
					"author": {
						"@type": "Person",
						"name": "<?php print $name_au ?>"
						
					},	
					"image": {
						"@type": "ImageObject",
						"url": "<?php print $image_path ?>",
						"width": "600",
						"height": "390"
					}	
				}		
				</script>
		<style amp-custom>
			body{font-family: 'Noto Sans', sans-serif;}
			header {float: left; width: 100%; background: #052962; padding: 3% 0%; display: flex; align-items: center; justify-content: space-between;}
			header .menu-bar {float: left; color: #fff; margin-left: 2%; font-size: 21px; margin-top: 0;}
			header .logo_img{float: left;margin-left: 7%;}
			nav {float: left;width: 96%;overflow-x: scroll;	padding: 2%;display: flex;	flex: 1; display: flex;		font-family: 'Baloo Thambi', cursive; background: #2e487d;}
			nav a {	float: left; margin-right: 15px; font-size: 15px; text-decoration: none; color: #fff;flex: 0 0 auto;	position: relative;	font-weight: 400;text-transform: uppercase;font-size: 12px;}
			.fa-home{font-size: 18px;}
			section{width: 96%;float: left;padding: 2%;}
			.section-name {float: left;margin: 6px 0 8px;background: #3266cc;color: #fff;padding: 3px 7px 4px;		font-size: 14px;border-radius: 8px;font-weight: 700;}
			.article-title {float: left;margin: 0 0 5px;width: 100%;color: #000; font-size: 17px;}
			.published-date{float: left;width: 100%;font-size: 12px;margin: 0 0 15px;color: #606060;padding-bottom: 7px;}
			.social-icons{text-align: center;}
			.article-content a{color: #2e487d;}
			.fa-facebook{padding: 3px 7px; background: #3B5998; border: 1px solid #3B5998;}
			.fa-twitter{padding: 3px 4px; background: #1dcaff; border: 1px solid #1dcaff;}
			.fa-instagram{padding: 3px 5px; background: #ff6600; border: 1px solid #ff6600;}
			.social-icons , .article-image{float:left;width:100%;margin-bottom: 10px;}
			.social-icons amp-social-share{border-radius: 50%;}
			.article-content {	width: 100%;float: left;font-family: 'Noto Sans Tamil', sans-serif;text-align: justify;	line-height: 2; font-size: 15px;}
			.tags{float:left;width:100%;margin-bottom: 10px;}
			.tags span {float: left;margin-right: 10px;	font-weight: bold; font-size: 16px;}
			.tags a {margin: 0px 6px 6px;text-decoration: none;	color: #fff;float: left;background: #052962; border-radius: 10px;font-weight: bold; font-size: 14px; padding: 2px 10px;}
			.more-from-section{float:left;width:100%;}
			.more-from-section h3 {float: left;	width: 100%;margin: 2% 0 2%;text-align: center;	color: #052962; font-size: 17px;}
			.more-from-section h3 span{padding-bottom: 3px;}
			.more-stories {	float: left;width: 100%;flex: 1;display: flex;overflow-x: scroll;padding: 15px 0 15px;		border-top: 2px solid #052962; border-bottom: none;	}
			.more-stories .items{width: 40%;flex: 0 0 auto;margin-right: 4%;padding: 2%;border-radius: 8px; background: #052962;}
			.more-stories .items a{float: left;width: 100%;text-decoration: none;color: #000;font-size: 13px;}
			.more-stories .items h4{margin: 3px 0 3px;font-weight: normal;float: left;width: 100%;line-height: 1.3; color: #fff;}
			footer {float: left;width: 96%;padding: 2%;color: #fff;	margin-top: 3%;	background: #052962; text-align: center;}
			footer p{margin: 0 0 4px;text-align: center;font-size: 12px;}
			footer a{color: #fff;font-weight: 400;text-decoration: none;font-size: 12px;}
			amp-sidebar {background: #052962; width: 100%; height: fit-content;}
			amp-sidebar ul {float: left;width: 100%;padding: 0; margin: 0;}
			amp-sidebar li {list-style: none; margin-bottom: 10px; padding-left: 15px; border-bottom: 1px solid #cccccc5c; padding-bottom: 15px;}
			amp-sidebar ul li:last-child{border: none;}
			amp-sidebar li a {	font-size: 14px;text-decoration: none;color: #fff;text-transform: uppercase;}
			amp-sidebar .close-event{text-align:right;}
			amp-sidebar .close-event img{margin-top: 6px;}
			.gallery-items{float: left;width: 100%;margin: 0 0 20px;position: relative;}
			.gallery-items img{border-top-right-radius: 8px;border-top-left-radius: 8px;}
			.gallery-items figcaption{background: #052962; color: #fff; padding: 10px; font-size: 13px; line-height: 1.5;    border-bottom-left-radius: 8px; border-bottom-right-radius: 8px;}
			.gallery-items div{position: absolute;top: 11px;right: 11px;font-size: 20px;z-index: 9;color: #fff;background: #000000ab;padding: 1px 8px 1px;border-radius: 5px;}
			.gallery-items div span{font-size: 15px;}
			.social-icons-n {text-align: right;margin-top: 2%; margin-right: 2%;}
			.social-icons-n a i{color: #fff; font-size: 13px; margin: 7px 1px; border-radius: 25%;}
			.refresh-list{background: #09155E; border: none;color: #fff;padding: 10px 14px 10px;border-radius: 5px;position:relative;}
			.live-content{float: left;width: 87%;margin: 1%;background: #fff;padding: 5%;border-radius: 8px;border: 1px solid #ddd;margin-bottom: 6%;position:relative;}
			.live-content .time{float: left;width: 100%;margin-bottom: 5px;color: #6b6565;font-size: 13px;}
			.live-content .content_title{float: left;width: 100%;margin: 10px 0 10px;font-size: 15px;}
			.live-content .content_description{float: left;width: 100%;font-size: 14px;line-height: 1.6;}
			.live-socialicons{position: absolute;top: 0;right: 0;}
			.live-fb{border-bottom-left-radius: 8px;}
			.live-ti{border-top-right-radius: 8px;}
			.live-update-t{margin: 1%;background: #f00;padding: 2% 5% 1%;color: #fff;text-align: center;text-transform: uppercase;}
			.scc{min-height: 70px;position: relative;border-top: 1px solid #ddd;padding: 8px 0 11px;border-bottom: 1px solid #ddd;float: left;margin: 0 0 14px;width:100%;}
			.scc .scc-span{font-size: 7px;color: #a3a1a1;margin-bottom: 8px;width: 100%;float: left;text-align: right;}
			.scc .scc-div{overflow: hidden;width:100%;align-items: center;display: flex;flex-direction: row;flex-wrap: wrap;justify-content: center;}
			<?php if($contentType==4): ?>
			amp-youtube{width:100%;height:350px;margin-bottom:15px;}
			<?php endif; ?>
			.trending-tags{float:left;width:100%;margin-bottom: 3%;}
			amp-accordion ,.trending-tags section div{float: left;width: 100%;}
			.trending-tags section{padding: 0;width: 100%;}
			.trending-tags section h4 {	font-size: 16px;background-color: #052962; border: 1px solid #052962;color: #fff;	padding: 7px;margin: 0;}
			.trending-tags section a{font-size: 14px;color: #000;text-decoration: none;font-weight: 400;margin-left: 8px;padding: 5px 0 5px;width:100%;float:left;}
			.telegram-img{margin: 10px 0;}
			.scc3{margin:0;border:none;min-height: 60px;padding-bottom:0;}
			.align-center-button{display:flex;align-items: center;justify-content:center;flex-direction: row;width:100%}
			amp-web-push-widget .subscribe {display: flex;flex-direction: row;align-items: center;border-radius: 2px;	margin: 0;	padding: 8px 15px;	cursor: pointer;outline: 0;	font-size: 16px;font-weight: 400;color: #fff;border: 1px solid #3266cc;	background: #3266cc;-webkit-tap-highlight-color: transparent;}
			amp-web-push-widget .unsubscribe{border-radius:2px;border:1px solid #b3b3b3;margin:0;padding:8px 15px;cursor:pointer;outline:0;font-size:15px;font-weight:400;background:#bdbdbd;color:#555;-webkit-tap-highlight-color:transparent}
			amp-web-push-widget .subscribe .subscribe-icon{margin-right:10px}
			amp-web-push-widget .subscribe:active{transform:scale(.99)}
		</style>
	</head>
		
	<body>
		<amp-analytics type="googleanalytics">
			<script type="application/json">
			{
				"vars": {
				"account": "UA-2311935-31"
				},
				"triggers": {
					"trackPageview": {
						"on": "visible",
						"request": "pageview"
					}
				}
			}
			</script>
		</amp-analytics>
		<amp-analytics type="comscore"> 
			<script type="application/json">
			{
			"vars": {"c2": "16833363"},
			"extraUrlParams": {"comscorekw": "amp"}
			}
			</script>
		</amp-analytics> 
		<amp-sidebar id="sidebar" layout="nodisplay"  side="right" >
			<div class="close-event">
			<amp-img class="amp-close-image"
			src="<?php echo image_url; ?>images/FrontEnd/images/close_btn.png"
			width="30"
			height="30"
			
			alt="close sidebar"
			on="tap:sidebar.close"
			role="button"
			tabindex="0"></amp-img>
			</div>
			<ul class="">
				<li><a href="<?php echo BASEURL; ?>">?????????????????????</a></li>
				<li><a href="<?php echo BASEURL; ?>latest-news">???????????????????????? ???????????????????????????</a></li>
				<li><a href="<?php echo BASEURL; ?>editorial"> ???????????????????????????</a></li>
				<li><a href="<?php echo BASEURL; ?>india"> ?????????????????????</a></li>
				<li><a href="<?php echo BASEURL; ?>cinema"> ??????????????????</a></li>
				<li><a href="<?php echo BASEURL; ?>sports">??????????????????????????????</a></li>
				<li><a href="<?php echo BASEURL; ?>religion">????????????????????????</a></li>
				<li><a href="<?php echo BASEURL; ?>astrology">?????????????????????</a></li>
				<li><a href="<?php echo BASEURL; ?>employment">????????????????????????????????????</a></li>
				<li><a href="<?php echo BASEURL; ?>tamilnadu">???????????????????????????</a></li>
				<li><a href="<?php echo BASEURL; ?>world">???????????????</a></li>
				<li><a href="<?php echo BASEURL; ?>education">???????????????</a></li>
				<li><a href="<?php echo BASEURL; ?>lifestyle">?????????????????????????????????</a></li>
			</ul>
		</amp-sidebar>
		<div style="max-width: 600px; margin: 0 auto;">
			<header>
				<a on="tap:sidebar.toggle" class="menu-bar"><i class="fa fa-bars" aria-hidden="true"></i></a>
				<a href="<?php echo BASEURL; ?>" class="logo_img">
					<amp-img src="<?php echo image_url.	'images/FrontEnd/images/dinamani-logo-124x38.png'; ?>" alt="" height="38" width="124"></amp-img>
				</a>
				<div class="social-icons-n">
					<a target="_blank" href="https://www.facebook.com/DinamaniDaily">
						<i class="fa fa-facebook"></i>
					</a>
					<a target="_blank" href="https://twitter.com/DINAMANI">
						<i class="fa fa-twitter"></i>
					</a>
					<a target="_blank" href="https://www.instagram.com/webdinamani/">
						<i class="fa fa-instagram"></i>
					</a>
				</div>
				
			</header>
			<nav>
				<?php
				foreach($menuDetails as $menu):
					if(strtolower($menu['Sectionname'])=='?????????????????????'){
						$menu['Sectionname'] = '<i class="fa fa-home" aria-hidden="true"></i>';
					}
					echo '<a href="'.BASEURL.$menu['URLSectionStructure'].'">'.$menu['Sectionname'].'</a>';
				endforeach;
				?>
			</nav>
			<section>
				<a title="Join Telegram" href="https://t.me/dinamaniofficial">
				  <amp-img class="telegram-img" height="100" width="310" layout="responsive" src="<?php echo image_url ;?>images/static_img/telegram_m.jpg" alt="Join Telegram"></amp-img>
				</a>
				<p class="section-name"><?php echo $contentDetails['section_name']; ?></p>
				<h1 class="article-title"><?php echo stripslashes(strip_tags($contentDetails['title'], '</p>')) ?></h1>
				<p class="published-date"> <?php echo date('jS M Y h:i A',strtotime($contentDetails['publish_start_date'])) ?><?php if($contentDetails['author_name']!=''){ echo '&nbsp;|&nbsp;'.$contentDetails['author_name'];} ?></p>
				<?php
					if(isset($advUnit['after_title']) && $advUnit['after_title']!=''){
						echo '<div class="scc"><span class="scc-span">ADVERTISEMENT</span>';
						echo '<div class="scc-div">'.@$advUnit['after_title'].'</div>';
						echo '</div>';
					}
				?>
				<div class="social-icons">
					<amp-social-share type="email" width="27" height="27"></amp-social-share>
					<amp-social-share type="twitter" width="27" height="27"></amp-social-share>
					<amp-social-share type="facebook" width="27" height="27" data-param-app_id="272592156694146" ></amp-social-share>
					<amp-social-share type="pinterest" width="27" height="27"></amp-social-share>
					<amp-social-share type="tumblr" width="27" height="27"></amp-social-share>
					<amp-social-share type="linkedin" width="27" height="27"></amp-social-share>
					<amp-social-share type="whatsapp" width="27" height="27"></amp-social-share>
				</div>
				<?php
				if($contentDetails['article_page_image_path']!='' && $contentType==2){
					$image = str_replace(' ', "%20", $contentDetails['article_page_image_path']);
					if (getimagesize(image_url_no . imagelibrary_image_path . $image)){
						$imagedetails = getimagesize(image_url_no . imagelibrary_image_path.$image);
						$imagewidth = $imagedetails[0];
						$imageheight = $imagedetails[1];
						echo '<div class="article-image">';
						echo '<amp-img src="'.image_url . imagelibrary_image_path.$image.'" alt="'.strip_tags($contentDetails['article_page_image_alt']).'" height="'.$imageheight.'" width="'.$imagewidth.'" layout="responsive"></amp-img>';
						echo '</div>';
					}
				}
				?>
				<?php if($contentType==2 || $contentType==4): ?>
				<div class="article-content">
					<?php
						$content =  stripslashes($contentDetails['article_page_content_html']);
						$content =  str_replace('http://images.dinamani.com/','https://images.dinamani.com/', $content);
						$content = preg_replace('/<g[^>]*>/i', '', $content);
						$htmlContent = new domDocument;
						$htmlContent->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'));
						$htmlContent->preserveWhiteSpace = false; 
						$images = $htmlContent->getElementsByTagName('img');
						foreach($images as $img){
							$imgWidth = $img->getAttribute('width');
							$imgHeight = $img->getAttribute('height');
							if($imgWidth==''){	$img->setAttribute('width','356');	}
							if($imgHeight==''){	$img->setAttribute('height','300');	}
						}
						$content = $htmlContent->saveHTML();
						$content = str_replace(['<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">' ,'<html><body>' , '</body></html>'] ,['','',''] , $content);
						
						$this->amp_library->loadcontent($content);
						$finalcontent =  $this->amp_library->ampHTML();
						if(isset($advUnit['between_article']) && $advUnit['between_article']!='' && $contentType==2){
							$html = new domDocument;
							$html->loadHTML(mb_convert_encoding($finalcontent, 'HTML-ENTITIES', 'UTF-8'));
							$html->preserveWhiteSpace = false; 
							$ptag = $html->getElementsByTagName('p');
							$i=0;
							foreach ($ptag as $p){
								if($i==3){
									$elementhtml = $html->saveHTML($p);
									$advContent = "<span style=\"margin:0;\" class=\"scc-span\">ADVERTISEMENT</span><div class=\"scc-div\">".$advUnit['between_article']."</div>";
									$titleNode = $html->createElement("adv-block-widget-random");
									$titleNode->setAttribute('class','scc');
									$titleNode->nodeValue = $advContent;
									$p->appendChild($titleNode);
								}
								$i++;
							}
							$splittedContent = str_replace(['<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">' ,'adv-block-widget-random'] ,["" ,"div"] , $html->saveHTML());
							$finalcontent =  html_entity_decode($splittedContent);
						}
						if(isset($advUnit['between_article']) && $advUnit['between_article']!='' && $contentType==4){
							$finalcontent .= '<div class="scc"><span class="scc-span">ADVERTISEMENT</span>';
							$finalcontent .= '<div class="scc-div">'.@$advUnit['between_article'].'</div>';
							$finalcontent .= '</div>';
						}
						$finalcontent = str_replace(['<iframe' , '</iframe'] , ['<amp-iframe' , '</amp-iframe'] , $finalcontent);
						echo $finalcontent;
						if($contentType==2){
							if($contentDetails['section_id']==731){
								echo '<h5 class="live-update-t">Live Updates</h5>';
								echo '<amp-live-list layout="container"  data-poll-interval="15000"			  data-max-items-per-page="5" id="amp-live-list-insert-blog">';
								echo '<button update  on="tap:amp-live-list-insert-blog.update">You have updates</button>';
								echo '<div items>';
								$FileName= $contentDetails['content_id'].'.json';
								$path='/var/www/html/dinamani_app/application/views/LIVENOW/';
								$Result=@file_get_contents($path.$FileName);
								$Result=json_decode($Result,true);
								$Result=array_reverse($Result['details']);
								$i=1;
								foreach($Result as $Data){
									if($Data['status']==1){
										$Date=explode(' ',$Data['date']);
										$Date=explode(':',$Date[1]);
										$Date=$Date[0].':'.$Date[1];
										$Time=strtotime($Data['date']);
										$Time=Date('M j',$Time);
										$this->amp_library->loadcontent($Data['content']);
										$Content = $this->amp_library->ampHTML();
										echo '<div id="post'.$i.'"   data-sort-time="'.strtotime($Data['date']).'"  class="blog-item live-content">';
										echo '<div class="time">'.$Date.' '.$Time.'</div>';
										echo '<h3 class="content_title">'.$Data['title'].'</h3>';
										echo '<div class="content_description">'.$Content.'</div>';
										echo '<div class="live-socialicons">';
										echo '<amp-social-share class="live-fb" type="facebook" data-param-app_id="1001847326609171" width="30" height="29" ></amp-social-share>';
										echo '<amp-social-share type="whatsapp" width="30" height="29"  data-param-text="CANONICAL_URL"></amp-social-share>';
										echo '<amp-social-share class="live-ti" type="twitter" width="30" height="29" ></amp-social-share>';
										echo '</div>';
										echo '</div>';
									}
									$i++;
								}
								echo '</div>';
								echo '</amp-live-list>';
							}
						}
					?>
				</div>
				<?php endif; ?>
				
				<?php if($contentType==3): ?>
				<div class="article-content">
					<?php
					$galleryadvs = [];
					if(isset($advUnit['between_gallery_images']) && $advUnit['between_gallery_images']!=''){
						$galleryadvs  = explode(',' , $advUnit['between_gallery_images']);
					}
					$i=1;
					$j=1;
					$ga = 0;
					$galleryCount = count($galleryRelatedDetails);
					foreach($galleryRelatedDetails as $galleryImages):
						if($galleryImages['gallery_image_path']!=''){
							$image = str_replace(' ', "%20", $galleryImages['gallery_image_path']);
							$imagedetails = getimagesize(image_url_no.imagelibrary_image_path.$image);
							$imagewidth = $imagedetails[0];
							$imageheight = $imagedetails[1];
							echo '<figure class="gallery-items">';
							echo '<div>'.$i.' / <span>'.$galleryCount.'</span></div>';
							echo '<amp-img src="'.image_url . imagelibrary_image_path.$image.'" alt="'.strip_tags($galleryImages['gallery_image_alt']).'" height="'.$imageheight.'" width="'.$imagewidth.'" layout="responsive"></amp-img>';
							echo '<figcaption>'.strip_tags($galleryImages['gallery_image_title']).'</figcaption>';
							echo '</figure>';
							$i++;
							if($j==2){
								if(isset($galleryadvs[$ga]) && $galleryadvs[$ga]!=''){
									echo '<div class="scc"><span class="scc-span">ADVERTISEMENT</span>';
									echo '<div class="scc-div">'.@$galleryadvs[$ga].'</div>';
									echo '</div>';
								}
								$ga++;
								$j=1;
							}else{
								$j++;
							}
						}
						
					endforeach;
					?>
				</div>
				<?php endif; ?>	
				
				<?php if($contentDetails['tags']!=''): ?>
				<div class="tags">
					<span>Tags : </span>
					<?php
					$Tags=explode(',',$contentDetails['tags']);
					for($i=0;$i<count($Tags);$i++):
						if($Tags[$i]!=''):
							$tag_title = join( "_",( explode(" ", trim($Tags[$i]) ) ) );
							$tag_url_title = preg_replace('/[^A-Za-z0-9\_]/', '', $tag_title); 
							$TagUrl=BASEURL.'topic/'.$tag_url_title;
							echo '<a href="'.$TagUrl.'">'.$Tags[$i].'</a>';
						endif;
					endfor;
					?>
				</div>
				<?php endif; ?>
				<amp-web-push id="amp-web-push" layout="nodisplay" helper-iframe-url="https://www.dinamani.com/helper-iframe.html" permission-dialog-url="https://www.dinamani.com/permission-dialog.html" service-worker-url="https://www.dinamani.com/service-worker.js" > </amp-web-push> <!-- Subscription widget --> <div class="align-center-button"> <amp-web-push-widget visibility="unsubscribed" layout="fixed" width="250" height="45"> <button class="subscribe" on="tap:amp-web-push.subscribe"> <amp-img class="subscribe-icon" width="18" height="18" layout="fixed" src="data:image/svg+xml;base64,PHN2ZyBpZD0iTGF5ZXJfMSIgZGF0YS1uYW1lPSJMYXllciAxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNTYgMjU2Ij48dGl0bGU+UHVzaEFsZXJ0PC90aXRsZT48ZyBpZD0iRm9ybWFfMSIgZGF0YS1uYW1lPSJGb3JtYSAxIj48ZyBpZD0iRm9ybWFfMS0yIiBkYXRhLW5hbWU9IkZvcm1hIDEtMiI+PHBhdGggZD0iTTEzMi4wNywyNTBjMTguNjIsMCwzMy43MS0xMS41MywzMy43MS0yMUg5OC4zNkM5OC4zNiwyMzguNDIsMTEzLjQ2LDI1MCwxMzIuMDcsMjUwWk0yMTksMjAwLjUydjBhNTcuNDIsNTcuNDIsMCwwLDEtMTguNTQtNDIuMzFWMTE0LjcyYTY4LjM2LDY4LjM2LDAsMCwwLTQzLjI0LTYzLjU1VjM1LjlhMjUuMTYsMjUuMTYsMCwxLDAtNTAuMzIsMFY1MS4xN2E2OC4zNiw2OC4zNiwwLDAsMC00My4yMyw2My41NXY0My40NmE1Ny40Miw1Ny40MiwwLDAsMS0xOC41NCw0Mi4zMXYwYTEwLjQ5LDEwLjQ5LDAsMCwwLDYuNTcsMTguNjdIMjEyLjQzQTEwLjQ5LDEwLjQ5LDAsMCwwLDIxOSwyMDAuNTJaTTEzMi4wNyw0NS40MmExMS4zMywxMS4zMywwLDEsMSwxMS4zNi0xMS4zM0ExMS4zMywxMS4zMywwLDAsMSwxMzIuMDcsNDUuNDJabTczLjg3LTE3LjY3LTYuNDUsOS43OGE4My40Niw4My40NiwwLDAsMSwzNi4xNSw1NC43N2wxMS41My0yLjA2YTk1LjIzLDk1LjIzLDAsMCwwLTQxLjIzLTYyLjVoMFpNNjQuNDYsMzcuNTJMNTgsMjcuNzVhOTUuMjMsOTUuMjMsMCwwLDAtNDEuMjMsNjIuNWwxMS41MywyLjA2QTgzLjQ2LDgzLjQ2LDAsMCwxLDY0LjQ1LDM3LjU0aDBaIiBmaWxsPSIjZmZmIi8+PC9nPjwvZz48L3N2Zz4="> </amp-img> Subscribe to Notifications </button> </amp-web-push-widget> </div>
				<?php
					if(isset($advUnit['after_tags']) && $advUnit['after_tags']!=''){
						echo '<div class="scc"><span class="scc-span">ADVERTISEMENT</span>';
						echo '<div class="scc-div">'.@$advUnit['after_tags'].'</div>';
						echo '</div>';
					}
				?>
				<?php if(count($moreStories) > 0): ?>
				<div class="more-from-section">
					<h3><span>MORE FROM THE SECTION</span></h3>
					<div class="more-stories">
						<?php
						foreach($moreStories as $stories):
							$title = stripslashes(strip_tags($stories['title'], '</p>'));
							$image = str_replace(' ', "%20", $stories['article_page_image_path']);
							$image_alt = strip_tags($stories['article_page_image_alt']);
							if (getimagesize(image_url_no . imagelibrary_image_path . $image )&& $image!=''){
								$image = image_url . imagelibrary_image_path. str_replace('/original' ,'/w600X390',$image);
							}else{
								$image = image_url . imagelibrary_image_path. 'logo/nie_logo_600X390.jpg';
							}
							$url = MOBILEURL. str_replace('.html' , '.amp' , $stories['url']);
							echo '<div class="items">';
							echo '<a href="'.$url.'"><amp-img src="'.$image.'" alt="'.$image_alt.'" height="390" width="600" layout="responsive"></amp-img></a>';
							echo '<a href="'.$url.'"><h4>'.$title.'</h4></a>';
							echo '</div>';
						endforeach;
						?>
					</div>
				</div>
				<?php endif; ?>
				<div class="trending-tags">
					<amp-accordion>
						<?php echo $trending; ?>
					</amp-accordion>
				</div>
				<?php
					if(isset($advUnit['between_msection']) && $advUnit['between_msection']!=''){
						echo '<div class="scc"><span class="scc-span">ADVERTISEMENT</span>';
						echo '<div class="scc-div">'.@$advUnit['between_msection'].'</div>';
						echo '</div>';
					}
				?>
						<amp-ad width=1 height=1  type="doubleclick" data-slot="/3167926/DNM_AMP_Interstitial_1x1"> 	</amp-ad>

				<amp-sticky-ad layout="nodisplay">
					<amp-ad width="320" height="50" type="doubleclick" data-slot="/3167926/DNM_AMP_Sticky_320x50" rtc-config='{"vendors": { "aps": {"PUB_ID": "600", "PUB_UUID": "c3703fef-358e-4353-a111-eb049ab39167", "PARAMS":{"amp":"1"}} }}'></amp-ad>
				</amp-sticky-ad>
			</section>
			<footer>
				<p>Copyright - dinamani.com<?php echo ' '.date('Y') ?> </p>
				<a href="https://www.newindianexpress.com/" rel="follow">The New Indian Express | </a>
				<a href="https://www.samakalikamalayalam.com/" rel="follow">Samakalika Malayalam | </a>
				<a href="https://www.kannadaprabha.com/" rel="follow">Kannada Prabha | </a>
				<a href="https://www.edexlive.com/" rel="follow">Edexlive | </a>
				<a href="https://www.indulgexpress.com/" rel="follow">Indulgexpress  | </a>
				<a href="https://www.cinemaexpress.com/" rel="follow">Cinemaexpress | </a>
				<a href="http://www.eventxpress.com/" rel="follow">Event Xpress  </a>
			</footer>
		</div>	
	</body>
</html> 