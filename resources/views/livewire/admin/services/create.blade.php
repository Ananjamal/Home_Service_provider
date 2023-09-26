<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="modal-body">
        <!-- Your form elements for adding a service go here -->

        <form>

            <!-- Example input field, you can add more -->
            <div class="form-group">
                <label for="serviceName" class="text-dark">Service Name</label>
                <input type="text" wire:model="serviceName" class="form-control border text-dark " id="serviceName"
                    placeholder="Enter service name">
                @error('serviceName')
                    <small class="text-danger"> {{ $message }} </small>
                @enderror
            </div>
            <div class="form-group">
                <label for="Description" class="text-dark">Service Description</label>
                <input type="text" wire:model="description" class="form-control border text-dark " id="serviceName"
                    placeholder="Enter service description">
                @error('description')
                    <small class="text-danger"> {{ $message }} </small>
                @enderror
            </div>
            <div class="form-group">
                <label for="image" class="text-dark">Service Image</label>
                <input type="file" wire:model="image" class="form-control border text-dark " id="serviceName"
                    placeholder="Enter service description">
                @error('image')
                    <small class="text-danger"> {{ $message }} </small>
                @enderror
            </div>

        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" wire:click ='Store'>Save Service</button>
    </div>
    <script>
        document.addEventListener('livewire:load', function () {
            Livewire.on('refreshPage', function () {
                // Refresh the page
                window.location.reload();
            });
        });
    </script>

</div>
