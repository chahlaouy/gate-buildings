<div class="fixed top-0 left-0 w-72 p-4 h-screen text-gray-100">
    <div class="h-full rounded-2xl" style="
        background-image: linear-gradient(195deg,#42424a,#191919);
        box-shadow: 0 4px 6px -1px rgb(0 0 0 / 10%), 0 2px 4px -1px rgb(0 0 0 / 6%);
        ">
        <ul class="m-2">
            <li class="py-8 px-3 flex items-center border-b border-gray-600">
                <span class="mr-2">
                    logo
                </span>
                <span class="text-md font-bold">
                    Gate Building
                </span>
            </li>
            <li class="py-4 px-3 border-b border-gray-600 mb-4">
                <x-custom.dropdown :route="request()->routeIs('articles.create')">>
                    <x-slot name="trigger">
                        <div class="flex items-center mb-3 cursor-pointer">
                            <img src="{{asset('landing-page/images/team/1.jpg')}}" class="w-8 h-8 rounded-full mr-2">
                            <span class="text-md text-gray-400">
                                {{Auth::user()->name}}
                            </span>
                        </div>
                    </x-slot>
                    <x-slot name="content">
                        <div class="">
                            <x-custom.nav-link
                            :href="route('profile', Auth::id())"
                            iconName="chevron-forward-outline"
                            :route="request()->routeIs('profile')">
                                Profile
                            </x-custom.nav-link>
                            <x-custom.nav-link
                            :href="route('profile', Auth::id())"
                            iconName="chevron-forward-outline"
                            :route="request()->routeIs('profile')">
                                Logout
                            </x-custom.nav-link>
                        </div>
                    </x-slot>
                </x-custom.dropdown>
            </li>

            <li>
                <x-custom.nav-link
                :href="route('dashboard')"
                iconName="ti-view-grid"
                :route="request()->routeIs('dashboar')">
                    Dashboard
                </x-custom.nav-link>
            </li>

            <li>
                <x-custom.nav-link
                :href="route('partners.index')"
                iconName="ti-id-badge"
                :route="request()->routeIs('partners.*')">
                    Partneres
                </x-custom.nav-link>
            </li>

            <li>
                <x-custom.nav-link
                :href="route('categories.index')"
                iconName="ti-layout-media-overlay-alt-2"
                :route="request()->routeIs('categories.*')">
                    Categories
                </x-custom.nav-link>
            </li>

            <li>
                <x-custom.nav-link
                :href="route('products.index')"
                iconName="ti-shopping-cart"
                :route="request()->routeIs('products.*')">
                    Products
                </x-custom.nav-link>
            </li>

            <li>
                <x-custom.nav-link
                :href="route('articles.create')"
                iconName="ti-gallery"
                :route="request()->routeIs('articles.create')">
                    Gallery
                </x-custom.nav-link>
            </li>

            <li>
                <x-custom.dropdown :route="request()->routeIs('articles.create')">>
                    <x-slot name="trigger">
                        <x-custom.nav-link
                            href="#"
                            iconName="ti-layout-media-right-alt"
                            :route="request()->routeIs('articles.create')">
                                Acticles
                        </x-custom.nav-link>
                    </x-slot>
                    <x-slot name="content">
                        <div class="">
                            <x-custom.nav-link
                                :href="route('articles.create')"
                                iconName="chevron-forward-outline"
                                :route="request()->routeIs('articles.create')">
                                    Créer une article
                            </x-custom.nav-link>
                            <x-custom.nav-link
                                :href="route('articles.index')"
                                iconName="chevron-forward-outline"
                                :route="request()->routeIs('articles.index')">
                                    Liste des article
                            </x-custom.nav-link>
                        </div>
                    </x-slot>
                </x-custom.dropdown>
            </li>


        </ul>
    </div>
</div>

