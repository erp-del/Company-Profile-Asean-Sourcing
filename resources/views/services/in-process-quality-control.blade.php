@extends('layouts.app')

@section('content')
<!-- Service Detail Hero Section -->
<section class="bg-gradient-to-r from-navy to-navy-dark py-20 md:py-32 text-white relative">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <h1 class="text-5xl md:text-6xl font-bold mb-4">In-Process Quality Control</h1>
        <p class="text-xl md:text-2xl text-gray-300">Real-time monitoring for consistent production excellence</p>
    </div>
</section>

<!-- Service Details Section -->
<section class="py-20 md:py-32 bg-bg-dark text-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <h2 class="text-3xl font-bold text-highlight mt-8 mb-4">Overview</h2>
                <p class="text-gray-300 leading-relaxed mb-4">In-process quality control is the heart of consistent manufacturing. Our expert inspectors work directly on your production floor, monitoring critical stages in real-time. This proactive approach prevents defects before they accumulate, reduces rework, and ensures every unit meets your specifications.</p>

                <h2 class="text-3xl font-bold text-highlight mt-8 mb-4">What We Do</h2>
                <ul class="space-y-3 text-gray-300 mt-6">
                    <li class="flex items-start gap-3"><span>✓</span> <span><strong>On-Floor Monitoring</strong> - Continuous presence at production lines</span></li>
                    <li class="flex items-start gap-3"><span>✓</span> <span><strong>Critical Stage Inspection</strong> - Focus on high-risk manufacturing points</span></li>
                    <li class="flex items-start gap-3"><span>✓</span> <span><strong>Real-Time Feedback</strong> - Immediate communication of issues to production team</span></li>
                    <li class="flex items-start gap-3"><span>✓</span> <span><strong>Process Verification</strong> - Validate manufacturing procedures and worker compliance</span></li>
                    <li class="flex items-start gap-3"><span>✓</span> <span><strong>Defect Prevention</strong> - Early detection before waste occurs</span></li>
                </ul>

                <h2 class="text-3xl font-bold text-highlight mt-8 mb-4">Key Benefits</h2>
                <p class="text-gray-300 leading-relaxed mb-4"><strong>Waste Reduction:</strong> Catch quality issues immediately, reducing defective units and material waste.</p>
                <p class="text-gray-300 leading-relaxed mb-4"><strong>Consistent Quality:</strong> Real-time monitoring ensures every piece meets specifications. No surprises at the end.</p>
                <p class="text-gray-300 leading-relaxed mb-4"><strong>Production Efficiency:</strong> Prevent stops caused by quality rejections. Maintain smooth production flow.</p>
                <p class="text-gray-300 leading-relaxed mb-4"><strong>Cost Control:</strong> Reduce rework costs, scrap, and customer returns through continuous monitoring.</p>

                <h2 class="text-3xl font-bold text-highlight mt-8 mb-4">Our Approach</h2>
                <ol class="space-y-3 text-gray-300 mt-6 list-decimal list-inside">
                    <li><strong>Initial Assessment</strong> - Understand your critical control points</li>
                    <li><strong>Inspection Plan</strong> - Design sampling frequency and coverage</li>
                    <li><strong>Daily Monitoring</strong> - On-site presence with inspection records</li>
                    <li><strong>Issue Resolution</strong> - Immediate escalation and documentation</li>
                    <li><strong>Daily Reports</strong> - Summary of findings and trends</li>
                </ol>

                <h2 class="text-3xl font-bold text-highlight mt-8 mb-4">Why Choose Excellencial?</h2>
                <p class="text-gray-300 leading-relaxed mb-4">Our team understands manufacturing processes inside and out. We work collaboratively with your production staff, providing expertise without disrupting workflow. Your success is our success.</p>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="bg-navy-dark border-2 border-highlight rounded-lg p-6 mb-6">
                    <h3 class="text-highlight font-bold mb-4">Quick Facts</h3>
                    <ul class="space-y-0">
                        <li class="text-gray-300 py-2 border-b border-gray-700"><strong>Coverage:</strong> Flexible scheduling</li>
                        <li class="text-gray-300 py-2 border-b border-gray-700"><strong>Report Type:</strong> Daily summaries</li>
                        <li class="text-gray-300 py-2 border-b border-gray-700"><strong>Response Time:</strong> Immediate</li>
                        <li class="text-gray-300 py-2"><strong>Documentation:</strong> Real-time logging</li>
                    </ul>
                </div>

                <div class="bg-navy-dark border border-gray-700 rounded-lg p-6 mb-6">
                    <h3 class="text-highlight font-bold mb-4">Ideal For</h3>
                    <ul class="space-y-0">
                        <li class="text-gray-300 py-2">High-volume manufacturing</li>
                        <li class="text-gray-300 py-2">Complex assembly processes</li>
                        <li class="text-gray-300 py-2">Quality-critical industries</li>
                        <li class="text-gray-300 py-2">New production lines</li>
                        <li class="text-gray-300 py-2">VIP customer orders</li>
                    </ul>
                </div>

                <div class="bg-gradient-to-r from-highlight/10 to-highlight/5 border-2 border-highlight rounded-lg p-6">
                    <h3 class="text-highlight font-bold mb-4">Ready to Get Started?</h3>
                    <p class="text-gray-300 mb-4">Ensure consistent quality with on-floor monitoring.</p>
                    <a href="/#contact" class="inline-block w-full px-8 py-3 bg-highlight text-navy-dark font-bold rounded hover:bg-transparent hover:text-highlight border-2 border-highlight transition-all duration-300 text-center">Request Service</a>
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
        <p class="text-lg text-gray-400 mb-12">Pair this with other quality services</p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-bg-dark border border-gray-700 rounded-lg p-8 hover:border-highlight transition-all">
                <h3 class="text-xl font-bold text-white mb-4">Raw Material Assessment</h3>
                <p class="text-gray-400 mb-6">Start with verified materials for in-process control.</p>
                <a href="/services/raw-material-assessment" class="text-highlight hover:text-white transition-colors font-semibold">Learn More →</a>
            </div>
            
            <div class="bg-bg-dark border border-gray-700 rounded-lg p-8 hover:border-highlight transition-all">
                <h3 class="text-xl font-bold text-white mb-4">Final Product Verification</h3>
                <p class="text-gray-400 mb-6">Verify final output meets all specifications.</p>
                <a href="/services/final-product-verification" class="text-highlight hover:text-white transition-colors font-semibold">Learn More →</a>
            </div>
        </div>
    </div>
</section>
@endsection

