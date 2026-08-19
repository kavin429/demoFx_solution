@extends('layouts.app')

@section('title', 'Risk Disclosure - DemoFX Solution')

@section('content')
<section class="legal-page">
    <div class="legal-page__container">
        <h1>Risk Disclosure</h1>

        <p>
            Past performance is not indicative of future results. <strong>DemoFX Solution</strong> is a
            demonstration brand and is <strong>not currently authorised or regulated by any financial
            authority</strong>. Any resemblance to a licensed broker is for illustrative purposes only.
        </p>

        <p>
            The information on this website is provided for informational/demo purposes only and should not be
            construed as investment advice.
        </p>

        <p>
            Before trading with any real broker, verify their regulatory status independently and seek
            professional advice.
        </p>
    </div>
</section>

<style>
.legal-page{ background:#0d1117; padding:100px 24px; }
.legal-page__container{ max-width:820px; margin:0 auto; color:#c9d1d9; line-height:1.7; }
.legal-page__container h1{ color:#fff; font-size:32px; margin-bottom:24px; }
.legal-page__container p{ margin-bottom:16px; font-size:15px; }
.legal-page__container strong{ color:#fff; }
</style>
@endsection