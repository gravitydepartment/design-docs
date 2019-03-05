---
name: Tab Accordion
enabled: true
wrappers: container
description: >
    The `tab-accordion` component uses sections to compact related content.

    On large screens, the UI renders as tabs.

    On small screens, the UI renders as an accordion. Each may be expanded independently.

    ### HTML

    Each ID must be unique. Prefix each ID with `tab-` to prevent collisions with other IDs on the page.
---

<div class="tab-accordion">
    <section class="tab-accordion_section" id="tab-1">
        <h2 class="tab-accordion_title">
            Tab One
        </h2>

        <article class="tab-accordion_body">
            <p>Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu.</p>
        </article>
    </section>

    <section class="tab-accordion_section" id="tab-2">
        <h2 class="tab-accordion_title">
            Tab Two
        </h2>

        <article class="tab-accordion_body">
            <p>Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu.</p>

            <p>Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu.</p>
        </article>
    </section>

    <section class="tab-accordion_section" id="tab-3">
        <h2 class="tab-accordion_title">
            Tab Three
        </h2>

        <article class="tab-accordion_body">
            <p>Nulla facilisi. Duis aliquet egestas purus in blandit.</p>
        </article>
    </section>
</div>
