---
name: Accordion
enabled: true
wrappers: container
description: >
    The `accordion` component uses sections to make longform content easier to navigate.

    On large screens, hash links are generated for each section and placed in a sidebar, which scrolls with the page.

    On small screens, all sections starts collapsed showing only the title. Each may be expanded independently. This prevents the content from jumping when sections vary in height.
---

<div class="accordion">
    <div class="accordion_sections">
        <section class="accordion_section" id="accordion-one">
            <h2 class="accordion_header">
                Section One
            </h2>

            <article class="accordion_body">
                <p>Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu.</p>

                <p>Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu.</p>
            </article>
        </section>

        <section class="accordion_section" id="accordion-two">
            <h2 class="accordion_header">
                Section Two
            </h2>

            <article class="accordion_body">
                <p>Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu.</p>

                <p>Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu.</p>
            </article>
        </section>

        <section class="accordion_section" id="accordion-three">
            <h2 class="accordion_header">
                Section Three
            </h2>

            <article class="accordion_body">
                <p>Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu.</p>

                <p>Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu.</p>
            </article>
        </section>
    </div>
</div>
