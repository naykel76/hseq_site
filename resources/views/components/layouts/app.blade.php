<x-gt-app-layout layout="base" :$pageTitle>

    <div class="navbar dark">

        {{-- <div class="container"> --}}

        <div class="flex items-center justify-center">
            <a href="{{ url('/') }}"><img src="{{ config('naykel.logo.path') }}" alt="{{ config('app.name') }}"
                    height="{{ config('naykel.logo.height') }}" width="{{ config('naykel.logo.width') }}"></a>

            <span class="ml txt-2">HSEQ COMPLIANCE SOLUTIONS</span>
        </div>

        <div class="flex va-c to-md:hide mxy-0">
            <x-gt-menu class="gap-1" itemClass="txt-white" />
        </div>

        {{-- </div> --}}

        <div class="md:hide mxy-0">
            <x-gt-sidebar layout="burger-button-main" />
        </div>

    </div>

    @isset($top)
        {{ $top }}
    @endisset

    @includeFirst(['components.layouts.partials.main', 'gotime::components.layouts.partials.main'])

    @isset($bottom)
        {{ $bottom }}
    @endisset

    <footer class="nk-footer">
        <div class="container py-3">
            <div class="flex space-between">
                <p>Copyright © <?php echo date('Y'); ?> HSEQ Compliance Solutions - All Rights Reserved.</p>
                <p>Design and Hosting by <a class="txt-muted fw6" href="https://naykel.com.au"
                        target="_blank">NAYKEL</a></p>
            </div>
        </div>
    </footer>
    {{-- <footer class="nk-footer">
        <div class="container py-2">
            <div class="tac">
                <p>Copyright © <?php echo date('Y'); ?> HSEQ Compliance Solutions - All Rights Reserved.</p>
                <small>Design and Hosting by <a class="txt-muted fw6" href="https://naykel.com.au"
                        target="_blank">NAYKEL</a></small>
            </div>
        </div>
    </footer> --}}

</x-gt-app-layout>
