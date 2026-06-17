@extends('layouts.app')

@section('content')
<!-- Service Detail Hero Section -->
<section class="bg-gradient-to-r from-navy to-navy-dark py-20 md:py-32 text-white relative">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <h1 class="text-5xl md:text-6xl font-bold mb-4">Raw Material Assessment</h1>
        <p class="text-xl md:text-2xl text-gray-300">Catch quality issues before they become costly problems</p>
    </div>
</section>

<!-- Service Details Section -->
<section class="py-20 md:py-32 bg-bg-dark text-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <h2 class="text-3xl font-bold text-highlight mt-8 mb-4">Overview</h2>
                <p class="text-gray-300 leading-relaxed mb-4">Our Raw Material Assessment service ensures that every component entering your production line meets the highest quality standards. By verifying materials before manufacturing begins, we prevent defects from cascading through production, saving you money and protecting your reputation.</p>

                <h2 class="text-3xl font-bold text-highlight mt-8 mb-4">What We Do</h2>
                <ul class="space-y-3 text-gray-300 mt-6">
                    <li class="flex items-start gap-3"><span>✓</span> <span><strong>Comprehensive Material Testing</strong> - Chemical composition, tensile strength, tolerance verification</span></li>
                    <li class="flex items-start gap-3"><span>✓</span> <span><strong>Component Inspection</strong> - Visual defects, dimensional accuracy, surface quality</span></li>
                    <li class="flex items-start gap-3"><span>✓</span> <span><strong>Certification Verification</strong> - COC (Certificate of Conformance) validation</span></li>
                    <li class="flex items-start gap-3"><span>✓</span> <span><strong>Documentation</strong> - Complete inspection reports with photos and data</span></li>
                    <li class="flex items-start gap-3"><span>✓</span> <span><strong>Real-time Updates</strong> - Immediate notification of rejections or issues</span></li>
                </ul>

                <h2 class="text-3xl font-bold text-highlight mt-8 mb-4">Key Benefits</h2>
                <p class="text-gray-300 leading-relaxed mb-4"><strong>Cost Savings:</strong> Prevent expensive rework by identifying issues early. Problems caught at material stage cost 1/10th the price of fixing them mid-production.</p>
                <p class="text-gray-300 leading-relaxed mb-4"><strong>Production Efficiency:</strong> Eliminate material-related delays and production stops. Keep your manufacturing schedule on track.</p>
                <p class="text-gray-300 leading-relaxed mb-4"><strong>Quality Assurance:</strong> Consistent product quality starts with consistent materials. Ensure every batch meets specifications.</p>
                <p class="text-gray-300 leading-relaxed mb-4"><strong>Supply Chain Control:</strong> Vendor performance tracking and material traceability for complete supply chain transparency.</p>

                <h2 class="text-3xl font-bold text-highlight mt-8 mb-4">Our Process</h2>
                <ol class="space-y-3 text-gray-300 mt-6 list-decimal list-inside">
                    <li><strong>Sampling</strong> - Strategic sampling according to AQL standards</li>
                    <li><strong>Testing</strong> - Rigorous testing using calibrated equipment</li>
                    <li><strong>Analysis</strong> - Expert evaluation against specifications</li>
                    <li><strong>Reporting</strong> - Detailed findings with clear pass/fail status</li>
                    <li><strong>Action</strong> - Immediate escalation of non-conformances</li>
                </ol>

                <h2 class="text-3xl font-bold text-highlight mt-8 mb-4">Why Choose Excellencial?</h2>
                <p class="text-gray-300 leading-relaxed mb-4">With over 15 years of experience in quality management, our team of certified inspectors brings expertise that protects your bottom line. We understand the critical nature of material quality and provide reliable, professional assessment services.</p>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="bg-navy-dark border-2 border-highlight rounded-lg p-6 mb-6">
                    <h3 class="text-highlight font-bold mb-4">Quick Facts</h3>
                    <ul class="space-y-0">
                        <li class="text-gray-300 py-2 border-b border-gray-700"><strong>Inspection Time:</strong> 1-2 days</li>
                        <li class="text-gray-300 py-2 border-b border-gray-700"><strong>Report Delivery:</strong> 24-48 hours</li>
                        <li class="text-gray-300 py-2 border-b border-gray-700"><strong>Standards:</strong> AQL 2.5, ISO 2859-1</li>
                        <li class="text-gray-300 py-2"><strong>Coverage:</strong> Full batch or sampling</li>
                    </ul>
                </div>

                <div class="bg-navy-dark border border-gray-700 rounded-lg p-6 mb-6">
                    <h3 class="text-highlight font-bold mb-4">Industries Served</h3>
                    <ul class="space-y-0">
                        <li class="text-gray-300 py-2">Electronics & Components</li>
                        <li class="text-gray-300 py-2">Textiles & Fabrics</li>
                        <li class="text-gray-300 py-2">Automotive Parts</li>
                        <li class="text-gray-300 py-2">Plastics & Polymers</li>
                        <li class="text-gray-300 py-2">Metals & Fasteners</li>
                        <li class="text-gray-300 py-2">Food Packaging</li>
                    </ul>
                </div>

                <div class="bg-gradient-to-r from-highlight/10 to-highlight/5 border-2 border-highlight rounded-lg p-6">
                    <h3 class="text-highlight font-bold mb-4">Ready to Get Started?</h3>
                    <p class="text-gray-300 mb-4">Protect your production with professional material assessment.</p>
                    <a href="/excellencial#contact" class="inline-block w-full px-8 py-3 bg-highlight text-navy-dark font-bold rounded hover:bg-transparent hover:text-highlight border-2 border-highlight transition-all duration-300 text-center">Request Service</a>
                </div>
            </div>
        </div>

        <!-- Back to Services -->
        <div class="py-6 border-t border-gray-700">
            <a href="/excellencial#services" class="text-highlight hover:text-white transition-colors">← Back to All Services</a>
        </div>
    </div>
</section>

<!-- Related Services -->
<section class="py-20 md:py-32 bg-navy-dark text-white">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-4xl font-bold text-highlight mb-4">Related Services</h2>
        <p class="text-lg text-gray-400 mb-12">Complement your material assessment with these services</p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-bg-dark border border-gray-700 rounded-lg p-8 hover:border-highlight transition-all">
                <h3 class="text-xl font-bold text-white mb-4">In-Process Quality Control</h3>
                <p class="text-gray-400 mb-6">Monitor quality throughout production to maintain consistent standards.</p>
                <a href="/services/in-process-quality-control" class="text-highlight hover:text-white transition-colors font-semibold">Learn More →</a>
            </div>
            
            <div class="bg-bg-dark border border-gray-700 rounded-lg p-8 hover:border-highlight transition-all">
                <h3 class="text-xl font-bold text-white mb-4">Final Product Verification</h3>
                <p class="text-gray-400 mb-6">Ensure only flawless products reach your customers.</p>
                <a href="/services/final-product-verification" class="text-highlight hover:text-white transition-colors font-semibold">Learn More →</a>
            </div>
        </div>
    </div>
</section>
@endsection

