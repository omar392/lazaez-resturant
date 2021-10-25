        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">القائمة</li>
                        <li>
                            <a href="{{route('adminhome')}}" class="waves-effect">
                                <i class="icon-accelerator"></i><span style="font-family: cairo;"> الرئيسية </span>
                            </a>
                        </li>
                        @if(Auth::guard('admin')->user()->hasPermission('admins-read'))
                        <li>
                            <a href="{{route('admins.index')}}" class="waves-effect">
                                <i class="fas fa-user-tag"></i><span style="font-family: cairo;">المديرين</span>
                            </a>
                        </li>
                        @endif
                        @if(Auth::guard('admin')->user()->hasPermission('roles-read'))
                        <li>
                            <a href="{{route('roles.index')}}" class="waves-effect">
                                <i class="fas fa-user-lock"></i><span style="font-family: cairo;">الصلاحيات</span>
                            </a>
                        </li>
                        @endif
                        @if(Auth::guard('admin')->user()->hasPermission('categories-read'))
                        <li>
                            <a href="{{route('category.index')}}" class="waves-effect">
                                <i class="fas fa-align-justify"></i><span style="font-family: cairo;"> الأقسام </span>
                            </a>
                        </li>
                        @endif
                        @if(Auth::guard('admin')->user()->hasPermission('products-read'))
                        <li>
                            <a href="{{route('product.index')}}" class="waves-effect">
                                <i class="fas fa-briefcase"></i><span style="font-family: cairo;"> المنتجات </span>
                            </a>
                        </li>
                        @endif
                        @if(Auth::guard('admin')->user()->hasPermission('offers-read'))
                        <li>
                            <a href="{{route('offer.index')}}" class="waves-effect">
                                <i class="fas fa-donate"></i><span style="font-family: cairo;"> العروض </span>
                            </a>
                        </li>
                        @endif
                        @if(Auth::guard('admin')->user()->hasPermission('banners-read'))
                        <li>
                            <a href="{{route('banner.index')}}" class="waves-effect">
                                <i class="far fa-images"></i><span style="font-family: cairo;">البنرات</span>
                            </a>
                        </li>
                        @endif
                        @if(Auth::guard('admin')->user()->hasPermission('adverts-read'))
                        <li>
                            <a href="{{route('advert.index')}}" class="waves-effect">
                                <i class="fas fa-bullhorn"></i><span style="font-family: cairo;">الاعلانات</span>
                            </a>
                        </li>
                        @endif
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-mouse-pointer"></i><span style="font-family: cairo;"> الإضافات <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                            <ul class="submenu">
                                @if(Auth::guard('admin')->user()->hasPermission('cuttings-read'))
                                <li>
                                    <a href="{{route('cutting.index')}}" class="waves-effect">
                                        <i class="fas fa-utensils"></i>&ensp;<span style="font-family: cairo;">طرق التقطيع</span>
                                    </a>
                                </li>
                                @endif
                                @if(Auth::guard('admin')->user()->hasPermission('wrappings-read'))
                                <li>
                                    <a href="{{route('wrapping.index')}}" class="waves-effect">
                                        <i class="fas fa-boxes"></i>&ensp;<span style="font-family: cairo;">طرق التغليف</span>
                                    </a>
                                </li>
                                @endif
                                @if(Auth::guard('admin')->user()->hasPermission('cookings-read'))
                                <li>
                                    <a href="{{route('cooking.index')}}" class="waves-effect">
                                        <i class="fas fa-drumstick-bite"></i>&ensp;<span style="font-family: cairo;">طرق الطهى</span>
                                    </a>
                                </li>
                                @endif
                                @if(Auth::guard('admin')->user()->hasPermission('spices-read'))
                                <li>
                                    <a href="{{route('spice.index')}}" class="waves-effect">
                                        <i class="fas fa-mortar-pestle"></i>&ensp;<span style="font-family: cairo;">التوابل</span>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </li>
                        @if(Auth::guard('admin')->user()->hasPermission('faqs-read'))
                        <li>
                            <a href="{{route('faq.index')}}" class="waves-effect">
                                <i class="fas fa-question"></i><span style="font-family: cairo;">الاسئلة الشائعة</span>
                            </a>
                        </li>
                        @endif
                        @if(Auth::guard('admin')->user()->hasPermission('opinions-read'))
                        <li>
                            <a href="{{route('opinion.index')}}" class="waves-effect">
                                <i class="fas fa-crown"></i><span style="font-family: cairo;">أراء الجمهور</span>
                            </a>
                        </li>
                        @endif
                        @if(Auth::guard('admin')->user()->hasPermission('teams-read'))
                        <li>
                            <a href="{{route('team.index')}}" class="waves-effect">
                                <i class="fas fa-user-friends"></i><span style="font-family: cairo;"> فريق العمل  </span>
                            </a>
                        </li>
                        @endif
                        @if(Auth::guard('admin')->user()->hasPermission('abouts-read'))
                        <li>
                            <a href="{{route('about')}}" class="waves-effect">
                                <i class="fas fa-home"></i><span style="font-family: cairo;">تعرف علينا</span>
                            </a>
                        </li>
                        @endif
                        @if(Auth::guard('admin')->user()->hasPermission('settings-read'))
                        <li>
                            <a href="{{route('setting')}}" class="waves-effect">
                                <i class="fas fa-cog"></i><span style="font-family: cairo;">الاعدادت العامة</span>
                            </a>
                        </li>
                        @endif
                    </ul>

                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->