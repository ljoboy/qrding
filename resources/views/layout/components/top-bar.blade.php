<!-- BEGIN: Top Bar -->
<div class="top-bar">
    <!-- BEGIN: Breadcrumb -->
    <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Application</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>
    <!-- END: Breadcrumb -->
    <!-- BEGIN: Account Menu -->
    <div class="intro-x dropdown w-8 h-8">
        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button" aria-expanded="false" data-tw-toggle="dropdown">
            <img alt="profile" src="{{ asset('build/assets/images/profile-15.jpg') }}">
        </div>
        <div class="dropdown-menu w-56">
            <ul class="dropdown-content bg-primary text-white">
                <li class="p-2">
                    <div class="font-medium">{{ $loggedin_user->name }}</div>
                    <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">{{ $loggedin_user->email }}</div>
                </li>
                <li><hr class="dropdown-divider border-white/[0.08]"></li>
                <li>
                    <a href="{{ route('profile.update') }}" class="dropdown-item hover:bg-white/5">
                        <i data-lucide="user" class="w-4 h-4 mr-2"></i> Profile
                    </a>
                </li>
                <li>
                    <a href="" class="dropdown-item hover:bg-white/5">
                        <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Add Account
                    </a>
                </li>
                <li>
                    <a href="{{ route('password.request') }}" class="dropdown-item hover:bg-white/5">
                        <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Reset Password
                    </a>
                </li>
                <li><hr class="dropdown-divider border-white/[0.08]"></li>
                <li>
                    <a href="{{ route('logout') }}" class="dropdown-item hover:bg-white/5">
                        <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Account Menu -->
</div>
<!-- END: Top Bar -->
