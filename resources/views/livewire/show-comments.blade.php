<div>
    <div class="space-y-1">
        @foreach($this->comments as $comment)
            <p>{{ $comment->body }}</p>
        @endforeach
    </div>
</div>
