<div class="saved_card">
    <img src="{{ $post->image_path ? asset($post->image_path) : asset('images/picture.jpg') }}" alt="image">
    <h3>{{ Str::limit($post->title, 15, '...') }}</h3>
    <p class="name"><i class="fa-regular fa-calendar-plus"></i> Created on:</p>
    <p>{{ $post->created_at->format('d.m.Y H:i:s') }}</p>
    @if($post->created_at != $post->updated_at)
        <p class="name"><i class="fa-regular fa-calendar-check"></i> Updated on:</p>
        <p>{{ $post->updated_at->format('d.m.Y H:i:s') }}</p>
    @endif
    <div class="saved_post_actions">
        <a href="{{ route('posts-saved.edit', $post->id) }}">Continue <i class="fa-solid fa-angles-right"></i></a>
        <form action="{{ route('posts-saved.destroy', $post->id) }}" method="POST" id="saved_post_{{ $post->id }}">
            @method('DELETE')
            @csrf
        </form>
        <button class="delete" onClick="confirmDelete({{ $post->id }}, 'saved_post')">Delete <i class="fa-solid fa-trash"></i></button>
    </div>
</div>
