<h1>Login to Aegis-Zero Dashboard</h1>

<form method="POST" action="/login">
    @csrf
    <div>
        <label>Email</label>
        <input type="email" name="email" required autofocus>
    </div>
    <div>
        <label>Password</label>
        <input type="password" name="password" required>
    </div>
    <button type="submit">Login</button>
</form>

<p><a href="/register">Register new account</a></p>

@if ($errors->any())
<div style="color: red;">
    @foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</div>
@endif