<div>
    {{-- create a livewire form for user donation --}}
    <form wire:submit.prevent="makeDonation">
        <div class="mb-3">
            <label for="amount" class="form-label">Amount</label>
            <input type="number" class="form-control" id="amount" wire:model="amount" required>
        </div>
        <button type="submit" class="btn btn-primary">Donate</button>
    </form>
</div>
@script
    <script>
        document.addEventListener('livewire:load', function() {
            Livewire.on('donationSuccess', function(message) {
                alert(message);
            });
        });
    </script>
@endscript
