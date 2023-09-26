<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="card">
        <div class="card-body">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <h5 class="card-title">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-people-fill" viewBox="0 0 20 20">
                    <path
                        d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                </svg>
                Service Providers Table
            </h5>
            <button class="btn btn-success float-end" style="float: right" data-toggle="modal"
                data-target="#addServiceModal">Add Service Provider</button>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center align-middle">provider #</th>
                            <th scope="col"class="text-center align-middle">Name</th>
                            <th scope="col"class="text-center align-middle">Email</th>
                            <th scope="col"class="text-center align-middle">Phone</th>
                            <th scope="col"class="text-center align-middle">Service</th>
                            <th scope="col"class="text-center align-middle">Actions</th>
                        </tr>
                    </thead>
                    {{-- <tbody>
                        @foreach ($providers as $item)
                            <tr>
                                <th scope="row" class="text-center align-middle">{{ $item->id }}</th>
                                <td class="text-center align-middle">{{ $item->name }}</td>
                                <td class="text-center align-middle">{{ $item->email }}</td>
                                <td class="text-center align-middle">
                                    <img src="{{ asset('storage/' . $item->image) }}" height="70" width="70"
                                        alt="image not found">
                                </td>
                                <td class="text-center align-middle">{{ $item->phone }}</td>
                                <td class="text-center align-middle">{{ $item->service->service_name }}</td>

                                <td class="text-center align-middle">
                                    <button data-toggle="modal" data-target="#updateServiceModal"
                                        wire:click="edit_service({{ $item->id }})" class="btn btn-info">
                                        Edit
                                    </button>
                                    <button data-toggle="modal" data-target="#DeleteServiceModal"
                                        wire:click="delete_service({{ $item->id }})" class="btn btn-danger">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody> --}}
                </table>
                <!-- Modal -->
                <div wire:ignore.self class="modal fade" id="addServiceModal" tabindex="-1" role="dialog"
                    aria-labelledby="addServiceModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-success text-white">
                                <h5 class="modal-title" id="addServiceModalLabel">Add Service</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>

                                </button>
                            </div>
                            @livewire('admin.services.create')

                        </div>
                    </div>
                </div>
                <div wire:ignore.self class="modal fade" id="updateServiceModal" tabindex="-1" role="dialog"
                    aria-labelledby="updateServiceModallabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-success text-white">
                                <h5 class="modal-title" id="updateServiceModallabel">Edit Service</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>

                                </button>
                            </div>
                            {{-- @if ($service_id)
                                @livewire('admin.services.edit', [$service_id])
                            @endif --}}

                        </div>
                    </div>
                </div>
                <div wire:ignore.self class="modal fade" id="DeleteServiceModal" tabindex="-1" role="dialog"
                    aria-labelledby="DeleteServiceModal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-success text-white">
                                <h5 class="modal-title" id="DeleteServiceModal">Delete Service</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>

                                </button>
                            </div>
                            {{-- @if ($service_id)
                                @livewire('admin.services.delete', [$service_id])
                            @endif --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
