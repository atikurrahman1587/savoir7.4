<div class="container">
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ route('/') }}"><img src="{{ asset('/') }}frontend/img/savoir_color.svg" alt="image not found" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="offset-md-7"></div>
                <form class="col-md-5">
                    <ul class="navbar-nav">
                        <li class="nav-item {{ Request::url() === route('/') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('/') }}">Home</a>
                        </li>
                        <li class="nav-item {{ Request::url() === route('about-us') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                </form>
            </div>
        </nav>
    </div>
</div>