<div class="collapse collapse-arrow bg-base-200">
    <input type="radio" name="my-accordion-3" checked="{{ $check ?? '' }}"   />
    <div class="collapse-title text-xl font-medium">{{ $title }}</div>
    <div class="collapse-content">
        <p>{{ $desc }}</p>
    </div>
</div>