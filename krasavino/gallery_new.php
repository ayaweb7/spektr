<?php
// Соединяемся с базой данных
require_once 'blocks/date_base.php';

// Выборка из таблицы 'settings' для подписи титулов страниц и печати заголовков
$result1 = mysqli_query($db, "SELECT * FROM settings WHERE page='gallery'");
$myrow1 = mysqli_fetch_array($result1);

// Подключаем HEADER
include ("blocks/header_gallery.php");
?>
<!---->
<!--Проверка подключения и работы скрипта jQuery-->
<script type="text/javascript">
 $(document).ready(function(){
 alert(jQuery.fn.jquery);
 });

window.onload = function()
{
if (window.jQuery)
{
alert('jQuery is loaded! Version: ' + jQuery.fn.jquery);
}
else
{
alert('jQuery is not loaded');
}
}
</script>

		<div class="container">

<!--			<div class="header">
				<a href="http://tympanus.net/Development/Elastislide/"><span>&laquo; Previous Demo: </span>Elastislide</a>
				<span class="right_ab">
					<a href="http://www.flickr.com/photos/smanography/" target="_blank">Images by Shermeee</a>
					<a href="http://creativecommons.org/licenses/by/2.0/deed.en_GB">CC BY 2.0</a>
					<a href="http://tympanus.net/codrops/2011/09/20/responsive-image-gallery/"><strong>back to the Codrops post</strong></a>
				</span>
				<div class="clr"></div>
			</div>--><!-- header -->
			
			<div class="content">
				<h1>Responsive Image Gallery <span>A jQuery image gallery with a thumbnail carousel</span></h1>
				<div id="rg-gallery" class="rg-gallery">
					<div class="rg-thumbs">
						<!-- Elastislide Carousel Thumbnail Viewer -->
						<div class="es-carousel-wrapper">
							<div class="es-nav">
								<span class="es-nav-prev">Previous</span>
								<span class="es-nav-next">Next</span>
							</div>
							<div class="es-carousel">
								<ul>
									<li><a href="#"><img src="images/images/thumbs/1.jpg" data-large="images/images/1.jpg" alt="image01" data-description="From off a hill whose concave womb reworded" /></a></li>
									<li><a href="#"><img src="images/images/thumbs/2.jpg" data-large="images/images/2.jpg" alt="image02" data-description="A plaintful story from a sistering vale" /></a></li>
									<li><a href="#"><img src="images/images/thumbs/3.jpg" data-large="images/images/3.jpg" alt="image03" data-description="A plaintful story from a sistering vale" /></a></li>
									<li><a href="#"><img src="images/images/thumbs/4.jpg" data-large="images/images/4.jpg" alt="image04" data-description="My spirits to attend this double voice accorded" /></a></li>
									<li><a href="#"><img src="images/images/thumbs/5.jpg" data-large="images/images/5.jpg" alt="image05" data-description="And down I laid to list the sad-tuned tale" /></a></li>
									<li><a href="#"><img src="images/images/thumbs/6.jpg" data-large="images/images/6.jpg" alt="image06" data-description="Ere long espied a fickle maid full pale" /></a></li>
									<li><a href="#"><img src="images/images/thumbs/7.jpg" data-large="images/images/7.jpg" alt="image07" data-description="Tearing of papers, breaking rings a-twain" /></a></li>
									<li><a href="#"><img src="images/images/thumbs/8.jpg" data-large="images/images/8.jpg" alt="image08" data-description="Storming her world with sorrow's wind and rain" /></a></li>
									<li><a href="#"><img src="images/images/thumbs/9.jpg" data-large="images/images/9.jpg" alt="image09" data-description="Upon her head a platted hive of straw" /></a></li>
									<li><a href="#"><img src="images/images/thumbs/10.jpg" data-large="images/images/10.jpg" alt="image10" data-description="Which fortified her visage from the sun" /></a></li>
									<li><a href="#"><img src="images/images/thumbs/11.jpg" data-large="images/images/11.jpg" alt="image11" data-description="Whereon the thought might think sometime it saw" /></a></li>
									<li><a href="#"><img src="images/images/thumbs/12.jpg" data-large="images/images/12.jpg" alt="image12" data-description="The carcass of beauty spent and done" /></a></li>
									<li><a href="#"><img src="images/images/thumbs/13.jpg" data-large="images/images/13.jpg" alt="image13" data-description="Time had not scythed all that youth begun" /></a></li>
									<li><a href="#"><img src="images/images/thumbs/14.jpg" data-large="images/images/14.jpg" alt="image14" data-description="Nor youth all quit; but, spite of heaven's fell rage" /></a></li>
									<li><a href="#"><img src="images/images/thumbs/15.jpg" data-large="images/images/15.jpg" alt="image15" data-description="Some beauty peep'd through lattice of sear'd age" /></a></li>
									<li><a href="#"><img src="images/images/thumbs/16.jpg" data-large="images/images/16.jpg" alt="image16" data-description="Oft did she heave her napkin to her eyne" /></a></li>
									<li><a href="#"><img src="images/images/thumbs/17.jpg" data-large="images/images/17.jpg" alt="image17" data-description="Which on it had conceited characters" /></a></li>
									<li><a href="#"><img src="images/images/thumbs/18.jpg" data-large="images/images/18.jpg" alt="image18" data-description="Laundering the silken figures in the brine" /></a></li>
									<li><a href="#"><img src="images/images/thumbs/19.jpg" data-large="images/images/19.jpg" alt="image19" data-description="That season'd woe had pelleted in tears" /></a></li>
									<li><a href="#"><img src="images/images/thumbs/20.jpg" data-large="images/images/20.jpg" alt="image20" data-description="And often reading what contents it bears" /></a></li>
									<li><a href="#"><img src="images/images/thumbs/21.jpg" data-large="images/images/21.jpg" alt="image21" data-description="As often shrieking undistinguish'd woe" /></a></li>
									<li><a href="#"><img src="images/images/thumbs/22.jpg" data-large="images/images/22.jpg" alt="image22" data-description="In clamours of all size, both high and low" /></a></li>
									<li><a href="#"><img src="images/images/thumbs/23.jpg" data-large="images/images/23.jpg" alt="image23" data-description="Sometimes her levell'd eyes their carriage ride" /></a></li>
									<li><a href="#"><img src="images/images/thumbs/24.jpg" data-large="images/images/24.jpg" alt="image24" data-description="As they did battery to the spheres intend" /></a></li>
								</ul>
							</div>
						</div>
						<!-- End Elastislide Carousel Thumbnail Viewer -->
					</div><!-- rg-thumbs -->
				</div><!-- rg-gallery -->
<!--				<p class="sub">Want more Shakespeare? <a href="http://www.opensourceshakespeare.org/" target="_blank">http://www.opensourceshakespeare.org/</a></p>-->
			</div><!-- content -->
		</div><!-- container -->
<!--		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>-->
    </body>
</html>