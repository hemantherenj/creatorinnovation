<div class="card bg-base-100 shadow-xl">
    <figure>
        <img src={{ $img }} alt={{ $title }} />
    </figure>
    <div class="card-body">
        <h2 class="card-title">{{ $title }}</h2>
        <p>{{ $desc }}</p>
        <div class="card-actions justify-center">
            <button class="btn bg-primary hover:bg-primary hover:text-white">Apply Now</button>
        </div>
    </div>
</div>
