@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Quản Lý Nghệ Sĩ</h1>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('artist.create')}}" class="btn btn-primary float-end">Them moi</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if(Session::has('ThongBao'))
                <div class="alert alert-success">
                    {{Session::get('ThongBao')}}
                </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Art_type</th>
                            <th scope="col">Media_link</th>
                            <th scope="col">Cover_image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($artworks as $ar)
                        <tr>
                            <td>{{++$i}}</td>
                            <td>{{$ar->id}}</td>
                            <td>{{$ar->artist_name}}</td>
                            <td>{{$ar->description}}</td>
                            <td>{{$ar->art_type}}</td>
                            <td>{{$ar->media_link}}</td>
                            <td>{{$ar->cover_image}}</td>
                            <td>
                                <form action="{{route('artist.destroy', $ar->id)}}" method="POST">                                    <a href="{{route('artist.edit', $ar->id)}}" class="btn btn-info">Sua</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Xoa</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection