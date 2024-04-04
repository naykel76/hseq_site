<x-gt-app-layout layout="{{ config('naykel.template') }}" class="py-5-3-2-2">

    <section>
        <img src="{{ asset('images/hero.jpg') }}" alt="">
    </section>

    <section class="py-3">
        <div class="container">
            <h2 class="tac txt-3">WORKING TOGETHER</h2>
            <div class="grid-3 cols-3">
                <x-box image="refining-factory.jpg" alt="refining factory">
                    <x-slot name="title">Mission</x-slot>
                    <p>As a professional Health and safety consultancy company, we strive to provide exceptional service
                        and deliver outstanding results. to Our aim is to assist businesses to achieve compliance
                        through easy-to-use and easy-to-understand Safe Systems of Work.</p>
                </x-box>
                <x-box image="underground-mine.jpg" alt="underground mine">
                    <x-slot name="title">Approach</x-slot>
                    <p>At HSEQ Compliance Solutions, we understand projects can be challenging. That's why we are here
                        to lighten the load. We are an honest and positive team of professionals whose first priority is
                        always the interests of our clients. We provide capability, scalability and clear pathways to
                        complete projects.</p>
                </x-box>
                <x-box image="jade-stephens.jpg" alt="jade stephens">
                    <x-slot name="title">About</x-slot>
                    <p> We are a specialised and accredited Safe Systems of Work company with over 18 years of
                        experience in developing, implementing and auditing. We specialise: </p>
                    <ul class="tal">
                        <li>Underground mining</li>
                        <li>Surface mining</li>
                        <li>Civil construction</li>
                        <li>Building construction services and,</li>
                        <li>New and existing projects. </li>
                    </ul>
                </x-box>
            </div>
        </div>
    </section>

    <section class="py-3 bg-gray-100">
        <div class="container">
            <h2 class="tac txt-3">OUR SERVICES</h2>
            <div class="grid-3 cols-3">
                <x-box image="consulting-services.jpg" alt="consulting services">
                    <x-slot name="title">CONSULTING <br> SERVICES</x-slot>
                    <ul class="tal">
                        <li>Safety Management system development and implementation</li>
                        <li>Facilitation of risk assessments (BBRA, WRAC, HAZID, HAZOP)</li>
                        <li>Development of Critical control Risk Management Systems</li>
                        <li>Bow Tie Development</li>
                        <li>Development of ISO systems</li>
                        <li>Development of Federal Safety Systems</li>
                        <li>Contractor Management Services</li>
                    </ul>
                </x-box>
                <x-box image="exemplar-global.png" alt="exemplar global">
                    <x-slot name="title">ASSURANCE <br> SERVICES</x-slot>
                    <ul class="tal">
                        <li>Development, implementation and execution of Audit and inspection criteria</li>
                        <li>Legislation bridging assessments and auditing</li>
                        <li>Bridging assessments</li>
                        <li>Data Analytics</li>
                        <li>Underground and surface Mining systems</li>
                        <li>Heavy Vehicle National Law</li>
                    </ul>
                </x-box>
                <x-box image="fsc-approved.png" alt="fsc approved logo">
                    <x-slot name="title">SPECIALTY <br> SERVICES</x-slot>
                    <ul class="tal">
                        <li>Development of OFSC systems</li>
                        <li>Alignment of OFSC criteria</li>
                        <li>Alignment to ISO criteria: 9001, 14001, 45001, IGRMS</li>
                        <li>Review, development and implementation of Safe Systems of Work</li>
                        <li>Neurolinguistic Programming Training</li>
                        <li>Accredited DISC Consulting Service - psychometric testing</li>
                        <li>ICAM investigations</li>
                    </ul>
                </x-box>
            </div>
        </div>
    </section>

</x-gt-app-layout>