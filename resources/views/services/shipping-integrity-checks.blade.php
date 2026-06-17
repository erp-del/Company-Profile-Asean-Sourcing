@extends('layouts.app')

@section('content')
<!-- Service Detail Hero Section -->
<section class="service-hero">
    <div class="service-hero-content">
        <h1>Shipping Integrity Checks</h1>
        <p>Guarantee your products arrive damage-free</p>
    </div>
</section>

<!-- Service Details Section -->
<section class="service-detail">
    <div class="container">
        <div class="service-detail-grid">
            <!-- Main Content -->
            <div class="detail-main">
                <h2>Overview</h2>
                <p>Perfect products can still arrive damaged if shipping procedures fail. Our shipping integrity checks verify container loading procedures, packaging adequacy, and shipment conditions. We ensure your products arrive at customer locations in the exact condition they left yours.</p>

                <h2 style="margin-top: 2rem;">What We Do</h2>
                <ul class="service-features">
                    <li>✓ <strong>Pre-Loading Inspection</strong> - Verify container condition and cleanliness</li>
                    <li>✓ <strong>Loading Supervision</strong> - Monitor proper stacking and securing procedures</li>
                    <li>✓ <strong>Packaging Verification</strong> - Ensure protective packaging is adequate</li>
                    <li>✓ <strong>Documentation Verification</strong> - Confirm accurate shipment records</li>
                    <li>✓ <strong>Sealing & Labeling</strong> - Verify proper container sealing and marking</li>
                </ul>

                <h2 style="margin-top: 2rem;">Key Benefits</h2>
                <p><strong>Damage Prevention:</strong> Proper loading and securing prevents in-transit damage and customer complaints.</p>
                <p><strong>Cost Savings:</strong> Avoid expensive replacement shipments and damage claims.</p>
                <p><strong>Customer Satisfaction:</strong> Products arrive perfect, not damaged. Build customer trust.</p>
                <p><strong>On-Time Delivery:</strong> No delays due to damage inspection and re-shipping.</p>

                <h2 style="margin-top: 2rem;">Our Process</h2>
                <ol class="service-process">
                    <li><strong>Pre-Dispatch List</strong> - Review shipment contents and quantities</li>
                    <li><strong>Container Assessment</strong> - Inspect for damage before loading</li>
                    <li><strong>Loading Monitoring</strong> - Oversee loading procedures per best practices</li>
                    <li><strong>Final Verification</strong> - Check all items against packing list</li>
                    <li><strong>Shipment Clearance</strong> - Authorize release with inspection certificate</li>
                </ol>

                <h2 style="margin-top: 2rem;">Why Choose Excellencial?</h2>
                <p>Our inspectors understand logistics and shipping best practices. They work seamlessly with your warehouse and freight teams to ensure proper handling while maintaining schedule efficiency.</p>

                <h2 style="margin-top: 2rem;">Shipping Standards</h2>
                <p>We follow international best practices for container loading including:</p>
                <ul class="service-features">
                    <li>✓ Proper weight distribution</li>
                    <li>✓ Adequate protective materials</li>
                    <li>✓ Secure fastening and blocking</li>
                    <li>✓ Ventilation requirements</li>
                    <li>✓ Hazmat compliance (if applicable)</li>
                </ul>
            </div>

            <!-- Sidebar -->
            <div class="detail-sidebar">
                <div class="detail-card highlight">
                    <h3>Quick Facts</h3>
                    <ul class="quick-facts">
                        <li><strong>Coverage:</strong> Per container/shipment</li>
                        <li><strong>Inspection Type:</strong> Full supervision</li>
                        <li><strong>Duration:</strong> Loading duration</li>
                        <li><strong>Documentation:</strong> Certificate issued</li>
                    </ul>
                </div>

                <div class="detail-card">
                    <h3>Applicable For</h3>
                    <ul class="industries">
                        <li>International shipments</li>
                        <li>High-value goods</li>
                        <li>Fragile products</li>
                        <li>Temperature-sensitive items</li>
                        <li>Bulk exports</li>
                    </ul>
                </div>

                <div class="detail-card cta">
                    <h3>Ready to Get Started?</h3>
                    <p>Ensure safe passage for your shipments.</p>
                    <a href="/excellencial#contact" class="btn btn-primary">Schedule Inspection</a>
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
        <p class="section-subtitle">Complete quality assurance chain</p>
        
        <div class="related-grid">
            <div class="related-card">
                <h3>Final Product Verification</h3>
                <p>Ensure products are perfect before packing.</p>
                <a href="/services/final-product-verification">Learn More →</a>
            </div>
            
            <div class="related-card">
                <h3>Analytics & Insights</h3>
                <p>Track shipping performance metrics.</p>
                <a href="/services/analytics-insights">Learn More →</a>
            </div>
        </div>
    </div>
</section>
@endsection
