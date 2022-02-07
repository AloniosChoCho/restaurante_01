@extends('backend.layouts.app2')
@section('title')
Tabs & Accordions
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
                            <h4 class="mb-0 font-size-18">Tabs & Accordions</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Agroxa</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                                <li class="breadcrumb-item active">Tabs & Accordions</li>
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

            <!-- Start Page-content-wrapper -->
            <div class="page-content-wrapper">

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Default Tabs</h4>
                                <p class="card-title-desc">Use the tab JavaScript plugin—include it individually or
                                    through the compiled <code class="highlighter-rouge">bootstrap.js</code> file—to
                                    extend our navigational tabs and pills to create tabbable panes of local
                                    content, even via dropdown menus.</p>

                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home"
                                            aria-selected="true">Home</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                                            aria-selected="false">Profile</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                                            aria-selected="false">Contact</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="contact-tab1" data-bs-toggle="tab" href="#setting" role="tab" aria-controls="contact"
                                            aria-selected="false">Setting</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content p-3" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        <p class="mb-0">
                                            Raw denim you probably haven't heard of them jean shorts Austin.
                                            Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                            cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                            butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui
                                            irure terry richardson ex squid. Aliquip placeat salvia cillum iphone.
                                            Seitan aliquip quis cardigan american apparel, butcher voluptate nisi
                                            qui.
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel"
                                        aria-labelledby="profile-tab">
                                        <p class="mb-0">
                                            Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                            single-origin coffee squid. Exercitation +1 labore velit, blog sartorial
                                            PBR leggings next level wes anderson artisan four loko farm-to-table
                                            craft beer twee. Qui photo booth letterpress, commodo enim craft beer
                                            mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud
                                            organic, assumenda labore aesthetic magna delectus.
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel"
                                        aria-labelledby="contact-tab">
                                        <p class="mb-0">
                                            Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out
                                            mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.
                                            Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard
                                            locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR
                                            banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg
                                            banh mi whatever gluten yr.
                                        </p>
                                    </div>
                                    <div class="tab-pane fade" id="setting" role="tabpanel"
                                        aria-labelledby="contact-tab1">
                                        <p class="mb-0">
                                            Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                            single-origin coffee squid. Exercitation +1 labore velit, blog sartorial
                                            PBR leggings next level wes anderson artisan four loko farm-to-table
                                            craft beer twee. Qui photo booth letterpress, commodo enim craft beer
                                            mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud
                                            organic, assumenda labore aesthetic magna delectus.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Cardbody -->
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Justify Tabs</h4>
                                <p class="card-title-desc">Use the tab JavaScript plugin—include it individually or
                                    through the compiled <code class="highlighter-rouge">bootstrap.js</code> file—to
                                    extend our navigational tabs and pills to create tabbable panes of local
                                    content, even via dropdown menus.</p>

                                <!-- Nav tabs -->
                                <ul class="nav nav-pills nav-justified" role="tablist">
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#home-1" role="tab">
                                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                            <span class="d-none d-sm-block">Home</span>
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-bs-toggle="tab" href="#profile-1" role="tab">
                                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                            <span class="d-none d-sm-block">Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-bs-toggle="tab" href="#messages-1" role="tab">
                                            <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                            <span class="d-none d-sm-block">Messages</span>
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-bs-toggle="tab" href="#settings-1" role="tab">
                                            <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                            <span class="d-none d-sm-block">Settings</span>
                                        </a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content p-3">
                                    <div class="tab-pane active" id="home-1" role="tabpanel">
                                        <p class="mb-0">
                                            Raw denim you probably haven't heard of them jean shorts Austin.
                                            Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                            cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                            butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui
                                            irure terry richardson ex squid. Aliquip placeat salvia cillum iphone.
                                            Seitan aliquip quis cardigan american apparel, butcher voluptate nisi
                                            qui.
                                        </p>
                                    </div>
                                    <div class="tab-pane" id="profile-1" role="tabpanel">
                                        <p class="mb-0">
                                            Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                            single-origin coffee squid. Exercitation +1 labore velit, blog sartorial
                                            PBR leggings next level wes anderson artisan four loko farm-to-table
                                            craft beer twee. Qui photo booth letterpress, commodo enim craft beer
                                            mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud
                                            organic, assumenda labore aesthetic magna 8-bit.
                                        </p>
                                    </div>
                                    <div class="tab-pane" id="messages-1" role="tabpanel">
                                        <p class="mb-0">
                                            Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out
                                            mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.
                                            Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard
                                            locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR
                                            banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg
                                            banh mi whatever gluten-free.
                                        </p>
                                    </div>
                                    <div class="tab-pane" id="settings-1" role="tabpanel">
                                        <p class="mb-0">
                                            Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party
                                            before they sold out master cleanse gluten-free squid scenester freegan
                                            cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf
                                            cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR,
                                            banh mi before they sold out farm-to-table.
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <!-- End Cardbody -->
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->

                <div class="row">

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Vertical Nav Tabs</h4>
                                <p class="card-title-desc">Example of Vertical nav tabs</p>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                            aria-orientation="vertical">
                                            <a class="nav-link mb-2 active" id="v-pills-home-tab"
                                                data-bs-toggle="pill" href="#v-pills-home" role="tab"
                                                aria-controls="v-pills-home" aria-selected="true">Home</a>
                                            <a class="nav-link mb-2" id="v-pills-profile-tab" data-bs-toggle="pill"
                                                href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                                aria-selected="false">Profile</a>
                                            <a class="nav-link mb-2" id="v-pills-messages-tab" data-bs-toggle="pill"
                                                href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                                aria-selected="false">Messages</a>
                                            <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                                href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                                                aria-selected="false">Settings</a>
                                        </div>
                                    </div>
                                    <!-- End Col -->
                                    <div class="col-md-9">
                                        <div class="tab-content mt-4 mt-md-0" id="v-pills-tabContent">
                                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                                aria-labelledby="v-pills-home-tab">
                                                <p>
                                                    Raw denim you probably haven't heard of them jean shorts Austin.
                                                    Nesciunt tofu stumptown aliqua, retro synth master cleanse.
                                                    Mustache cliche tempor, williamsburg carles vegan helvetica.
                                                    Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby
                                                    sweater eu banh mi, qui irure terry richardson ex squid. Aliquip
                                                    placeat salvia cillum iphone. Seitan aliquip quis cardigan.
                                                </p>
                                                <p>Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby
                                                    sweater eu banh mi, qui irure terry richardson ex squid.</p>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                                aria-labelledby="v-pills-profile-tab">
                                                <p>
                                                    Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                                    single-origin coffee squid. Exercitation +1 labore velit, blog
                                                    sartorial PBR leggings next level wes anderson artisan four loko
                                                    farm-to-table craft beer twee. Qui photo booth letterpress,
                                                    commodo enim craft beer mlkshk.
                                                </p>
                                                <p class="mb-0"> Qui photo booth letterpress, commodo enim craft
                                                    beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR.
                                                    Homo nostrud organic, assumenda labore aesthetic magna 8-bit</p>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                                aria-labelledby="v-pills-messages-tab">
                                                <p>
                                                    Etsy mixtape wayfarers, ethical wes anderson tofu before they
                                                    sold out mcsweeney's organic lomo retro fanny pack lo-fi
                                                    farm-to-table readymade. Messenger bag gentrify pitchfork
                                                    tattooed craft beer, iphone skateboard locavore carles etsy
                                                    salvia banksy hoodie helvetica. DIY synth PBR banksy irony.
                                                    Leggings gentrify squid 8-bit cred.
                                                </p>
                                                <p class="mb-0">DIY synth PBR banksy irony. Leggings gentrify squid
                                                    8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free.
                                                </p>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                                aria-labelledby="v-pills-settings-tab">
                                                <p>
                                                    Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                                                    art party before they sold out master cleanse gluten-free squid
                                                    scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                                                    art party locavore wolf cliche high life echo park Austin. Cred
                                                    vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                                    farm-to-table.
                                                </p>
                                                <p class="mb-0">Fanny pack portland seitan DIY, art party locavore
                                                    wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY
                                                    salvia PBR, banh mi before they sold out farm-to-table.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Col -->
                                </div>
                                <!-- End Row -->
                            </div>
                            <!-- End Cardbody -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- End Col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Custom Tabs</h4>
                                <p class="card-title-desc">Example of custom tabs</p>

                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#home1" role="tab">
                                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                            <span class="d-none d-sm-block">Home</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#profile1" role="tab">
                                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                            <span class="d-none d-sm-block">Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#messages1" role="tab">
                                            <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                            <span class="d-none d-sm-block">Messages</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#settings1" role="tab">
                                            <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                                            <span class="d-none d-sm-block">Settings</span>
                                        </a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content p-3">
                                    <div class="tab-pane active" id="home1" role="tabpanel">
                                        <p class="mb-0">
                                            Raw denim you probably haven't heard of them jean shorts Austin.
                                            Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache
                                            cliche tempor, williamsburg carles vegan helvetica. Reprehenderit
                                            butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui
                                            irure terry richardson ex squid. Aliquip placeat salvia cillum iphone.
                                            Seitan aliquip quis cardigan american apparel, butcher voluptate nisi
                                            qui.
                                        </p>
                                    </div>
                                    <div class="tab-pane" id="profile1" role="tabpanel">
                                        <p class="mb-0">
                                            Food truck fixie locavore, accusamus mcsweeney's marfa nulla
                                            single-origin coffee squid. Exercitation +1 labore velit, blog sartorial
                                            PBR leggings next level wes anderson artisan four loko farm-to-table
                                            craft beer twee. Qui photo booth letterpress, commodo enim craft beer
                                            mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud
                                            organic, assumenda labore aesthetic magna delectus.
                                        </p>
                                    </div>
                                    <div class="tab-pane" id="messages1" role="tabpanel">
                                        <p class="mb-0">
                                            Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out
                                            mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.
                                            Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard
                                            locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR
                                            banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg
                                            banh mi whatever gluten-free carles.
                                        </p>
                                    </div>
                                    <div class="tab-pane" id="settings1" role="tabpanel">
                                        <p class="mb-0">
                                            Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party
                                            before they sold out master cleanse gluten-free squid scenester freegan
                                            cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf
                                            cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR,
                                            banh mi before they sold out farm-to-table VHS viral locavore cosby
                                            sweater. Lomo wolf viral, mustache readymade keffiyeh craft.
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <!-- End Cardbody -->
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Col -->

                </div>

                <!-- Collapse -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Default Collapse</h4>
                                <p class="card-title-desc mb-3">
                                    You can use a link with the <code class="highlighter-rouge">href</code>
                                    attribute, or a button with the <code
                                        class="highlighter-rouge">data-bs-target</code> attribute. In both cases,
                                    the
                                    <code class="highlighter-rouge">data-bs-toggle="collapse"</code> is required.
                                </p>

                                <p>
                                    <a class="btn btn-primary mt-1 me-1" data-bs-toggle="collapse"
                                        href="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        Link with href
                                    </a>
                                    <button class="btn btn-primary mt-1" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        Button with data-target
                                    </button>
                                </p>
                                <div class="collapse show" id="collapseExample">
                                    <div class="card card-body mb-0">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes
                                        anderson cred nesciunt sapiente ea proident.
                                    </div>
                                </div>

                            </div>
                            <!-- End Cardbody -->
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Accordion example</h4>
                                <p class="card-title-desc">Extend the default collapse behavior to create an
                                    accordion.</p>

                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Accordion Item #1
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is
                                                hidden by default, until the collapse plugin adds the appropriate
                                                classes that we use to style each element. These classes control the
                                                overall appearance, as well as the showing and hiding via CSS
                                                transitions. You can modify any of this with custom CSS or
                                                overriding our default variables. It's also worth noting that just
                                                about any HTML can go within the <code>.accordion-body</code>,
                                                though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                Accordion Item #2
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the second item's accordion body.</strong> It is
                                                hidden by default, until the collapse plugin adds the appropriate
                                                classes that we use to style each element. These classes control the
                                                overall appearance, as well as the showing and hiding via CSS
                                                transitions. You can modify any of this with custom CSS or
                                                overriding our default variables. It's also worth noting that just
                                                about any HTML can go within the <code>.accordion-body</code>,
                                                though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Accordion Item #3
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the third item's accordion body.</strong> It is
                                                hidden by default, until the collapse plugin adds the appropriate
                                                classes that we use to style each element. These classes control the
                                                overall appearance, as well as the showing and hiding via CSS
                                                transitions. You can modify any of this with custom CSS or
                                                overriding our default variables. It's also worth noting that just
                                                about any HTML can go within the <code>.accordion-body</code>,
                                                though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- End Cardbody -->
                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- end row -->

            </div>
            <!-- End Page-content -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


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