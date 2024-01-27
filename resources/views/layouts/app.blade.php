<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard &mdash; Inspektorat Daerah Kabupaten Bolaang Mongondow</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/bolmongkab.png') }}" type="image/x-icon">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('assets/modules/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/select2-bootstrap4.css') }}" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">

    <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>

</head>

<body style="background: #e2e8f0">
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">

                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}"
                                class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->name }}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ route('logout') }}" style="cursor: pointer" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="#">INSPEKTORAT</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="#">INSPEKTORAT</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">MAIN MENU</li>
                        <li class="{{ setActive('admin/dashboard') }}"><a class="nav-link"
                                href="{{ route('admin.dashboard.index') }}"><i class="fas fa-chevron-right"></i>
                                <span>Dashboard</span></a></li>


                        @can('categories.index')
                        <li class="{{ setActive('admin/category') }}"><a class="nav-link" href="{{ route('category.index') }}"><i class="fas fa-chevron-right"></i>
                        <span>Kategori</span></a>
                        </li>
                        @endcan

                        @can('tags.index')
                            <li class="{{ setActive('admin/tag') }}"><a class="nav-link" href="{{ route('tag.index') }}"><i class="fas fa-chevron-right"></i> <span>Tags</span></a>
                            </li>
                        @endcan

                        @can('news.index')
                            <li class="{{ setActive('admin/news') }}"><a class="nav-link" href="{{ route('news.index') }}"><i class="fas fa-chevron-right"></i>
                            <span>Berita</span></a></li>
                        @endcan

                        @if(auth()->user()->can('photos.index') || auth()->user()->can('videos.index'))
                        <li class="menu-header">GALERI</li>
                        @endif

                        @can('photos.index')
                        <li class="{{ setActive('admin/photo') }}"><a class="nav-link"
                            href="{{ route('photo.index') }}"><i class="fas fa-chevron-right"></i>
                            <span>Foto</span></a></li>
                            @endcan

                            @can('videos.index')
                            <li class="{{ setActive('admin/video') }}"><a class="nav-link" href="{{ route('video.index') }}"><i class="fas fa-chevron-right"></i>
                                <span>Video</span></a></li>
                            @endcan

                        @if(auth()->user()->can('roles.index') || auth()->user()->can('permission.index') || auth()->user()->can('users.index'))
                        <li class="menu-header">PENGATURAN</li>
                        @endif

                        @can('sliders.index')
                            <li class="{{ setActive('admin/slider') }}"><a class="nav-link" href="{{ route('slider.index') }}"><i class="fas fa-chevron-right"></i>
                        <span>Sliders</span></a></li>
                        @endcan

                        @can('profile.index')
                        <li class="{{ setActive('admin/profile') }}"><a class="nav-link" href="{{ route('profile.index') }}"><i class="fas fa-chevron-right"></i>
                        <span>Profil</span></a></li>
                        @endcan

                        @can('profpegs.index')
                        <li class="{{ setActive('admin/profpeg') }}"><a class="nav-link" href="{{ route('profpeg.index') }}"><i class="fas fa-chevron-right"></i>
                        <span>SDM</span></a></li>
                        @endcan

                        @can('contact.index')
                        <li class="{{ setActive('admin/contact') }}"><a class="nav-link" href="{{ route('contact.index') }}"><i class="fas fa-chevron-right"></i>
                        <span>Kontak</span></a></li>
                        @endcan

                        @can('faq.index')
                        <li class="{{ setActive('admin/faq') }}"><a class="nav-link" href="{{ route('faq.index') }}"><i class="fas fa-chevron-right"></i>
                        <span>FAQ</span></a></li>
                        @endcan

                        @can('link.index')
                        <li class="{{ setActive('admin/link') }}"><a class="nav-link" href="{{ route('link.index') }}"><i class="fas fa-chevron-right"></i>
                        <span>Link Terkait</span></a></li>
                        @endcan

                        @can('sosmed.index')
                        <li class="{{ setActive('admin/sosmed') }}"><a class="nav-link" href="{{ route('sosmed.index') }}"><i class="fas fa-chevron-right"></i>
                        <span>Sosial Media</span></a></li>
                        @endcan

                        <li
                            class="dropdown {{ setActive('admin/role'). setActive('admin/permission'). setActive('admin/user') }}">
                            @if(auth()->user()->can('roles.index') || auth()->user()->can('permission.index') || auth()->user()->can('users.index'))
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-chevron-right"></i><span>Users
                                Management</span></a>
                            @endif

                            <ul class="dropdown-menu">
                                @can('roles.index')
                                    <li class="{{ setActive('admin/role') }}"><a class="nav-link" href="{{ route('role.index') }}"><i class="fas fa-chevron-right"></i> Roles</a></li>
                                @endcan

                                @can('permissions.index')
                                    <li class="{{ setActive('admin/permission') }}"><a class="nav-link" href="{{ route('permission.index') }}"><i class="fas fa-chevron-right"></i>Permissions</a></li>
                                @endcan

                                @can('users.index')
                                    <li class="{{ setActive('admin/user') }}"><a class="nav-link"
                                href="{{ route('user.index') }}"><i class="fas fa-chevron-right"></i> Users</a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            @yield('content')

            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; {{ date('Y') }} <div class="bullet"></div> Inspektorat Daerah Kabupaten Bolaang Mongondow <div class="bullet"></div> All Rights
                    Reserved.
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/modules/popper.js') }}"></script>
    <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>
    <script src="{{ asset('assets/modules/select2/dist/js/select2.full.min.js') }}"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script>
        //active select2
        $(document).ready(function () {
            $('select').select2({
                theme: 'bootstrap4',
                width: 'style',
            });
        });

        //flash message
        @if(session()->has('success'))
        swal({
            type: "success",
            icon: "success",
            title: "BERHASIL!",
            text: "{{ session('success') }}",
            timer: 1500,
            showConfirmButton: false,
            showCancelButton: false,
            buttons: false,
        });
        @elseif(session()->has('error'))
        swal({
            type: "error",
            icon: "error",
            title: "GAGAL!",
            text: "{{ session('error') }}",
            timer: 1500,
            showConfirmButton: false,
            showCancelButton: false,
            buttons: false,
        });
        @endif
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.6.2/tinymce.min.js"></script>
<script>
    tinymce.init({
    selector: 'textarea.content',
    plugins: [
             "advlist autolink lists link image charmap print preview hr anchor pagebreak",
             "searchreplace wordcount visualblocks visualchars code fullscreen",
             "insertdatetime media nonbreaking save table contextmenu directionality",
             "emoticons template paste textcolor colorpicker textpattern"
         ],
    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | code',
    relative_urls: false,
    forced_root_block: false,
    /* enable title field in the Image dialog*/
    image_title: true,
    /* enable automatic uploads of images represented by blob or data URIs*/
    automatic_uploads: true,
    /*
        URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
        images_upload_url: 'postAcceptor.php',
        here we add custom filepicker only to Image dialog
    */
    file_picker_types: 'image',
    /* and here's our custom image picker*/
    file_picker_callback: (cb, value, meta) => {
        const input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');

        input.addEventListener('change', (e) => {
        const file = e.target.files[0];

        const reader = new FileReader();
        reader.addEventListener('load', () => {
            /*
            Note: Now we need to register the blob in TinyMCEs image blob
            registry. In the next release this part hopefully won't be
            necessary, as we are looking to handle it internally.
            */
            const id = 'blobid' + (new Date()).getTime();
            const blobCache =  tinymce.activeEditor.editorUpload.blobCache;
            const base64 = reader.result.split(',')[1];
            const blobInfo = blobCache.create(id, file, base64);
            blobCache.add(blobInfo);

            /* call the callback and populate the Title field with the file name */
            cb(blobInfo.blobUri(), { title: file.name });
        });
        reader.readAsDataURL(file);
        });

        input.click();
    },
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
    });

</script>
</body>
</html>
