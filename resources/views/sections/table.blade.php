<div class="col-md-4 col-sm-4">
    @if (count($checked) >= 1)
        <a href="#" class="btn btn-outline btn-sm" wire:click.prevent="confirmBulkDelete">
        SELECTED ROW IS {{ count($checked) }}
        </a>
    @endif
</div>
<body style="background-color:rgb(201, 207, 213)">
<table class="table text-left" width="100%">
    <thead>
        <tr>
            <th><input class="h-5 w-5" type="checkbox" wire:model="selectAll"></th>
            <th>Section Name</th>
            <th>Status</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($sections as $section)
            <tr class="">
                <td><input value="{{ $section->id }}" wire:model="checked" class="h-5 w-5" type="checkbox"></td>
                <td>{{ $section->section_name }}</td>
                <td> 
                    <label for="" class="badge {{ $section->status == 1 ? 'badge-success' : 'badge-danger' }} }}" > 
                        {{ $section->status == 1 ? 'Enabled' : 'Disabled'}}
                    </label>
                </td>
                <td>
                    @if ($section->image_url)
                        <img src="{{ $section->image_url }}" alt="Section Image" class="img-thumbnail">
                    @else
                        No image available
                    @endif
                </td>
                <td>
                    <div class="btn-group">
                        <a href="#editSection" data-toggle="modal" wire:click.prevent="editSection({{ $section->id }})"
                            class="btn btn-info rounded-circle"><i class="fa fa-edit"></i></a>
                        @if (count($checked) < 2)
                            <a href="#" wire:click.prevent="ConfirmDelete({{ $section->id }}, '{{ $section->section_name }}')"
                             class="btn btn-danger rounded-circle"><i class="fa fa-trash"></i></a>
                        @endif
                    </div>
                </td>
            </tr>
            @include('sections.edit')
        @empty
        @endforelse

    </tbody>
</table>
