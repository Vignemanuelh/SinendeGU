<!--begin::Aside-->
<div id="kt_aside" class="aside aside-light aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside"
     data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
     data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
     data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Brand-->
    <div class="aside-logo flex-column-auto" id="kt_aside_logo">
        <!--begin::Logo-->
        <a href="{{ route('home') }}">
            <img alt="Logo" src="" class="h-50px logo"/>
        </a>
        <!--end::Logo-->
        <!--begin::Aside toggler-->
        <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
             data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
             data-kt-toggle-name="aside-minimize">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
            <span class="svg-icon svg-icon-1 rotate-180">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
									<path opacity="0.5"
                                          d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                                          fill="currentColor"/>
									<path
                                        d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                                        fill="currentColor"/>
								</svg>
							</span>
            <!--end::Svg Icon-->
        </div>
        <!--end::Aside toggler-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
             data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
             data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu"
             data-kt-scroll-offset="0">
            <!--begin::Menu-->
            <div
                class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">
                <div class="menu-item">
                    <a href="{{ route('home') }}">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <i class="fa fa-home ql-bg-blue"></i>
                            </span>
                            <span class="menu-title">Accueil</span>
                        </span>
                    </a>
                </div>
                <div class="menu-item mb-1">
                    <a href="{{ route('recette-fiscale') }}">
                        <span class="menu-link">
                            <span class="menu-icon"><i class="fas fa-dollar-sign"></i></span>
                            <span class="menu-title">Recette Fiscale</span>
                        </span>
                    </a>
                </div>
                <div class="menu-item mb-1">
                    <a href="{{ route('recette-non-fiscale') }}">
                        <span class="menu-link">
                            <span class="menu-icon"><i class="fas fa-money-bill"></i></span>
                            <span class="menu-title"><R>Recette Non Fiscale</span>
                        </span>
                    </a>
                </div>
                <div class="menu-item mb-1">
                    <a href="{{ route('contribuable-recette-fiscale') }}">
                        <span class="menu-link">
                            <span class="menu-icon"><i class="fas fa-coins"></i></span>
                            <span class="menu-title">Contribuable Recette Fiscale</span>
                        </span>
                    </a>
                </div>
                <div class="menu-item mb-1">
                    <a href="{{ route('contribuable-recette-non-fiscale') }}">
                        <span class="menu-link">
                            <span class="menu-icon"><i class="fas fa-receipt"></i></span>
                            <span class="menu-title">Contribuable Recette Non Fiscale</span>
                        </span>
                    </a>
                </div>
                <div class="menu-item mb-1">
                    <a href="{{ route('contribuable-montant') }}">
                        <span class="menu-link">
                            <span class="menu-icon"><i class="fas fa-dollar-sign"></i></span>
                            <span class="menu-title">Contribuable Montant</span>
                        </span>
                    </a>
                </div>
                <div class="menu-item mb-1">
                    <a href="{{ route('user.index') }}">
                        <span class="menu-link">
                            <span class="menu-icon"><i class="fas fa-user"></i></span>
                            <span class="menu-title">User</span>
                        </span>
                    </a>
                </div>
                <div class="menu-item mb-1">
                    <a href="{{ route('role.index') }}">
                        <span class="menu-link">
                            <span class="menu-icon"><i class="fas fa-user-shield"></i></span>
                            <span class="menu-title">Role</span>
                        </span>
                    </a>
                </div>
                <div class="menu-item mb-1">
                    <a href="{{ route('categorie-recette.index') }}">
                        <span class="menu-link">
                            <span class="menu-icon"><i class="fas fa-list"></i></span>
                            <span class="menu-title">Catégorie Recette</span>
                        </span>
                    </a>
                </div>
                <div class="menu-item mb-1">
                    <a href="{{ route('commune.index') }}">
                        <span class="menu-link">
                            <span class="menu-icon"><i class="fas fa-building"></i></span>
                            <span class="menu-title">Commune</span>
                        </span>
                    </a>
                </div>
                <div class="menu-item mb-1">
                    <a href="{{ route('contribuable.index') }}">
                        <span class="menu-link">
                            <span class="menu-icon"><i class="fas fa-user-tie"></i></span>
                            <span class="menu-title">Contribuable</span>
                        </span>
                    </a>
                </div>
                <div class="menu-item mb-1">
                    <a href="{{ route('nature-recette-communale.index') }}">
                        <span class="menu-link">
                            <span class="menu-icon"><i class="fas fa-city"></i></span>
                            <span class="menu-title">Nature Recette Communale</span>
                        </span>
                    </a>
                </div>
                <div class="menu-item mb-1">
                    <a href="{{ route('piece-justificative.index') }}">
                        <span class="menu-link">
                            <span class="menu-icon"><i class="fas fa-file-invoice"></i></span>
                            <span class="menu-title">Pièce Justificative</span>
                        </span>
                    </a>
                </div>
                <div class="menu-item mb-1">
                    <a href="{{ route('sous-categorie-recette.index') }}">
                        <span class="menu-link">
                            <span class="menu-icon"><i class="fas fa-layer-group"></i></span>
                            <span class="menu-title">Sous Catégorie Recette</span>
                        </span>
                    </a>
                </div>
                <div class="menu-item mb-1">
                    <a href="{{ route('contribuable_nature_recette.index') }}">
                        <span class="menu-link">
                            <span class="menu-icon"><i class="fas fa-file-alt"></i></span>
                            <span class="menu-title">Contribuable nature recette</span>
                        </span>
                    </a>
                </div>
                <div class="menu-item mb-1">
                    <a href="{{ route('paiement.index') }}">
                        <span class="menu-link">
                            <span class="menu-icon"><i class="fas fa-credit-card"></i></span>
                            <span class="menu-title">Paiement</span>
                        </span>
                    </a>
                </div>
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Aside Menu-->
    </div>
    <!--end::Aside menu-->
    <!--begin::Footer-->
{{--    <div class="aside-footer flex-column-auto pt-5 pb-7 px-5" id="kt_aside_footer">--}}
{{--    </div>--}}
    <!--end::Footer-->
</div>
<!--end::Aside-->
