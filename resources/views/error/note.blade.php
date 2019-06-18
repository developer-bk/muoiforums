@if(Session::has('error'))
    <p class="notifications">{{Session::get('error')}}</p>
@endif