<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="easylawns — the simple, no-nonsense guide to a greener lawn. Mowing, watering, feeding, weeds and seasonal care in one place." />
  <title>easylawns — The Easy Lawn Care Guide</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="styles.css" />
  <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'%3E%3Crect width='64' height='64' rx='14' fill='%232f7d32'/%3E%3Cpath d='M32 52c0-16 8-26 20-30-2 16-9 26-20 30Zm0 0C32 36 24 26 12 22c2 16 9 26 20 30Z' fill='%23c8f169'/%3E%3C/svg%3E" />
</head>
<body>
  <a class="skip-link" href="#main">Skip to content</a>

  <header class="site-header" id="top">
    <div class="container header-inner">
      <a href="#top" class="brand" aria-label="easylawns home">
        <span class="brand-mark" aria-hidden="true">
          <svg viewBox="0 0 64 64" width="34" height="34" role="img">
            <rect width="64" height="64" rx="14" fill="#2f7d32"/>
            <path d="M32 52c0-16 8-26 20-30-2 16-9 26-20 30Zm0 0C32 36 24 26 12 22c2 16 9 26 20 30Z" fill="#c8f169"/>
          </svg>
        </span>
        <span class="brand-name">easylawns</span>
      </a>

      <nav class="nav" aria-label="Main navigation">
        <a href="#guide">Guide</a>
        <a href="#season">Seasonal</a>
        <a href="#problems">Problems</a>
        <a href="#faq">FAQ</a>
        <a href="#contact" class="nav-cta">Get help</a>
      </nav>

      <button class="menu-toggle" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-nav">
        <span></span><span></span><span></span>
      </button>
    </div>

    <nav class="mobile-nav" id="mobile-nav" aria-label="Mobile navigation">
      <a href="#guide">Guide</a>
      <a href="#season">Seasonal</a>
      <a href="#problems">Problems</a>
      <a href="#faq">FAQ</a>
      <a href="#contact">Get help</a>
    </nav>
  </header>

  <main id="main">
    <!-- HERO -->
    <section class="hero">
      <div class="container hero-inner">
        <div class="hero-copy">
          <p class="eyebrow">The easy lawn care guide</p>
          <h1>A greener lawn,<br /><span class="accent">without the guesswork.</span></h1>
          <p class="lede">
            Everything you actually need to know about mowing, watering, feeding
            and fixing your grass — explained simply. No jargon, no 12-step
            routines, no expensive gear required.
          </p>
          <div class="hero-actions">
            <a href="#guide" class="btn btn-primary">Start the guide</a>
            <a href="#season" class="btn btn-ghost">Seasonal checklist</a>
          </div>
          <ul class="hero-stats">
            <li><strong>4</strong><span>core habits</span></li>
            <li><strong>5 min</strong><span>to read</span></li>
            <li><strong>0</strong><span>junk products</span></li>
          </ul>
        </div>

        <div class="hero-art">
          <div class="blob blob-a" aria-hidden="true"></div>
          <div class="blob blob-b" aria-hidden="true"></div>
          <figure class="lawn-card">
            <img src="assets/hero-lawn.jpg" alt="A lush, freshly mowed green lawn bordered by flower beds and mature trees" width="1000" height="750" fetchpriority="high" />
            <figcaption class="lawn-caption">Fresh stripes, healthy roots.</figcaption>
          </figure>
        </div>
      </div>
      <div class="hero-wave" aria-hidden="true">
        <svg viewBox="0 0 1440 80" preserveAspectRatio="none"><path d="M0,40 C240,90 480,0 720,24 C960,48 1200,90 1440,48 L1440,80 L0,80 Z" fill="#f7f9f2"/></svg>
      </div>
    </section>

    <!-- FOUR HABITS -->
    <section class="section" id="guide">
      <div class="container">
        <header class="section-head">
          <p class="eyebrow">The four habits</p>
          <h2>Great lawns are simple, not busy</h2>
          <p class="section-sub">
            Skip the shelf full of bottles. If you get these four things roughly
            right, your lawn will out-perform most of the neighbourhood.
          </p>
        </header>

        <div class="grid grid-4">
          <article class="card habit">
            <figure class="card-photo">
              <img src="assets/mowing.jpg" alt="A petrol push mower cutting a fresh stripe into a green lawn" width="900" height="732" loading="lazy" />
            </figure>
            <div class="habit-body">
              <div class="habit-meta">
                <span class="card-num">01</span>
                <span class="card-icon" aria-hidden="true">
                  <svg viewBox="0 0 48 48"><circle cx="24" cy="24" r="18" fill="none" stroke="currentColor" stroke-width="2.5"/><path d="M14 24h20M24 14v20" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/></svg>
                </span>
              </div>
              <h3>Mow high, mow often</h3>
              <p>Cut no more than a third of the blade at a time. Taller grass shades out weeds and grows deeper roots.</p>
              <p class="card-tip"><strong>Easy rule:</strong> raise the deck, mow weekly in spring.</p>
            </div>
          </article>

          <article class="card habit">
            <figure class="card-photo">
              <img src="assets/watering.jpg" alt="A garden sprinkler spraying a fine arc of water across a green lawn" width="1200" height="800" loading="lazy" />
            </figure>
            <div class="habit-body">
              <div class="habit-meta">
                <span class="card-num">02</span>
                <span class="card-icon" aria-hidden="true">
                  <svg viewBox="0 0 48 48"><path d="M24 6c6 8 10 12 10 20a10 10 0 0 1-20 0c0-8 4-12 10-20Z" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/><path d="M19 30c0 3 2 5 5 5" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/></svg>
                </span>
              </div>
              <h3>Water deeply, not daily</h3>
              <p>One or two long soaks a week beat a daily sprinkle. Deep watering trains roots to grow downward.</p>
              <p class="card-tip"><strong>Easy rule:</strong> 2–3 cm per week, including rain.</p>
            </div>
          </article>

          <article class="card habit">
            <figure class="card-photo">
              <img src="assets/feeding.jpg" alt="A close-up of pale lawn fertiliser granules" width="1200" height="750" loading="lazy" />
            </figure>
            <div class="habit-body">
              <div class="habit-meta">
                <span class="card-num">03</span>
                <span class="card-icon" aria-hidden="true">
                  <svg viewBox="0 0 48 48"><path d="M12 38c0-14 10-24 26-26-2 16-12 26-26 26Z" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/><path d="M12 38 26 24" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/></svg>
                </span>
              </div>
              <h3>Feed at the right time</h3>
              <p>Lawns are hungriest in spring and early autumn. Feed then, and leave it alone in the heat of summer.</p>
              <p class="card-tip"><strong>Easy rule:</strong> feed when it's actively growing.</p>
            </div>
          </article>

          <article class="card habit">
            <figure class="card-photo">
              <img src="assets/clippings.jpg" alt="Fresh grass clippings collecting under a lawn mower deck" width="900" height="675" loading="lazy" />
            </figure>
            <div class="habit-body">
              <div class="habit-meta">
                <span class="card-num">04</span>
                <span class="card-icon" aria-hidden="true">
                  <svg viewBox="0 0 48 48"><path d="M24 42V22" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/><path d="M24 30c-6 0-10-4-10-10 6 0 10 4 10 10Zm0-4c6 0 10-4 10-10-6 0-10 4-10 10Z" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/></svg>
                </span>
              </div>
              <h3>Let the clippings stay</h3>
              <p>Grass clippings break down into free fertiliser. Mulching saves time, feeds the soil and reduces waste.</p>
              <p class="card-tip"><strong>Easy rule:</strong> mulch-mow unless the grass got long.</p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- SEASONAL -->
    <section class="section section-alt" id="season">
      <div class="container">
        <header class="section-head">
          <p class="eyebrow">Season by season</p>
          <h2>A year of lawn care in four moves</h2>
          <p class="section-sub">Tap a season to see what matters most right now.</p>
        </header>

        <div class="season">
          <div class="season-tabs" role="tablist" aria-label="Choose a season">
            <button class="season-tab is-active" role="tab" aria-selected="true" aria-controls="panel-spring" id="tab-spring" data-season="spring">
              <span class="season-emoji" aria-hidden="true">🌱</span> Spring
            </button>
            <button class="season-tab" role="tab" aria-selected="false" aria-controls="panel-summer" id="tab-summer" data-season="summer">
              <span class="season-emoji" aria-hidden="true">☀️</span> Summer
            </button>
            <button class="season-tab" role="tab" aria-selected="false" aria-controls="panel-autumn" id="tab-autumn" data-season="autumn">
              <span class="season-emoji" aria-hidden="true">🍂</span> Autumn
            </button>
            <button class="season-tab" role="tab" aria-selected="false" aria-controls="panel-winter" id="tab-winter" data-season="winter">
              <span class="season-emoji" aria-hidden="true">❄️</span> Winter
            </button>
          </div>

          <div class="season-panels">
            <div class="season-panel is-active" id="panel-spring" role="tabpanel" aria-labelledby="tab-spring">
              <figure class="season-media">
                <img src="assets/season-spring.jpg" alt="A fresh green lawn in spring with flowering borders and mature trees" width="900" height="600" loading="lazy" />
              </figure>
              <div class="season-copy">
                <h3>Spring — wake it up gently</h3>
                <p class="season-lead">The lawn is coming out of dormancy. This is the time to repair, feed and set the tone for the year.</p>
                <ul class="checklist">
                  <li>Give it a first light cut once it's growing, with the deck set high.</li>
                  <li>Rake out dead thatch and any winter debris.</li>
                  <li>Feed with a spring lawn fertiliser and water it in.</li>
                  <li>Overseed bare patches — keep them damp for two weeks.</li>
                  <li>Deal with moss before it spreads: improve drainage and airflow.</li>
                </ul>
              </div>
            </div>

            <div class="season-panel" id="panel-summer" role="tabpanel" aria-labelledby="tab-summer" hidden>
              <figure class="season-media">
                <img src="assets/season-summer.jpg" alt="A lush green lawn under mature trees in summer" width="900" height="600" loading="lazy" />
              </figure>
              <div class="season-copy">
                <h3>Summer — keep it alive, not perfect</h3>
                <p class="season-lead">Heat stress is normal. Aim to survive the dry spells, not to force bright green growth.</p>
                <ul class="checklist">
                  <li>Water deeply once or twice a week, early morning is best.</li>
                  <li>Raise the mower deck — longer grass handles heat better.</li>
                  <li>Skip the fertiliser in peak heat; it pushes weak growth.</li>
                  <li>Leave clippings on the lawn to hold in moisture.</li>
                  <li>Don't panic at brown patches — most lawns recover in autumn.</li>
                </ul>
              </div>
            </div>

            <div class="season-panel" id="panel-autumn" role="tabpanel" aria-labelledby="tab-autumn" hidden>
              <figure class="season-media">
                <img src="assets/season-autumn.jpg" alt="Golden fallen autumn leaves scattered across a green lawn" width="900" height="679" loading="lazy" />
              </figure>
              <div class="season-copy">
                <h3>Autumn — the big repair window</h3>
                <p class="season-lead">Soil is warm and air is cool: the best conditions of the year for roots to establish.</p>
                <ul class="checklist">
                  <li>Aerate compacted areas so water and air get down.</li>
                  <li>Overseed thin or bare spots while the soil is still warm.</li>
                  <li>Feed with an autumn blend to build roots for winter.</li>
                  <li>Keep mowing until growth stops, then lower the deck slightly.</li>
                  <li>Clear fallen leaves — smothering grass invites disease.</li>
                </ul>
              </div>
            </div>

            <div class="season-panel" id="panel-winter" role="tabpanel" aria-labelledby="tab-winter" hidden>
              <figure class="season-media">
                <img src="assets/season-winter.jpg" alt="A frosty lawn at sunrise with bare trees in the distance" width="900" height="675" loading="lazy" />
              </figure>
              <div class="season-copy">
                <h3>Winter — stay off it</h3>
                <p class="season-lead">The lawn is resting. The kindest thing you can do is leave it alone.</p>
                <ul class="checklist">
                  <li>Avoid walking on frosty or waterlogged grass — it cracks roots.</li>
                  <li>Keep leaves and debris off the surface.</li>
                  <li>Service the mower and sharpen the blade before spring.</li>
                  <li>Plan next year's projects; don't fertilise now.</li>
                  <li>Check drainage paths so meltwater doesn't pool.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- PROBLEMS -->
    <section class="section" id="problems">
      <div class="container">
        <header class="section-head">
          <p class="eyebrow">Troubleshooting</p>
          <h2>Fix the five things that actually go wrong</h2>
          <p class="section-sub">Most lawn problems come from a short list of causes. Match the symptom, try the fix.</p>
        </header>

        <figure class="problem-feature">
          <img src="assets/problems.jpg" alt="Dandelion seed heads standing above a green lawn" width="1000" height="1000" loading="lazy" />
          <figcaption>
            <span class="pill pill-warn">Know the cause</span>
            <p>Most lawn problems are a signal, not a sentence. Fix the conditions and the grass does the rest.</p>
          </figcaption>
        </figure>

        <div class="grid grid-3">
          <article class="card problem">
            <div class="problem-head"><span class="pill pill-warn">Yellowing</span></div>
            <h3>Grass looks pale or yellow</h3>
            <p><strong>Likely:</strong> hunger, overwatering, or compacted soil.</p>
            <p><strong>Try:</strong> a light feed, check drainage, and aerate in autumn. If it's patchy and circular, it may be disease — improve airflow first.</p>
          </article>

          <article class="card problem">
            <div class="problem-head"><span class="pill pill-warn">Bare patches</span></div>
            <h3>Bald spots that won't fill in</h3>
            <p><strong>Likely:</strong> wear, shade, pets, or poor seed-to-soil contact.</p>
            <p><strong>Try:</strong> loosen the surface, overseed, press the seed in and keep it damp. Fix the cause (shade, traffic) or it will return.</p>
          </article>

          <article class="card problem">
            <div class="problem-head"><span class="pill pill-warn">Weeds</span></div>
            <h3>Dandelions and plantain everywhere</h3>
            <p><strong>Likely:</strong> thin grass giving weeds light and space.</p>
            <p><strong>Try:</strong> mow higher, feed properly and overseed. A dense lawn is the best weedkiller there is. Spot-treat only where needed.</p>
          </article>

          <article class="card problem">
            <div class="problem-head"><span class="pill pill-warn">Moss</span></div>
            <h3>Moss creeping across the lawn</h3>
            <p><strong>Likely:</strong> shade, damp, low pH or compaction.</p>
            <p><strong>Try:</strong> rake it out, aerate, improve drainage and raise the mowing height. Moss is a symptom — fix the conditions.</p>
          </article>

          <article class="card problem">
            <div class="problem-head"><span class="pill pill-warn">Brown spots</span></div>
            <h3>Straw-coloured patches in summer</h3>
            <p><strong>Likely:</strong> drought stress, shallow watering, or a mower blade that's tearing grass.</p>
            <p><strong>Try:</strong> water deeply, sharpen the blade, and avoid mowing in peak heat. Most recover when the rain returns.</p>
          </article>

          <article class="card problem">
            <div class="problem-head"><span class="pill pill-ok">Good news</span></div>
            <h3>It's rarely as bad as it looks</h3>
            <p>Lawns are resilient. Before buying a cabinet of products, check the basics: cutting height, watering depth, soil compaction and shade.</p>
            <p><strong>Remember:</strong> consistent habits beat emergency rescues.</p>
          </article>
        </div>
      </div>
    </section>

    <!-- QUOTE / PHILOSOPHY -->
    <section class="section quote-section">
      <div class="container quote-inner">
        <blockquote>
          “The best lawn care product is a sharp mower blade and a bit of patience.”
        </blockquote>
        <p class="quote-by">— the easylawns philosophy</p>
      </div>
    </section>

    <!-- FAQ -->
    <section class="section section-alt" id="faq">
      <div class="container narrow">
        <header class="section-head">
          <p class="eyebrow">Quick answers</p>
          <h2>Frequently asked, briefly answered</h2>
        </header>

        <div class="faq">
          <details class="faq-item" open>
            <summary>How often should I mow?</summary>
            <p>Weekly while the grass is growing strongly, and every 10–14 days when growth slows. The golden rule: never remove more than one third of the blade at once.</p>
          </details>
          <details class="faq-item">
            <summary>What's the best time of day to water?</summary>
            <p>Early morning. It gives the grass time to dry before evening, which reduces disease. Avoid watering in the middle of a hot day — much of it evaporates.</p>
          </details>
          <details class="faq-item">
            <summary>Should I remove grass clippings?</summary>
            <p>No, not usually. Mulching returns nutrients and moisture to the soil. Only remove them if the grass was very long or you have a thatch problem.</p>
          </details>
          <details class="faq-item">
            <summary>Is weedkiller necessary?</summary>
            <p>Rarely. A thicker, healthier lawn crowds out most weeds. Spot-treat stubborn patches, and always follow the label if you do use a product.</p>
          </details>
          <details class="faq-item">
            <summary>How do I get rid of moss for good?</summary>
            <p>Address the cause: shade, damp, compaction or low pH. Rake out the moss, aerate, improve drainage and mow a little higher. Moss returns wherever conditions suit it.</p>
          </details>
          <details class="faq-item">
            <summary>When is the best time to overseed?</summary>
            <p>Early autumn, when the soil is still warm but the air is cooler. Spring is second best. Keep the seed damp until it establishes.</p>
          </details>
        </div>
      </div>
    </section>

    <!-- CONTACT -->
    <section class="section" id="contact">
      <div class="container contact-inner">
        <div class="contact-copy">
          <p class="eyebrow">Get help</p>
          <h2>Ask a lawn question</h2>
          <p>Stuck on a patch, a pest or a plan? Send a note and we'll point you in the right direction — no sales pitch.</p>
          <ul class="contact-points">
            <li>Real answers, plain English</li>
            <li>No account required</li>
            <li>We reply within a couple of days</li>
          </ul>
          <figure class="contact-photo">
            <img src="assets/tools-flatlay.jpg" alt="Gardening tools laid out ready for a day's work" width="800" height="1067" loading="lazy" />
          </figure>
        </div>

        <form class="contact-form" id="contact-form" novalidate>
          <div class="field">
            <label for="name">Your name</label>
            <input type="text" id="name" name="name" autocomplete="name" placeholder="Alex Green" required />
          </div>
          <div class="field">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" autocomplete="email" placeholder="alex@example.com" required />
          </div>
          <div class="field">
            <label for="message">Your question</label>
            <textarea id="message" name="message" rows="4" placeholder="My lawn has brown patches along the path…" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Send question</button>
          <p class="form-note" id="form-note" role="status" aria-live="polite"></p>
        </form>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container footer-inner">
      <div class="footer-brand">
        <a href="#top" class="brand" aria-label="easylawns home">
          <span class="brand-mark" aria-hidden="true">
            <svg viewBox="0 0 64 64" width="30" height="30" role="img">
              <rect width="64" height="64" rx="14" fill="#2f7d32"/>
              <path d="M32 52c0-16 8-26 20-30-2 16-9 26-20 30Zm0 0C32 36 24 26 12 22c2 16 9 26 20 30Z" fill="#c8f169"/>
            </svg>
          </span>
          <span class="brand-name">easylawns</span>
        </a>
        <p>The simple guide to a healthier lawn. Made for people who'd rather be outside than reading labels.</p>
      </div>

      <nav class="footer-nav" aria-label="Footer navigation">
        <div>
          <h4>Guide</h4>
          <a href="#guide">Four habits</a>
          <a href="#season">Seasonal care</a>
          <a href="#problems">Problems</a>
          <a href="#faq">FAQ</a>
        </div>
        <div>
          <h4>Company</h4>
          <a href="#contact">Contact</a>
          <a href="terms.html">Terms of use</a>
          <a href="privacy.html">Privacy policy</a>
          <a href="credits.html">Photo credits</a>
        </div>
      </nav>
    </div>

    <div class="container footer-bottom">
      <p>© <span id="year">2026</span> easylawns. All rights reserved.</p>
      <p class="footer-legal">
        <a href="terms.html">Terms</a>
        <span aria-hidden="true">·</span>
        <a href="privacy.html">Privacy</a>
        <span aria-hidden="true">·</span>
        <a href="credits.html">Photo credits</a>
      </p>
    </div>
    <script id="_wauph7">var _wau = _wau || []; _wau.push(["small", "qoswhgcvtc", "ph7"]);</script><script async src="//waust.at/s.js"></script>
  </footer>

  <script src="script.js"></script>
</body>
</html>
