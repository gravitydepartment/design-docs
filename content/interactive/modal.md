---
name: Modal
enabled: true
wrappers: container
description: >
    The `modal` component activates a dialog box and backdrop that covers the page.
---

<div class="dd-heading">Default</div>

<p class="action-group">
    <button type="button" class="button" data-modal-trigger="modal-default">
        Modal
    </button>
</p>

<div class="dd-heading">Modifier: Sizes</div>

<p class="action-group">
    <button type="button" class="button" data-modal-trigger="modal-s" data-modal-width="s">
        Small
    </button>

    <button type="button" class="button" data-modal-trigger="modal-base" data-modal-width="base">
        Base
    </button>

    <button type="button" class="button" data-modal-trigger="modal-l" data-modal-width="l">
        Large
    </button>

    <button type="button" class="button" data-modal-trigger="modal-fluid" data-modal-width="fluid">
        Fluid
    </button>
</p>

<div class="dd-heading">Context: Consecutive Modals</div>

<p class="action-group">
    <button type="button" class="button" data-modal-trigger="modal-consecutive-1">
        Modal
    </button>
</p>

<!-- Modal Default -->

<script type="text/template" data-modal="modal-default">
    <div class="modal_header">
        <h1>Modal</h1>

        <div class="modal_subtitle">
            Subtitle for this modal.
        </div>
    </div>

    <div class="modal_body">
        <p>
            Nulla facilisi. Duis aliquet egestas purus in blandit.
            Curabitur vulputate, ligula lacinia scelerisque tempor,
            lacus lacus ornare ante, ac egestas est urna sit amet arcu.
        </p>
    </div>

    <div class="modal_footer">
        <div class="action-group">
            <button type="button" class="button">
                Save Changes
            </button>

            <button type="button" class="button button--secondary" data-modal-close>
                Close
            </button>
        </div>
    </div>
</script>

<!-- Modal Small -->

<script type="text/template" data-modal="modal-s">
    <div class="modal_header">
        <h1>Modal Small</h1>
    </div>

    <div class="modal_body">
        <p>
            Nulla facilisi. Duis aliquet egestas purus in blandit.
            Curabitur vulputate, ligula lacinia scelerisque tempor,
            lacus lacus ornare ante, ac egestas est urna sit amet arcu.
        </p>
    </div>

    <div class="modal_footer">
        <div class="action-group">
            <button type="button" class="button">
                Save Changes
            </button>

            <button type="button" class="button button--secondary" data-modal-close>
                Close
            </button>
        </div>
    </div>
</script>

<!-- Modal Base -->

<script type="text/template" data-modal="modal-base">
    <div class="modal_header">
        <h1>Modal Base</h1>
    </div>

    <div class="modal_body">
        <p>
            Nulla facilisi. Duis aliquet egestas purus in blandit.
            Curabitur vulputate, ligula lacinia scelerisque tempor,
            lacus lacus ornare ante, ac egestas est urna sit amet arcu.
        </p>
    </div>

    <div class="modal_footer">
        <div class="action-group">
            <button type="button" class="button">
                Save Changes
            </button>

            <button type="button" class="button button--secondary" data-modal-close>
                Close
            </button>
        </div>
    </div>
</script>

<!-- Modal Large -->

<script type="text/template" data-modal="modal-l">
    <div class="modal_header">
        <h1>Modal Large</h1>
    </div>

    <div class="modal_body">
        <p>
            Nulla facilisi. Duis aliquet egestas purus in blandit.
            Curabitur vulputate, ligula lacinia scelerisque tempor,
            lacus lacus ornare ante, ac egestas est urna sit amet arcu.
        </p>
    </div>

    <div class="modal_footer">
        <div class="action-group">
            <button type="button" class="button">
                Save Changes
            </button>

            <button type="button" class="button button--secondary" data-modal-close>
                Close
            </button>
        </div>
    </div>
</script>

<!-- Modal Fluid -->

<script type="text/template" data-modal="modal-fluid">
    <div class="modal_header">
        <h1>Modal Fluid</h1>
    </div>

    <div class="modal_body">
        <p>
            Nulla facilisi. Duis aliquet egestas purus in blandit.
            Curabitur vulputate, ligula lacinia scelerisque tempor,
            lacus lacus ornare ante, ac egestas est urna sit amet arcu.
        </p>
    </div>

    <div class="modal_footer">
        <div class="action-group">
            <button type="button" class="button">
                Save Changes
            </button>

            <button type="button" class="button button--secondary" data-modal-close>
                Close
            </button>
        </div>
    </div>
</script>

<!-- Modal Consecutive -->

<script type="text/template" data-modal="modal-consecutive-1">
    <div class="modal_header">
        <h1>Modal Consecutive #1</h1>
    </div>

    <div class="modal_body">
        <p>
            This modal will be replaced by another.
        </p>
    </div>

    <div class="modal_footer">
        <div class="action-group">
            <button type="button" class="button" data-modal-trigger="modal-consecutive-2">
                Replace Modal
            </button>
        </div>
    </div>
</script>

<script type="text/template" data-modal="modal-consecutive-2">
    <div class="modal_header">
        <h1>Modal Consecutive #2</h1>
    </div>

    <div class="modal_body">
        <p>
            The first modal was replaced automatically when this opened.
            No need to handle the transition.
        </p>
    </div>
</script>
