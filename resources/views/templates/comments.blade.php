@foreach ($comments as $comment)
    <div class="card card-body m-2">
        {{ $comment->comment }}
        <p>
            <span class="badge badge-info">at {{ $comment->created_at->diffForHumans() }}</span>
        </p>
    </div>
@endforeach

@if (!count($comments))
    <div class="bg-warning p-4">
        No Comments found...
    </div>
@endif
