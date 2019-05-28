<form action="{{route('postFile')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
<input type="file" name="myfile">
<input type="submit">
</form>