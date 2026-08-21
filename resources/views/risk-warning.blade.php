@extends('layouts.app')

@section('title', 'General Risk Warning - Fundamental Capital Ltd')

@section('content')
<section class="legal-page">
    <div class="legal-page__container">
        <h1>General Risk Warning</h1>

        <p>
            In a real trading environment, derivatives such as Forex and CFDs are complex instruments and come
            with a high risk of losing money rapidly due to leverage.
        </p>

        <p>
            You should consider whether you understand how derivatives work and whether you could afford to take
            the high risk of losing your money before trading with an actual, regulated broker.
        </p>

        <p>
            <strong>Fundamental Capital Ltd</strong> is a demonstration project. No real capital is at risk on this site,
            and nothing here should be treated as financial advice or an invitation to trade real funds.
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