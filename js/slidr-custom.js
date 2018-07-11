jQuery(document).ready(function(){
	jQuery( "#login" ).click(function() {
		jQuery( "#loginBox" ).toggle();
	});
	// slidr.create('slider-block').start();
//	slidr.create('slider-block', {
//	  after: function(e) { console.log('in: ' + e.in.slidr); },
//	  before: function(e) { console.log('out: ' + e.out.slidr); },
//	  breadcrumbs: true,
//	  controls: 'none',
//	  direction: 'h',
//	  fade: true,
//	  keyboard: true,
//	  overflow: true,
//	  pause: true,
//	  theme: '#222',
//	  timing: { 'fade': '0.5s ease-in' },
//	  touch: true,
//	  transition: 'fade'
//	}).start();
	
	// Test
	// Initialize a Slidr. 
	// Display breadcrumbs, overflow transitions, use cube transition.
	var s = slidr.create('slider-block', {
	  breadcrumbs: true,
	  overflow: false,
      after: function(e) { console.log('in: ' + e.in.slidr); },
	  before: function(e) { console.log('out: ' + e.out.slidr); },
	  breadcrumbs: true,
	  controls: 'none',
	  direction: 'h',
	  fade: true,
	  keyboard: true,
	  overflow: true,
	  pause: true,
	  theme: '#222',
	  timing: { 'fade': '0.5s ease-in' },
	  touch: true,
	  transition: 'fade'
	});

	// Add horizontal slides with default linear transition.
	// The extra "one" allows the slidr to circle back and loop infinitely.
	s.add('h', ['one', 'two', 'three', 'one']);
	
	s.auto();
});
