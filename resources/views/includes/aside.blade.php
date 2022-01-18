@section('aside')
    <div class="d-flex flex-column flex-shrink-0 p-3 " style="width: 280px;">
        <p class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">Sidebar</span>
        </p>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="{{ route('home-page') }}" class="nav-link" aria-current="page">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                    Home Page
                </a>
            </li>
            <li>
                <a href="{{ route('about-us-page') }}" class="nav-link">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                    About Us Page
                </a>
            </li>
            <li>
                <a href="{{ route('contact-page') }}" class="nav-link">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                    Contact Page
                </a>
            </li>
        </ul>
    </div>
