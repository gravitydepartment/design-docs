<?php
/**
* Quasar: Design System
*
* @author     Brendan Falkowski (http://gravitydept.com)
* @copyright  Gravity Department. All rights reserved.
*/
?>

            <?php if ($qq['debug']): ?>
                <div class="qq-debug">
                    <strong>Debug:</strong> (<a href="<?php echo getUrl('debug'); ?>">View Page</a>)<br>

                    <?php
                    if (isset($_GET['module'])) {
                        echo 'Module: ' . $_GET['module'] . '<br>';
                    }

                    if (isset($_GET['param2'])) {
                        echo 'Param2: ' . $_GET['param2'] . '<br>';
                    }

                    if (isset($_GET['param3'])) {
                        echo 'Param3: ' . $_GET['param3'] . '<br>';
                    }
                    ?>
                </div>
            <?php endif; ?>
        </main><!-- .qq-matter -->

        <footer class="qq-footer">
            <div class="qq-footer_copyright">
                Copyright &copy; <?php echo date('Y'); ?> <?php echo $qq['companyName']; ?>.<br>
                All rights reserved.
            </div>

            <div class="qq-footer_credits">
                Design docs built with <strong>Quasar</strong>.<br>
                A tool from <a target="_blank" href="http://gravitydept.com">Gravity Department</a>.
            </div>
        </footer>

        <?php echo $qq['jsBodyEnd']; ?>
        <script src="<?php echo getAssetUrl('js/build/app.min.js'); ?>"></script>
    </div><!-- .qq-site-wrapper -->
</body>
</html>
