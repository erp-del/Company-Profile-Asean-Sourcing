@extends('layouts.app')

@section('content')
<!-- Service Detail Hero Section -->
<section class="service-hero">
    <div class="service-hero-content">
        <h1>Compliance & Certification</h1>
        <p>Navigate international standards with confidence</p>
    </div>
</section>

<!-- Service Details Section -->
<section class="service-detail">
    <div class="container">
        <div class="service-detail-grid">
            <!-- Main Content -->
            <div class="detail-main">
                <h2>Overview</h2>
                <p>Meeting international standards and certifications is essential for global business. Our compliance and certification services guide you through complex requirements—ISO standards, CE marking, ASTM compliance, and more. We handle audits, documentation, and verification so you can focus on business.</p>

                <h2 style="margin-top: 2rem;">What We Do</h2>
                <ul class="service-features">
                    <li>✓ <strong>Facility Audits</strong> - Comprehensive assessment of compliance readiness</li>
                    <li>✓ <strong>Process Verification</strong> - Validate manufacturing against standards</li>
                    <li>✓ <strong>Documentation Support</strong> - Help organize required records and evidence</li>
                    <li>✓ <strong>Testing & Validation</strong> - Perform required tests for certification</li>
                    <li>✓ <strong>Certification Listing</strong> - Support for third-party certifiers</li>
                </ul>

                <h2 style="margin-top: 2rem;">Standards We Cover</h2>
                <p><strong>ISO Series:</strong> ISO 9001, ISO 13485, ISO 14001, ISO 45001</p>
                <p><strong>Product Standards:</strong> CE marking, ASTM, ANSI, NFPA</p>
                <p><strong>Industry Specific:</strong> Medical device standards, food packaging, electronics safety</p>
                <p><strong>Quality Standards:</strong> AQL standards, process control requirements</p>

                <h2 style="margin-top: 2rem;">Key Benefits</h2>
                <p><strong>Market Access:</strong> Certifications open doors to international markets and major buyers.</p>
                <p><strong>Risk Mitigation:</strong> Compliance protects against regulatory penalties and product recalls.</p>
                <p><strong>Customer Confidence:</strong> Third-party certifications provide credibility and trust.</p>
                <p><strong>Continuous Improvement:</strong> Standards-based processes improve efficiency and quality.</p>

                <h2 style="margin-top: 2rem;">Our Process</h2>
                <ol class="service-process">
                    <li><strong>Assessment</strong> - Evaluate current state vs. requirements</li>
                    <li><strong>Gap Analysis</strong> - Identify areas needing improvement</li>
                    <li><strong>Implementation Support</strong> - Guide process change and training</li>
                    <li><strong>Audit Preparation</strong> - Pre-audit verification before third-party review</li>
                    <li><strong>Certification Support</strong> - Assist through formal certification process</li>
                </ol>

                <h2 style="margin-top: 2rem;">Why Choose Excellencial?</h2>
                <p>Our team has deep expertise in international standards and has guided dozens of companies to successful certifications. We understand what auditors look for and how to demonstrate true compliance.</p>
            </div>

            <!-- Sidebar -->
            <div class="detail-sidebar">
                <div class="detail-card highlight">
                    <h3>Quick Facts</h3>
                    <ul class="quick-facts">
                        <li><strong>Standards:</strong> Multiple certifications</li>
                        <li><strong>Timeline:</strong> 2-6 months typically</li>
                        <li><strong>Support:</strong> Full implementation guidance</li>
                        <li><strong>Ongoing:</strong> Annual maintenance support</li>
                    </ul>
                </div>

                <div class="detail-card">
                    <h3>Common Certifications</h3>
                    <ul class="industries">
                        <li>ISO 9001 (Quality)</li>
                        <li>CE Marking (EU)</li>
                        <li>ISO 13485 (Medical)</li>
                        <li>IATF 16949 (Automotive)</li>
                        <li>Food Safety Standards</li>
                    </ul>
                </div>

                <div class="detail-card cta">
                    <h3>Ready to Get Started?</h3>
                    <p>Take the first step toward certification success.</p>
                    <a href="/excellencial#contact" class="btn btn-primary">Request Consultation</a>
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
        <p class="section-subtitle">Strengthen your compliance program</p>
        
        <div class="related-grid">
            <div class="related-card">
                <h3>Final Product Verification</h3>
                <p>Ensure products meet certification requirements.</p>
                <a href="/services/final-product-verification">Learn More →</a>
            </div>
            
            <div class="related-card">
                <h3>Analytics & Insights</h3>
                <p>Track compliance metrics and performance.</p>
                <a href="/services/analytics-insights">Learn More →</a>
            </div>
        </div>
    </div>
</section>
@endsection
