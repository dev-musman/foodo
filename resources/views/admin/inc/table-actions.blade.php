@if ($item->deleted_at == null)
<div class="table_actions">
    <a href="{{ route('admin.' . $route . '.edit', $item->id) }}" type="button" class="btn btn-secondary btn-sm">Edit</a>
    <a href="{{ route('admin.' . $route . '.destroy', $item->id) }}" class="btn btn-danger btn-sm removeItem">Delete</a>
</div>
@else
Soft Delete
@endif
