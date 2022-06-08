<!-- Navbar Start -->
<div class="container-fluid position-relative nav-bar p-0">
    <div class="container position-relative" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
            <a href="{{route('home')}}" class="navbar-brand">
                <h1 class="m-0 display-5 text-white"><span class="text-primary"></span>
                    Note Sharing</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                @php
                    $mainCategories = \App\Http\Controllers\HomeController::maincategorylist()
                @endphp
                <div class="navbar-nav ml-auto py-0">
                    <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                    <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                    <a href="{{route('references')}}" class="nav-item nav-link">References</a>
                    <div class="nav-item dropdown">

                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Category</a>


                        <div class="dropdown-menu rounded-0 m-0">
                            @foreach($mainCategories as $rs)
                            <a href="#" class="dropdown-item">{{$rs->title}}</a>
                                <div class="dropdown-header">
                                    <div class="row">
                                        @if(count($rs->children))
                                            @include('home.categorytree',['children' => $rs->children])
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                    <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>

                    @auth
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}}</a>

                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="{{route('userpanel.index')}}" class="dropdown-item">My Account</a>
                                <a href="#" class="dropdown-item">My Notes</a>
                                <a href="{{route('userpanel.reviews')}}" class="dropdown-item">My Reviews</a>
                                <a href="/logoutuser" class="dropdown-item">Logout</a>

                            </div>

                        </div>@endauth
                        @guest
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Hesabım</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="/loginuser" class="dropdown-item">Giriş Yap</a>
                            <a href="/registeruser" class="dropdown-item">Üye Ol</a>
                            </div>
                        </div>
                        @endguest



                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
