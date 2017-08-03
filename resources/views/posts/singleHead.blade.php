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
                <a href="{{ route('posts.show',['id'=>$post->id]) }}">{{ ucwords($post->title) }}</a>
            </div>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">

            @auth
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Actions <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('posts.edit',['id'=> $post->id]) }}">Edit</a>
                        </li>
                        <li>
                            <form action="{{ route('posts.destroy',['id'=>$post->id]) }}" method="POST" class="form-horizontal">
                                {!! csrf_field() !!}
                                <input type="hidden" id="id" name="id" value="{{ $post->id }}" />
                                <input type="hidden" id="_method" name="_method" value="DELETE" />

                            </form>
                            <a href="javascript:;" onclick="parentNode.firstChild.submit();">Delete</a>
                        </li>
                    </ul>
                </li>
            </ul>
            @endauth
        </div>
    </div>
</nav>