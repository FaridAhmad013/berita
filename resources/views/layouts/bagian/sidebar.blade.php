<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-icon rotate-n-15">
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                    <i class="fas fa-book"></i>
                </div>
                <div class="sidebar-brand-text mx-3">The News Reporter <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">



            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Kategori
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">

                    <a href="{{route('kategori.index')}}" class="nav-link active">
                    <i class="fas fa-fw fa-folder"></i>

                    <span>Nama Kategori</span>
                </a>


                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pilih Kategori</h6>
                        @isset($kategories)

                        @foreach ($kategories as $item)
                        <a class="collapse-item" href="{{ route('berita.kategori', $item->slug) }}">{{ $item->nama_kategori }}</a>

                        @endforeach
                        @endisset
                        {{-- <a class="collapse-item" href="kategori">Terbaru</a>
                        <a class="collapse-item" href="kategori">Olahraga</a>
                        <a class="collapse-item" href="kategori">Tips & Trik</a>
                        <a class="collapse-item" href="kategori">Edukasi</a>
                        <a class="collapse-item" href="kategori">Politik</a>
                        <a class="collapse-item" href="kategori">Ekonomi & Bisnis</a> --}}
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Membuat Berita
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a href="{{route('berita.index')}}" class="nav-link active">
                <i class="fas fa-fw fa-folder"></i>
                  <span>Membuat Berita</span>
                </a>
              </li>
              <hr class="sidebar-divider">

              <!-- Heading -->
              <div class="sidebar-heading">
                  Membuat Tag
              </div>

              <!-- Nav Item - Pages Collapse Menu -->
              <li class="nav-item">
                  <a href="{{route('tag.index')}}" class="nav-link active">
                  <i class="fas fa-fw fa-folder"></i>
                    <span>Membuat Tag</span>
                  </a>
                </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
