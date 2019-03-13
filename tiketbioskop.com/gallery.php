<!---untuk zoom image-->
<script type="text/javascript" src="./js/jquery.js"></script>
<script type="text/javascript" src="./js/jquery.bigPicture.js"></script> 
<script type="text/javascript" src="./js/jquer.bigPicture-min.js"></script> 
<script type="text/javascript" src="./js/jquery.bigPicture-pack.js"></script> 
<script type="text/javascript" src="./js/jquery.easing.js"></script>  
<link rel="stylesheet" type="text/css" href="css/core.css"/>
<link rel="stylesheet" type="text/css" href="css/skin.css"/> 


<!--untuk slideshow-->
<link href="css/amazon_scroller.css" rel="stylesheet" type="text/css"></link>
<script type="text/javascript" src="js/amazon_scroller.js"></script>
<script language="javascript" type="text/javascript">

	$(function() {
		$("#amazon_scroller1").amazon_scroller({
			scroller_title_show: 'enable',
			scroller_time_interval: '4000',
			scroller_window_background_color: "khaki",
			scroller_window_padding: '10',
			scroller_border_size: '1',
			scroller_border_color: '#000',
			scroller_images_width: '140',
			scroller_images_height: '120',
			scroller_title_size: '12',
			scroller_title_color: 'black',
			scroller_show_count: '3',
			directory: 'images'
		});
		$("#amazon_scroller2").amazon_scroller({
			scroller_title_show: 'disable',
			scroller_time_interval: '3000',
			scroller_window_background_color: "none",
			scroller_window_padding: '10',
			scroller_border_size: '0',
			scroller_border_color: '#CCC',
			scroller_images_width: '100',
			scroller_images_height: '80',
			scroller_title_size: '12',
			scroller_title_color: 'black',
			scroller_show_count: '3',
			directory: 'images'
		});
		$("#amazon_scroller3").amazon_scroller({
			scroller_title_show: 'enable',
			scroller_time_interval: '3000',
			scroller_window_background_color: "none",
			scroller_window_padding: '10',
			scroller_border_size: '2',
			scroller_border_color: '#9C6',
			scroller_images_width: '80',
			scroller_images_height: '60',
			scroller_title_size: '11',
			scroller_title_color: 'black',
			scroller_show_count: '3',
			directory: 'images'
		});
	});
</script>

<html>
<head>
	<title></title>
</head>
<body>
<div id="content">
	<div id="amazon_scroller1" class="amazon_scroller">
		<div class="amazon_scroller_mask">
			<ul>
			<?php
			include "./include/conn.php";
			$select=mysql_query("select * from tools_gallery");
			while($row=mysql_fetch_array($select)){
				?><li><a href="./gallery/<?php echo $row['gambar'];?>" title="<?php echo $row['keterangan'];?>" class="info" name="gambar"><img src="./gallery/<?php echo $row['gambar'];?>" width="60" height="60" title="Klik photo"/></a></li><?php			
			}
			?>
			</ul>
		</div>
		<ul class="amazon_scroller_nav">
			<li></li>
			<li></li>
		</ul>
		<div style="clear: both"></div>
	</div>
</div>
</body></html>


<script language="javascript"> 
$('a.info').bigPicture({
  'enableInfo': true,
  'infoPosition': 'bottom'
}); 
</script>















