---
name: Introduction
enabled: true
wrappers: container
description: >
    Utility classes do exactly one thing. They are absolute overrides that (usually) target one property at a time. Once created their role never changes. When declared they always have highest specificity by using `!important`. Normally this is avoided in CSS, but utility classes help keep our CSS smaller.

    Always check a component for a comparable modifier before using a utility class. Modifiers are documented and tested against in the component library. Utilities are not.

    Utilities should be used as a last resort. Components should be designed to accomodate the widest range of content possible. Modifiers can be created to handle edge cases.

    Utilities are useful to shim specific content into components for the best fit. If the same shim becomes commonplace, then the component should extend to handle that case.

    The function less like a big hammer, and more like a small nail. Since they are immutable they're efficient at doing the same thing again and again.
---

<p>See the documentation.</p>
