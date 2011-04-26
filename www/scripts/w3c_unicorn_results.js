// Author: Thomas GAMBET.
// (c) COPYRIGHT MIT, ERCIM and Keio, 2010.
var W3Cr = {
	
	start: function() {
		$$('input#lang_change').setStyle('display', 'none');
		W3Cr.LanguagesForm = $('lang_choice');
		W3Cr.LanguagesForm.addEvent('change', function(event) {
			window.location = "./" + W3Cr.LanguagesForm.getProperty('action') + "?" + this.toQueryString() + window.location.hash;
		});
		var slideDuration = 500;
		var scroller = new Fx.Scroll(document);
		var instantScroller = new Fx.Scroll(document, {'duration': 0});
		$$('.section').each(function(section) {
			var title = section.getElement('.title');
			var block = section.getElement('.block');
			title.addClass('pointer');
			var iconHolder = new Element('span', {'class': 'arrow'});
			iconHolder.inject(title, 'top');
			section.store('fxSlide', new Fx.Slide(block, {'duration': slideDuration, 'link': 'cancel'}));
			section.store('block', block);
			title.addEvent('click', function(event) {
				W3Cr.toggle(section);
			});
			W3Cr.open(section);
		});
	},
	
	toggle: function(section) {
		var title = section.getElement('.title');
		var slide = section.retrieve('fxSlide');
		if (section.retrieve('open')) {
			W3Cr.close(section, true);
		} else {
			W3Cr.open(section, true);
		}
	},
	
	close: function(section, withFx) {
		var opened = section.retrieve('open');
		var title = section.getElement('.title');
		var slide = section.retrieve('fxSlide');
		title.removeClass('toggled');
		section.store('open', false);
		if (withFx && opened) {
			slide.slideOut().chain(function(){
				section.getElement('div').setStyle('display', 'none');
				slide.callChain();
			});
		} else {
			slide.hide();
			section.getElement('div').setStyle('display', 'none');
		}
	},
	
	open: function(section, withFx) {
		var closed = !section.retrieve('open');
		var title = section.getElement('.title');
		var slide = section.retrieve('fxSlide');
		title.addClass('toggled');
		section.store('open', true);
		section.getElement('div').setStyle('display', '');
		if (withFx && closed) {
			slide.slideIn().chain(function(){
				section.getElement('div').setStyle('height', 'auto');
				slide.callChain();
			});
		} else {
			slide.show();
			section.getElement('div').setStyle('height', 'auto');
		}
	},
};

window.addEvent('domready', W3Cr.start);