<nav class=" navbar p-4 d-flex">
  <div class=" col-2">
    <a href="{{ url('/') }}">
      <img class="logo_nav" src="../assets/General/GCwento_purple_logo.png" alt="GCwento Logo">
    </a>
  </div>

  <ul class=" col-8 nav d-flex justify-content-center">
      <li class="nav-item"><a href="/" class="tabs nav-link px-4">HOME</a></li>
      <li class="nav-item"><a href="#about" class="tabs nav-link px-4">ABOUT US</a></li>
      <li class="nav-item"><a href="#services" class="tabs nav-link px-4">SERVICES</a></li>
      <li class="nav-item"><a href="#contact" class="tabs nav-link px-4">CONTACT</a></li>
      <li ><a href="/stories/index" class="tabs nav-link px-4">READ</a></li>
  </ul>
  
  <div class="col-2">
    @auth
    <li class="nav-item dropdown" style="list-style-type: none;">
      <a class="nav-link dropdown-toggle btn border border-2 px-3 py-2 rounded-1 text-white login_button" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Welcome {{auth()->user()->fullname}}!
      </a>
      <ul class="dropdown-menu w-100 text-center" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item px-3 py-2 rounded-1 text_button" href="/myprofile/{{auth()->user()->id}}">Edit Profile</a></li>
        <li><a class="dropdown-item px-3 py-2 rounded-1 text_button" href="/favorites">Favorites</a></li>
        <li><a class="dropdown-item px-3 py-2 rounded-1 text_button" href="/mystories">My Stories</a></li>
        <li><a class="dropdown-item px-3 py-2 rounded-1 text_button" href="/mystories/requests">Stories Request</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><button type="button" class="logout-button dropdown-item px-3 py-2 rounded-1 text_button logoutbutton">Logout</button></li>
      </ul>
    </li>
    {{-- <a href="#" class="btn border border-2 px-3 py-2 rounded-1 text-white login_button"></a> --}}
      @else
      <a href="{{ route('login.show') }}" class="btn border border-2 px-3 py-2 rounded-1 text-white login_button">LOGIN </a>
    @endauth
  </div>
</nav>

<button type="button" class="btn btn-danger btn-floating btn-lg p-3 backtotopbutton" id="btn-back-to-top" >
  <i class="fa fa-arrow-up"></i>
</button>
















{{-- script  --}}
<script>
    let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

