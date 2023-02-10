<div {{ $attributes->class(['deznav']) }}>
    <div class="deznav-scroll">
       <livewire:admin-profile />
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            <li class="{{ Route::current()->getName() === 'admin_dashboard' ? 'mm-active' :'' }}">
                <a class="ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-144-layout"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>

            <li class="{{ Route::current()->getName() === 'admin_transactions' ? 'mm-active' :'' }}">
                <a class="ai-icon text-gray bg-gray" style="background: #a49f9f7a;"  aria-expanded="false">
                    <i class="flaticon-092-money"></i>
                    <span class="nav-text">Transactions</span>
                </a>
            </li>

            <li class="{{ Route::current()->getName() === 'admin_users' ? 'mm-active' :'' }}">
                <a class="ai-icon" style="background: #a49f9f7a;"  aria-expanded="false">
                    <i class="flaticon-028-user-1"></i>
                    <span class="nav-text">Users</span>
                </a>
            </li>


        </ul>
        <div class="copyright">
            <p><strong>Treblecelf Music & Arts Academy Admin Dashboard</strong> © 2023 All Rights Reserved</p>
            <p class="fs-12">Made with <span class="flaticon-053-heart"></span> by Allan T Muzeya</p>
        </div>
    </div>
</div>
