@extends('layouts.app')

@section('content')
<!-- Service Detail Hero Section -->
<section class="service-hero">
    <div class="service-hero-content">
        <h1>Analytics & Insights</h1>
        <p>Transform data into actionable quality intelligence</p>
    </div>
</section>

<!-- Service Details Section -->
<section class="service-detail">
    <div class="container">
        <div class="service-detail-grid">
            <!-- Main Content -->
            <div class="detail-main">
                <h2>Overview</h2>
                <p>Raw inspection data is only valuable when transformed into actionable intelligence. Our analytics and insights service goes beyond basic reporting. We identify trends, pinpoint root causes, and provide strategic recommendations that drive continuous improvement and bottom-line results.</p>

                <h2 style="margin-top: 2rem;">What We Provide</h2>
                <ul class="service-features">
                    <li>✓ <strong>Comprehensive Reporting</strong> - Detailed findings with statistical analysis</li>
                    <li>✓ <strong>Trend Analysis</strong> - Identify patterns over time and across batches</li>
                    <li>✓ <strong>Root Cause Analysis</strong> - Uncover why defects are occurring</li>
                    <li>✓ <strong>Performance Benchmarking</strong> - Compare against industry standards</li>
                    <li>✓ <strong>Actionable Recommendations</strong> - Specific improvements to reduce defects</li>
                </ul>

                <h2 style="margin-top: 2rem;">Reports & Dashboards</h2>
                <p><strong>Executive Summary Reports:</strong> High-level overview of quality performance and key metrics</p>
                <p><strong>Detailed Inspection Reports:</strong> Complete findings with photos and specifications</p>
                <p><strong>Trend Analysis:</strong> Monthly/quarterly reviews showing quality progression</p>
                <p><strong>Custom Dashboards:</strong> Real-time access to quality metrics and performance indicators</p>

                <h2 style="margin-top: 2rem;">Key Benefits</h2>
                <p><strong>Continuous Improvement:</strong> Data-driven insights guide process enhancements and prevent recurring defects.</p>
                <p><strong>Cost Optimization:</strong> Identify where quality issues cost most and prioritize improvements.</p>
                <p><strong>Strategic Planning:</strong> Use historical data to forecast and plan for upcoming challenges.</p>
                <p><strong>Vendor Performance:</strong> Track supplier quality trends and accountability.</p>

                <h2 style="margin-top: 2rem;">Analysis Services</h2>
                <ol class="service-process">
                    <li><strong>Data Collection</strong> - Gather all inspection and quality data</li>
                    <li><strong>Statistical Analysis</strong> - Apply quality metrics and trending</li>
                    <li><strong>Pattern Recognition</strong> - Identify correlations and root causes</li>
                    <li><strong>Benchmarking</strong> - Compare performance against standards</li>
                    <li><strong>Recommendation</strong> - Provide specific improvement strategies</li>
                </ol>

                <h2 style="margin-top: 2rem;">Why Choose Excellencial?</h2>
                <p>Our team includes quality engineers with expertise in statistical analysis and process improvement. We don't just report data—we help you understand it and act on it. Your continuous improvement journey is our mission.</p>

                <h2 style="margin-top: 2rem;">Quality Metrics We Track</h2>
                <ul class="service-features">
                    <li>✓ Defect rates and severity</li>
                    <li>✓ Supplier performance trends</li>
                    <li>✓ Process capability (Cpk)</li>
                    <li>✓ Cost of quality</li>
                    <li>✓ First-pass yield rates</li>
                    <li>✓ Customer return patterns</li>
                </ul>
            </div>

            <!-- Sidebar -->
            <div class="detail-sidebar">
                <div class="detail-card highlight">
                    <h3>Quick Facts</h3>
                    <ul class="quick-facts">
                        <li><strong>Reporting:</strong> Monthly/Quarterly/Annual</li>
                        <li><strong>Data Format:</strong> Charts, graphs, dashboards</li>
                        <li><strong>Access:</strong> Portal or email delivery</li>
                        <li><strong>Customization:</strong> Tailored to your needs</li>
                    </ul>
                </div>

                <div class="detail-card">
                    <h3>Report Types</h3>
                    <ul class="industries">
                        <li>Executive summaries</li>
                        <li>Trend analysis</li>
                        <li>Defect distribution</li>
                        <li>Supplier scorecards</li>
                        <li>Improvement recommendations</li>
                    </ul>
                </div>

                <div class="detail-card cta">
                    <h3>Ready to Get Started?</h3>
                    <p>Start making data-driven quality decisions today.</p>
                    <a href="/excellencial#contact" class="btn btn-primary">Request Analytics</a>
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
        <p class="section-subtitle">Pair analytics with comprehensive quality services</p>
        
        <div class="related-grid">
            <div class="related-card">
                <h3>In-Process Quality Control</h3>
                <p>Continuous monitoring generates rich data for analysis.</p>
                <a href="/services/in-process-quality-control">Learn More →</a>
            </div>
            
            <div class="related-card">
                <h3>Final Product Verification</h3>
                <p>Detailed final inspections provide quality insights.</p>
                <a href="/services/final-product-verification">Learn More →</a>
            </div>
        </div>
    </div>
</section>
@endsection
