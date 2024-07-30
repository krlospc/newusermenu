        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">




              
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="index.html" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">Dashboard</span></a></li>

                        
                    @foreach (@session('arrMenu') as $mainItem => $menu)                        
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                              <span class="d-flex">
                                <i class="mdi mdi-view-dashboard"></i>
                              </span>
                              <span class="hide-menu">{{ $mainItem }}</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                            @foreach ($menu as $column => $value)
                              <li class="sidebar-item">
                                <a href="#" class="sidebar-link">
                                  <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                  </div>
                                  <span class="hide-menu">{{ $value }}</span>
                                </a>
                              </li>
                              @endforeach
                            </ul>
                        </li>          
                        @endforeach  
                        {{--
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="pages-profile.html" aria-expanded="false"><i
                                    class="mdi mdi-account-network"></i><span class="hide-menu">Profile</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="table-basic.html" aria-expanded="false"><i class="mdi mdi-border-all"></i><span
                                    class="hide-menu">Table</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="icon-material.html" aria-expanded="false"><i class="mdi mdi-face"></i><span
                                    class="hide-menu">Icon</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="starter-kit.html" aria-expanded="false"><i class="mdi mdi-file"></i><span
                                    class="hide-menu">Blank</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="error-404.html" aria-expanded="false"><i class="mdi mdi-alert-outline"></i><span
                                    class="hide-menu">404</span></a></li>
                         --}}  
                        
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>