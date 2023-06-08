<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
</div>
<div>

    <div class="container container-tight py-4">
        <div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <div>
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
        </div>
        <div class="text-center mb-4">
            <a href="{{ route('dashboard') }}" class="navbar-brand navbar-brand-autodark"><img
                    src="{{ asset('assets/static/logo.svg') }}" height="36" alt=""></a>
        </div>
        <div class="card card-md">
            <div class="card-body">
                <h2 class="h2 text-center mb-4">Sign up your account</h2>
                <form wire:submit.prevent="createAccount()" autocomplete="off" novalidate>
                    <div class="mb-3">
                        <label class="form-label required">Name</label>
                        <input type="email" wire:model="name" class="form-control" placeholder="your name"
                            autocomplete="off">
                        @error('email')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label required">Email address</label>
                        <input type="email" wire:model="email" class="form-control" placeholder="your@email.com"
                            autocomplete="off">
                        @error('email')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label class="form-label required">
                            Password
                        </label>
                        <div class="input-group input-group-flat">
                            <input type="password" wire:model="password" class="form-control"
                                placeholder="Your password" autocomplete="off">
                        </div>
                        @error('password')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Sign Up</button>
                    </div>
                    <div class="form-footer">
                        <a href="{{ route('login') }}">back to Sign in</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
