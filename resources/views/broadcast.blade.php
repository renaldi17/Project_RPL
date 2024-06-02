
@if ($message)
    @if (auth()->user()->id == $message->created_by)
        <div id="chat-{{ $message->id }}" class="discussion-bubble message">
            <div class="bubble-content">
                <p class="bubble-text text-white">{{ $message->message }}</p>
                <p class="bubble-info text-white">
                    {{ $message->created_by_name }} - {{$message->created_at}}
                </p>
            </div>
        </div>
    @else 

        <div id="chat-{{ $message->id }}" class="discussion-bubble-master message">
            <div class="bubble-content">
                <p class="bubble-text text-white">{{ $message->message }}</p>
                <p class="bubble-info text-white">
                    {{ $message->created_by_name }} - {{$message->created_at}}
                </p>
            </div>
        </div>

    @endif
@endif
