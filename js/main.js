$(document).ready( function() {
  
   $('.woman').on('click', function(){
 		hideContent();
      $('#woman').show();
      renderGrid();
	   
   }); 

   $('.man').on('click', function(){
   	hideContent();
      $('#man').show();
      renderGrid();
	   
   });

   $('.children').on('click', function(){
   	hideContent();
      $('#kids').show();
	   renderGrid();
   });

   $('.home').on('click', function(){
   	hideContent();
      $('#home').show();
	   renderGrid();
   });
 renderGrid();
});

function hideContent() {
	$('#start-view').hide();
   	$('.clothes').hide();
      $('#category-top').show();
}
	

function renderGrid() {
	
	$('#info-wrapper, .clothes').isotope({
	    itemSelector: '.grid-item',
	    layoutMode: 'fitRows'
	});
}