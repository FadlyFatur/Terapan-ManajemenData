@extends('layout.main')
@section('title','Beranda')
@section('halaman','Beranda')
@section('css')
<link rel="stylesheet" href="{{asset('css/welcome.css')}}">
@endsection

@section('content')
<div class="jumbotron jumbotron-fluid">
<div class="container">
    <h1 class="display-4">Fluid jumbotron</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
</div>
</div>
<div class="container">
    <hr>
    <h2 class="section-title">Acara/Kegiatan Masyarakat</h2>
    <div class="row">
              <div class="col-12 col-md-4 col-lg-4">
                <article class="article article-style-c">
                  <div class="article-header">
                    <div class="article-image" data-background="assets/img/news/img13.jpg" style="background-image: url(&quot;assets/img/news/img13.jpg&quot;);">
                    </div>
                  </div>
                  <div class="article-details">
                    <div class="article-category"><a href="#">News</a> <div class="bullet"></div> <a href="#">5 Days</a></div>
                    <div class="article-title">
                      <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                    </div>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. </p>
                    <div class="article-user">
                      <img alt="image" src="assets/img/avatar/avatar-1.png">
                      <div class="article-user-details">
                        <div class="user-detail-name">
                          <a href="#">Hasan Basri</a>
                        </div>
                        <div class="text-job">Web Developer</div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-12 col-md-4 col-lg-4">
                <article class="article article-style-c">
                  <div class="article-header">
                    <div class="article-image" data-background="assets/img/news/img14.jpg" style="background-image: url(&quot;assets/img/news/img14.jpg&quot;);">
                    </div>
                  </div>
                  <div class="article-details">
                    <div class="article-category"><a href="#">News</a> <div class="bullet"></div> <a href="#">5 Days</a></div>
                    <div class="article-title">
                      <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                    </div>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. </p>
                    <div class="article-user">
                      <img alt="image" src="assets/img/avatar/avatar-3.png">
                      <div class="article-user-details">
                        <div class="user-detail-name">
                          <a href="#">Rizal Fakhri</a>
                        </div>
                        <div class="text-job">UX Designer</div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div class="col-12 col-md-4 col-lg-4">
                <article class="article article-style-c">
                  <div class="article-header">
                    <div class="article-image" data-background="assets/img/news/img01.jpg" style="background-image: url(&quot;assets/img/news/img01.jpg&quot;);">
                    </div>
                  </div>
                  <div class="article-details">
                    <div class="article-category"><a href="#">News</a> <div class="bullet"></div> <a href="#">5 Days</a></div>
                    <div class="article-title">
                      <h2><a href="#">Excepteur sint occaecat cupidatat non proident</a></h2>
                    </div>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. </p>
                    <div class="article-user">
                      <img alt="image" src="assets/img/avatar/avatar-2.png">
                      <div class="article-user-details">
                        <div class="user-detail-name">
                          <a href="#">Irwansyah Saputra</a>
                        </div>
                        <div class="text-job">Mobile Developer</div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>  
    <hr>
    
    <div class="card card-danger">
        <div class="card-header">
        <h4>Users</h4>
            <div class="card-header-action">
                <a href="#" class="btn btn-danger btn-icon icon-right">View All <i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-3">
                    <div class="user-item">
                        <img alt="image" src="assets/img/avatar/avatar-4.png" class="img-fluid">
                        <div class="user-details">
                        <div class="user-name">Wildan Ahdian</div>
                        <div class="text-job text-muted">Project Manager</div>
                        <div class="user-cta">
                            <button class="btn btn-primary follow-btn" data-follow-action="alert('user4 followed');" data-unfollow-action="alert('user4 unfollowed');">Follow</button>
                        </div>
                        </div>  
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="user-item">
                        <img alt="image" src="assets/img/avatar/avatar-4.png" class="img-fluid">
                        <div class="user-details">
                        <div class="user-name">Wildan Ahdian</div>
                        <div class="text-job text-muted">Project Manager</div>
                        <div class="user-cta">
                            <button class="btn btn-primary follow-btn" data-follow-action="alert('user4 followed');" data-unfollow-action="alert('user4 unfollowed');">Follow</button>
                        </div>
                        </div>  
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="user-item">
                        <img alt="image" src="assets/img/avatar/avatar-4.png" class="img-fluid">
                        <div class="user-details">
                        <div class="user-name">Wildan Ahdian</div>
                        <div class="text-job text-muted">Project Manager</div>
                        <div class="user-cta">
                            <button class="btn btn-primary follow-btn" data-follow-action="alert('user4 followed');" data-unfollow-action="alert('user4 unfollowed');">Follow</button>
                        </div>
                        </div>  
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="user-item">
                        <img alt="image" src="assets/img/avatar/avatar-4.png" class="img-fluid">
                        <div class="user-details">
                        <div class="user-name">Wildan Ahdian</div>
                        <div class="text-job text-muted">Project Manager</div>
                        <div class="user-cta">
                            <button class="btn btn-primary follow-btn" data-follow-action="alert('user4 followed');" data-unfollow-action="alert('user4 unfollowed');">Follow</button>
                        </div>
                        </div>  
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-3">
                    <div class="user-item">
                        <img alt="image" src="assets/img/avatar/avatar-4.png" class="img-fluid">
                        <div class="user-details">
                        <div class="user-name">Wildan Ahdian</div>
                        <div class="text-job text-muted">Project Manager</div>
                        <div class="user-cta">
                            <button class="btn btn-primary follow-btn" data-follow-action="alert('user4 followed');" data-unfollow-action="alert('user4 unfollowed');">Follow</button>
                        </div>
                        </div>  
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="user-item">
                        <img alt="image" src="assets/img/avatar/avatar-4.png" class="img-fluid">
                        <div class="user-details">
                        <div class="user-name">Wildan Ahdian</div>
                        <div class="text-job text-muted">Project Manager</div>
                        <div class="user-cta">
                            <button class="btn btn-primary follow-btn" data-follow-action="alert('user4 followed');" data-unfollow-action="alert('user4 unfollowed');">Follow</button>
                        </div>
                        </div>  
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="user-item">
                        <img alt="image" src="assets/img/avatar/avatar-4.png" class="img-fluid">
                        <div class="user-details">
                        <div class="user-name">Wildan Ahdian</div>
                        <div class="text-job text-muted">Project Manager</div>
                        <div class="user-cta">
                            <button class="btn btn-primary follow-btn" data-follow-action="alert('user4 followed');" data-unfollow-action="alert('user4 unfollowed');">Follow</button>
                        </div>
                        </div>  
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="user-item">
                        <img alt="image" src="assets/img/avatar/avatar-4.png" class="img-fluid">
                        <div class="user-details">
                        <div class="user-name">Wildan Ahdian</div>
                        <div class="text-job text-muted">Project Manager</div>
                        <div class="user-cta">
                            <button class="btn btn-primary follow-btn" data-follow-action="alert('user4 followed');" data-unfollow-action="alert('user4 unfollowed');">Follow</button>
                        </div>
                        </div>  
                    </div>
                </div>
            </div>

        <div>
    </div>
    <hr>
</div>

@endsection