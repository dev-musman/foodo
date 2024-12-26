<div class="table_actions">
        <a href="{{ route('admin.'.$route.'.edit', $item->id) }}" type="button" class="btn btn-secondary btn-sm">Edit</a>
        @if($route != 'menu')
            <a href="{{ route('admin.'.$route.'.destroy', $item->id) }}" class="btn btn-danger btn-sm removeItem">Delete</a>
        @endif
</div>
