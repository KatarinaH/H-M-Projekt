$(document).ready( function() {
  
	$('#woman2, .woman').on('click', function(){
		hideContent();
		$('#woman').show();
      $('#woman-category').show();
		renderGrid();
	   
	}); 

    $('#man2, .man').on('click', function(){
		hideContent();
		$('#man').show();
      $('#man-category').show();
		renderGrid();
	   
    });

    $('#children2, .children').on('click', function(){
		hideContent();
		$('#kids').show();
      $('#kids-category').show();
		renderGrid();
    });

    $('#home2, .home').on('click', function(){
		hideContent();
		$('#home').show();
      $('#home-category').show();
		renderGrid();
   });



   $('ul li').click(function() {
      var itemName = $(this).attr('class');
      console.log(itemName);

      itemName = itemName.replace('filter-', '');

      $('.clothes').isotope({
         filter: '.'+itemName
      });

   });

	renderGrid();


	$('.box8').click(function(){
        $('#overlay').fadeIn('fast',function(){
            $('#box').animate({'top':'10%'},500);
        });
    });
    $('#boxclose').click(function(){
        $('#box').animate({'top':'-110%'},500,function(){
            $('#overlay').fadeOut('fast');
        });
    });


    $('.woman1').click(function(){
        $('#overlayShop').fadeIn('fast',function(){
            $('#boxShop').animate({'top':'10%'},500);
        });
    });
    $('#boxcloseShop').click(function(){
        $('#boxShop').animate({'top':'-110%'},500,function(){
            $('#overlayShop').fadeOut('fast');
        });
    });
});



function hideContent() {
	$('#start-view').hide();
   $('.clothes').hide();
   $('.category-all').hide();
   $('#category-top').show();
}

function renderGrid() {
	$('#info-wrapper, .clothes').isotope({
	  itemSelector: '.grid-item',
	  layoutMode: 'fitRows'
	});
}