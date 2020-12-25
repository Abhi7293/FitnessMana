<div class="container">
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    @foreach ($users as $user)
        {{ $user->CategoryName }}
        <br>
    @endforeach
</div>

{{ $users->links('pagination::bootstrap-4') }}