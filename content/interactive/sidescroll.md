---
name: Sidescroll
description: >
    The `sidescroll` component enables content cannot scale for small screens to overflow horizontally.

    Use this for data tables with more than 4 columns.

    ### Configuration

    The breakpoint where tables become scrollable is defined in the `data-sidescroll` attribute per table.

    After initialization, the `data-sidescroll` attribute is replaced with `scroll` or empty using Enquire JS at the defined breakpoint.
enabled: true
wrappers: container
---

<div class="sidescroll" data-sidescroll="600">
    <div class="sidescroll_liner">
        <table class="table">
            <thead>
                <tr>
                    <th>Order #</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Number</th>
                    <th>Label</th>
                    <th>Label</th>
                    <th>Label</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>100000133</td>
                    <td>$2,950.75</td>
                    <td>Complete</td>
                    <td>9876</td>
                    <td>Something something</td>
                    <td>Something something</td>
                    <td>Something something</td>
                </tr>

                <tr>
                    <td>100000131</td>
                    <td>$80.76</td>
                    <td>Pending</td>
                    <td>9876</td>
                    <td>Something something</td>
                    <td>Something something</td>
                    <td>Something something</td>
                </tr>

                <tr>
                    <td>100000108</td>
                    <td>$62.51</td>
                    <td>Pending</td>
                    <td>9876</td>
                    <td>Something something</td>
                    <td>Something something</td>
                    <td>Something something</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
