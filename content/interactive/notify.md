---
name: Notify
enabled: true
wrappers: container
description: >
    See the [GravDept Notify](https://github.com/gravitydepartment/notify) documentation.

    The `notify` component slides minor notifications into a corner of the screen. Use them for passive info normally doesn't require action.
---

<div class="dd-heading">Default</div>

<p class="action-group">
    <button type="button" class="button" onclick="notify.add(dataDefault);">Notify Me</button>
</p>

<div class="dd-heading">With Title</div>

<p class="action-group">
    <button type="button" class="button" onclick="notify.add(dataTitle);">Notify Me</button>
</p>

<div class="dd-heading">UI State</div>

<p class="action-group">
    <button type="button" class="button" onclick="notify.add(dataDanger);">Danger</button>
    <button type="button" class="button" onclick="notify.add(dataHelp);">Help</button>
    <button type="button" class="button" onclick="notify.add(dataInfo);">Info</button>
    <button type="button" class="button" onclick="notify.add(dataSuccess);">Success</button>
    <button type="button" class="button" onclick="notify.add(dataWarn);">Warn</button>
</p>

<div class="dd-heading">Persistence</div>

<p class="action-group">
    <button type="button" class="button" onclick="notify.add(dataLong);">Last 10 Seconds</button>
    <button type="button" class="button" onclick="notify.add(dataPersist);">Persist Until Dismissed</button>
</p>

<script>
    var dataDefault = {
        body: 'Eventually you do plan to have dinosaurs on your dinosaur tour, right?',
        status: 'info'
    };

    var dataDanger = {
        body: 'I’m sorry Dave. I’m afraid I can’t do that.',
        status: 'danger'
    };

    var dataHelp = {
        body: 'Help me — help you.',
        status: 'help'
    };

    var dataInfo = {
        body: 'Fact: bears love beets.<br> Bears, beets, Battlestar Galactica.',
        status: 'info'
    };

    var dataSuccess = {
        body: 'Your profile was saved.',
        status: 'success'
    };

    var dataTitle = {
        title: 'Added To Cart',
        body: 'Product Name That Is Really Long And Definitely Wraps To A New Line',
        status: 'success'
    };

    var dataWarn = {
        body: 'You take the red pill, you stay in Wonderland.',
        status: 'warn'
    };

    // ----------------------------------------------

    var dataLong = {
        body: 'I live for 10 seconds not 5 seconds.',
        status: 'info',
        timeVisible: 10000
    };

    var dataPersist = {
        title: 'Need some help?',
        body: 'Try this <a href="#">article</a>.',
        persist: true,
        status: 'help'
    };
</script>
