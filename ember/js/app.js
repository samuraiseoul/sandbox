App = Ember.Application.create();

App.Router.map(function(){
	this.resource('about');
	this.resource('posts' , function(){
		this.resource('post', {path : ":post_id"});
	});
	this.resource('index');
});

App.PostsRoute = Ember.Route.extend({
	model : function(){
		return posts;
	}
});

App.PostController = Ember.ObjectController.extend({
	
	actions : {
		something: function(){
			alert("clicked!");
		}
	}
});

var posts = [
	{
		id : "0",
		title : "Post 1",
		author: "Me",
		date : "02-04-2014",
		excerpt: "First post",
		body: "This is the first of many posts!"
	},
	{
		id : "1",
		title : "Post 2",
		author: "you",
		date : "02-05-2014",
		excerpt: "This is a second post from the future",
		body: "This is our second post, it has traveled time from tomorrow, to come and be visible, today."
	}
	];
