<form action="{{route('postForms')}}" method="post">
{{csrf_field()}}
<input type="text" name="hoten"><br><br>
<input type="submit">
</form>