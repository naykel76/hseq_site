<x-gt-app-layout layout="{{ config('naykel.template') }}" class="zebra">
    <x-slot name="top">
        <section class="hero fp-hero">
            <div class="container-md tac py-5 md:py-3 space-y">
                <div class="title">Safer Workplaces, Streamlined Processes</div>
                <div class="subtitle">Ensuring Your Safety Meeting Obligations for a Safer Work Environment</div>
                <a href="/contact" class="btn lg white outline">Find Out More</a>
            </div>
        </section>
    </x-slot>
    {{-- <section class="py-5 md:py-3">
        <div class="container">
            <div class="grid cols-3">
                <div class="bx dark flex ha-c va-c">
                    <div class="bx-title txt-2">CORE VALUES</div>
                </div>
                <div class="bx">
                    <div class="bx-title">Health and Safety</div>
                    <div class="bx-content">We show concern and actively care about our clients.</div>
                </div>
                <div class="bx">
                    <div class="bx-title">Integrity</div>
                    <div class="bx-content">We are open and honest in what we say and what we do.</div>
                </div>
                <div class="bx">
                    <div class="bx-title">Quality</div>
                    <div class="bx-content">What we do, we do well. We are passionate about achieving success for our
                        customers. We seek proactive solutions and focus on continuous improvement.</div>
                </div>
                <div class="bx">
                    <div class="bx-title">Collaboration</div>
                    <div class="bx-content">We leverage of each other to work as a team in a cooperative, supportive,
                        and
                        friendly environment.</div>
                </div>
                <div class="bx">
                    <div class="bx-title">Loyalty</div>
                    <div class="bx-content">We develop long term relationships by earning respect and trust. We are
                        dependable, take ownership and work for the company as our own.</div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="py-3 lg:py-5">
        <div class="container">
            <h2 class="tac txt-2.5">WORKING TOGETHER</h2>
            <div class="grid-3 lg:cols-3">
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
                <x-box image="servicing.jpg" alt="servicing">
                    <x-slot name="title">Servicing</x-slot>
                    <ul class="tal">
                        <li>Underground mining</li>
                        <li>Surface mining</li>
                        <li>Civil construction</li>
                        <li>Building construction services</li>
                        <li>New and existing projects</li>
                    </ul>
                </x-box>
            </div>
        </div>
    </section>
    <section class="py-5 md:py-3 bg-gray-1000">
        <div class="container">
            <h2 id="services" class="tac txt-2.5">OUR SERVICES</h2>
            <div class="grid-3 lg:cols-3">
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
                <x-box image="exemplar.png" alt="exemplar global">
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
    <section class="py-5 md:py-3">
        <div class="container">
            {{-- fix gap --}}
            <div class="flex-col md:flex-row gap-2 md:gap-5">
                <div class="fs0">
                    <img class="wh-20 rounded-1" src="{{ asset('images/jade-stephens.jpg') }}" alt="Jade Stephens">
                </div>
                <div>
                    <h2 id="about" class="txt-2.5">ABOUT US</h2>
                    <p>We are a dedicated HSEQ Compliance company which provides consulting and contracting services to
                        the Civil and Mining industries across Australia.</p>
                    <p>The owner Jade Stephens, has an extensive behavioural management background trained in NLP and
                        CBT. Jade is also very experienced within statistical analysis and successfully developing and
                        implementing ISO and Federal Safety systems.</p>
                    <p>We also provide investigation services including Basic all the way through to formal ICAM
                        investigation reports.</p>
                    <p>Although our fingerprint services spread across several different industries, we strive for the
                        same goal everywhere we go: Keep it simple and to the point.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 md:py-3 bg-gray-1000">
        <div class="container">
            <h2 class="tac txt-2.5">WHAT OTHERS ARE SAYING</h2>
            <div class="grid lg:cols-3">
                <div class="bx">
                    <p>"HSEQ Compliance Solutions helped us streamline our processes and create a safer workplace. Their
                        team
                        was professional and knowledgeable, and we would recommend their services to anyone in the
                        mining and
                        construction industries."</p>
                </div>
                <div class="bx">
                    <p>"We've been working with HSEQ Compliance Solutions for several years now, and their expertise has
                        been
                        invaluable in ensuring our workplace health and safety standards are up to date and effective."
                    </p>
                </div>
                <div class="bx">
                    <p>"HSEQ Compliance Solutions has been an essential partner in helping us manage critical risks and
                        maintain
                        compliance with regulations. They are reliable and responsive, and we're grateful for their
                        support."
                    </p>
                </div>
            </div>
        </div>
    </section>
</x-gt-app-layout>
