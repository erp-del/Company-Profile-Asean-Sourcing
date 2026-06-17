@extends('layouts.app')

@section('content')
<!-- Service Detail Hero Section -->
<section class="bg-gradient-to-r from-navy to-navy-dark py-20 md:py-32 text-white relative">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <h1 class="text-5xl md:text-6xl font-bold mb-4">Final Product Verification</h1>
        <p class="text-xl md:text-2xl text-gray-300">Your last checkpoint for perfection before customer delivery</p>
    </div>
</section>

<!-- Service Details Section -->
<section class="py-20 md:py-32 bg-bg-dark text-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <h2>Overview</h2>
                <p>The final inspection is critical. Before products leave your facility, they must meet every specification and quality standard. Our comprehensive final product verification ensures only flawless items reach your customers, protecting your brand reputation and reducing returns.</p>

                <h2 style="margin-top: 2rem;">What We Do</h2>
                <ul class="service-features">
                    <li>✓ <strong>100% Final Inspection</strong> - Every unit checked before shipment</li>
                    <li>✓ <strong>Comprehensive Testing</strong> - Functionality, durability, aesthetic quality</li>
                    <li>✓ <strong>Packaging Verification</strong> - Ensure proper packaging and protection</li>
                    <li>✓ <strong>Documentation</strong> - Detailed reports with corrective actions</li>
                    <li>✓ <strong>Traceability</strong> - Complete batch tracking and serial number logging</li>
                </ul>

                <h2 style="margin-top: 2rem;">Key Benefits</h2>
                <p><strong>Brand Protection:</strong> Only perfect products reach customers. Prevent returns and negative reviews.</p>
                <p><strong>Customer Satisfaction:</strong> Consistent quality builds trust and loyalty. Repeat business increases.</p>
                <p><strong>Compliance Assurance:</strong> Meet all regulatory requirements and customer specifications.</p>
                <p><strong>Returns Reduction:</strong> Proactive inspection dramatically reduces post-sale issues and warranty claims.</p>

                <h2 style="margin-top: 2rem;">Our Process</h2>
                <ol class="service-process">
                    <li><strong>Specification Review</strong> - Understand all quality requirements</li>
                    <li><strong>Inspection Deployment</strong> - Position inspectors at packaging line</li>
                    <li><strong>Unit Testing</strong> - Verify each product against standards</li>
                    <li><strong>Defect Segregation</strong> - Separate non-compliant items</li>
                    <li><strong>Batch Release</strong> - Final approval for shipment with documentation</li>
                </ol>

                <h2 style="margin-top: 2rem;">Why Choose Excellencial?</h2>
                <p>With years of experience in final quality control across multiple industries, our inspectors know what perfection looks like. Attention to detail is our specialty. Your product integrity is our responsibility.</p>
            </div>

            <!-- Sidebar -->
            <div class="detail-sidebar">
                <div class="detail-card highlight">
                    <h3>Quick Facts</h3>
                    <ul class="quick-facts">
                        <li><strong>Coverage:</strong> 100% per batch</li>
                        <li><strong>Inspection Rate:</strong> 200-500 units/day</li>
                        <li><strong>Report Timing:</strong> Batch completion</li>
                        <li><strong>Standards:</strong> AQL 0-2.5</li>
                    </ul>
                </div>

                <div class="detail-card">
                    <h3>Perfect For</h3>
                    <ul class="industries">
                        <li>Electronics & appliances</li>
                        <li>Consumer goods</li>
                        <li>Medical devices</li>
                        <li>Premium brands</li>
                        <li>Export shipments</li>
                    </ul>
                </div>

                <div class="detail-card cta">
                    <h3>Ready to Get Started?</h3>
                    <p>Ensure only perfect products reach your customers.</p>
                    <a href="/excellencial#contact" class="btn btn-primary">Request Service</a>
                </div>
            </div>
        </div>

        <!-- Back to Services -->
        <div class="back-link">
            <a href="/excellencial#services">← Back to All Services</a>
        </div>
    </div>
</section>

<!-- Related Services -->
<section class="related-services">
    <div class="container">
        <h2>Related Services</h2>
        <p class="section-subtitle">Complete your quality control strategy</p>
        
        <div class="related-grid">
            <div class="related-card">
                <h3>In-Process Quality Control</h3>
                <p>Monitor production quality in real-time.</p>
                <a href="/services/in-process-quality-control">Learn More →</a>
            </div>
            
            <div class="related-card">
                <h3>Shipping Integrity Checks</h3>
                <p>Ensure products arrive in perfect condition.</p>
                <a href="/services/shipping-integrity-checks">Learn More →</a>
            </div>
        </div>
    </div>
</section>
@endsection
