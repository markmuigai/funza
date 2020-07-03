{{-- <div id="notifications" class="list-group">
    @forelse($notifications as $notification)
        @php
            $id = $notification->id;
            $item = json_decode(json_encode($notification->data));
        @endphp
        @if($item->message)
            <a 
                href="{{ route('admin.notifications.redirect', [ 'notification' => $notification->id ]) }}" 
                class="{{ $linkClasses ?? '' }} {{ $notification->unread() ? 'unread' : '' }}">
                <div> {{ $item->message }} </div>
                <small class="font-weight-bold">{{ $notification->created_at->diffForHumans() }}</small>
            </a>
        @endif
        @isset($number)
            @break($loop->iteration == $number)
        @endisset
    @empty
        <div class="dropdown-item py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-1">No notifications are available</h6>
        </div>
    @endforelse
</div> --}}