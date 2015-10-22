{{--<div class="navbar">
	<a class="nav-brand" href="#">Blog App</a>
	<ul class="nav nav-bar">
		<li>
			<a href="/posts">Posts</a>
		</li>
		<li>
			<a href="{{route('posts.create')}}">Write Post</a>
		</li>
	</ul>
</div>--}}
<div class="navbar">
	<a class="navbar-brand" href="#">Blog App</a>

	<ul class="nav navbar-nav">

		<li>
			
			<a href="/posts">Posts</a>

		</li>
		<li>
			
			<a href="/categories">Categories</a>

		</li>

		<li>
			
			<a href="{{route('posts.create')}}">Write Post</a>

		</li>

	</ul>
</div>