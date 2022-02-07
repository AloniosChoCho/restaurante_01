@extends('backend.layouts.app2')
@section('title')
    Read Email
@endsection

@section('content')  
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <div class="page-title">
                            <h4 class="mb-0 font-size-18">Read Email</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Agroxa</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Email</a></li>
                                <li class="breadcrumb-item active">Read Email</li>
                            </ol>
                        </div>

                        <div class="state-information d-none d-sm-block">
                            <div class="state-graph">
                                <div id="header-chart-1"></div>
                                <div class="info">Balance $ 2,317</div>
                            </div>
                            <div class="state-graph">
                                <div id="header-chart-2"></div>
                                <div class="info">Item Sold 1230</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <!--Start Page-content-wrapper -->
            <div class="page-content-wrapper">

                <div class="row">
                    <div class="col-12">
                        <!-- Left sidebar -->
                        <div class="email-leftbar card">
                            <a href="{{ route('Compose') }}" class="btn btn-info waves-effect waves-light">Compose</a>
                            <div class="mail-list mt-4">
                                <a href="#" class="active">Inbox <span class="ms-1">(18)</span></a>
                                <a href="#">Starred</a>
                                <a href="#">Important</a>
                                <a href="#">Draft</a>
                                <a href="#">Sent Mail</a>
                                <a href="#">Trash</a>
                            </div>

                            <h6 class="mt-4">Labels</h6>

                            <div class="mail-list mt-1">
                                <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-info float-end"></span>Theme Support</a>
                                <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-warning float-end"></span>Freelance</a>
                                <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-primary float-end"></span>Social</a>
                                <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-danger float-end"></span>Friends</a>
                                <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-success float-end"></span>Family</a>
                            </div>

                            <h6 class="mt-4">Chat</h6>

                            <div class="mt-2">
                                <a href="#" class="d-flex">
                                    <img class="d-flex me-3 rounded-circle" src="{{ asset ('backend/images/users/avatar-2.jpg') }} "
                                        alt="Generic placeholder image" height="36">
                                    <div class="flex-1 chat-user-box">
                                        <p class="user-title m-0">Scott Median</p>
                                        <p class="text-muted">Hello</p>
                                    </div>
                                </a>

                                <a href="#" class="d-flex">
                                    <img class="d-flex me-3 rounded-circle" src="{{ asset ('backend/images/users/avatar-3.jpg') }} "
                                        alt="Generic placeholder image" height="36">
                                    <div class="flex-1 chat-user-box">
                                        <p class="user-title m-0">Julian Rosa</p>
                                        <p class="text-muted">What about our next..</p>
                                    </div>
                                </a>

                                <a href="#" class="d-flex">
                                    <img class="d-flex me-3 rounded-circle" src="{{ asset ('backend/images/users/avatar-4.jpg') }} "
                                        alt="Generic placeholder image" height="36">
                                    <div class="flex-1 chat-user-box">
                                        <p class="user-title m-0">David Medina</p>
                                        <p class="text-muted">Yeah everything is fine</p>
                                    </div>
                                </a>

                                <a href="#" class="d-flex">
                                    <img class="d-flex me-3 rounded-circle" src="{{ asset ('backend/images/users/avatar-6.jpg') }} "
                                        alt="Generic placeholder image" height="36">
                                    <div class="flex-1 chat-user-box">
                                        <p class="user-title m-0">Jay Baker</p>
                                        <p class="text-muted">Wow that's great</p>
                                    </div>
                                </a>

                            </div>
                        </div>
                        <!-- End Left sidebar -->

                        <!-- Right Sidebar -->
                        <div class="email-rightbar mb-3">

                            <div class="card">
                                <div class="btn-toolbar p-3" role="toolbar">
                                    <div class="btn-group me-2 mb-2 mb-sm-0">
                                        <button type="button" class="btn btn-primary waves-light waves-effect"><i class="fa fa-inbox"></i></button>
                                        <button type="button" class="btn btn-primary waves-light waves-effect"><i
                                                class="fa fa-exclamation-circle"></i></button>
                                        <button type="button" class="btn btn-primary waves-light waves-effect"><i class="far fa-trash-alt"></i></button>
                                    </div>
                                    <div class="btn-group me-2 mb-2 mb-sm-0">
                                        <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="fa fa-folder"></i> <i class="mdi mdi-chevron-down ms-1"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Updates</a>
                                            <a class="dropdown-item" href="#">Social</a>
                                            <a class="dropdown-item" href="#">Team Manage</a>
                                        </div>
                                    </div>
                                    <div class="btn-group me-2 mb-2 mb-sm-0">
                                        <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="fa fa-tag"></i> <i class="mdi mdi-chevron-down ms-1"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Updates</a>
                                            <a class="dropdown-item" href="#">Social</a>
                                            <a class="dropdown-item" href="#">Team Manage</a>
                                        </div>
                                    </div>

                                    <div class="btn-group me-2 mb-2 mb-sm-0">
                                        <button type="button"
                                            class="btn btn-primary waves-light waves-effect dropdown-toggle"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            More <i class="mdi mdi-dots-vertical ms-2"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Mark as Unread</a>
                                            <a class="dropdown-item" href="#">Mark as Important</a>
                                            <a class="dropdown-item" href="#">Add to Tasks</a>
                                            <a class="dropdown-item" href="#">Add Star</a>
                                            <a class="dropdown-item" href="#">Mute</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="d-flex mb-4">
                                        <img class="d-flex me-3 rounded-circle avatar-sm"
                                            src="{{ asset ('backend/images/users/avatar-2.jpg') }} " alt="Generic placeholder image">
                                        <div class="flex-1">
                                            <h5 class="font-size-14 mt-1">Humberto D. Champion</h5>
                                            <small class="text-muted">support@domain.com</small>
                                        </div>
                                    </div>

                                    <h4 class="font-size-16">This Week's Top Stories</h4>

                                    <p>Dear Lorem Ipsum,</p>
                                    <p>Praesent dui ex, dapibus eget mauris ut, finibus vestibulum enim. Quisque
                                        arcu leo, facilisis in fringilla id, luctus in tortor. Nunc vestibulum est
                                        quis orci varius viverra. Curabitur dictum volutpat massa vulputate
                                        molestie. In at felis ac velit maximus convallis.
                                    </p>
                                    <p>Sed elementum turpis eu lorem interdum, sed porttitor eros commodo. Nam eu
                                        venenatis tortor, id lacinia diam. Sed aliquam in dui et porta. Sed bibendum
                                        orci non tincidunt ultrices. Vivamus fringilla, mi lacinia dapibus
                                        condimentum, ipsum urna lacinia lacus, vel tincidunt mi nibh sit amet lorem.
                                    </p>
                                    <p>Sincerly,</p>
                                    <hr />

                                    <div class="row">
                                        <div class="col-xl-2 col-6">
                                            <div class="card">
                                                <img class="card-img-top img-fluid"
                                                    src= "{{ asset ('backend/images/small/img-3.jpg') }} " alt="Card image cap">
                                                <div class="py-2 text-center">
                                                    <a href="#" class="fw-medium">Download</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-6">
                                            <div class="card">
                                                <img class="card-img-top img-fluid"
                                                    src="{{ asset ('backend/images/small/img-4.jpg') }} " alt="Card image cap">
                                                <div class="py-2 text-center">
                                                    <a href="#" class="fw-medium">Download</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a href="{{ route('Compose') }}" class="btn btn-secondary waves-effect mt-4"><i
                                            class="mdi mdi-reply"></i> Reply</a>
                                </div>

                            </div>
                        </div>
                        <!-- card -->

                    </div>
                    <!-- end Col-9 -->

                </div>

            </div>
            <!-- End row -->

        </div>
        <!-- End Page-content-wrapper-->

    </div>
    <!-- Container-fluid -->
</div>
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 text-center">
                <script>document.write(new Date().getFullYear())</script> © Agroxa <span
                    class="d-none d-sm-inline-block">- Crafted with <i class="mdi mdi-heart text-primary"></i> by
                    Themesbrand.</span>
            </div>

        </div>
    </div>
</footer>
</div>
@endsection