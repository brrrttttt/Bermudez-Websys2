<html>
    <form method="POST"action="{{route('logout')}}"></form>
    @csrf
    <button type="submit" class="btn btn-danger">Logout</button>
</html>