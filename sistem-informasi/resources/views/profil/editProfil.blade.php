@extends('layout.main')
@section('title','Edit Profil')
@section('halaman','Edit Profil')

@section('css')
  <link rel="stylesheet" href="{{asset('css/profil.css')}}">
@endsection

@section('content')
          <div class="card user-card-full p-3">
              <div class="row m-l-0 m-r-0">
                  <div class="col-sm-4 bg-c-lite-green user-profile">
                      <div class="card-block text-center text-white">
                          <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                          <h6 class="f-w-600">Hembo Tingor</h6>
                          <p>Web Designer</p> 
                          <button type="button" class="btn btn-primary btn-icon icon-left">
                          <i class="fas fa-edit"></i> Edit Profil
                          </button>
                          <!-- <a href="" style="color:white"><span> Edit <i class="fas fa-edit fa-lg"></i> </span></a> -->
                      </div>
                  </div>
                  <div class="col-sm-8">
                      <div class="card-block">
                          <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                          <div class="row">
                              <div class="col-sm-6">
                                  <p class="m-b-10 f-w-600">Email</p>
                                  <h6 class="text-muted f-w-400">rntng@gmail.com</h6>
                              </div>
                              <div class="col-sm-6">
                                  <p class="m-b-10 f-w-600">Phone</p>
                                  <h6 class="text-muted f-w-400">98979989898</h6>
                              </div>
                          </div>
                          <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Projects</h6>
                          <div class="row">
                              <div class="col-sm-6">
                                  <p class="m-b-10 f-w-600">Recent</p>
                                  <h6 class="text-muted f-w-400">Sam Disuja</h6>
                              </div>
                              <div class="col-sm-6">
                                  <p class="m-b-10 f-w-600">Most Viewed</p>
                                  <h6 class="text-muted f-w-400">Dinoter husainm</h6>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>


@endsection