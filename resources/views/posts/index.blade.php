@extends('adminlte.master')
@section('content')
<div class="mt-3 ml-3">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              @if(session('success'))
              <div class="alertt alert-success">
              {{session('success')}}
              </div>
              @endif
              <a  class="btn btn-primary mb-2" href="/posts/create"> create new post</a>
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Title</th>
                      <th>Body</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <!--@foreach($posts as $key => $post)
                    <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                   <td>action</td>
                    </tr>
                  @endforeach -->

                  @forelse($posts as $key => $post)
                    <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                   <td style="display: flex">
                   <a href="/posts/{{$post->id}}" class="btn btn-info">Show</a>
                   <a href="/posts/{{$post->id}}/edit" class="btn btn-default btn-sm">Edit</a>
                   <form action="/posts/{{$post->id}}" method="post">
                   @csrf
                   @method('DELETE')
                   <input type="submit" value="delete" class="btn btn-danger btn-sm">
                   </form>
                   </td>
                    </tr>
                    @empty
                    <tr><td colspan="4" align="center">No post</td></tr>
                  @endforelse

                   </tbody>
                   </table>
                   </div>
      
@endsection