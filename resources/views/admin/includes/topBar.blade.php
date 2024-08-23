

<div class="top-bar d-flex w-100">
    <button class="sidebar-toggler" id="sideToggler">
        <i class="fa-solid fa-bars-staggered"></i>
    </button>
    <h4 class="m-0">Dashboard</h4>

    <div class="right-top dropwdown ms-auto">
        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"><i class="fa-solid fa-user-tie"></i></a>
        {{-- <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">{{$admin->name}}</a> --}}
        <ul class="dropdown-menu dropdown-menu-end">
            <a href="{{ route("adminProfile") }}" class="dropdown-item">Profile</a>
            <a href="{{ route('adminIndex') }}" class="dropdown-item">Logout</a>
        </ul>
    </div>

</div>

<script>
    let sideBar = document.getElementById("sideBar");
    let sideToggler = document.getElementById("sideToggler");
    let mainArea = document.getElementById("mainArea");
    let closeBtn = document.getElementById("sideCloseBtn");

    sideToggler.addEventListener("click", function (e) {
        sideBar.classList.toggle("none")
        mainArea.classList.toggle("side-none")
    })

    closeBtn.addEventListener("click", function (e) {
        sideBar.classList.remove("none")
        mainArea.classList.remove("side-none")
    })

</script>