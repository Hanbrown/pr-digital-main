// JavaScript Document

jQuery(window).on('load', function(){ var $ = jQuery;
    //Masonry functions to create a nice layout for the posts.
	$('#post-container').masonry({
	  columnWidth: 40,
	  itemSelector: '.post'
	});
	
});

jQuery(document).ready(function($){
    
    $('.menu-item-has-children').addClass('dropdown-toggle'); //Adds class to an li with a submenu
    $('ul.list-group li').addClass('list-group-item').removeClass('dropdown-toggle'); //Adds class to the sitemap on 404 and removes any unnecessary classes.
    $('li.list-group-item ul').removeClass('sub-menu'); //Removes unnecessary classes from the sitemap on 404
    $('li.dropdown-toggle ul').addClass('dropdown-menu'); //Makes the ul under "portfolio" in the navigation disappear.
    $('li.dropdown-toggle a').addClass('dropdown-toggle').attr('data-toggle', 'dropdown'); //Allows the ul in the navitation to reappear when clicked.
    $('ul.dropdown-menu li a').removeClass('dropdown-toggle'); //removes the "dropdown-toggle" class from lis in the submenu
    $('<span class="caret"></span>').appendTo('a.dropdown-toggle'); //Adds the little arrow to a submenu link
    $('a[href=#contact]').attr('data-toggle', 'modal').attr('data-target', '#contactModal'); //Makes the contact link open the modal
    
    //For some reason, the dropdown doesn't work by default. This function makes it work.
    $('ul.dropdown-menu li a').click(function () {
        var ref = $(this).attr('href');
        window.location.href = ref; 
    });
    
    //Animates the menu icon on mobiles
    $('#menu-toggle').click(function (e) {
        $('#bars').toggleClass('anim');
    });
    
    $('.header-image').click(function (e){
        $('.img-cap').toggleClass('img-cap-onclick');
    });                               
                                     
	 //Shows the scroll-to-top link
	$(document).scroll(function (e) {
        var curTop = $(document).scrollTop();
		if (curTop > 500) {
			$('#toTop').removeClass('hideMe');
		}
		else if(curTop < 500){
			$('#toTop').addClass('hideMe');
		}
    });
    
    //Makes the posts show in a modal when they are clicked.
    $('.post').click(function (e) {
        $('#title-here').html($(this).children(".post #the-title").html());
        $('#img-here').html($(this).children(".post #img-ref").html());
        $('#postModal #text-here').html($(this).children('#main-text').html());
        $('#postModal').modal('show'); 
    });
    
    //Inserts form-control and btn btn-info classes to forms
    $('form input[type=\'text\']').addClass('form-control');
    $('form input[type=\'email\']').addClass('form-control');
    $('form textarea').addClass('form-control');
    $('form textarea').attr('rows', 8);
    $('form input[type=\'submit\']').addClass('btn btn-info');
	
    //The scroll-to-top function
	$('#toTop').click(function(e){
		$('html, body').animate({scrollTop: 0}, 800);
	});


});