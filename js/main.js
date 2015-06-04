$(document).ready( function() {
  
	$('.woman').on('click', function(){
		hideContent();
		$('#woman').show();
      $('#woman-category').show();
		renderGrid();
	   
	}); 

    $('.man').on('click', function(){
		hideContent();
		$('#man').show();
      $('#man-category').show();
		renderGrid();
	   
    });

    $('.children').on('click', function(){
		hideContent();
		$('#kids').show();
      $('#kids-category').show();
		renderGrid();
    });

    $('.home').on('click', function(){
		hideContent();
		$('#home').show();
      $('#home-category').show();
		renderGrid();
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
});

function hideContent() {
	$('#start-view').hide();
   $('.clothes').hide();
   //$('#woman-category').hide();
   //$('#man-category').hide();
   //$('#kids-category').hide();
   //$('#home-category').hide();
   $('.category-all').hide();
   $('#category-top').show();
}

function renderGrid() {
	$('#info-wrapper, .clothes').isotope({
	  itemSelector: '.grid-item',
	  layoutMode: 'fitRows'
	});
}