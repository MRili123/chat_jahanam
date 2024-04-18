<h1>index app</h1>
<form action="{{route('logout')}}" method="post">
    @csrf
    @method('delete')
    <button>logout</button>
</form>
