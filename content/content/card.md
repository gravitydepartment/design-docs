---
name: Card
enabled: true
wrappers: container
description: >
    The `card` component is a stylized box to distinguish content.

    It is a flexbox container, which supports an inner `flex-spacer` element to fill vertical space. Use this to align actions to the bottom.

    Use this within the [fluid list](/design/patterns/layout/fluid-list) or [solid list](/design/patterns/layout/solid-list) components for card layouts.
---

<div class="dd-heading">Default</div>

<div class="card">
    <p>Lorem ipsum.</p>

    <div class="flex-spacer"></div>

    <div class="action-fluid-list">
        <a class="button m-b-0 button--s" href="#">Edit</a>
    </div>
</div>

<div class="dd-heading">Context: "Card" Inside "Fluid List"</div>

<div class="fluid-list fluid-list--4">
    <div class="fluid-list_item">
        <div class="card">
            <p>Lorem ipsum.</p>
        </div>
    </div>

    <div class="fluid-list_item">
        <div class="card">
            <p>Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu.</p>

            <div class="flex-spacer"></div>

            <div class="action-fluid-list">
                <a class="button m-b-0 button--s" href="#">Edit</a>
            </div>
        </div>
    </div>

    <div class="fluid-list_item">
        <div class="card">
            <p>Lorem ipsum.</p>

            <div class="flex-spacer"></div>

            <div class="action-fluid-list">
                <a class="button m-b-0 button--s" href="#">Edit</a>
            </div>
        </div>
    </div>

    <div class="fluid-list_item">
        <div class="card">
            <p>Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu.</p>
        </div>
    </div>

    <div class="fluid-list_item">
        <div class="card">
            <p>Lorem ipsum.</p>
        </div>
    </div>

    <div class="fluid-list_item">
        <div class="card">
            <p>Nulla facilisi. Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu.</p>
        </div>
    </div>
</div>
