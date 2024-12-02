@extends('layouts.app') <!-- Ensure this matches the layout file name -->

@section('content') <!-- Content section -->
<div>
    <!-- Items per page selection -->
    <div>
        <label for="perPage">Items per page:</label>
        <select wire:model="perPage" id="perPage">
            @foreach($options as $option)
            <option value="{{ $option }}">{{ $option }}</option>
            @endforeach
        </select>
    </div>
    <!-- Items list -->
    <div>
        @foreach($items as $item)
        <div>{{ $item->name }}</div>
        @endforeach
    </div>
    <!-- Pagination links -->
    {{ $items->links() }}
</div>
@endsection