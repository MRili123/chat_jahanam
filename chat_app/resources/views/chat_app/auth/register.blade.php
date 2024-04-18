
<h1>register</h1>
<form action="{{route('register')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="name"><br>
    <input type="text" name="email" placeholder="email"><br>
    <input type="text" name="password" placeholder="password"><br>
    <button>register</button>

</form>
