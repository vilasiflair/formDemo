@if (config('layout', 'extras/user/dropdown/style') == 'light')
    {{-- Header --}}
    <div class="p-8 d-flex align-items-center rounded-top">
        {{-- Symbol --}}
        <div class="flex-shrink-0 mr-3 symbol symbol-md bg-light-primary">
            <img src="{{ asset('media/users/300_21.jpg') }}" alt=""/>
        </div>

        {{-- Text --}}
        <div class="m-0 mr-3 text-dark flex-grow-1 font-size-h5">{{ Auth::user()->name }}</div>
        <span class="label label-light-success label-lg font-weight-bold label-inline">3 messages</span>
    </div>
    <div class="separator separator-solid"></div>
@else
    {{-- Header --}}
    
@endif

{{-- Nav --}}
<div class="pt-5 navi navi-spacer-x-0">
    {{-- Item --}}
    <a href="#" class="px-8 navi-item">
        <div class="navi-link">
            <div class="mr-2 navi-icon">
                <i class="flaticon2-calendar-3 text-success"></i>
            </div>
            <div class="navi-text">
                <div class="font-weight-bold">
                    My Profile
                </div>
            </div>
        </div>
    </a>

    {{-- Item --}}
    <a href="#" class="px-8 navi-item">
        <div class="navi-link">
            <div class="mr-2 navi-icon">
                <i class="flaticon2-mail text-warning"></i>
            </div>
            <div class="navi-text">
                <div class="font-weight-bold">
                    Change Password
                </div>
            </div>
        </div>
    </a>

    {{-- Footer --}}
    <div class="mt-3 navi-separator"></div>
    <div class="px-8 py-5 navi-footer">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{ route('logout') }}"  onclick="event.preventDefault();
            this.closest('form').submit();" class="btn btn-light-primary font-weight-bold">Sign Out</a>
        </form>
    </div>
</div>
