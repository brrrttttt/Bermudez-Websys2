<html>
    <h2>Welcome, {{ $user->name }}</h2>
<p>Email: {{ $user->email }}</p>

@if ($user->profile)
    <p>Bio: {{ $user->profile->bio }}</p>
    <p>Phone: {{ $user->profile->phone }}</p>
@endif

<h3>Your Posts:</h3>
<ul>
@forelse ($user->posts as $post)
    <li>{{ $post->title }} ({{ $post->status }})</li>
@empty
    <li>No posts yet.</li>
@endforelse
</ul>

<h3>Your Roles:</h3>
<ul>
@forelse ($user->roles as $role)
    <li>{{ $role->name }}</li>
@empty
    <li>No roles assigned.</li>
@endforelse
</ul>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
</html>