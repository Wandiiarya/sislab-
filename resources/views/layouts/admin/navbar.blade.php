 
 <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
    <a class="navbar-brand brand-logo me-5" href="index.html"><img src="{{asset('assets/images/Group 7.png')}}" class="me-2" alt="logo" /></a>
    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('assets/images/1669103641950 1.png')}}" alt="logo" /></a>
  </div>
   <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="icon-menu"></span>
    </button>
    <ul class="navbar-nav mr-lg-2">
     </ul>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
             <i class="icon-ellipsis"></i>

        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
             <a class="dropdown-item preview-item" href="{{ route('register') }}">
            <div class="preview-thumbnail">
              <div class="preview-icon ">
                <i class="mdi mdi-account-plus mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-normal">New user registration</h6>

            </div>
          </a>
          <a class="dropdown-item preview-item" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
            <div class="preview-thumbnail">
              <div class="preview-icon ">
                <i class="mdi mdi-logout mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-normal">Logout</h6>

            </div>
          </a>
        </div>
      </li>

    </ul>

  </div>
</nav>
<!-- Modal Konfirmasi Logout -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true" style="margin-top: 12%">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center  p-md-0 " style="margin: 10%">
                <div>
                    <img src="{{ asset('assets/images/group.svg')}}" alt="Konfirmasi Logout" style="width: 200px;">
                </div>
                <h3><b>ANDA YAKIN INGIN KELUAR??</b></h3>
                <div class="mt-3">
                    <button type="button" class="btn btn-sm btn-primary" id="confirmLogout" style="margin-right:10px"><b>YA</b></button>
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal"><b>TIDAK</b></button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tambahkan JavaScript ini untuk menangani konfirmasi logout -->
<script>
    document.getElementById('confirmLogout').addEventListener('click', function () {
        document.getElementById('logout-form').submit();
    });
</script>

<!-- Form Logout (sudah ada di kode Anda tetapi tersembunyi) -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
<!--**********************************
    Header end ti-comment-alt
***********************************-->



