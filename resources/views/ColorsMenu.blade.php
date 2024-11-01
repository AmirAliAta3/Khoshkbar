
    <!-- partial:partials/_settings-panel.html -->
    <div class="theme-setting-wrapper">
        <div id="settings-trigger">
{{--            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>--}}
            <dotlottie-player src="https://lottie.host/1633372b-d5f3-4c1b-9eeb-d7cca76c9e92/aazaRvPSkJ.json" background="transparent" speed="1" style="width: 50px; height: 50px" direction="1" playMode="normal" loop autoplay></dotlottie-player>
        </div>
        <div id="theme-settings" class="settings-panel">
            <div class="settings-close" style="margin-top: -10px">
{{--                <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>--}}
                <dotlottie-player src="https://lottie.host/9d476bf6-daaa-4143-8164-a7b29e307a45/nO4vkBABc6.json" background="transparent" speed="1" style="width: 40px; height: 40px" direction="1" playMode="normal" loop autoplay hover></dotlottie-player>
            </div>
            <p class="settings-heading" style="font-family: IranSans,serif !important;">رنگ منو سمت چپ</p>
            <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                <div class="img-ss rounded-circle bg-light border mr-3"></div>روشن
            </div>
            <div class="sidebar-bg-options" id="sidebar-dark-theme">
                <div class="img-ss rounded-circle bg-dark border mr-3"></div>تیره
            </div>
            <p class="settings-heading mt-2" style="font-family: IranSans,serif !important;">رنگ منو بالا</p>
            <div class="color-tiles mx-0 px-4">
                <div class="tiles success"></div>
                <div class="tiles warning"></div>
                <div class="tiles danger"></div>
                <div class="tiles info"></div>
                <div class="tiles dark"></div>
                <div class="tiles default"></div>
            </div>
        </div>
    </div>
    <div id="right-sidebar" class="settings-panel">
        <div class="settings-close" style="margin-top: -10px">
{{--            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>--}}
            <dotlottie-player src="https://lottie.host/9d476bf6-daaa-4143-8164-a7b29e307a45/nO4vkBABc6.json" background="transparent" speed="1" style="width: 40px; height: 40px" direction="1" playMode="normal" loop autoplay hover></dotlottie-player>
        </div>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">لیست کار های من</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab"
                    aria-controls="chats-section">پیام ها</a>
            </li> --}}
        </ul>
        <div class="tab-content" id="setting-content">
            <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
                <div class="add-items d-flex px-3 mb-0">
                    <form class="form w-100">
                        <div class="form-group d-flex">
                            <input type="text" class="form-control todo-list-input" placeholder="فقط بنویسش 🫡">
                            <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">اضافه کن</button>
                        </div>
                    </form>
                </div>
                <div class="list-wrapper px-3">
                    <ul class="d-flex flex-column-reverse todo-list">
                        {{-- <li>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="checkbox" type="checkbox">
                                    Team review meeting at 3.00 PM
                                </label>
                            </div>
                            <i class="remove ti-close"></i>
                        </li>
                        <li>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="checkbox" type="checkbox">
                                    Prepare for presentation
                                </label>
                            </div>
                            <i class="remove ti-close"></i>
                        </li>
                        <li>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="checkbox" type="checkbox">
                                    Resolve all the low priority tickets due today
                                </label>
                            </div>
                            <i class="remove ti-close"></i>
                        </li>
                        <li class="completed">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="checkbox" type="checkbox" checked>
                                    Schedule meeting for next week
                                </label>
                            </div>
                            <i class="remove ti-close"></i>
                        </li>
                        <li class="completed">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="checkbox" type="checkbox" checked>
                                    Project review
                                </label>
                            </div>
                            <i class="remove ti-close"></i>
                        </li> --}}
                    </ul>
                </div>
                <h4 class="px-3 text-muted mt-5 font-weight-light mb-0"></h4>
                <div class="events pt-4 px-3">
                    <div class="wrapper d-flex mb-2">
                        <i class="ti-control-record text-primary mr-2"></i>
                        <span></span>
                    </div>
                    <p class="mb-0 font-weight-thin text-gray"></p>
                    <p class="text-gray mb-0"></p>
                </div>
                <div class="events pt-4 px-3">
                    <div class="wrapper d-flex mb-2">
                        <i class="ti-control-record text-primary mr-2"></i>
                        <span></span>
                    </div>
                    <p class="mb-0 font-weight-thin text-gray"></p>
                    <p class="text-gray mb-0 "></p>
                </div>
            </div>
            <!-- To do section tab ends -->
            <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                {{-- <div class="d-flex align-items-center justify-content-between border-bottom">
                    <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">دوست ها</p>
                    <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">دیدن
                        همه</small>
                </div>
                <ul class="chat-list">
                    <li class="list active">
                        <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                        <div class="info">
                        </div>
                        <small class="text-muted my-auto">19 min</small>
                    </li>
                    <li class="list">
                        <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                        <div class="info">
                            <div class="wrapper d-flex">

                            </div>
                            <p>Away</p>
                        </div>
                        <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                        <small class="text-muted my-auto">23 min</small>
                    </li>
                    <li class="list">
                        <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                        <div class="info">
                            <p>Daniel Russell</p>
                            <p>Available</p>
                        </div>
                        <small class="text-muted my-auto">14 min</small>
                    </li>
                    <li class="list">
                        <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                        <div class="info">
                            <p>James Richardson</p>
                            <p>Away</p>
                        </div>
                        <small class="text-muted my-auto">2 min</small>
                    </li>
                    <li class="list">
                        <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                        <div class="info">
                            <p>Madeline Kennedy</p>
                            <p>Available</p>
                        </div>
                        <small class="text-muted my-auto">5 min</small>
                    </li>
                    <li class="list">
                        <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                        <div class="info">
                            <p>Sarah Graves</p>
                            <p>Available</p>
                        </div>
                        <small class="text-muted my-auto">47 min</small>
                    </li>
                </ul> --}}
            </div>
            <!-- chat tab ends -->
        </div>
    </div>
    <!-- partial -->
    <!-- partial:partials/_sidebar.html -->
    @include('nav')
