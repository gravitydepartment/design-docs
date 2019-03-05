---
name: Table (--linearize)
enabled: true
wrappers: container
description: >
    The `table--linearize` modifier destroys the table structure to be linearized on small screens.
---

<table class="table table--border table--linearize">
    <thead>
        <tr>
            <th>Order #</th>
            <th>Date</th>
            <th>Recipient</th>
            <th>Total</th>
            <th>Status</th>
        </tr>
    </thead>

    <tfoot>
        <tr>
            <td colspan="5">
                <a href="#" class="button button--xs button--secondary">Some Action</a>
            </td>
        </tr>
    </tfoot>

    <tbody>
        <tr>
            <td>100000133</td>
            <td>May 28, 2012</td>
            <td>Elliot Smith</td>
            <td>$2,950.75</td>
            <td>Pending</td>
        </tr>

        <tr>
            <td>100000131</td>
            <td>Nov 13, 2011</td>
            <td>Bruce Wayne</td>
            <td>$80.76</td>
            <td>Pending</td>
        </tr>

        <tr>
            <td>100000108</td>
            <td>Sep 9, 2011</td>
            <td>Bruce Wayne</td>
            <td>$62.51</td>
            <td>Pending</td>
        </tr>
    </tbody>
</table>
