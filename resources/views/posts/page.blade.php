@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <nav>
                            <div>
                                <div class="navbar-header">

                                    <!-- Collapsed Hamburger -->
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                                        <span class="sr-only">Toggle Navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>

                                    <!-- Branding Image -->
                                    <div class="navbar-brand">
                                        <a href="{{ route('posts') }}">Posts</a>
                                    </div>
                                </div>

                                <div class="collapse navbar-collapse" id="app-navbar-collapse">

                                @auth
                                    <!-- Right Side Of Navbar -->
                                    <ul class="nav navbar-nav navbar-right">

                                        <li class="dropdown">
                                            <a href="{{ route('posts.create') }}">Create Post</a>
                                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
                                                {{--Actions <span class="caret"></span>--}}
                                            {{--</a>--}}

                                            {{--<ul class="dropdown-menu" role="menu">--}}
                                                {{--<li>--}}
                                                    {{--<a href="{{ route('posts.create') }}">Create</a>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                        </li>
                                    </ul>

                                @endauth

                                </div>

                            </div>
                        </nav>
                    </div>

                    <div class="panel-body">
                        @yield('postsContent')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection