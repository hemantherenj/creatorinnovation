<div>
    {{-- @livewire('partials.banner') --}}
    {{-- <x-common.banner /> --}}
    {{-- @livewire('components.banner') --}}
    {{-- <livewire:components.banner /> --}}

    <div class="container m-auto pt-10">
        <div class="grid md:grid-cols-2 gap-5 items-center">
            <div>
                <img src={{ asset('images/course1.jpg') }} alt="">
            </div>
            <div class="flex flex-col gap-5">
                <h4 class="text-primary">ABOUT BBC</h4>
                <h1 class="text-secondary">Online Learning.</h1>
                <p>We are delighted to introduce you to Bethesda Bible College, proudly managed by the Logos Faith
                    Foundation and accredited by the Nation Accreditation Theological Association. At Bethesda Bible
                    College, we are committed to providing high-quality theological education to those with a burning
                    desire to serve the Most High God.</p>

                <x-common.mainBtn title="Read more" link="df" />
            </div>
        </div>
    </div>

    <div class="container pt-10">
        <h1 class="text-center">Why to choose Bethesda Bible College</h1>
        <p>Bethesda Bible College's accreditation with the National Accreditation Theological Association (NATA) can be
            an appealing factor for students seeking theological education. Here are some key benefits of this
            accreditation and the college’s online studies:</p>
        {{-- <div class='grid grid-cols-1 md:grid-cols-3 gap-5 py-5'>
            <x-common.cardSimple title="Recognized Accreditation:" desc="NATA accreditation ensures that the programs meet the standards set for theological education, which can add credibility to your degree and may be recognized by churches, ministries, and theological organizations." />

        </div> --}}
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div>
                <div>
                    <x-common.accordion title="Recognized Accreditation:"
                        desc="NATA accreditation ensures that the programs meet the standards set for theological education, which can add credibility to your degree and may be recognized by churches, ministries, and theological organizations."  check="checked" />
                </div>
                <div>
                    <x-common.accordion title="Flexible Online Learning:"
                        desc="Online studies offer flexibility, allowing you to pursue your degree from anywhere while balancing other commitments like work, ministry, or family responsibilities. You can study at your own pace, making it ideal for individuals who need a more personalized learning schedule." check="" />
                </div>
                <div>
                    <x-common.accordion title="Access to Resources"
                        desc="Many online programs provide students with access to digital libraries, theological resources, and virtual discussion forums that can help deepen their understanding of biblical studies and ministry." check="" />
                </div>
                <div>
                    <x-common.accordion title="Ministry Preparation:"
                        desc="The online courses are likely designed to equip you for ministry roles, whether in a church setting, missionary work, or other Christian leadership roles." check="" />
                </div>
                <div>
                    <x-common.accordion title="Cost-Effective:"
                        desc="Online programs are often more affordable compared to traditional on-campus programs, potentially reducing costs related to travel, housing, and materials. By offering online courses with NATA accreditation, Bethesda Bible College provides a flexible and credible option for individuals looking to pursue theological education and ministry training." check="" />
                </div>
            </div>


            <div>
                <img src={{ asset('images/course1.jpg') }} alt="">
            </div>

        </div>
    </div>

    <div class="container py-5">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            <x-common.card title="Certificate of Theology (C.Th)"
                desc="1-year Certificate Level Program that provides foundational theological education."
                img="{{ asset('images/course1.jpg') }}" />
            <x-common.card title="Diploma of Theology (D.Th)"
                desc="2-year Diploma Level Program that offers in-depth theological studies."
                img="{{ asset('images/course1.jpg') }}" />
            <x-common.card title="Bachelor of Theology (B.Th)"
                desc="3-year Degree Program that provides advanced theological education and training."
                img="{{ asset('images/course1.jpg') }}" />
        </div>
    </div>

    <div class="bg-gray-100 py-10">
        <div class="container py-5">
            <div class="grid grid-cols-2 md:grid-cols-3 gap-5">
                <x-common.facultyCard name="Rev. Dr. Daniel Kamaraj" designation="Executive Director"
                    img="{{ asset('images/NoImage.jpg') }}" />
                <x-common.facultyCard name="Rev. Victor James" designation="Director"
                    img="{{ asset('images/NoImage.jpg') }}" />
                <x-common.facultyCard name="Rev. Dr. Greenidge Henry" designation="Managing Director"
                    img="{{ asset('images/NoImage.jpg') }}" />
                <x-common.facultyCard name="Pastor Herman Herenj" designation="Course Director"
                    img="{{ asset('images/NoImage.jpg') }}" />
                <x-common.facultyCard name="Pastor Jack Dinesh" designation="Head of the Department"
                    img="{{ asset('images/NoImage.jpg') }}" />
            </div>
        </div>
    </div>




</div>
