function TwitterApp(element) {
	var self = this;
	
	this.construct = function() {
		this.root = element;
		this.api_url = 'http://twitter.com';

		this.public_timeline('WDIM_aipd');
		this.public_timeline('peterwooley');
	}
	
	this.public_timeline = function(username) {
		return self.json('/statuses/user_timeline/'+username+'.json?callback=?', function(response) {
			self.log($(document.createElement('h1')).text(response[0].user.screen_name));
			$(response).each( function() { self.log(this.user.screen_name + ": " + this.text) } );
		});
	}
	
	this.json = function(url, callback) {
		$.getJSON(self.api_url + url, callback);
	}
	
	this.log = function(value) {
		self.root.children('.console').append(typeof value == 'string' ? "<p>"+value+"</p>" : value);
	}
	
	this.construct();
}










