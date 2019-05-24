@extends('admin_layout')
@section('content2')

<form action="/add_article" method="post" enctype="multipart/form-data" >
                {{ csrf_field() }} 
    

    
    <p>Select Department :
    <select name="department" class="button1"  id="speciality" >
        <option value="">Choose a Speciality</option>
            @foreach($specialities as $speciality)
                @if( $speciality->active )
                    <option value="{{ $speciality->name }}">{{ $speciality->name }}</option>
                @endif
            @endforeach
        </select>

    </select></p>
</br>
<p>Article's Topic</p>
 <textarea rows="1" cols="20" name="topic" placeholder="Article's Topic">

</textarea> 
</br>
 </br>

<p>Write Description on the Article</p>
 <textarea rows="8" cols="100" name="content" placeholder="Write Description on the Article">

</textarea> 
</br>
</br>
                        <input type="submit" name="Add new Problem">
                        <input type="reset" name="Reset">
                   </br>

        </form>

@stop