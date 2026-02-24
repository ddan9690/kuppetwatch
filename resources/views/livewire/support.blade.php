<div>
   @section('title', 'Stand With Team Change | Support the Movement')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Source+Serif+4:ital,wght@0,300;0,400;0,600;1,300;1,400&display=swap');

    .funds-root {
        font-family: 'Source Serif 4', Georgia, serif;
        background: #0d1f0f;
        color: #f0ede4;
        overflow-x: hidden;
    }

    .funds-root h1, .funds-root h2, .funds-root h3 {
        font-family: 'Playfair Display', Georgia, serif;
    }

    /* GRAIN OVERLAY */
    .funds-root::before {
        content: '';
        position: fixed;
        inset: 0;
        background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
        pointer-events: none;
        z-index: 1000;
        opacity: 0.5;
    }

    .tc-yellow { color: #d4a820; }
    .tc-green { color: #2d6a35; }

    /* HERO */
    .hero-section {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        padding: 6rem 1.5rem;
        text-align: center;
        background:
            radial-gradient(ellipse 80% 60% at 50% 100%, rgba(45,106,53,0.4) 0%, transparent 70%),
            radial-gradient(ellipse 60% 40% at 20% 20%, rgba(212,168,32,0.08) 0%, transparent 60%),
            #0a1a0c;
    }

    .hero-section::after {
        content: '';
        position: absolute;
        bottom: 0; left: 0; right: 0;
        height: 120px;
        background: linear-gradient(to bottom, transparent, #0a1a0c);
    }

    .hero-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
        font-size: 0.8rem;
        font-weight: 600;
        letter-spacing: 0.25em;
        text-transform: uppercase;
        color: #d4a820;
        margin-bottom: 2rem;
        opacity: 0;
        animation: fadeUp 0.8s ease 0.2s forwards;
    }

    .hero-eyebrow .dot {
        width: 6px; height: 6px;
        background: #d4a820;
        border-radius: 50%;
        display: inline-block;
    }

    .hero-title {
        font-size: clamp(3rem, 8vw, 7rem);
        font-weight: 900;
        line-height: 1.0;
        color: #f0ede4;
        margin-bottom: 1.5rem;
        opacity: 0;
        animation: fadeUp 0.9s ease 0.4s forwards;
    }

    .hero-title em {
        font-style: italic;
        color: #d4a820;
    }

    .hero-sub {
        max-width: 640px;
        margin: 0 auto 3rem;
        font-size: 1.25rem;
        line-height: 1.8;
        color: rgba(240,237,228,0.75);
        font-weight: 300;
        font-style: italic;
        opacity: 0;
        animation: fadeUp 1s ease 0.6s forwards;
    }

    .hero-date-badge {
        display: inline-flex;
        align-items: center;
        gap: 1rem;
        border: 1px solid rgba(212,168,32,0.4);
        padding: 0.75rem 2rem;
        border-radius: 100px;
        font-size: 1rem;
        color: #d4a820;
        letter-spacing: 0.05em;
        opacity: 0;
        animation: fadeUp 1s ease 0.8s forwards;
    }

    @keyframes fadeUp {
        from { opacity: 0; transform: translateY(28px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* DIVIDER */
    .ornament {
        display: flex;
        align-items: center;
        gap: 1.5rem;
        justify-content: center;
        padding: 3rem 0;
        color: rgba(212,168,32,0.5);
        font-size: 1.2rem;
    }
    .ornament::before, .ornament::after {
        content: '';
        flex: 1;
        max-width: 120px;
        height: 1px;
        background: linear-gradient(to right, transparent, rgba(212,168,32,0.4));
    }
    .ornament::after {
        background: linear-gradient(to left, transparent, rgba(212,168,32,0.4));
    }

    /* MANIFESTO */
    .manifesto-section {
        padding: 6rem 1.5rem;
        max-width: 820px;
        margin: 0 auto;
        text-align: center;
    }

    .manifesto-section blockquote {
        font-size: clamp(1.5rem, 3.5vw, 2.5rem);
        font-weight: 700;
        line-height: 1.4;
        color: #f0ede4;
        position: relative;
        margin: 0;
    }

    .manifesto-section blockquote::before {
        content: '\201C';
        position: absolute;
        top: -2rem;
        left: 50%;
        transform: translateX(-50%);
        font-size: 6rem;
        color: rgba(212,168,32,0.15);
        font-family: 'Playfair Display', serif;
        line-height: 1;
    }

    .manifesto-section p {
        margin-top: 2.5rem;
        font-size: 1.15rem;
        color: rgba(240,237,228,0.7);
        line-height: 1.9;
        font-weight: 300;
    }

    /* JOURNEY STRIP */
    .journey-section {
        background: linear-gradient(135deg, #0f2a12, #0a1a0c);
        padding: 6rem 1.5rem;
        position: relative;
        overflow: hidden;
    }

    .journey-section::before {
        content: 'CHANGE';
        position: absolute;
        font-family: 'Playfair Display', serif;
        font-size: 20vw;
        font-weight: 900;
        color: rgba(212,168,32,0.03);
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        white-space: nowrap;
        pointer-events: none;
    }

    .journey-grid {
        max-width: 1100px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
    }

    .journey-card {
        background: rgba(255,255,255,0.04);
        border: 1px solid rgba(212,168,32,0.15);
        border-radius: 1rem;
        padding: 2.5rem 2rem;
        position: relative;
        transition: border-color 0.3s, transform 0.3s;
    }

    .journey-card:hover {
        border-color: rgba(212,168,32,0.4);
        transform: translateY(-4px);
    }

    .journey-card .number {
        font-family: 'Playfair Display', serif;
        font-size: 3.5rem;
        font-weight: 900;
        color: rgba(212,168,32,0.2);
        line-height: 1;
        margin-bottom: 0.5rem;
    }

    .journey-card h3 {
        font-size: 1.2rem;
        color: #d4a820;
        margin-bottom: 0.75rem;
    }

    .journey-card p {
        color: rgba(240,237,228,0.65);
        font-size: 1rem;
        line-height: 1.7;
        font-weight: 300;
    }

    /* CALL TO GIVE */
    .give-section {
        padding: 6rem 1.5rem;
        max-width: 900px;
        margin: 0 auto;
        text-align: center;
    }

    .give-section h2 {
        font-size: clamp(2.5rem, 5vw, 4rem);
        color: #f0ede4;
        margin-bottom: 1.5rem;
        line-height: 1.2;
    }

    .give-section h2 em {
        color: #d4a820;
        font-style: italic;
    }

    .give-section .lead {
        font-size: 1.2rem;
        color: rgba(240,237,228,0.7);
        line-height: 1.9;
        font-weight: 300;
        max-width: 680px;
        margin: 0 auto 3rem;
    }

    /* PAYMENT CARD */
    .payment-card {
        background: linear-gradient(135deg, #1a3d1e, #122817);
        border: 1px solid rgba(212,168,32,0.3);
        border-radius: 1.5rem;
        padding: 3rem 2.5rem;
        max-width: 520px;
        margin: 0 auto;
        position: relative;
        overflow: hidden;
    }

    .payment-card::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -30%;
        width: 300px; height: 300px;
        background: radial-gradient(circle, rgba(212,168,32,0.08), transparent 70%);
        pointer-events: none;
    }

    .payment-card .mpesa-label {
        font-size: 0.75rem;
        letter-spacing: 0.2em;
        text-transform: uppercase;
        color: rgba(212,168,32,0.7);
        margin-bottom: 1rem;
    }

    .payment-card .mpesa-logo {
        font-family: 'Playfair Display', serif;
        font-size: 1.5rem;
        font-weight: 900;
        color: #d4a820;
        margin-bottom: 2rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        justify-content: center;
    }

    .payment-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1.25rem 0;
        border-bottom: 1px solid rgba(212,168,32,0.1);
    }

    .payment-row:last-of-type {
        border-bottom: none;
        padding-bottom: 0;
    }

    .payment-row .label {
        font-size: 0.85rem;
        color: rgba(240,237,228,0.5);
        letter-spacing: 0.08em;
        text-transform: uppercase;
    }

    .payment-row .value {
        font-family: 'Playfair Display', serif;
        font-size: 1.6rem;
        font-weight: 700;
        color: #f0ede4;
        letter-spacing: 0.05em;
    }

    .payment-note {
        margin-top: 2rem;
        font-size: 0.95rem;
        color: rgba(240,237,228,0.5);
        font-style: italic;
        line-height: 1.6;
    }

    /* AFFIRMATION */
    .affirm-section {
        background: linear-gradient(to bottom, #0a1a0c, #0d1f0f);
        padding: 6rem 1.5rem;
    }

    .affirm-inner {
        max-width: 1100px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 4rem;
        align-items: center;
    }

    @media (max-width: 768px) {
        .affirm-inner { grid-template-columns: 1fr; gap: 2rem; }
    }

    .affirm-text h2 {
        font-size: clamp(2rem, 4vw, 3.5rem);
        color: #f0ede4;
        line-height: 1.25;
        margin-bottom: 1.5rem;
    }

    .affirm-text h2 em {
        color: #d4a820;
        font-style: italic;
    }

    .affirm-text p {
        font-size: 1.1rem;
        color: rgba(240,237,228,0.65);
        line-height: 1.9;
        font-weight: 300;
        margin-bottom: 1rem;
    }

    .affirm-pledges {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .pledge-item {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        padding: 1.5rem;
        background: rgba(255,255,255,0.03);
        border-left: 3px solid #d4a820;
        border-radius: 0 0.75rem 0.75rem 0;
    }

    .pledge-item .icon {
        font-size: 1.5rem;
        flex-shrink: 0;
        margin-top: 0.1rem;
    }

    .pledge-item p {
        font-size: 1rem;
        color: rgba(240,237,228,0.75);
        line-height: 1.6;
        margin: 0;
    }

    .pledge-item strong {
        color: #f0ede4;
    }

    /* FINAL RALLY */
    .rally-section {
        text-align: center;
        padding: 8rem 1.5rem;
        background:
            radial-gradient(ellipse 70% 50% at 50% 0%, rgba(45,106,53,0.35) 0%, transparent 70%),
            #0a1a0c;
        position: relative;
    }

    .rally-section h2 {
        font-size: clamp(3rem, 7vw, 6rem);
        color: #f0ede4;
        line-height: 1.1;
        margin-bottom: 2rem;
    }

    .rally-section h2 span {
        display: block;
        color: #d4a820;
        font-style: italic;
    }

    .rally-section p {
        max-width: 600px;
        margin: 0 auto 3rem;
        font-size: 1.2rem;
        color: rgba(240,237,228,0.6);
        line-height: 1.9;
        font-weight: 300;
    }

    .rally-cta {
        display: inline-block;
        background: #d4a820;
        color: #0a1a0c;
        font-family: 'Playfair Display', serif;
        font-weight: 700;
        font-size: 1.1rem;
        padding: 1.1rem 3rem;
        border-radius: 100px;
        text-decoration: none;
        letter-spacing: 0.03em;
        transition: transform 0.3s, box-shadow 0.3s;
        box-shadow: 0 0 40px rgba(212,168,32,0.2);
    }

    .rally-cta:hover {
        transform: translateY(-3px);
        box-shadow: 0 0 60px rgba(212,168,32,0.35);
        color: #0a1a0c;
        text-decoration: none;
    }

    /* FOOTER STRIP */
    .footer-strip {
        border-top: 1px solid rgba(212,168,32,0.15);
        padding: 2rem 1.5rem;
        text-align: center;
        font-size: 0.85rem;
        color: rgba(240,237,228,0.3);
        letter-spacing: 0.05em;
    }

    /* SCROLL REVEAL */
    .reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.8s ease, transform 0.8s ease;
    }

    .reveal.visible {
        opacity: 1;
        transform: translateY(0);
    }
</style>

<div class="funds-root">

    <!-- ═══ HERO ═══ -->
    <section class="hero-section">
        <div style="position: relative; z-index: 1;">
            <div class="hero-eyebrow">
                <span class="dot"></span>
                KUPPET Homa Bay Branch · March 1st, 2026
                <span class="dot"></span>
            </div>

            <h1 class="hero-title">
                Change Doesn't<br>
                Happen <em>By Itself.</em>
            </h1>

            <p class="hero-sub">
                You believed in this. You walked this road with us.
                Now, as we stand at the threshold, we ask you to take one more step.
            </p>

            <div class="hero-date-badge">
                <span>⚡</span>
                <span>Election Day — 1st March 2026</span>
                <span>⚡</span>
            </div>
        </div>
    </section>


    <!-- ═══ MANIFESTO ═══ -->
    <section class="manifesto-section reveal">
        <blockquote>
            Team Change was never just a name. It was a declaration — that teachers in Homa Bay deserve better, and that we are the ones to make it happen.
        </blockquote>
        <p>
            You've been part of this from the beginning. The conversations, the hope, the patience through postponements. None of that was wasted. Every step has been leading to this moment — and this moment demands everything we've got.
        </p>
    </section>

    <div class="ornament">✦</div>

    <!-- ═══ THE JOURNEY ═══ -->
    <section class="journey-section">
        <div class="max-w-5xl mx-auto text-center mb-16 reveal">
            <h2 style="font-size: clamp(2rem, 4vw, 3.2rem); color: #f0ede4; margin-bottom: 1rem;">
                We Have Come This Far <em class="tc-yellow" style="font-style:italic;">Together</em>
            </h2>
            <p style="color: rgba(240,237,228,0.6); font-size: 1.1rem; font-weight: 300; max-width: 600px; margin: 0 auto;">
                The road to March 1st wasn't smooth. It never is when you're fighting for something real.
            </p>
        </div>

        <div class="journey-grid">
            <div class="journey-card reveal">
                <div class="number">01</div>
                <h3>You Believed First</h3>
                <p>When Team Change was just a vision, you were already there — sharing, talking, mobilising. Your faith built this coalition from the ground up.</p>
            </div>

            <div class="journey-card reveal">
                <div class="number">02</div>
                <h3>You Stayed Through the Storm</h3>
                <p>Postponements tested us. Doubters pushed back. But Team Change didn't fold — because Changers like you refused to let go of what we know is right.</p>
            </div>

            <div class="journey-card reveal">
                <div class="number">03</div>
                <h3>Now We Finish It</h3>
                <p>March 1st is days away. This is the final mile. The mission now is to reach every teacher, every corner, every vote — and win it decisively.</p>
            </div>
        </div>
    </section>

    <div class="ornament">✦</div>

    <!-- ═══ CALL TO GIVE ═══ -->
    <section class="give-section">
        <div class="reveal">
            <h2>
                Fuel the <em>Final Push</em>
            </h2>
            <p class="lead">
                Elections are won in the details — in the last-mile outreach, the materials that reach teachers in every corner of Homa Bay, the presence that reminds members: change is here, and it's real. That takes resources. That takes you.
            </p>
            <p class="lead" style="font-style: italic; font-size: 1.05rem;">
                No amount is too small. Every single shilling from a believer in this cause carries the weight of conviction. Give what you can, give with pride.
            </p>
        </div>

        <div class="payment-card reveal" style="margin-top: 3rem;">
            <p class="mpesa-label">Send Your Support Via</p>
            <div class="mpesa-logo">
                📲 M-PESA
            </div>

            <div class="payment-row">
                <span class="label">Paybill Number</span>
                <span class="value">522533</span>
            </div>
            <div class="payment-row">
                <span class="label">Account Number</span>
                <span class="value">8034905</span>
            </div>

            <p class="payment-note">
                Use <strong style="color: #f0ede4;">Account No. 8034905</strong> as your account number.<br>
                Your contribution, at any amount, is a vote of confidence in what we're building together.
            </p>
        </div>
    </section>

    <div class="ornament">✦</div>

    <!-- ═══ AFFIRMATION ═══ -->
    <section class="affirm-section">
        <div class="affirm-inner">
            <div class="affirm-text reveal">
                <h2>
                    What Your<br>Support <em>Stands For</em>
                </h2>
                <p>
                    This isn't charity. This is investment — in teachers who are counting on us, in a branch that has long deserved real leadership, in a future we have the power to write.
                </p>
                <p>
                    When you contribute to Team Change, you're not giving to a campaign. You're affirming that you believe education in Homa Bay can be transformed by people who truly care.
                </p>
            </div>

            <div class="affirm-pledges reveal">
                <div class="pledge-item">
                    <span class="icon">🏫</span>
                    <p><strong>Reaching Every Teacher.</strong> Your support funds the outreach that ensures no member of our branch is left uninformed or uninspired.</p>
                </div>
                <div class="pledge-item">
                    <span class="icon">📣</span>
                    <p><strong>Amplifying Our Message.</strong> Materials, mobilisation, presence on the ground — this is how movements win.</p>
                </div>
                <div class="pledge-item">
                    <span class="icon">🤝</span>
                    <p><strong>Solidarity in Action.</strong> When you give, you show every undecided teacher that Team Change has real people standing behind it.</p>
                </div>
                <div class="pledge-item">
                    <span class="icon">⚖️</span>
                    <p><strong>Fair, Transparent Leadership.</strong> Everything we raise is directed toward winning this election with integrity and purpose.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ FINAL RALLY ═══ -->
    <section class="rally-section">
        <div class="reveal">
            <h2>
                This Is Our Moment.
                <span>Don't Sit It Out.</span>
            </h2>
            <p>
                March 1st will come and go in a single day. What we do in the hours before it defines everything after it. Stand with Team Change — not just in spirit, but in substance.
            </p>

            <div style="background: rgba(212,168,32,0.08); border: 1px solid rgba(212,168,32,0.25); border-radius: 1.25rem; padding: 2rem 2.5rem; max-width: 480px; margin: 0 auto 3rem; display: inline-block; text-align: center;">
                <p style="font-size: 0.8rem; letter-spacing: 0.15em; text-transform: uppercase; color: rgba(212,168,32,0.7); margin: 0 0 0.5rem;">M-Pesa Paybill · Quick Reference</p>
                <p style="font-family: 'Playfair Display', serif; font-size: 2rem; color: #d4a820; margin: 0; font-weight: 700;">522533</p>
                <p style="font-size: 0.85rem; color: rgba(240,237,228,0.5); margin: 0.25rem 0 0;">Account: <strong style="color: rgba(240,237,228,0.8);">8034905</strong></p>
            </div>

            <br>
            <a href="{{ route('candidates') }}" class="rally-cta">
                Meet Our Candidates →
            </a>
        </div>
    </section>

    <!-- ═══ FOOTER STRIP ═══ -->
    <div class="footer-strip">
        Team Change · KUPPET Homa Bay Branch · Election: 1st March 2026
    </div>

</div>

<script>
    // Scroll reveal
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.classList.add('visible');
                observer.unobserve(e.target);
            }
        });
    }, { threshold: 0.12 });

    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));
</script>
</div>
