  <!-- main left menu --> 
  <div id="left-sidebar" class="sidebar"> 
    <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
    <div class="sidebar-scroll">
        <div class="user-account">
            <img src="../assets/images/user.png" class="rounded-circle user-photo" alt="User Profile Picture">
            <div class="dropdown">
                <span>Bienvenue,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>{{Auth::user()->name}}</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account">
                    {{-- <li><a href="doctor-profile.html"><i class="icon-user"></i>Mon Profil</a></li>
                    <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Parametre</a></li> --}}
                    <li class="divider"></li>
                    <li><a href="{{route('logout')}}"><i class="icon-power"></i>Deconnexion</a></li>
                </ul>
            </div>               
            <hr>
            
        </div>
       
            
        <!-- Tab panes -->
        <div class="tab-content padding-0">
            <div class="tab-pane active" id="menu">
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul class="metismenu li_animation_delay">
                         <h3>Tableau de bord</h3> 
                        {{--<li class="active"><a href="index.html"><i class="fa fa-dashboard"></i><span>Tableau de bord</span></a></li> 
                        
                        </li> --}}
                        

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
                             
                            </ul>
                        </li>

                        <li><a href="javascript:void(0);" class="has-arrow"><i class="fas fa-building"></i> </i><span>Membres</span> </a>
                            <ul>
                                <li><a href="{{route('membres.create')}}">Ajouter un membre</a></li>
                                <li><a href="{{route('membres.index')}}">Liste des membres</a></li>
                              
                            </ul>
                        </li>

                        <li><a href="javascript:void(0);" class="has-arrow"><i class="fas fa-building"></i> </i><span>Activites</span> </a>
                            <ul>
                                <li><a href="{{route('activites.create')}}">Ajouter une activite</a></li>
                                <li><a href="{{route('activites.index')}}">Liste des activites</a></li>                                                                            
                                
                            </ul>
                        </li>

                        
                               
                            </ul>

                        </li>
                    

                       
                        
                    </ul>
                </nav>
            </div>
          
        </div>          
    </div>
</div>
