@extends('authentication.master-admin')

@section('content')

@include('authentication.admin-sidemenu')

   <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              
                  
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title">ALL Blogs</h2>
                    

                    <form class="ml-auto search-form d-none d-md-block" action="#">
                        <div class="form-group">
                        <input type="search" class="form-control" placeholder="Search Here">
                        </div>
                    </form>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> User ID </th>  
                          <th> Blog Pic </th>
                          <th> Blog Title </th>
                          <th> Blog User </th>
                          <th> Blog Type </th>
                          <th> Views </th>
                        </tr>
                      </thead>
                      <tbody>

                      @foreach ($blogs->all() as $blog) 
                          <tr>
                          <td>{{ $blog->id}}</td>
                          <td class="py-1">
                            <img class="thumb-image" src="{{$blog->blog_pic}}" />
                          </td>
                          <td> {{$blog->blog_title}} </td>
                          <td> {{$blog->blog_user}}      </td>
                          <td> {{$blog->blog_type}} </td>
                          <td> {{$blog->views}} </td>
                        </tr>

                       @endforeach
                        
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
        @endsection