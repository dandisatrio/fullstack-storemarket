<nav
    class="navbar navbar-expand-lg navbar-light navbar-store navbar-home fixed-top navbar-fixed-top"
    data-aos="fade-down"
>
    <div class="container">
    <a href="{{ route ('home') }}" class="navbar-brand">
        <img src="/images/logo.svg" alt="logo" />
    </a>
    <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
    >
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
        <li class="nav-item active">
            <a href="{{ route ('home') }}" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
            <a href="{{ route ('category') }}" class="nav-link">Category</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">Rewards</a>
        </li>
        <li class="nav-item">
            <a href="/register.html" class="nav-link">Sign up</a>
        </li>
        <li class="nav-item">
            <a
            href="/login.html"
            class="btn btn-success nav-link px-4 text-white"
            >Sign In</a
            >
        </li>
        </ul>
    </div>
    </div>
</nav>