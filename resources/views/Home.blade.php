@extends('Layouts.master')
@section('content')

    
<div style="margin-left: auto; margin-rigth:auto;">
    <form class="form-group" style="width:600px; margin-left: 100px;" @if (isset($note)) action="{{route('updata',['id'=>$note->id])}}"
        @else action="{{route('save')}}"
    @endif method="post">
        @csrf
        @if (isset($note))
            @method('PUT')
            
        @endif

        <div>
            <label for="">Note</label>
            <input type="text" name="note" @if (isset($note)){ value="{{$note->note}}"
                
            @endif  
            placeholder="enter you note" class="form-control">
            @error('note')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-success mt-1">save</button>

    </form>
    <table class="table" style="width:600px; margin-left: 100px;">
        <thead>
            <tr>
                <td>Id</td>
                <td>Note</td>
                <td>َAction</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($notes as $item )
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->note}}</td>
                <td><a href="{{route('delete',['id'=>$item->id])}}">delete</a> | <a href="{{route('edit',['id'=>$item->id])}}">Upadata</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection