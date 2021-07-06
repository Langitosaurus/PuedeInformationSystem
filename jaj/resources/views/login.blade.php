<form action="/dologin" method="POST">
	@csrf
Username <input type="text" name="username" value="{{ old('username') }}" class="@error('username') is-invalid @enderror " > <br>
Password <input type="password" name="password"> <br>

<button type="submit"> Login</button>
</form>
@error('class')
('Unknown username or password!')<br>
@enderror
