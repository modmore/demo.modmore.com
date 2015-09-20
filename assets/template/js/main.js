//
// This is The Scripts used for Hostro Template
//

function main() {

(function () {
   'use strict'
	//Script
	//-----------------------------------
    jQuery(document).ready(function($){
		var index_slider;
		var size_slider = $("#rst-owl-blog img").size() - 1;
		
		// Custom map Google
		if ( $('#cd-google-map').length != 0 )
		{
			// set google maps parameters
			var latitude = 40.705326,
				longitude = -74.010272,
				map_zoom = 16;	
			var marker_url = 'images/icon/location.png' ;

			//we define here the style of the map
			var style= [{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d3d3d3"}]},{"featureType":"transit","stylers":[{"color":"#808080"},{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#b3b3b3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":1.8}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#d7d7d7"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ebebeb"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#a7a7a7"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#efefef"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#696969"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#737373"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d6d6d6"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#dadada"}]}];
				
			//set google map options
			var map_options = {
				center: new google.maps.LatLng(latitude, longitude),
				zoom: map_zoom,
				panControl: false,
				zoomControl: false,
				mapTypeControl: false,
				streetViewControl: false,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				scrollwheel: false,
				styles: style,
			}
			//inizialize the map
			var map = new google.maps.Map(document.getElementById('google-container'), map_options);
			//add a custom marker to the map				
			var marker = new google.maps.Marker({
				position: new google.maps.LatLng(latitude, longitude),
				map: map,
				visible: true,
				icon: marker_url,
			});
		}
		
		// Scroll To Top
		$('.rst-uptop').click(function(e){
			e.preventDefault();
			$('html, body').animate({scrollTop:0}, 'slow');
		});
		
		// Side menu click
		$('.rst-menubtn').click(function(e){
			e.preventDefault();
			$('.rst-sidemenu').addClass('rst-sidemenu-show');
			$('.wrapper').addClass('wrapper-menushow');
		});
		$('.rst-sidemenu-close').click(function(e){
			e.preventDefault();
			$('.rst-sidemenu').removeClass('rst-sidemenu-show');
			$('.wrapper').removeClass('wrapper-menushow');
		});
		
		// Scroll Down
		$('.rst-scolldown').click(function(e){
			e.preventDefault();
			$('html,body').animate({
				scrollTop: $('#contact-content').offset().top - 50
			}, 1000);
		});
		
		// Search Form Click
		// $('.rst-search').submit(function(e){
			// if( !$(this).hasClass('open') ){
				// e.preventDefault();
				// $('.rst-search').addClass('open').removeClass('exit');
			// }
		// });
		
		// $(document).click(function(event){
			// if( !$(event.target).is('.rst-search') && !$(event.target).is('.rst-search *') ){
				// $('.rst-search').removeClass('open').addClass('exit');
			// }
		// });
		
		// Owl Slider
		$("#owl-testimonial").owlCarousel({
			items: 	1,
			singleItem: true,
		});
		var owl = $("#rst-owl-blog").owlCarousel({
			items: 	1,
			singleItem: true,
			navigation: true,
			navigationText: ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
			pagination: false,
			afterInit: function(){
				$('#rst-blogsingle-content .owl-next').append('<img src="'+$("#rst-owl-blog .owl-item").eq(1).find('img').attr('src')+'" alt="" />');
				$('#rst-blogsingle-content .owl-prev').append('<img src="'+$("#rst-owl-blog .owl-item").eq(size_slider).find('img').attr('src')+'" alt="" />');
			},
			afterAction: function(){
				index_slider = this.owl.currentItem;
				if( index_slider == 0 )
				{
					$('#rst-blogsingle-content .owl-next img').attr('src',$("#rst-owl-blog .owl-item").eq(1).find('img').attr('src'));
					$('#rst-blogsingle-content .owl-prev img').attr('src',$("#rst-owl-blog .owl-item").eq(size_slider).find('img').attr('src'));
				} 
				else if ( index_slider == size_slider )
				{
					$('#rst-blogsingle-content .owl-next img').attr('src',$("#rst-owl-blog .owl-item").eq(0).find('img').attr('src'));
					$('#rst-blogsingle-content .owl-prev img').attr('src',$("#rst-owl-blog .owl-item").eq(size_slider-1).find('img').attr('src'));
				} 
				else
				{
					$('#rst-blogsingle-content .owl-next img').attr('src',$("#rst-owl-blog .owl-item").eq(index_slider+1).find('img').attr('src'));
					$('#rst-blogsingle-content .owl-prev img').attr('src',$("#rst-owl-blog .owl-item").eq(index_slider-1).find('img').attr('src'));
				}
			}
		});
		
		// owl slider next prev hover
		$('#rst-blogsingle-content .owl-next').hover(function(){
			$(this).stop(false,false).animate({
				right: $(this).find('img').width(),
			},500);
		},function(){
			$(this).stop(false,false).animate({
				right: '0',
			},500);
		});
		$('#rst-blogsingle-content .owl-prev').hover(function(){
			$(this).stop(false,false).animate({
				left: $(this).find('img').width(),
			},500);
		},function(){
			$(this).stop(false,false).animate({
				left: '0',
			},500);
		});
		
		
		$("#rst-index-banner").owlCarousel({
			items: 	1,
			navigation: true,
			singleItem: true,
			navigationText: ['<img src="/assets/template/images/icon/homeslider-prev.png" alt="" />','<img src="/assets/template/images/icon/homeslider-next.png" alt="" />'],
			pagination: false,
		});
		
		// Fancybox
		if( $('.fancybox-media').length != 0 )
		{
			$('.fancybox-media').fancybox({
			});
		}

		
	});

	
}());

}
main();









