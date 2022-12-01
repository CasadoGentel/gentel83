<!-- Sidebar Widgets Column -->

<div class="col-md-2">
    <nav class="pcoded-navbar menu-light ">
        <div class="navbar-wrapper">
            <div class="navbar-content scroll-div active pcoded-trigger ps ps--active-y">
                <ul class="nav pcoded-inner-navbar">
                    {{--<li class="nav-item pcoded-menu-caption">
                        <label>tableau de bord</label>
                    </li>--}}
                    <li class="nav-item pcoded-micon">
                        <a href="{{ url('/') }}" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-home"></i></span><span
                                class="pcoded-mtext">Tableau de bord</span></a>
                    </li>

                    <li class="nav-item pcoded-menu-caption">
                        <label>Gestion Clients</label>
                    </li>

                    <li class="nav-item pcoded-micon">
                        <a href="{{ url('client') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-users"></i></span><span
                                class="pcoded-mtext">Liste Clients</span></a>

                    </li>

                    <li class="nav-item pcoded-micon">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span
                                class="pcoded-mtext">Factures</span></a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layers"></i></span><span
                                class="pcoded-mtext">Documents</span></a>
                    </li>



                    <li class="nav-item pcoded-menu-caption">
                        <label>Personnaliser</label>
                    </li>

                    <li class="nav-item pcoded-hasmenu">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span
                                class="pcoded-mtext">Modules</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="#">OcSimple</a></li>
                            <li><a href="#">CDR Telco Revendeur</a></li>
                            <li><a href="#">CDR Telco marque Blanche</a></li>
                            <li><a href="#">CDR Uni-One</a></li>
                            <li><a href="#">Reversion</a></li>
                            <li><a href="#">Centile</a></li>
                        </ul>
                    </li>

                    <li class="nav-item ">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-gitlab"></i></span><span
                                class="pcoded-mtext">API publiques</span></a>
                    </li>

                    <li class="nav-item pcoded-menu-caption">
                        <label>Paramètrages </label>
                    </li>

                    <li class="nav-item pcoded-hasmenu">
                        <a href="#" class="nav-link ">
                            <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                            <span class="pcoded-mtext">personnalisation</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="{{ url('configuration')}}">Interface</a></li>
                        </ul>
                    </li>

                    <li class="nav-item pcoded-hasmenu">
                        <a href="#" class="nav-link ">
                            <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                            <span class="pcoded-mtext">Mail</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li><a href="#">mail connexion</a></li>
                            <li><a href="#">mail facture</a></li>
                            <li><a href="#">serveur mail</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span
                                class="pcoded-mtext">Utilisateurs</span></a>
                    </li>

                    <li class="nav-item pcoded-menu-caption">
                        <label>Améliorations</label>
                    </li>

                    <li class="nav-item pcoded-micon">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span
                                class="pcoded-mtext">Chancelog</span></a>
                    </li>
                    <li class="nav-item pcoded-micon">
                        <a href="#" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span
                                class="pcoded-mtext">Bugs/suggestions</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

