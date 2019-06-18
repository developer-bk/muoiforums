<form>Hello </form>

@if(isset($user))
    {{"name: ".$user->username}}
    <br>
    {{"Email: ".$user->email}}

@endif