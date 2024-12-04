<div>
    <x-common.breadCrumb title="Application" />

    <div class='container'>
        <ul class="steps">
            <li class="step step-primary">@if ($currentStep === 1) Personal Information</li>
            <li class="step">@elseif($currentStep === 2) Family Information</li>
            <li class="step">@elseif($currentStep === 3) Marit @endif</li>
            <li class="step">Receive Product</li>
        </ul>

        <div class="offset-3 col-6">
            <h6 class="d-flex justify-content-center"> step {{ $currentStep }} out of {{ $total_steps }}</h6>
            @if ($currentStep === 1)
                <h4 class="d-flex justify-content-center">Personal Details</h4>
                <label class="input input-bordered flex items-center gap-2">
                    First Name
                    <input type="text" wire:model="first_name" class="grow" placeholder="Daisy" />
                    @error('first_name')
                        <span class="text-red-800">{{ $message }}</span>
                    @enderror
                </label>
                <label class="input input-bordered flex items-center gap-2">
                    Last Name
                    <input type="text" wire:model="last_name" class="grow" placeholder="Daisy" />
                    @error('last_name')
                        <span class="text-red-800">{{ $message }}</span>
                    @enderror
                </label>
                <label class="input input-bordered flex items-center gap-2">
                    Gender
                    <span class="label-text">Male</span>
                    <input type="radio" name="gender" class="radio radio-primary" checked="checked" />
                    <span class="label-text">Female</span>
                    <input type="radio" name="gender" class="radio radio-primary" />
                </label>
                <label class="input input-bordered flex items-center gap-2">
                    Date of Birth
                    <input type="date" class="grow" placeholder="Daisy" />
                </label>
                <label class="input input-bordered flex items-center gap-2">
                    Are you married ?
                    <span class="label-text">Yes</span>
                    <input type="radio" name="married" class="radio radio-primary" checked="checked" />
                    <span class="label-text">No</span>
                    <input type="radio" name="married" class="radio radio-primary" />
                </label>

                <select class="select select-bordered w-full max-w-xs">
                    <option disabled selected>Who shot first?</option>
                    <option>Han Solo</option>
                    <option>Greedo</option>
                </select>

                <div class="mb-3">
                    <label class="form-label">Middle Name</label>
                    <input wire:model="middle_name" type="text" class="form-control">
                    @error('middle_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <input wire:model="last_name" type="text" class="form-control">
                    @error('last_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            @elseif($currentStep === 2)
                <h4 class="d-flex justify-content-center">Contact Details</h4>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input wire:model="email" type="email" class="form-control">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input wire:model="phone" type="text" class="form-control">
                    @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            @elseif($currentStep === 3)
                <h4 class="d-flex justify-content-center">Status/Gender</h4>
                <div class="mb-3">
                    <label class="form-label">Marital Status</label>
                    <select wire:model="status" class="form-control">
                        <option value="" selectected>select option</option>
                        <option value="married" selectected>Married</option>
                        <option value="single" selectected>Single</option>
                    </select>
                    @error('status')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="form-check form-check-inline">
                        <label class="form-label">Male</label>
                        <input wire:model="gender" class="form-check-input" value="male" type="radio">

                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-label">Female</label>
                        <input wire:model="gender" class="form-check-input" value="female" type="radio">

                    </div>
                    @error('gender')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            @endif
            @if ($currentStep > 1)
                <button wire:click="decrementSteps" class="btn btn-primary">Previous</button>
            @endif
            @if ($currentStep < $total_steps)
                <button wire:click="incrementSteps" class="btn btn-primary">Next</button>
            @endif
            @if ($currentStep === $total_steps)
                <button wire:click="submit" class="btn btn-success">Submit</button>
            @endif
        </div>
    </div>
</div>
