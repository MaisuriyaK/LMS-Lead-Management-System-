<section class="jumbotron">
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                         {{-- admin nav --}}
                        @if(auth()->user()->role =='admin')
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{route('home')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link" href="{{route('profile')}}">
                                <div class="sb-nav-link-icon"><i class="fas fas fa-user-alt"></i></div>
                                Profile
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Compaigns
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('campaign.index')}}">All Details</a>
                                    <a class="nav-link" href="{{route('campaign.create')}}">Add Compaigns</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Agents
                             <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('agent.index')}}">All Details</a>
                                    <a class="nav-link" href="{{route('agent.create')}}">Add Agents</a>
                                </nav>
                            </div>
                            <a class="nav-link" href="{{route('reports')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Reports
                            </a>
                            <div class="sb-sidenav-menu-heading"></div>
                        </div>
                    @endif
                    {{-- end --}}


                    {{-- agent nav --}}
                    @if(auth()->user()->role =='agent')
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{route('home')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link" href="{{route('profile',['id'=>Auth::user()->id])}}">
                                <div class="sb-nav-link-icon"><i class="fas fas fa-user-alt"></i></div>
                                Profile
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Leads
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('viewLead',['id'=>Auth::user()->id])}}">View Leads Details</a>
                                </nav>
                            </div>
                            <a class="nav-link" href="{{route('wallet')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Wallet
                            </a>
                            <div class="sb-sidenav-menu-heading"></div>
                        </div>
                    @endif
                    {{-- end --}}
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
        </div>
    </section>