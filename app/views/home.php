<h1>Posts</h1>

{% if posts is empty %}
	<p>No posts, yet.</p>
{% else %}
	{% for post in posts %}
		<div class="post">
			<h2><a href="{{ urlFor('posts.show, {'postId': post.id}) }}">{{ post.title }}</a></h2>
			<p>{{ post.body[:50] }}</p>
			<div class="author">
				By {{ post.author }}
			</div>
		</div>
	{% endfor %}
{% endif %}