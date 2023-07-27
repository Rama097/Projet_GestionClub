  <!-- main left menu --> 
  <div id="left-sidebar" class="sidebar"> 
    <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
    <div class="sidebar-scroll">
        <div class="user-account">
            <img src="../assets/images/user.png" class="rounded-circle user-photo" alt="User Profile Picture">
            <div class="dropdown">
                <span>Bienvenue,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Pro. Chandler Bing</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account">
                    <li><a href="doctor-profile.html"><i class="icon-user"></i>Mon Profil</a></li>
                    <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Parametre</a></li>
                    <li class="divider"></li>
                    <li><a href="page-login.html"><i class="icon-power"></i>Deconnexion</a></li>
                </ul>
            </div>               
            <hr>
            
        </div>
        <!-- Nav tabs -->
        {{-- <ul class="nav nav-tabs"> 
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Chat"><i class="icon-book-open"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#question"><i class="icon-question"></i></a></li>                
        </ul>--}}
            
        <!-- Tab panes -->
        <div class="tab-content padding-0">
            <div class="tab-pane active" id="menu">
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul class="metismenu li_animation_delay">
                        <li class="active"><a href="index.html"><i class="fa fa-dashboard"></i><span>Tableau de bord</span></a></li>
                        {{-- <li><a href="javascript:void(0);" class="has-arrow"><i class="fa fa-tag"></i><span>Apps</span></a> 
                            <ul>
                                <li><a href="events.html">Events</a></li>
                                <li><a href="app-inbox.html">Inbox App</a></li>
                                <li><a href="app-chat.html">Chat App</a></li>
                                <li><a href="app-contact.html">Contact list</a></li>
                            </ul>--}}
                        </li>
                        

                        <li><a href="javascript:void(0);" class="has-arrow"><i class="fa fa-users"></i><span>Utilisateurs</span> </a>
                            <ul>
                                <li><a href="{{ route('users.create') }}">Ajouter un utilisateur</a></li>
                                <li><a href="{{ route('users.index') }}">Listes des utilisateurs</a></li>
                               
                               
                            </ul>
                        </li>

                        <li><a href="javascript:void(0);" class="has-arrow"><i class="fas fa-university"></i><span>Club</span> </a>
                            <ul>

                                <li><a href="{{ route('clubs.create') }}">Ajouter un club</a></li>
                                <li><a href="{{ route('clubs.index') }}">Liste des clubs</a></li>
                               {{-- <li><a href="{{ route('clubs.store')}}">Liste des clubs</a></li>
                                @if (isset($club))
                                  <li><a href="{{ route('clubs.edit', $club->id) }}">Modifier club</a></li>
                                @endif--}}
                                
                                {{-- <li><a href="professors-profile.html">Professors Profile</a></li> --}}
                                {{-- <li><a href="professors-leave.html">Leave Request</a></li> --}}
                                {{-- <li><a href="attendance.html">Attendance</a></li> --}}
                                {{-- <li><a href="noticeboard.html">Noticeboard</a></li> --}}
                            </ul>
                        </li>

                        <li><a href="javascript:void(0);" class="has-arrow"><i class="fas fa-building"></i> </i><span>Membres</span> </a>
                            <ul>
                                <li><a href="{{route('membres.create')}}">Ajouter un membre</a></li>
                                <li><a href="{{route('membres.index')}}">Liste des membres</a></li>
                                {{-- <li><a href="membres">Ajouter un membre</a></li> --}}
                                {{-- <li><a href="students-profile.html">Students Profile</a></li>  --}}
                            </ul>
                        </li>

                        <li><a href="javascript:void(0);" class="has-arrow"><i class="fas fa-building"></i> </i><span>Activites</span> </a>
                            <ul>
                                <li><a href="{{route('activites.create')}}">Ajouter une activite</a></li>
                                <li><a href="{{route('activites.index')}}">Liste des activites</a></li>                                                                            
                                {{-- <li><a href="students-profile.html">Students Profile</a></li>  --}}
                            </ul>
                        </li>

                        
                                {{--<li><a href="salles-add.html">Ajouter un occupant</a></li>
                                <li><a href="salles-list.html">Liste des occupants</a></li>
                                 <li><a href="students-profile.html">Students Profile</a></li>  --}}
                            </ul>

                        </li>
                    
                        {{-- <li><a href="hostel.html"><i class="fa fa-tag"></i>Hostel</a></li> 
                        <li><a href="transport.html"><i class="fa fa-taxi"></i>Transport</a></li>
                        <li><a href="departments.html"><i class="fa fa-building"></i>Departments</a></li>
                        <li><a href="javascript:void(0);" class="has-arrow"><i class="fa fa-graduation-cap"></i><span>Courses</span> </a>
                            <ul>
                                <li><a href="course-list.html">All Courses</a></li>
                                <li><a href="course-add.html">Add Courses</a></li>
                                <li><a href="course-info.html">Courses Info</a></li>
                            </ul>
                        </li>
                        <li><a href="library.html"><i class="fa fa-book"></i>Library</a></li>
                        <li><a href="classroom.html"><i class="fa fa-sitemap"></i>Classes</a></li>
                        <li><a href="javascript:void(0);" class="has-arrow"><i class="fa fa-cc-visa"></i><span>Payments</span> </a>
                            <ul>
                                <li><a href="payments.html">Payments</a></li>
                                <li><a href="payments-add.html">Add Payment</a></li>
                                <li><a href="payments-invoice.html">Invoice</a></li>
                            </ul>
                        </li>
                        <li><a href="our-centres.html"><i class="fa fa-map"></i>University Centres</a></li>
                        <li><a href="javascript:void(0);" class="has-arrow"><i class="fa fa-folder"></i><span>File Manager</span></a>
                            <ul>
                                <li><a href="file-dashboard.html">Dashboard</a></li>
                                <li><a href="file-documents.html">Documents</a></li>
                                <li><a href="file-media.html">Media</a></li>
                                <li><a href="file-images.html">Images</a></li>
                            </ul>
                        </li>--}}
                        <li>
                            <a href="#Authentication" class="has-arrow"><i class="fa fa-lock"></i><span>Authentification</span></a>
                            <ul>
                                <li><a href="page-login.html">Se connecter</a></li>
                                <li><a href="page-register.html">S'inscrire</a></li> 
                                {{-- <li><a href="page-lockscreen.html">Lockscreen</a></li> --}}
                                <li><a href="page-forgot-password.html">Mot de passe oublié</a></li>
                                {{-- <li><a href="page-404.html">Page 404</a></li> --}}
                                {{-- <li><a href="page-403.html">Page 403</a></li> --}}
                                {{-- <li><a href="page-500.html">Page 500</a></li> --}}
                                {{-- <li><a href="page-503.html">Page 503</a></li> --}}
                            </ul>
                        </li>
                        {{--<li>
                            <a href="#Pages" class="has-arrow"><i class="fa fa-tag"></i><span></span></a>
                            <ul>
                                <li><a href="page-blank.html">Blank Page</a></li>
                                <li><a href="page-profile.html">Profile</a></li>
                                <li><a href="page-gallery.html">Image Gallery</a></li>
                                <li><a href="page-timeline.html">Timeline</a></li>
                                <li><a href="page-pricing.html">Pricing</a></li>
                                <li><a href="page-search-results.html">Search Results</a></li>
                                <li><a href="page-maintenance.html">Maintenance</a></li>
                                <li><a href="page-testimonials.html">Testimonials</a></li>
                                <li><a href="page-faq.html">FAQs</a></li>
                            </ul>
                        </li>--}}
                    </ul>
                </nav>
            </div>
            {{--<div class="tab-pane" id="Chat">
                <form>
                    <div class="input-group m-b-20">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-magnifier"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                </form>
                <ul class="right_chat list-unstyled li_animation_delay">
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="../assets/images/xs/avatar1.jpg" alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between">Pro. Chris Fox <i class="fa fa-heart-o font-12"></i></span>
                                <span class="message">chrisfox@gmail.com</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="../assets/images/xs/avatar2.jpg" alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between">Pro. Joge Lucky <i class="fa fa-heart-o font-12"></i></span>
                                <span class="message">Jogelucky@gmail.com</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="../assets/images/xs/avatar3.jpg" alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between">Pro. Isabella <i class="fa fa-heart-o font-12"></i></span>
                                <span class="message">Isabella@gmail.com</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="../assets/images/xs/avatar4.jpg" alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between">Pro. Folisise Chosielie <i class="fa fa-heart font-12"></i></span>
                                <span class="message">FolisiseChosielie@gmail.com</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="../assets/images/xs/avatar5.jpg" alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between">Pro. Alexander <i class="fa fa-heart-o font-12"></i></span>
                                <span class="message">Alexander@gmail.com</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="../assets/images/xs/avatar6.jpg" alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between">Pro. Isabella <i class="fa fa-heart-o font-12"></i></span>
                                <span class="message">Isabella@gmail.com</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="../assets/images/xs/avatar7.jpg" alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between">Pro. Folisise Chosielie <i class="fa fa-heart font-12"></i></span>
                                <span class="message">FolisiseChosielie@gmail.com</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="app-contact.html" class="btn btn-block btn-primary">View all Doctors</a>
                    </li>
                </ul>
            </div>
            <div class="tab-pane" id="setting">
                <h6>Choose Skin</h6>
                <ul class="choose-skin list-unstyled">
                    <li data-theme="purple"><div class="purple"></div></li>
                    <li data-theme="blue"><div class="blue"></div></li>
                    <li data-theme="cyan" class="active"><div class="cyan"></div></li>
                    <li data-theme="green"><div class="green"></div></li>
                    <li data-theme="orange"><div class="orange"></div></li>
                    <li data-theme="blush"><div class="blush"></div></li>
                    <li data-theme="red"><div class="red"></div></li>
                </ul>

                <ul class="list-unstyled font_setting mt-3">
                    <li>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-nunito" checked="">
                            <span class="custom-control-label">Nunito Google Font</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-ubuntu">
                            <span class="custom-control-label">Ubuntu Font</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-raleway">
                            <span class="custom-control-label">Raleway Google Font</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-IBMplex">
                            <span class="custom-control-label">IBM Plex Google Font</span>
                        </label>
                    </li>
                </ul>

                <ul class="list-unstyled mt-3">
                    <li class="d-flex align-items-center mb-2">
                        <label class="toggle-switch theme-switch">
                            <input type="checkbox">
                            <span class="toggle-switch-slider"></span>
                        </label>
                        <span class="ml-3">Enable Dark Mode!</span>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                        <label class="toggle-switch theme-rtl">
                            <input type="checkbox">
                            <span class="toggle-switch-slider"></span>
                        </label>
                        <span class="ml-3">Enable RTL Mode!</span>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                        <label class="toggle-switch theme-high-contrast">
                            <input type="checkbox">
                            <span class="toggle-switch-slider"></span>
                        </label>
                        <span class="ml-3">Enable High Contrast Mode!</span>
                    </li>
                </ul>                    

                <hr>
                <h6>General Settings</h6>
                <ul class="setting-list list-unstyled">
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox" checked>
                            <span>Allowed Notifications</span>
                        </label>                      
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Offline</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Location Permission</span>
                        </label>
                    </li>
                </ul>--}}

                {{-- <a href="#" target="_blank" class="btn btn-block btn-primary">Buy this item</a> 
                <a href="https://themeforest.net/user/wrraptheme/portfolio" target="_blank" class="btn btn-block btn-secondary">View portfolio</a>
            </div>
            <div class="tab-pane" id="question">
                <form>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-magnifier"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                </form>
                <ul class="list-unstyled question">
                    <li class="menu-heading">HOW-TO</li>
                    <li><a href="javascript:void(0);">How to Create Campaign</a></li>
                    <li><a href="javascript:void(0);">Boost Your Sales</a></li>
                    <li><a href="javascript:void(0);">Website Analytics</a></li>
                    <li class="menu-heading">ACCOUNT</li>
                    <li><a href="javascript:void(0);">Cearet New Account</a></li>
                    <li><a href="javascript:void(0);">Change Password?</a></li>
                    <li><a href="javascript:void(0);">Privacy &amp; Policy</a></li>
                    <li class="menu-heading">BILLING</li>
                    <li><a href="javascript:void(0);">Payment info</a></li>
                    <li><a href="javascript:void(0);">Auto-Renewal</a></li>                        
                    <li class="menu-button mt-3">
                        <a href="../docs/index.html" class="btn btn-primary btn-block">Documentation</a>
                    </li>
                </ul>
            </div>  --}}  
        </div>          
    </div>
</div>
